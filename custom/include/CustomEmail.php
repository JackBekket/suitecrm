<?php
class CustomEmail {
    private $template_name;
    private $template_path;
    private $data_mail;
    private $subject; 
    private $IsHTML = false;

    public function sendMessage($bean) {
        global $current_user;
        //$this->IsHTML = false;
        require_once('include/SugarPHPMailer.php');
        $msg = new SugarPHPMailer();
        $rcpt_name = $bean->first_name . ' ' . $bean->last_name;
        $rcpt_email = $bean->email1;
        $msg->AddAddress($rcpt_email, $rcpt_name);
        //Setup template
        require_once('XTemplate/xtpl.php');
        $xtpl = new XTemplate($this->template_path);
        $template_name = $this->template_name;
        foreach($this->data_mail as $key => $value) {
            $xtpl->assign($key, $value);
        }
        $xtpl->parse($template_name);
        $msg->Body = from_html(trim($xtpl->text($template_name))); 
        $msg->Subject = $this->subject;
        $msg->prepForOutbound();
        $msg->setMailerForSystem();
        $msg->IsHTML($this->IsHTML);
        //получаем адрес Адрес и Имя в Настройка E-mail от кого отправлять"
        $fromAddress = $current_user->emailAddress->getReplyToAddress($current_user);
        $admin = new Administration();
        $admin->retrieveSettings();
        $msg->From = !empty($fromAddress) ? $fromAddress : $admin->settings['notify_fromaddress'];
        $msg->FromName = (empty($admin->settings['notify_fromname'])) ? "" : $admin->settings['notify_fromname'];
        if (!$msg->Send()) {
            $GLOBALS['log']->fatal('Error sending e-mail: ' . $msg->ErrorInfo);
        }
    }

    public function setTemplateName($template, $path) {
        $this->template_name = $template;
        $this->template_path = $path;
    }

    public function setMailData($data) {
        $this->data_mail = $data;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }
    public function setIsHTML($ishtml) {
        $this->IsHTML = $ishtml;
    }
}

?>