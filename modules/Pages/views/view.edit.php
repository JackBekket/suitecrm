<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class PagesViewEdit extends ViewEdit
{
    function display()
    {
        parent::display();
        $this->displayTMCE4();
    }


    function displayTMCE4()
    {
        $language = 'en';
        if($GLOBALS['current_language'] === 'ru_ru') {
            $language = 'ru';
        }
        echo <<<JS
<script>tinymce.init({
  selector: 'textarea'
  ,min_height: 600
  ,language: '$language'
  ,plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ]
  ,toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
  ,toolbar2: 'print preview media | forecolor backcolor emoticons'
});</script>
JS;
    }
}
