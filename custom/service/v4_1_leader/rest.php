<?php
chdir('../../..');
require_once('SugarWebServiceImplv4_1_leader.php');
$webservice_path = 'service/core/SugarRestService.php';
$webservice_class = 'SugarRestService';
$webservice_impl_class = 'SugarWebServiceImplv4_1_leader';
$registry_path = 'custom/service/v4_1_leader/registry.php';
$registry_class = 'registry_v4_1_leader';
$location = 'custom/service/v4_1_leader/rest.php';
require_once('service/core/webservice.php');
