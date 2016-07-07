<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class House extends Basic {
    var $new_schema = true;
    var $module_dir = 'Houses';
    var $object_name = 'House';
    var $table_name = 'houses';
    var $importable = true;
    
    function get_summary_text() {
      return implode (", ", array_diff([$this->region, $this->city, $this->street, $this->house], []));
    }

    function House () {
        parent::Basic();
    }

    function bean_implements($interface) {
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }

}

?>
