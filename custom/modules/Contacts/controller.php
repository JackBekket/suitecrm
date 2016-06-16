<?php
class ContactsController extends SugarController {
    function action_Scores()
    {
        $this->view = 'ajax';
        if ($_REQUEST['check'] && $_REQUEST['check'] == true) {
            $scores = $this->bean->get_linked_beans('scores_for_me2','Scores', array(), 0, 1, 0, "");
            if(!empty($scores[0])) {
                echo json_encode(array('error' => 'exist'));
                return;
            } 
        }
        global $current_user;
        $secret = sha1(rand(1000000000, 9999999999));
        $score = BeanFactory::newBean('Scores');
        $score->parent_type = $this->bean->module_name;
        $score->parent_id = $this->bean->id;
        $score->status = 'wait';
        $score->secret = $secret;
        $score->name = 'Оценка';
        $score->score = '0';
        $score->valuer1_id = $this->bean->id;
        $score->valuer_id = $current_user->id;
        $score->save();
        $url = $GLOBALS['sugar_config']['site_url'];
        $url .=  '/index.php?entryPoint=SendMailScores';
        $url .= '&id=' . $score->id;     
        $url .= '&key=' . $secret; 
        require_once 'custom/include/CustomEmail.php';
        $data = array(
            'URL' => $url,
            'NAME' => $this->bean->first_name . ' ' . $this->bean->last_name,
        );
        $customMail = new CustomEmail();
        $customMail->setSubject('Оценка');
        $customMail->setMailData($data);
        $customMail->setTemplateName('Score', 'custom/include/language/ru_ru.scores.html');
        $customMail->sendMessage($this->bean);
        echo json_encode(array('error' => ''));
    }
}