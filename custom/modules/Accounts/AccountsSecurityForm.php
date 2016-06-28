<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author Evgeny Pervushin <pea@lab321.ru>
 * @package leader_accounts
 */
require_once 'custom/include/SecurityForms/SecurityForm.php';

class AccountsSecurityForm extends SecurityForm
{
    public function setBean($bean)
    {
        parent::setBean($bean);
        $this->setDefaultFieldsMode(SecurityForm::MODE_DEFAULT_ENABLED);
        $disabledFields = array();
        if($bean->id == 'main') {
            $disabledFields[] = 'deleted';
        }
        $this->setDisabledFields($disabledFields);
    }
}
