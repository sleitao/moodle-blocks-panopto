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
 *
 * @package block_panopto
 * @copyright Panopto 2020
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 /**
 * File for class UserManagementStructListUsers
 * @package UserManagement
 * @subpackage Structs
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructListUsers originally named ListUsers
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructListUsers extends UserManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The parameters
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructListUsersRequest
     */
    public $parameters;
    /**
     * The searchQuery
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $searchQuery;
    /**
     * Constructor method for ListUsers
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param UserManagementStructListUsersRequest $_parameters
     * @param string $_searchQuery
     * @return UserManagementStructListUsers
     */
    public function __construct($_auth = NULL,$_parameters = NULL,$_searchQuery = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'parameters'=>$_parameters,'searchQuery'=>$_searchQuery),false);
    }
    /**
     * Get auth value
     * @return UserManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param UserManagementStructAuthenticationInfo $_auth the auth
     * @return UserManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get parameters value
     * @return UserManagementStructListUsersRequest|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }
    /**
     * Set parameters value
     * @param UserManagementStructListUsersRequest $_parameters the parameters
     * @return UserManagementStructListUsersRequest
     */
    public function setParameters($_parameters)
    {
        return ($this->parameters = $_parameters);
    }
    /**
     * Get searchQuery value
     * @return string|null
     */
    public function getSearchQuery()
    {
        return $this->searchQuery;
    }
    /**
     * Set searchQuery value
     * @param string $_searchQuery the searchQuery
     * @return string
     */
    public function setSearchQuery($_searchQuery)
    {
        return ($this->searchQuery = $_searchQuery);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructListUsers
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
