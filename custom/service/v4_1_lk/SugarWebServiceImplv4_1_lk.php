<?php
require_once('service/v4_1/SugarWebServiceImplv4_1.php');

class SugarWebServiceImplv4_1_lk extends SugarWebServiceImplv4_1
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
        $GLOBALS['log']->info("Begin: SugarWebServiceImpl->login({$user_auth['user_name']}, $application, ". print_r($name_value_list, true) .")");
        global $sugar_config, $system_config;
        $error = new SoapError();
        $user = new User();
        $success = false;
        //rrs
        $system_config = new Administration();
        $system_config->retrieveSettings('system');
        $authController = new AuthenticationController();
        //rrs
        /* START HS321 */
        $isLoginSuccess = false;
        if(empty($user_auth['password'])) {
            if(!empty($_SERVER['REMOTE_ADDR']) && !empty($GLOBALS['sugar_config']['web_service_allowed_ips'])) {
                $ip = $_SERVER['REMOTE_ADDR'];
                foreach($GLOBALS['sugar_config']['web_service_allowed_ips'] as $filter) {
                    if ($filter === '*' || $filter === $ip || (($pos = strpos($filter, '*')) !== false && !strncmp($ip, $filter, $pos))) { //из yii-debug
                        $isLoginSuccess = true;
                        break;
                    }
                }
            }
            if(!$isLoginSuccess) {
                $GLOBALS['log']->error('SugarWebServiceImplv4_1_lk: password is empty and web_service_allowed_ips not allowed ip '
                    .(!empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '<none>'));
            }
        }
        else {
        /* END HS321 */
        if(!empty($user_auth['encryption']) && $user_auth['encryption'] === 'PLAIN' && $authController->authController->userAuthenticateClass != "LDAPAuthenticateUser")
        {
            $user_auth['password'] = md5($user_auth['password']);
        }
        $isLoginSuccess = $authController->login($user_auth['user_name'], $user_auth['password'], array('passwordEncrypted' => true));
        }//
        $usr_id=$user->retrieve_user_id($user_auth['user_name']);
        if($usr_id)
            $user->retrieve($usr_id);

        if ($isLoginSuccess)
        {
            if (isset($_SESSION['hasExpiredPassword']) && $_SESSION['hasExpiredPassword'] =='1')
            {
                $error->set_error('password_expired');
                $GLOBALS['log']->fatal('password expired for user ' . $user_auth['user_name']);
                LogicHook::initialize();
                $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
                self::$helperObject->setFaultObject($error);
                return;
            }
            if(!empty($user) && !empty($user->id) && !$user->is_group)
            {
                $success = true;
                global $current_user;
                $current_user = $user;
            }
        }
        else if($usr_id && isset($user->user_name) && ($user->getPreference('lockout') == '1'))
        {
            $error->set_error('lockout_reached');
            $GLOBALS['log']->fatal('Lockout reached for user ' . $user_auth['user_name']);
            LogicHook::initialize();
            $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
            self::$helperObject->setFaultObject($error);
            return;
        }
		else if(function_exists('mcrypt_cbc') && $authController->authController->userAuthenticateClass == "LDAPAuthenticateUser"
        		&& (empty($user_auth['encryption']) || $user_auth['encryption'] !== 'PLAIN' ) )
        {
            $password = self::$helperObject->decrypt_string($user_auth['password']);
            $authController->loggedIn = false; // reset login attempt to try again with decrypted password
            if($authController->login($user_auth['user_name'], $password) && isset($_SESSION['authenticated_user_id']))
                $success = true;
        }
        else if( $authController->authController->userAuthenticateClass == "LDAPAuthenticateUser"
                 && (empty($user_auth['encryption']) || $user_auth['encryption'] == 'PLAIN' ) )
        {

        	$authController->loggedIn = false; // reset login attempt to try again with md5 password
        	if($authController->login($user_auth['user_name'], md5($user_auth['password']), array('passwordEncrypted' => true))
        		&& isset($_SESSION['authenticated_user_id']))
        	{
        		$success = true;
        	}
        	else
        	{

	            $error->set_error('ldap_error');
	            LogicHook::initialize();
	            $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
	            self::$helperObject->setFaultObject($error);
	            return;
        	}
        }


        if($success)
        {
            session_start();
            global $current_user;
            //$current_user = $user;
            self::$helperObject->login_success($name_value_list);
            $current_user->loadPreferences();
            $_SESSION['is_valid_session']= true;
            $_SESSION['ip_address'] = query_client_ip();
            $_SESSION['user_id'] = $current_user->id;
            $_SESSION['type'] = 'user';
            $_SESSION['avail_modules']= self::$helperObject->get_user_module_list($current_user);
            $_SESSION['authenticated_user_id'] = $current_user->id;
            $_SESSION['unique_key'] = $sugar_config['unique_key'];
            $GLOBALS['log']->info('End: SugarWebServiceImpl->login - successful login');
            $current_user->call_custom_logic('after_login');
            $nameValueArray = array();
            global $current_language;
            $nameValueArray['user_id'] = self::$helperObject->get_name_value('user_id', $current_user->id);
            $nameValueArray['user_name'] = self::$helperObject->get_name_value('user_name', $current_user->user_name);
            $nameValueArray['user_language'] = self::$helperObject->get_name_value('user_language', $current_language);
            $cur_id = $current_user->getPreference('currency');
            $nameValueArray['user_currency_id'] = self::$helperObject->get_name_value('user_currency_id', $cur_id);
            $nameValueArray['user_is_admin'] = self::$helperObject->get_name_value('user_is_admin', is_admin($current_user));
            $nameValueArray['user_default_team_id'] = self::$helperObject->get_name_value('user_default_team_id', !empty($current_user->default_team) ? $current_user->default_team : '' );
            $nameValueArray['user_default_dateformat'] = self::$helperObject->get_name_value('user_default_dateformat', $current_user->getPreference('datef') );
            $nameValueArray['user_default_timeformat'] = self::$helperObject->get_name_value('user_default_timeformat', $current_user->getPreference('timef') );

            $num_grp_sep = $current_user->getPreference('num_grp_sep');
            $dec_sep = $current_user->getPreference('dec_sep');
            $nameValueArray['user_number_seperator'] = self::$helperObject->get_name_value('user_number_seperator', empty($num_grp_sep) ? $sugar_config['default_number_grouping_seperator'] : $num_grp_sep);
            $nameValueArray['user_decimal_seperator'] = self::$helperObject->get_name_value('user_decimal_seperator', empty($dec_sep) ? $sugar_config['default_decimal_seperator'] : $dec_sep);

            $nameValueArray['mobile_max_list_entries'] = self::$helperObject->get_name_value('mobile_max_list_entries', $sugar_config['wl_list_max_entries_per_page'] );
            $nameValueArray['mobile_max_subpanel_entries'] = self::$helperObject->get_name_value('mobile_max_subpanel_entries', $sugar_config['wl_list_max_entries_per_subpanel'] );


            $currencyObject = new Currency();
            $currencyObject->retrieve($cur_id);
            $nameValueArray['user_currency_name'] = self::$helperObject->get_name_value('user_currency_name', $currencyObject->name);
            $_SESSION['user_language'] = $current_language;
            return array('id'=>session_id(), 'module_name'=>'Users', 'name_value_list'=>$nameValueArray);
        }
        LogicHook::initialize();
        $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
        $error->set_error('invalid_login');
        self::$helperObject->setFaultObject($error);
        $GLOBALS['log']->error('End: SugarWebServiceImpl->login - failed login');
    }

    /**
     * Возвращает строки переводов $app_strings, $app_list_strings, $mod_strings.
     *
     * @param $strings - строка или массив строк для перевода; если пусто,
     * возвращаются все строки
     * @param $mod - имя модуля, строки которого нужно перевести
     * @param $selectedValue - дополнительно отфильтровать по ключу в app_list_strings[$strings]
     */
    public function get_language_strings($language, $strings = '', $mod = '', $selectedValue = '')
    {
        $mod_strings = !empty($mod) ? return_module_language($language, $mod) : array();
        $app_strings = return_application_language($language);
        $app_list_strings = return_app_list_strings_language($language);

        if(!empty($strings)) {
            $mod_strings1 = array();
            foreach((array)$strings as $string) {
                if(isset($mod_strings[$string])) {
                    $mod_strings1[$string] = $mod_strings[$string];
                }
            }
            $mod_strings = $mod_strings1;

            $app_strings1 = array();
            foreach((array)$strings as $string) {
                if(isset($app_strings[$string])) {
                    $app_strings1[$string] = $app_strings[$string];
                }
            }
            $app_strings = $app_strings1;

            $app_list_strings1 = array();
            foreach((array)$strings as $string) {
                if(isset($app_list_strings[$string])) {
                    $app_list_strings1[$string] = $app_list_strings[$string];
                }
            }
            $app_list_strings = $app_list_strings1;

            if (!empty($selectedValue) || (is_numeric($selectedValue) && $selectedValue == 0)) {
                $mod_strings = array();
                $app_strings = array();
                $app_list_strings1 = array();
                foreach((array)$strings as $string) {
                    if(isset($app_list_strings[$string][$selectedValue])) {
                        $app_list_strings1[$string][$selectedValue] = $app_list_strings[$string][$selectedValue];
                    }
                }
                $app_list_strings = $app_list_strings1;
            }
        }

        return array_filter(array(
            'mod_strings' => $mod_strings,
            'app_strings' => $app_strings,
            'app_list_strings' => $app_list_strings,
        ));
    }
}
