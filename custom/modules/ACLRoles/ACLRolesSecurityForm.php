<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author Evgeny Pervushin <pea@lab321.ru>
 * @package leader_users
 */
require_once 'custom/include/SecurityForms/SecurityForm.php';

class ACLRolesSecurityForm extends SecurityForm
{
    function setBean($bean)
    {
        parent::setBean($bean);
        if($bean->id == 'default' || $bean->id == 'admin') {
            $this->setDefaultFieldsMode(SecurityForm::MODE_DEFAULT_DISABLED);
            $this->setEnabledFields(array('description'));
        }
    }
}
