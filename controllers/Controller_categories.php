<?php
class Controller_Categories extends Controller
{
    function action_index($param=null)
    {
        $categoriesModel = $this->model->load('Categories');
        $this->data['categories'] = $categoriesModel->get_categories();
        $this->view->generate('categories_index.php', 'template_view.php', $this->data);

    }

    function action_products($param=null)
    {
        $categoriesModel = $this->model->load('Categories');
        $this->data['products'] = $categoriesModel->get_products($param);
        $this->view->generate('products_index.php', 'template_view.php', $this->data);

    }

    function action_product($param=null)
    {
        $categoriesModel = $this->model->load('Categories');
        $this->data['product'] = $categoriesModel->get_product($param);
        $this->view->generate('product_index.php', 'template_view.php', $this->data);

    }

}
