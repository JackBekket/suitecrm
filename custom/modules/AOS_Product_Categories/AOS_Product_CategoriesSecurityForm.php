<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author Leon Nikitin <nlv@lab321.ru>
 * @package leader_accounts
 */
require_once 'custom/include/SecurityForms/SecurityForm.php';

class AOS_Product_CategoriesSecurityForm extends SecurityForm
{
    function setBean($bean)
    {
        parent::setBean($bean);
        if ($bean->type == 'PaidServices') {
          $this->setDefaultFieldsMode(SecurityForm::MODE_DEFAULT_DISABLED);
        }
    }
}
