<?php
chdir('../../..');
require_once('SugarWebServiceImplv4_1_leader.php');
$webservice_class = 'SugarSoapService2';
$webservice_path = 'service/v2/SugarSoapService2.php';
$webservice_impl_class = 'SugarWebServiceImplv4_1_leader';
$registry_class = 'registry_v4_1_leader';
$registry_path = 'custom/service/v4_1_leader/registry.php';
$location = 'custom/service/v4_1_leader/soap.php';
require_once('service/core/webservice.php');    
