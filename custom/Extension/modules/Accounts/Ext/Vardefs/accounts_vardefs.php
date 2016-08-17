<?php 

$dictionary["Account"]["fields"]["products"] = array (
    'name' => 'products',
    'type' => 'link',
    'relationship' => 'supplier_products',
    'module' => 'AOS_Products',
    'bean_name' => 'AOS_Products',
    'source' => 'non-db',
    'vname' => 'LBL_PRODUCTS',
);

$dictionary["Account"]["relationships"]["supplier_products"] = array (
  'lhs_module' => 'Accounts', 
  'lhs_table' => 'accounts', 
  'lhs_key' => 'id',
  'rhs_module' => 'AOS_Products',
  'rhs_table' => 'aos_products', 
  'rhs_key' => 'supplier_id',
  'relationship_type' => 'one-to-many'
);
