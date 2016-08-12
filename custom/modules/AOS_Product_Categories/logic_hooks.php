<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_delete'] = Array(); 
$hook_array['before_delete'][] = Array(10, 'Disable Security Fields Changes', 'custom/modules/AOS_Product_Categories/AOS_Product_CategoriesSecurityForm.php','AOS_Product_CategoriesSecurityForm', 'beforeDelete'); 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(10, 'Disable Security Fields Changes', 'custom/modules/AOS_Product_Categories/AOS_Product_CategoriesSecurityForm.php','AOS_Product_CategoriesSecurityForm', 'beforeSave'); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(60, 'Disable Form Inputs', 'custom/modules/AOS_Product_Categories/AOS_Product_CategoriesSecurityForm.php','AOS_Product_CategoriesSecurityForm', 'afterUiFrame'); 



?>