<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * main library functions for the panoptop block
 *
 * @package block_panopto
 * @copyright  Panopto 2009 - 2016 /With contributions from Spenser Jones (sjones@ambrose.edu)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This can't be defined Moodle internal because it is called from Panopto to authorize login.

/**
 * Send a Javascript alert to the window for the current user to see.
 *
 * @param string $alertmessage - the message the user is supposed to see.
 */

function panopto_alert_user($alertmessage) {
    echo '<script language="javascript">';
    echo 'alert("' . $alertmessage . '")';
    echo '</script>';
}

/**
 * Prepend the instance name to the Moodle course ID to create an external ID for Panopto Focus.
 *
 * @param int $moodlecourseid the id the the Moodle course being edited
 */
function panopto_decorate_course_id($moodlecourseid) {
    return (get_config('block_panopto', 'instance_name') . ':' . $moodlecourseid);
}

/**
 * Decorate a Moodle username with the instancename outside the context of a panopto_data object.
 *
 * @param int $moodleusername the name the the Moodle user being edited
 */
function panopto_decorate_username($moodleusername) {
    return (get_config('block_panopto', 'instance_name') . '\\' . $moodleusername);
}

/**
 * Sign the payload with the proof that it was generated by trusted code.
 *
 * @param string $payload auth string being passed to be validated
 */
function panopto_generate_auth_code($payload) {
    $index = 1;

    $numservers = get_config('block_panopto', 'server_number');
    $numservers = isset($numservers) ? $numservers : 0;

    // Increment numservers by 1 to take into account starting at 0.
    ++$numservers;

    for ($serverwalker = 1; $serverwalker <= $numservers; ++$serverwalker) {
        $thisservername = get_config('block_panopto', 'server_name' . $serverwalker);
        if (isset($thisservername) && !empty($thisservername)) {
            if (strpos($payload, $thisservername)) {
                $index = $serverwalker;
                break;
            }
        }
    }

    $sharedsecret = get_config('block_panopto', 'application_key' . $index);

    $signedpayload = $payload . '|' . $sharedsecret;

    $authcode = strtoupper(sha1($signedpayload));

    return $authcode;
}

/**
 * Ensures auth code is valid
 *
 * @param string $payload auth string being passed to be validated
 * @param string $authcode the authcode being validated
 */
function panopto_validate_auth_code($payload, $authcode) {
    return (panopto_generate_auth_code($payload) == $authcode);
}

/**
 * takes an api url, then checks the Panopto config for proxy settings, and returns the relevant serviceparams object.
 *
 * @param string apiurl
 */
function panopto_generate_wsdl_service_params($apiurl) {
    $serviceparams = array('wsdl_url' => $apiurl);

    // Check to see if the user set any proxy options
    $proxyhost = get_config('block_panopto', 'wsdl_proxy_host');
    $proxyport = get_config('block_panopto', 'wsdl_proxy_port');

    if (isset($proxyhost) && !empty($proxyhost)) {
        $serviceparams['wsdl_proxy_host'] = $proxyhost;
    }

    if (isset($proxyport) && !empty($proxyport)) {
        $serviceparams['wsdl_proxy_port'] = $proxyport;
    }

    $serviceparams['panopto_connection_timeout'] = get_config('block_panopto', 'panopto_connection_timeout');
    $serviceparams['panopto_socket_timeout'] = get_config('block_panopto', 'panopto_socket_timeout');

    return $serviceparams;
}

function panopto_get_configured_panopto_servers() {

    $numservers = get_config('block_panopto', 'server_number');
    $numservers = isset($numservers) ? $numservers : 0;

    // Increment numservers by 1 to take into account starting at 0.
    ++$numservers;

    $targetserverarray = array();
    for ($serverwalker = 1; $serverwalker <= $numservers; ++$serverwalker) {

        // Generate strings corresponding to potential servernames in the config.
        $thisservername = get_config('block_panopto', 'server_name' . $serverwalker);
        $thisappkey = get_config('block_panopto', 'application_key' . $serverwalker);

        if (!panopto_is_string_empty($thisservername) && !panopto_is_string_empty($thisappkey)) {
            $targetserverarray[$thisservername] = $thisservername;
        }
    }

    return $targetserverarray;
}

