<?php
class Controller_Search extends Controller
{
    function action_word($param=null)
    {
        $categoriesModel = $this->model->load('Categories');
        $this->data['products'] = $categoriesModel->get_products_by_word();
        $this->view->generate('word_index.php', 'template_view.php', $this->data);

    }
}
