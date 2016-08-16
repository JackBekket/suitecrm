<?php
class UserSave
{
    public function checkIsAdminNotAdded(SugarBean $bean, $event, $arguments)
    {
        if(!is_admin($GLOBALS['current_user']) && empty($bean->fetched_row['is_admin']) && !empty($bean->is_admin)) {
            $GLOBALS['log']->fatal("SECURITY:Non-Admin ". $GLOBALS['current_user']->id . " attempted to set admin settings for user:". $_POST['record']);
            header("Location: index.php?module=Users&action=Logout");
            sugar_die('');
        }
    }
}
