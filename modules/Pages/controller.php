<?php

require_once('include/MVC/Controller/SugarController.php');

class PagesController extends SugarController
{
    protected function post_save()
    {
        $module = (!empty($this->return_module) ? $this->return_module : $this->module);
        $action = (!empty($this->return_action) ? $this->return_action : 'index');
        $id = (!empty($this->return_id) ? $this->return_id : $this->bean->id);

        $url = "index.php?module=".$module."&action=".$action."&record=".$id;
        $this->set_redirect($url);
    }
}
