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
 * This file contains all of the language strings needed by Panopto.
 *
 * @package block_panopto
 * @copyright  Panopto 2009 - 2016 with contributions from Spenser Jones (sjones@ambrose.edu)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_a_panopto_server'] = 'None - Please add a Panopto server/appkey to continue';
$string['add_to_panopto'] = 'Sync this course to Panopto';
$string['api_manager_unavailable'] = 'Unable to create the {$a} manager api client! (Is the Panopto server available, if so are the instance name and application key correct?)';
$string['application_key'] = 'Application key';
$string['async_wait_warning'] = 'Async tasks will cause a delay before syncing the users. This is usually 5-15 minutes but can change depending on the Moodle configuration.';
$string['attempt_provision_course'] = 'Attempting to provision a Panopto folder with an External Id of: {$a}.';
$string['attempt_sync_user'] = 'Attempting to sync a user with and Id of {$a} to Panopto.';
$string['attempt_sync_user_server'] = 'Target server of the attempted sync is {$a}.';
$string['attempted_import_course_id'] = 'Moodle Id of the source import course';
$string['attempted_moodle_course_id'] = 'Attempted Moodle course ID';
$string['attempted_panopto_server'] = 'Attempted Panopto Server';
$string['attempted_provisioning_personal_folder'] = 'Attempted to provision to a personal folder, this is not currently an action supported by Panopto. Please map the course to a different folder through the block instance config and try reprovisioning.';
$string['attempt_unprovision_course'] = 'Attempting to unprovision a Panopto folder with an external Id of {$a}.';
$string['attempted_target_course_id'] = 'Moodle Id of the target course';
$string['attribute_ensure_branch_failed'] = 'Ensure Branch error';
$string['attribute_ensured_branch'] = 'Ensured branch heirarchy';
$string['attribute_target_branch_leaf'] = 'Target branch leaf node category name';
$string['back_to_config'] = 'Back to config';
$string['back_to_course'] = 'Back to course';
$string['begin_building_category_structure'] = 'Start building category structure';
$string['begin_ensuring_branch'] = 'Beginning to ensure category branch on the branch with a leaf element containing a category name of {$a}';
$string['begin_folder_upgrade'] = 'Begin upgrading folders';
$string['begin_reinitializing_imports'] = 'Begin Reinitializing Imports';
$string['block_edit_error'] = 'Cannot configure block instance: Global configuration incomplete. Please contact your system administrator.';
$string['block_edit_header'] = 'Select the Panopto course folder to display in this block.';
$string['block_edit_header_help'] = 'Choose an existing Panopto course folder or provision a new Panopto course folder for this block';
$string['block_global_add_courses'] = 'Add Moodle courses to Panopto';
$string['block_global_application_key'] = 'Application Key';
$string['block_global_application_key_desc'] = 'Enter the Application Key from the Panopto Identity Providers page.';
$string['block_global_build_category_structure'] = 'Sync all Moodle categories to Panopto';
$string['block_global_hostname'] = 'Panopto Server Hostname';
$string['block_global_hostname_desc'] = 'Enter the FQDN of your Panopto server.';
$string['block_global_instance_desc'] = 'Enter the Instance Name from the Panopto Identity Providers page.';
$string['block_global_instance_name'] = 'Moodle Instance Name';
$string['block_global_reinitialize_all_imports'] = 'Reinitialize all Panopto folder imports';
$string['block_global_unprovision_courses'] = 'Unprovision Panopto folders from Moodle courses';
$string['block_global_upgrade_all_folders'] = 'Upgrade all existing folders and imports';
$string['block_panopto_any_creator_can_view_folder_settings'] = 'Allow all users with creator roles to view Panopto folder settings links';
$string['block_panopto_any_creator_can_view_folder_settings_desc'] = 'By default only teachers for the course can view the course settings link. If you desire anyone with a creator role to be able to view this link select this option.';
$string['block_panopto_anyone_view_recorder_links'] = 'Allow all roles to view recorder download links';
$string['block_panopto_anyone_view_recorder_links_desc'] = 'By default only users with creator/provisioning access on a folder can view the download links. If you wish viewers to be able to view the recorder download links through the block then enable this option.';
$string['block_panopto_async_tasks'] = 'Enable asynchronous synchronization tasks (not recommended)';
$string['block_panopto_async_tasks_desc'] = 'Enable this option to allow the login, enrolment, unenrolment, category enforcement, and delete user tasks to happen asynchronously. If this option is disabled, those operation happen in event handler synchronously. This option is not recommended because it is difficult to detect the failure on timely manner.';
$string['block_panopto_auto_provision'] = 'Automatically provision newly created courses';
$string['block_panopto_auto_provision_desc'] = 'Enable this option to automatically provision a Panopto course folder when a course is created.';
$string['block_panopto_auto_sync_imports'] = 'Automatically grant permissions when importing a course';
$string['block_panopto_auto_sync_imports_desc'] = 'Enable this option to allow Panopto to automatically grant viewer permissions when importing a course.';
$string['block_panopto_automatic_operation_target_server'] = 'Automatic operation target server';
$string['block_panopto_automatic_operation_target_server_desc'] = 'This is the Panopto server that will be targeted for the \'Automatically provision new courses\', \'Sync user on login\' and \'Enforce category structure\' tasks';
$string['block_panopto_check_server_status'] = 'Check server health before loading block';
$string['block_panopto_check_server_status_desc'] = 'This checks if the target Panopto server is up at the beginning to avoid possible long timeout calls when the server is unreachable. This is set to false by default because it uses platform / OS dependent feature. It should be set to true only when Panopto support recommends it.';
$string['block_panopto_creator_mapping'] = 'Creator role mapping';
$string['block_panopto_creator_mapping_desc'] = 'Select which course roles are set as creators in new Panopto course folders.';
$string['block_panopto_enforce_category_after_course_provision'] = 'Create category folders on course (re)provision';
$string['block_panopto_enforce_category_after_course_provision_desc'] = 'If this option is enabled, (re)provisioning will not just make the course folder, but will also make folders for the categories the course is in.';
$string['block_panopto_enforce_category_structure'] = 'Sync new and moved categories with Panopto';
$string['block_panopto_enforce_category_structure_desc'] = 'If this option is enabled whenever a category is created or moved, its category structure will be mirrored in Panopto';
$string['block_panopto_enforce_https_on_wsdl'] = 'Enforce HTTPS on Panopto API calls';
$string['block_panopto_enforce_https_on_wsdl_desc'] = 'Enforce HTTPS endpoints are used for Panopto API calls (recommended to everyone)';
$string['block_panopto_folder_name_style'] = 'Panopto folder name style';
$string['block_panopto_folder_name_style_desc'] = 'Use this option to select which visual name style you wish to have for your new Panopto folders';
$string['block_panopto_non_editing_teacher_provision'] = 'Allow non-editing teacher to provision';
$string['block_panopto_non_editing_teacher_provision_desc'] = 'Enable this option to allow non-editing teachers to provision Panopto course folders.';
$string['block_panopto_print_log_to_file'] = 'Redirect error logs to text file';
$string['block_panopto_print_log_to_file_desc'] = 'This option will redirect any panopto logging from the PHP error_log to a PanoptoLogs.txt file inside the base moodle directory. It should only be set to true when Panopto support recommends it.';
$string['block_panopto_print_verbose_logs'] = 'Print verbose logs';
$string['block_panopto_print_verbose_logs_desc'] = 'This option will add more logs to the panopto php error_log, this flag should only be turned on for debugging purposes.';
$string['block_panopto_publisher_mapping'] = 'Publisher role mapping';
$string['block_panopto_publisher_mapping_desc'] = 'Select which course roles are set as publishers in new Panopto course folders.';
$string['block_panopto_publisher_system_role_mapping'] = 'System roles with provisioning permissions';
$string['block_panopto_publisher_system_role_mapping_desc'] = 'Select which system roles can provision new Panopto course folders. Adding roles to this setting may have a performance impact on larger systems.';
$string['block_panopto_server_number_desc'] = 'Click \'Save Changes\' to update number of servers.';
$string['block_panopto_server_number_name'] = 'Number of Panopto Servers';
$string['block_panopto_sync_after_login'] = 'Authenticate and sync to Panopto on Moodle login (not recommended)';
$string['block_panopto_sync_after_login_desc'] = 'This setting will cause users to get authenticated with Panopto and have their permissions sync when logging into Moodle. It is not usually needed because when the user accesses Panopto block in a course, authentication and permission sync of that course happen. Turn on this option only if you do not put Panopto block in Moodle courses, which is not recommended. Please note that Moodle login time is increased with this option.';
$string['block_panopto_sync_after_provisioning'] = 'Sync enroled users after successfully provisioning (not recommended)';
$string['block_panopto_sync_after_provisioning_desc'] = 'Synchronizes all users enroled in a course after it has been provisioned. It is not usually needed because when the user accesses Panopto block in a course, authentication and permission sync of that course happen. Turn on this option only if you do not put Panopto block in Moodle courses, which is not recommended.';
$string['block_panopto_sync_on_enrolment'] = 'Sync users after class enrolment (not recommended)';
$string['block_panopto_sync_on_enrolment_desc'] = 'Synchronizes the permission when a student enroled into a course with a valid Panopto folder. It is not usually needed because when the user accesses Panopto block in a course, authentication and permission sync of that course happen. Turn on this option only if you do not put Panopto block in Moodle courses, which is not recommended.';
$string['block_panopto_wsdl_proxy_host'] = 'WSDL proxy host';
$string['block_panopto_wsdl_proxy_host_desc'] = 'The host address used as a proxy for any Panopto service WSDL. (Optional)';
$string['block_panopto_wsdl_proxy_port'] = 'WSDL proxy port';
$string['block_panopto_wsdl_proxy_port_desc'] = 'The port used as a proxy for any Panopto service WSDL. (Optional)';
$string['category_branch_ensured'] = 'Categrory branch ensured with the following structure: \n {$a}';
$string['categories_need_newer_panopto'] = 'Category calls need a Panopto server version of {$a->requiredpanoptoversion} to succeed, the targeted Panopto server\'s version is {$a->activepanoptoversion}.';

