<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author Evgeny Pervushin <pea@lab321.ru>
 * @package leader_users
 */
if($GLOBALS['current_user']->isAdminForModule('Users')) {
    $label = $GLOBALS['app_strings']['LBL_USER_LIST'];
    $global_control_links['users_admin'] = array(
        'linkinfo' => array(
            $label => 'index.php?module=Users&action=index',
        ),
        'submenu' => '',
    );
}
