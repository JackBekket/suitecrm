<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Documents/Document.php');

class Main_Photo extends Document {

	var $module_dir = "Main_Photos";
	var $table_name = "documents";
	var $object_name = "Main_Photo";

  const TYPE_PHOTO = 1;
  const TYPE_CONTRACTS = 2;
  const TYPE_PROTOCOLS = 3;
  const TYPE_FOUNDATION = 4;
  const TYPE_FINANTIAL = 5;
  const TYPE_RESOLUTIONS = 6;
  const TYPE_COMMITMENTS = 7;
  const TYPE_COMMON_PROPERTIES = 9;
  const TYPE_CAPITAL_REPAIR_CONTRIBUTIONS = 10;

  const CATEGORY_DOCS_REPORTS = 1;
  const CATEGORY_MEDIA = 4;
  const CATEGORY_SERVICES = 5;


	function create_new_list_query($order_by, $where,$filter=array(),$params=array(), $show_deleted = 0,$join_type='', $return_array = false,$parentbean=null, $singleSelect = false, $ifListForExport = false)
    {
        //create the filter for portal only users, as they should not be showing up in query results
        if(empty($where)){
          $where = " EXISTS (SELECT NULL FROM documents_accounts WHERE document_id = documents.id AND account_id = 'main' AND deleted = 0) AND documents.category_id = '" . self::CATEGORY_MEDIA . "'
          AND documents.template_type = '" . self::TYPE_PHOTO . "' ";
        }else{
          $where = " AND EXISTS (SELECT NULL FROM documents_accounts WHERE document_id = documents.id AND account_id = 'main' AND deleted = 0) AND documents.category_id = '" . self::CATEGORY_MEDIA . "'
          AND documents.template_type = '" . self::TYPE_PHOTO . "' ";
        }

        //return parent method, specifying for array to be returned
        return parent::create_new_list_query($order_by, $where, $filter,$params, $show_deleted, $join_type, $return_array, $parentbean, $singleSelect, $ifListForExport);
    }

  public function save($check_notify = false)
  {
    global $db;
    $isInsert = empty($this->id) ? false : true;

    $this->category_id = self::CATEGORY_MEDIA;
    $this->template_type = self::TYPE_PHOTO;

    $docid = parent::save($check_notify);

    if ($isInsert) {
      // ORM в топку
      $id = create_guid();
      $date = $GLOBALS['timedate']->nowDb();
      $db->query("INSERT INTO documents_accounts (id, date_modified, deleted, document_id, account_id)
                  VALUES ('{$id}', '{$date}', 0, '{$docid}', 'main')");
    }
    return $docid;
  }


}

?>
