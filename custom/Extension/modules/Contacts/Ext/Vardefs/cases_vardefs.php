<?php 

$dictionary["Contact"]["fields"]["cases"] = array (
                'name' => 'cases',
                'type' => 'link',
                'relationship' => 'contact_cases',
                'module' => 'Cases',
                'bean_name' => 'aCase',
                'source' => 'non-db',
                'vname' => 'LBL_CASES',
            );

$dictionary["Contact"]["relationships"]['contact_cases'] = array('lhs_module' => 'Contacts', 'lhs_table' => 'contacts', 'lhs_key' => 'id',
            'rhs_module' => 'Cases', 'rhs_table' => 'cases', 'rhs_key' => 'contact_id',
            'relationship_type' => 'one-to-many');
