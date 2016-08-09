<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/Pages/Page.php');

class PagesDashlet extends DashletGeneric {
    function __construct($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/Pages/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'Pages');

        $this->searchFields = $dashletData['Pages']['searchFields'];
        $this->columns = $dashletData['Pages']['columns'];

        $this->seedBean = new Page();
    }


}
