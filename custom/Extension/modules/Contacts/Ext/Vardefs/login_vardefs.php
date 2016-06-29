<?php 

$dictionary["Contact"]["fields"]["login"] = array (
    'name' => 'login',
    'vname' => 'LBL_LOGIN',
    'type' => 'varchar',
    'len' => '60',
    'audited' => true,
);
$dictionary["Contact"]['indices'][] = array('name'=>'i_contact_login_un', 'type'=>'unique',  'fields'=>array('login'));

$dictionary["Contact"]["fields"]["passhash"] = array (
    'name' => 'passhash',
    'vname' => 'LBL_PASSHASH',
    'type' => 'PasswordHash',
    'dbtype' => 'varchar',
    'len' => '32',
    'function_name' => 'md5',
);
