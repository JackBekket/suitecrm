<?php

/*
 * Function returns translated dom list from database 
 */

function get_dom_list ($lang, $name, $required) {
  global $db;

  if ( empty($db) ) {
    $db = DBManagerFactory::getInstance();
  }

  $res = array ();
  if ( !$required ) {
    $res[''] = '';
  }
  $q = "SELECT value, text  FROM app_list_strings WHERE lang ='$lang' AND name = '$name' AND deleted = 0 ORDER BY  sorter";
  $r = $db->query($q);

  while ( $a = $db->fetchByAssoc($r) ) {
    $res[$a['value']] = $a['text'];
  }

  return $res;
}

?>
