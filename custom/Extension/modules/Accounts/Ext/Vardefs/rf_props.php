<?php 

$dictionary["Account"]["fields"]["inn"] = array (
      'name' => 'inn',
      'vname' => 'LBL_INN',
      'type' => 'varchar',
      'len' => '12',
      'audited' => true,
      'required' => true,
      'massupdate' => false,

);
$dictionary["Account"]["fields"]["ogrn"] = array (
      'name' => 'ogrn',
      'vname' => 'LBL_OGRN',
      'type' => 'varchar',
      'len' => '15',
      'audited' => true,
      'massupdate' => false,
      'required'=>true,

);
$dictionary["Account"]["fields"]["kpp"] = array (
      'name' => 'kpp',
      'vname' => 'LBL_KPP',
      'type' => 'varchar',
      'len' => '9',
      'audited' => true,
      'massupdate' => false,
);
$dictionary["Account"]["fields"]["okpo"] = array (
      'name' => 'okpo',
      'vname' => 'LBL_OKPO',
      'type' => 'varchar',
      'len' => '10',
      'audited' => true,
      'massupdate' => false,
);

$dictionary["Account"]["fields"]["resident"] = array(
    'name' => 'resident',
    'vname' => 'LBL_RESIDENT',
    'type' => 'enum',
    'options' => 'resident_list',
    'len' => '50',
    'audited' => true,
    'massupdate' => false,
    'default' => '',
);

$dictionary["Account"]["fields"]["org_form"] = array (
      'name' => 'org_form',
      'vname' => 'LBL_ORG_FORM',
      'type' => 'enum',
      'options' => 'org_form_dom',
      'len' => 50,
      'audited' => true,
      'massupdate' => false,
);
