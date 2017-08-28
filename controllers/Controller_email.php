<?php
class Controller_Email extends Controller
{
    function action_submit($param=null)
    {
        $this->view->generate('submit_index.php', 'template_view.php', $this->data);

    }
    function action_send($param=null)
    {
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $msg=$_POST['msg'];
        mail($email,$subject,$msg);

    }


}
