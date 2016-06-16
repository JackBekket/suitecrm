<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Score extends SugarBean {

	var $id;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $name;
  var $score;

	var $additional_column_fields = Array('parent_name');

	var $table_name = "scores";

	var $object_name = "Score";
	var $module_dir = 'Scores';

	var $importable = true;

	function Score() {
		parent::SugarBean();
	}

	var $new_schema = true;

	function get_summary_text()
	{
		return "$this->name";
	}

	function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}

	function fill_in_additional_parent_fields()
	{

		$this->parent_name = '';
		global $app_strings, $beanFiles, $beanList, $locale;
		if ( ! isset($beanList[$this->parent_type]))
		{
			$this->parent_name = '';
			return;
		}

	    $beanType = $beanList[$this->parent_type];
		require_once($beanFiles[$beanType]);
		$parent = new $beanType();

    if (is_subclass_of($parent, 'User')) {
			$query = "SELECT first_name, last_name, null parent_name_owner from $parent->table_name where id = '$this->parent_id'";
		}
    else if (is_subclass_of($parent, 'Person')) {
			$query = "SELECT first_name, last_name, assigned_user_id parent_name_owner from $parent->table_name where id = '$this->parent_id'";
		}
		else if (is_subclass_of($parent, 'File')) {
			$query = "SELECT document_name, assigned_user_id parent_name_owner from $parent->table_name where id = '$this->parent_id'";
		}
		else {

			$query = "SELECT name ";
			if(isset($parent->field_defs['assigned_user_id'])){
				$query .= " , assigned_user_id parent_name_owner ";
			}else{
				$query .= " , created_by parent_name_owner ";
			}
			$query .= " from $parent->table_name where id = '$this->parent_id'";
		}
		$result = $this->db->query($query,true," Error filling in additional detail fields: ");

		// Get the id and the name.
		$row = $this->db->fetchByAssoc($result);

		if ($row && !empty($row['parent_name_owner'])){
			$this->parent_name_owner = $row['parent_name_owner'];
			$this->parent_name_mod = $this->parent_type;
		}
		if (is_subclass_of($parent, 'Person') and $row != null)
		{
			$this->parent_name = $locale->getLocaleFormattedName(stripslashes($row['first_name']), stripslashes($row['last_name']));
		}
		else if (is_subclass_of($parent, 'File') && $row != null) {
			$this->parent_name = $row['document_name'];
		}
		elseif($row != null)
		{
			$this->parent_name = stripslashes($row['name']);
		}
		else {
			$this->parent_name = '';
		}
	}

	public function save($check_notify = FALSE)
	{
		if(empty($this->fetched_row['id']) && empty($this->name) && !empty($this->description)) {
			$this->name = self::shortenDescription($this->description, 100);
		}
		return parent::save($check_notify);
	}

	public static function shortenDescription($description, $maxLength)
	{
		if(mb_strlen($description) <= $maxLength) {
			return $description;
		}
		else {
			$name = mb_substr($description, 0, $maxLength);
			$pos = mb_strrpos($name, ' ');
			if($pos !== false) {
				$name = mb_substr($name, 0, $pos);
			}
			else {
				$name = mb_substr($name, 0, $maxLength - 1);
			}
			$name .= json_decode('"\u2026"');
			return $name;
		}
	}
}
