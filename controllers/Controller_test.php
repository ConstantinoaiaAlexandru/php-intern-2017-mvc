<?php
require '../models/model_products'
class Controller_Test extends Controller
{
    function action_index($param=null)
    {

        $this->view->generate('test_view.php', 'template_view.php', $this->data);

    }


}
