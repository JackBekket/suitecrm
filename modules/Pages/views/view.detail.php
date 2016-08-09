<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class PagesViewDetail extends ViewDetail {
    function __construct(){
        parent::__construct();
    }


    function display(){
        $this->setDecodeHTML();
        parent::display();
    }

    function setDecodeHTML(){
        $this->bean->description = html_entity_decode(str_replace('&nbsp;',' ',$this->bean->description));
    }
}
?>
