<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @package scores
 */

function get_scores_in_parent_detail_html($focus, $field, $value, $view)
{
    //TODO: translate
    //TODO: почти такая же форма как в custom/modules/Scores/SendMailScores.tpl
    global $current_user;
    global $timedate;
    if(empty($focus->id)) {
        return '';
    }
    $today = $timedate->nowDbDate();
    $date = $timedate->to_display_date($today);
    $html = <<<HTML
<script src="custom/modules/Scores/raty/lib/jquery.raty.js"></script>
<link rel="stylesheet" href="custom/modules/Scores/raty/lib/jquery.raty.css">
<form id="SendMailScores" name="SendMailScores" method="POST" action='index.php'>
    <input type="hidden" name="module" value="Scores">
    <input type="hidden" name="record" value="">
    <input type="hidden" name="isDuplicate" value="false">
    <input type="hidden" name="action" value="Save">
    <input type="hidden" name="return_module" value="{$focus->module_name}">
    <input type="hidden" name="return_action" value="DetailView">
    <input type="hidden" name="return_id" value="{$focus->id}">
    <input type="hidden" name="parent_type" value="{$focus->module_name}">
    <input type="hidden" name="parent_id" value="{$focus->id}">
    <input type="hidden" name="valuer_id" value="{$current_user->id}">
    <input type="hidden" name="status" value="ok">
    <input type="hidden" name="date_score" value="{$date}">
    <div id='formSend'>
        <div id = "title" name = "title">
            <b>Пожалуйста, поставьте Вашу оценку</b>
        </div>
        <table id = "tableForm" name = "tableForm" cellspacing=0 cellpadding=0 border=0>
            <tr>
                <td>
                    Оценка: <font color="red">*</font>
                </td>
                <td>
                <div id = "scores" name = "scores"></div>
                </td>
            </tr>
            <tr>
                <td>
                    Комментарий:
                </td>
                <td>
                    <textarea id = "comment" name = "description" cols="40"></textarea>
                </td>
            </tr>
        </table>
        <button id = "button-confirm" class="button" name = "button-confirm" value = "Save">Отправить</button>
    </div>
</form>
<script>
    $('#scores').raty({
        number: 10,
        starOff  : 'custom/modules/Scores/raty/lib/images/star-off.png',
        starOn   : 'custom/modules/Scores/raty/lib/images/star-on.png'
    });
</script>
HTML;
    return $html;
}
