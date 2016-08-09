<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
global $app_strings;

$dashletMeta['PagesDashlet'] = array('module'		=> 'Pages',
										  'title'       => translate('LBL_HOMEPAGE_TITLE', 'Pages'), 
                                          'description' => 'A customizable view into Pages',
//                                          'icon'        => 'icon_AOK_KnowledgeBase_32.gif',
                                          'category'    => 'Module Views');
