<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author Evgeny Pervushin <pea@lab321.ru>
 * @package leader_users
 */
require_once('include/MVC/Controller/SugarController.php');

class ACLRolesController extends SugarController
{
    public function preProcess()
    {
        global $current_user;

        $GLOBALS['ACLActions']['module']['actions']['admin'] = array(
            'aclaccess'=>array(ACL_ALLOW_ADMIN,ACL_ALLOW_DEFAULT),
            'label'=>'LBL_ACTION_ADMIN',
            'default'=>ACL_ALLOW_DEFAULT,
        );

        if(!$current_user->isAdminForModule('ACLRoles')) {
            ACLController::displayNoAccess(true);
            sugar_cleanup(true);
        }
    }
}