/**
 * Returns a list of objects containing valid servername/appkey pairs we are targeting.
 *
 */
function panopto_get_target_panopto_server() {
    $ret = null;
    $targetserver = get_config('block_panopto', 'automatic_operation_target_server');

    $numservers = get_config('block_panopto', 'server_number');
    $numservers = isset($numservers) ? $numservers : 0;

    // Increment numservers by 1 to take into account starting at 0.
    ++$numservers;
    for ($serverwalker = 1; $serverwalker <= $numservers; ++$serverwalker) {

        // Generate strings corresponding to potential servernames in the config.
        $thisservername = get_config('block_panopto', 'server_name' . $serverwalker);

        if (strcasecmp($thisservername, $targetserver) == 0) {
            $thisappkey = get_config('block_panopto', 'application_key' . $serverwalker);
            $hasvaliddata = isset($thisappkey) && !empty($thisappkey);

            // If we have valid data for the server then try to ensure the category branch
            if ($hasvaliddata) {
                $ret = new stdClass();
                $ret->name = $thisservername;
                $ret->appkey = $thisappkey;
                break;
            }
        }
    }
    return $ret;
}

/**
 * Returns a list of objects containing valid servername/appkey pairs.
 *
 */
function panopto_get_valid_panopto_servers() {
    $ret = array();

    $numservers = get_config('block_panopto', 'server_number');
    $numservers = isset($numservers) ? $numservers : 0;

    // Increment numservers by 1 to take into account starting at 0.
    ++$numservers;

    for ($serverwalker = 1; $serverwalker <= $numservers; ++$serverwalker) {

        // Generate strings corresponding to potential servernames in the config.
        $thisservername = get_config('block_panopto', 'server_name' . $serverwalker);
        $thisappkey = get_config('block_panopto', 'application_key' . $serverwalker);
        $hasvaliddata = isset($thisappkey) && !empty($thisappkey);

        // If we have valid data for the server then try to ensure the category branch
        if ($hasvaliddata) {

            $targetserver = new stdClass();
            $targetserver->name = $thisservername;
            $targetserver->appkey = $thisappkey;
            $ret[] = $targetserver;
        }
    }
    return $ret;
}

/**
 *  Retrieve the app key for the target panopto server
 *
 * @param string $panoptoservername the server we are trying to get the application key for
 */
function panopto_get_app_key($panoptoservername) {
    $numservers = get_config('block_panopto', 'server_number');
    $numservers = isset($numservers) ? $numservers : 0;

    // Increment numservers by 1 to take into account starting at 0.
    ++$numservers;

    for ($serverwalker = 1; $serverwalker <= $numservers; ++$serverwalker) {

        // Generate strings corresponding to potential servernames in the config.
        $thisservername = get_config('block_panopto', 'server_name' . $serverwalker);
        $thisappkey = get_config('block_panopto', 'application_key' . $serverwalker);

        $hasservername = isset($thisservername) && !empty($thisservername);
        if ($thisservername === $panoptoservername) {
            return $thisappkey;
        }
    }
    
    return null;
}

/**
 * Used to instantiate a user soap client for a given instance of panopto_data.
 * Should be called only the first time a soap client is needed for an instance.
 *
 * @param string $username the name of the current user
 * @param string $servername the name of the active server
 * @param string $applicationkey the key need for the user to be authenticated
 */
function panopto_instantiate_user_soap_client($username, $servername, $applicationkey) {
    // Compute web service credentials for given user.
    $apiuseruserkey = panopto_decorate_username($username);
    $apiuserauthcode = panopto_generate_auth_code($apiuseruserkey . '@' . $servername, $applicationkey);

    // Instantiate our SOAP client.
    return new panopto_user_soap_client($servername, $apiuseruserkey, $apiuserauthcode);
}

/**
 * Used to instantiate a session soap client for a given instance of panopto_data.
 *
 * @param string $username the name of the current user
 * @param string $servername the name of the active server
 * @param string $applicationkey the key need for the user to be authenticated
 */
