<?php
chdir('../../..');
require_once('SugarWebServiceImplv4_1_lk.php');
$webservice_path = 'service/core/SugarRestService.php';
$webservice_class = 'SugarRestService';
$webservice_impl_class = 'SugarWebServiceImplv4_1_lk';
$registry_path = 'custom/service/v4_1_lk/registry.php';
$registry_class = 'registry_v4_1_lk';
$location = 'custom/service/v4_1_lk/rest.php';
require_once('service/core/webservice.php');
