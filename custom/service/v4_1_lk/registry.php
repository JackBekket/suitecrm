<?php
require_once('service/v4_1/registry.php');

class registry_v4_1_lk extends registry_v4_1
{
    protected function registerFunction()
    {
        parent::registerFunction();
        $this->serviceClass->registerFunction(
            'get_language_strings',
            array(
                'language'=>'xsd:string',
                'strings'=>'tns:strings',
                'mod'=>'xsd:string',
                'selectedValue'=>'xsd:string',
            ),
            array('return'=>'xsd:string')
        );
    }
}
