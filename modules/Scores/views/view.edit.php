<?php
class ScoresViewEdit extends ViewEdit
{
    public $useForSubpanel = true;

    public function display()
    {
        if(empty($this->bean->fetched_row['id'])) {
            $_REQUEST['valuer_id'] = $GLOBALS['current_user']->id;
            $_REQUEST['valuer_name'] = get_assigned_user_name($GLOBALS['current_user']->id);
        }
        parent::display();
    }
}
