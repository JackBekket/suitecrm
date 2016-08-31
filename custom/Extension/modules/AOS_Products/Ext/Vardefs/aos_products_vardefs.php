<?php 

$dictionary["AOS_Products"]["fields"]["type"]['default'] = 'Service';

$dictionary["AOS_Products"]["fields"]["measure"] = array (
    'name' => 'measure',
    'required' => true,
    'vname' => 'LBL_MEASURE',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => true,
    'len' => '255',
);

$dictionary["AOS_Products"]["fields"]["delivered_by_owner"] = array (
    'name' => 'delivered_by_owner',
    'vname' => 'LBL_DELIVERED_BY_OWNER',
    'type' => 'bool',
	  'required' => true,
    'default' => '0',
);

$dictionary["AOS_Products"]["fields"]["supplier_id"] = array (
    'name' => 'supplier_id',
    'type' => 'relate',
    'dbType' => 'id',
    'rname' => 'id',
    'group' => 'supplier_name',
    'reportable' => false,
    'vname' => 'LBL_SUPPLIER_ID',
    'module' => 'Accounts',
    'id_name' => 'supplier_id',
);

$dictionary["AOS_Products"]["fields"]["supplier_name"] = array (
    'name' => 'supplier_name',
    'rname' => 'name',
    'id_name' => 'supplier_id',
    'vname' => 'LBL_SUPPLIER_NAME',
    'type' => 'relate',
    'link' => 'suppliers',
    'table' => 'accounts',
    'join_name' => 'accounts',
    'module' => 'Accounts',
    'dbType' => 'varchar',
    'len' => '510',
    'source' => 'non-db',
    'group' => 'supplier_name',
    'reportable' => false,
);

$dictionary["AOS_Products"]["fields"]["suppliers"] = array (
    'name' => 'suppliers',
    'type' => 'link',
    'relationship' => 'supplier_products',
    'source' => 'non-db',
    'side' => 'right',
    'vname' => 'LBL_CONTACT',
);

$dictionary["AOS_Products"]["fields"]["products2"] = array (
    'name' => 'products2',
    'type' => 'link',
    'relationship' => 'products2',
    'source' => 'non-db',
    'link_type' => 'one',
    'module' => 'Paid_Services',
    'bean_name' => 'Paid_Service',
    'vname' => 'LBL_AOS_PRODUCT_CATEGORIES',
);

$dictionary["AOS_Products"]["relationships"]["products2"] = array (
    'lhs_module' => 'Paid_Services',
    'lhs_table' => 'aos_product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'aos_product_category_id',
    'relationship_type' => 'one-to-many',
);