function panopto_instantiate_session_soap_client($username, $servername, $applicationkey) {
    // Compute web service credentials for given user.
    $apiuseruserkey = panopto_decorate_username($username);
    $apiuserauthcode = panopto_generate_auth_code($apiuseruserkey . '@' . $servername, $applicationkey);

    // Instantiate our SOAP client.
    return new panopto_session_soap_client($servername, $apiuseruserkey, $apiuserauthcode);
}

/**
 * Used to instantiate a soap client for calling Panopto's iAuth service.
 * Should be called only the first time an  auth soap client is needed for an instance.
 */
function panopto_instantiate_auth_soap_client($username, $servername, $applicationkey) {
    // Compute web service credentials for given user.
    $apiuseruserkey = panopto_decorate_username($username);
    $apiuserauthcode = panopto_generate_auth_code($apiuseruserkey . '@' . $servername, $applicationkey);

    // Instantiate our SOAP client.
    return new panopto_auth_soap_client($servername, $apiuseruserkey, $apiuserauthcode);
}

/**
 * Returns true if a string is null or empty, false otherwise
 *
 * @param string $name the string being checked for null or empty
 */
function panopto_is_string_empty($name) {
    return (!isset($name) || trim($name) === '');
}

/**
 * Returns true if the test guid is empty (all values in guid add to 0)
 *
 * @param string $guidstring the uid being tested in string format.
 */
function panopto_is_guid_empty($guidstring) {
    // Assuming the guid is valid
    $retVal = false;
    $val = array_sum(explode("-", $guidstring));

    if ($val == 0) {
        // Guid is empty
        $retVal = true;
    }

    return $retVal;
}

/**
 * Returns true if the user info has not been cleared
 *
 * @param string $userinfostring information to check
 */
function panopto_user_info_valid($userinfostring) {
    // Assuming the guid is valid
    $retVal = true;

    if (strcmp($userinfostring, '--Deleted--') === 0) {
        // Guid is empty
        $retVal = false;
    }

    return $retVal;
}

function panopto_get_all_roles_at_context_and_contextlevel($targetcontext) {
    global $DB;

    $sql = "SELECT r.*, rn.name AS contextalias
        FROM {role} r
        INNER JOIN {role_context_levels} rcl ON (rcl.contextlevel = :targetcontextlevel AND rcl.roleid = r.id)
        LEFT JOIN {role_names} rn ON (rn.contextid = :targetcontext AND rn.roleid = r.id)
        ORDER BY r.sortorder ASC";
    return $DB->get_records_sql($sql, array('targetcontext'=>$targetcontext->id, 'targetcontextlevel'=>$targetcontext->contextlevel));
}

/**
 * Unsets all system publishers that are not currently mapped 
 *  and maps all roles that are currently set as publishers to have the proper capability
 */
function panopto_update_system_publishers() {
    global $DB;
    $capability = 'block/panopto:provision_aspublisher';
    $systemcontext = context_system::instance();
    $systemrolearray = panopto_get_all_roles_at_context_and_contextlevel($systemcontext);
    $publisherrolesstring = get_config('block_panopto', 'publisher_system_role_mapping');
    $publishersystemroles = explode(',', $publisherrolesstring);
    $publisherprocessed = false;

    // Remove the system publisher capability from all old publishers. 
    foreach($systemrolearray as $possiblesystempublisher) {
        $targetname = !empty($possiblesystempublisher->name) ? $possiblesystempublisher->name : $possiblesystempublisher->shortname;
        if (!in_array($targetname, $publishersystemroles)) {
            $publisherprocessed = true;
            unassign_capability($capability, $possiblesystempublisher->id, $systemcontext);
        }
    }

    // Build and process new/old changes to capabilities to roles and capabilities.
    $publisherprocessed = \panopto_data::build_and_assign_context_capability_to_roles(
        $systemcontext, 
        $publishersystemroles, 
        $capability
    ) || $publisherprocessed;

    // If any changes where made, context needs to be flagged as dirty to be re-cached.
    if ($publisherprocessed) {
        $systemcontext->mark_dirty();
    }
}
/* End of file block_panopto_lib.php */
