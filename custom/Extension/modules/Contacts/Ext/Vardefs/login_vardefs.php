<?php 

$dictionary["Contact"]["fields"]["login"] = array (
    'name' => 'login',
    'vname' => 'LBL_LOGIN',
    'type' => 'varchar',
    'len' => '12',
    'audited' => true,
);
$dictionary["Contact"]['indices'][] = array('name'=>'i_contact_login_un', 'type'=>'unique',  'fields'=>array('login'));

$dictionary["Contact"]["fields"]["passhash"] = array (
    'name' => 'passhash',
    'vname' => 'LBL_PASSHASH',
    'type' => 'text',
    'audited' => true,
);
