<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author Evgeny Pervushin <pea@lab321.ru>
 * @package leader_users
 */
class DefaultRole
{
    public function addToUser(SugarBean $bean, $event, $arguments)
    {
        global $db;
        if (empty($bean->fetched_row['id'])) {
            $bean->set_relationship('acl_roles_users', array(
                'role_id' => 'default',
                'user_id' => $bean->id,
            ));
        }
    }
}
