<?php
require_once('custom/service/v4_1_lk/SugarWebServiceImplv4_1_lk.php');

class SugarWebServiceImplv4_1_leader extends SugarWebServiceImplv4_1_lk
{

    function get_last_modified_pages ($session)
    {
      global $db;
      $GLOBALS['log']->info('Begin: SugarWebServiceImpl->get_last_modified');
    	$error = new SoapError();

    	if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'read', 'no_access', $error)) {
    		$GLOBALS['log']->info('End: SugarWebServiceImpl->get_last_modified');
    		return;
    	} // if

    	$GLOBALS['log']->info('End: SugarWebServiceImpl->get_last_modified');
      return $db->getOne("SELECT IFNULL((SELECT date_modified FROM pages ORDER BY date_modified DESC LIMIT 1), now())");
    }

}
