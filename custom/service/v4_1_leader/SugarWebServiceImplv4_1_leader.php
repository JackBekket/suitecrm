<?php
require_once('custom/service/v4_1_lk/SugarWebServiceImplv4_1_lk.php');

class SugarWebServiceImplv4_1_leader extends SugarWebServiceImplv4_1_lk
{
	/**
     * Log the user into the application
     *
     * @param UserAuth array $user_auth -- Set user_name and password (password needs to be
     *      in the right encoding for the type of authentication the user is setup for.  For Base
     *      sugar validation, password is the MD5 sum of the plain text password.
     * @param String $application -- The name of the application you are logging in from.  (Currently unused).
     * @param array $name_value_list -- Array of name value pair of extra parameters. As of today only 'language' and 'notifyonsave' is supported
     * @return Array - id - String id is the session_id of the session that was created.
     * 				 - module_name - String - module name of user
     * 				 - name_value_list - Array - The name value pair of user_id, user_name, user_language, user_currency_id, user_currency_name,
     *                                         - user_default_team_id, user_is_admin, user_default_dateformat, user_default_timeformat
     * @exception 'SoapFault' -- The SOAP error, if any
     */
    public function login($user_auth, $application = '', $name_value_list = array()){
      global $db;

      $res = parent::login($user_auth, $application, $name_value_list);
      if (is_array($res)) $res['pagesModified'] = $db->getOne("SELECT IFNULL((SELECT date_modified FROM pages ORDER BY date_modified DESC LIMIT 1), now())");
      return $res;
    }

}
