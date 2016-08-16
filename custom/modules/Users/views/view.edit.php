<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author Evgeny Pervushin <pea@lab321.ru>
 * @package leader_users
 */
require_once('modules/Users/views/view.edit.php');

class CustomUsersViewEdit extends UsersViewEdit
{
    function display()
    {
        global $current_user;
        $is_admin_for_users = $current_user->isAdminForModule('Users');
        $edit_self = $current_user->id == $this->bean->id;
        $this->ss->assign('IS_ADMIN_FOR_USERS', $is_admin_for_users);

        echo parent::display();

        if($is_admin_for_users && !$edit_self) {
            $js = <<<'JS'
$(function() {
    $('#generate_password_old_password').hide();
    document.EditView.is_current_admin.value = 1;
})
JS;
            echo "<script>$js</script>";
        }
    }
}
