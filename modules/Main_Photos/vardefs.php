<?php
global $dictionary;
if(empty($dictionary['Document'])){
	include('modules/Documents/vardefs.php');
}
$dictionary['Main_Photo']=$dictionary['Document'];
$dictionary['Main_Photo']['fields']['filename']['linkModuleOverride'] = 'Documents';
?>
