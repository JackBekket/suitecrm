<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
if(!empty($_GET['id']) && !empty($_GET['key'])) {
    $score = BeanFactory::getBean('Scores', $_GET['id']);
    if($_GET['key'] != $score->secret)
        sugar_die('Невозможно инициализировать');
    require_once 'include/Sugar_Smarty.php';
    $ss = new Sugar_Smarty();
    $ss->assign('id', $_GET['id']);
    $ss->assign('key', $_GET['key']);
    if (empty($_REQUEST['score'])) {
        $ss->display(__DIR__ . '/SendMailScores.tpl');
        if(!empty($_REQUEST['button-confirm']))
            echo "<script>alert('Не поставлена оценка');</script>";
    } else {
        $score->score = $_REQUEST['score'];
        $score->description = $_REQUEST['comment'];
        $score->date_score = date('Y-m-d');
        $score->status = 'ok';
        $score->save();
        $ss->display(__DIR__ . '/SendMailScoresClose.tpl');
    }
} else {
    sugar_die('Bad request');
}

