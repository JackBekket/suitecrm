<?php 

$dictionary["Case"]["fields"]["contact_name"] = array (
                'name' => 'contact_name',
                'rname' => 'name',
                'id_name' => 'contact_id',
                'vname' => 'LBL_CONTACT_NAME',
                'type' => 'relate',
                'link' => 'contacts',
                'table' => 'contacts',
                'join_name' => 'contacts',
                'isnull' => 'true',
                'module' => 'Contacts',
                'dbType' => 'varchar',
                'len' => 100,
                'source' => 'non-db',
                'unified_search' => true,
                'comment' => 'The name of the contact represented by the contact_id field',
                'required' => true,
                'importable' => 'required',
            );

$dictionary["Case"]["fields"]["contact_id"] = array (
                'name' => 'contact_id',
                'type' => 'relate',
                'dbType' => 'id',
                'rname' => 'id',
                'module' => 'Contacts',
                'id_name' => 'contact_id',
                'reportable' => false,
                'vname' => 'LBL_CONTACT_ID',
                'audited' => true,
                'massupdate' => false,
                'comment' => 'The contact to which the case is associated'
            );

$dictionary["Case"]["fields"]["contacts"] = array (
                'name' => 'contacts',
                'type' => 'link',
                'relationship' => 'contact_cases',
                'link_type' => 'one',
                'side' => 'right',
                'source' => 'non-db',
                'vname' => 'LBL_CONTACT',
            );

$dictionary["Case"]["indices"][] = array (
        array('name' => 'idx_contact_id', 'type' => 'index', 'fields' => array('contact_id')),
    );