$string['cli_category_invalid_arguments'] = 'Please run the command with the following arguments \'build_category_structure.php <panoptoservername> <applicationkey>\'';
$string['cli_heading_build_category_structure'] = 'Sync all Moodle categories to Panopto';
$string['completed_recordings'] = 'Completed Recordings';
$string['course'] = 'Course';
$string['course_already_provisioned'] = 'This course has already been provisioned to  folder with a public Id of: {$a}.';
$string['course_has_invalid_panopto_data'] = 'The target Moodle course is no associated with valid Panopto folder data.';
$string['course_name'] = 'Course Name';
$string['course_settings'] = 'Course Settings';
$string['creator'] = 'Creator';
$string['creator_help'] = 'A Creator can create and edit content in Panopto';
$string['creators'] = 'Creators';
$string['download_recorder'] = 'Download Recorder';
$string['error_invalid_category_information'] = 'The target category did not contain valid information.';
$string['error_retrieving'] = 'Error retrieving Panopto course folder.';
$string['existing_course'] = 'Select an existing Panopto folder that is not currently mapped to another course:';
$string['failed_to_ensure_category_branch'] = 'Call to ensure category branch did not succeed, please see Panopto log for more details.';
$string['fetching_content'] = 'Fetching Panopto Content...';
$string['folder_not_found_error'] = 'The folder currenty provisioned to the target Moodle course on the Panopto server could not be found, was it deleted? Provisioning will continue by linking to the default Moodle folder or creating one if it does not already exist.';
$string['get_provisioning_info'] = 'Attempting to get provisioning info for a course with the Moodle Id: {$a}.';
$string['import_access_error'] = 'Course target course is provisioned to a folder the user does not have access to.';
$string['import_error'] = 'Error importing course, make sure the Moodle course and Panopto folder being imported still exist.';
$string['import_not_mapped'] = 'The imported course was not provisioned to a Panopto folder! (no session_group_id set in block_panopto_foldermap)';
$string['import_status'] = 'Import attempt status';
$string['import_success'] = 'Successfully imported course.';
$string['init_import_source'] = 'Attempted import source Moodle course Id: {$a}.';
$string['init_import_target'] = 'Attempted import target Moodle course Id: {$a}.';
$string['links'] = 'Links';
$string['live_sessions'] = 'Live Sessions';
$string['missing_moodle_required_version'] = 'Panopto block requires a Moodle version newer than {$a->requiredversion}, your current Moodle version is: {$a->currentversion}';
$string['missing_required_version'] = 'API call failed to return a response, this could be because the Panopto server you attempted to use does not meet the minimum required version to support this version of the Moodle Panopto Block. This could also be caused by the server being unavailable.';
$string['moodle_course_not_exist'] = 'Moving row to old foldermap, course did not exist inside Moodle.';
$string['name_style_combination'] = '[short name]: [full name]';
$string['name_style_fullname'] = '[full name]';
$string['name_style_shortname'] = '[short name]';
$string['no_access'] = 'You do not have access to view this Panopto folder.';
$string['no_completed_recordings'] = 'No Completed Recordings';
$string['no_course_selected'] = 'No Panopto course folder selected';
$string['no_creators'] = 'No creators.';
$string['no_folder_associated_with_moodle_id'] = 'No Panopto folder has been associated with a Moodle course with the Id {$a}';
$string['no_live_sessions'] = 'No Live Sessions';
$string['no_publishers'] = 'No publishers.';
$string['no_server'] = 'There are no servers set up for provisioning. Please contact system administrator.';
$string['no_viewers'] = 'No viewers.';
$string['no_users_synced_desc'] = 'The below users will be synced with Panopto once they attempt to view the Panopto block in the course.';
$string['or'] = 'OR';
$string['panopto:addinstance'] = 'Add a new Panopto block';
$string['panopto:myaddinstance'] = 'Add a new Panopto block to my page';
$string['panopto:provision_aspublisher'] = 'Provision as a publisher';
$string['panopto:provision_asteacher'] = 'Provision as a teacher';
$string['panopto:provision_course'] = 'Provision a course';
$string['panopto:provision_multiple'] = 'Provision multiple courses at once';
$string['panopto_server_error'] = 'Panopto server {$a} returned with server error, will try again on next sign in.';
$string['pluginname'] = 'Panopto';
$string['podcast_audio'] = 'Audio Podcast';
$string['podcast_feeds'] = 'Podcast Feeds';
$string['podcast_video'] = 'Video Podcast';
$string['privacy:metadata:block_panopto'] = 'In order to integrate with a Panopto service, user data needs to be exchanged with that service.';
$string['privacy:metadata:block_panopto:email'] = 'Your email is sent to Panopto to allow use of Panopto\'s email features.';
$string['privacy:metadata:block_panopto:firstname'] = 'Your first name is sent to Panopto to allow showing user\'s real name in Panopto\'s user experience.';
$string['privacy:metadata:block_panopto:lastname'] = 'Your last name is sent to Panopto to allow showing user\'s real name in Panopto\'s user experience.';
$string['privacy:metadata:block_panopto:username'] = 'Your username is sent to Panopto to allow it to create a Panopto account using the Moodle username as the Panopto username.';
$string['provision'] = 'Provision';
$string['provision_access_error'] = 'Course already provisioned to a Panopto folder and the current user does not have access to perform operations on that folder (User needs at least viewer access to target Panopto folder).';
$string['provision_course_link_text'] = 'Provision Course';
$string['provision_courses'] = 'Provision Courses';
$string['provision_error'] = 'Error provisioning course.';
$string['provision_successful'] = 'Successfully provisioned course with Id: {$a}';
$string['provisioncourseselect'] = 'Select Courses to Provision.';
$string['provisioncourseselect_help'] = 'Multiple selections are possible by Ctrl-clicking (Windows) or Cmd-clicking (Mac).';
$string['publisher'] = 'Publisher';
$string['publisher_help'] = 'A Publisher can approve content submitted by Creators';
$string['publishers'] = 'Publishers';
$string['reinitialize_import_finished'] = 'finished reininitialize import.';
$string['reinitialize_import_started'] = 'Beginning to reininitialize import.';
$string['removed_panopto_adhoc_tasks'] = 'All existing Panopto adhoc tasks were deleted';
$string['removing_corrupt_folder_row'] = 'Foldermap entry appears corrupted, moving entry to old_foldermap for user reference. Corrupted row used for course with Moodle Id: {$a}';
$string['require_panopto_version_title'] = 'Minimum Panopto version required for this version of the Moodle Panopto block';
$string['result'] = 'Result';
$string['role_map_header'] = 'Change Panopto Role Mappings';
$string['role_map_header_help'] = 'Choose how Moodle roles map to Panopto roles. Unmapped Moodle roles will be assigned the Viewer role in Panopto';
$string['select_server'] = 'Select a Panopto server';
$string['select_server_help'] = 'Choose the Panopto server where the course folders will be provisioned.';
$string['server_info_not_valid'] = 'The server name or application key are not valid, below are attempted values.';
$string['server_name'] = 'Server name';
$string['server_not_available'] = 'The Panopto server {$a} was not available. Server may be down';
$string['show_all'] = 'Show All';
$string['show_less'] = 'Show Less';
$string['synced_user_info'] = 'Synced user information';
$string['viewers'] = 'Viewers';
$string['take_notes'] = 'Take Notes';
$string['target_invalid_panopto_data'] = 'The panopto data living in the foldermap table associated with the target course of this import was either corrupted or no longer exists, removing Panopto relation and moving on.';
$string['target_moodle_course_deleted'] = 'The course that this import was associated with no longer exists, removing panopto relation and moving on.';
$string['unconfigured'] = 'Global configuration incomplete. Please contact your system administrator.';
$string['unknown_provisioning_error'] = 'An unknown error has occurred.';
$string['unprovision_from_moodle'] = 'Unprovision this course from the current Panopto folder';
$string['unprovision'] = 'Unprovision';
$string['unprovision_courses'] = 'Unprovision courses from Panopto';
$string['unprovision_requires_newer_server'] = 'Unprovisioning requires a Panopto server version of at least 7.0.0';
$string['unprovision_successful'] = 'Unprovision was a success';
$string['unprovision_error'] = 'Unprovision encountered an error and did not succeed';
$string['unprovisioncourseselect'] = 'Select which courses you want to unprovision from Panopto';
$string['unprovisioncourseselect_help'] = 'Multiple selections are possible by Ctrl-clicking (Windows) or Cmd-clicking (Mac).';
$string['unprovisioned'] = 'This course has not yet been provisioned.';
$string['upgrade_panopto_required_version'] = 'A Panopto server you are using does not meet the minimum required version to support this version of the Moodle Panopto Block. The upgrade will be blocked from succeeding until all Panopto servers in use meet miniumum version requirements.';
$string['upgrade_provision_access_error'] = 'UPGRADE BLOCKED: The user {$a} does not have access to a provisioned Panopto course folder. Upgrading user must have at least viewer access to all Panopto course folders. It is highly reccommended that the upgrading user is an Administrator on Panopto.';
$string['users_have_been_synced'] = 'The below users have been synced and should be ready to use Panopto.';
$string['watch_live'] = 'Watch Live';
$string['lastyearvideos'] = 'Wish to use last year\'s videos?';
$string['contactus'] = 'Contact us';
$string['enter'] = 'Enter';
/* End of file block_panopto.php */
