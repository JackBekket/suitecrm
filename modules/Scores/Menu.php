<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings,$app_strings;
if(ACLController::checkAccess('Scores', 'edit', true))$module_menu[]=Array("index.php?module=Scores&action=EditView&return_module=Scores&return_action=DetailView", $mod_strings['LNK_NEW_SCORE'],"CreateScores");
if(ACLController::checkAccess('Scores', 'list', true))$module_menu[]=Array("index.php?module=Scores&action=index&return_module=Scores&return_action=DetailView", $mod_strings['LNK_SCORE_LIST'],"Scores");
if(ACLController::checkAccess('Scores', 'import', true))$module_menu[] =Array("index.php?module=Import&action=Step1&import_module=Scores&return_module=Scores&return_action=index", $mod_strings['LNK_IMPORT_SCORES'],"Import", 'Scores');
