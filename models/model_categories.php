<?php
class Model_Categories extends Model
{
  function get_categories()
  {
      $categories = $this->db->query("SELECT * FROM categories");
      //var_dump($categories->fetchAll());die();
      return $categories->fetchAll();
  }

  function get_products($param)
  {
      $products = $this->db->query("SELECT * FROM products WHERE category_id=$param");
      //var_dump($categories->fetchAll());die();
      return $products->fetchAll();
  }

  function get_product($param)
  {
      $product = $this->db->query("SELECT * FROM products WHERE id=$param");
      //var_dump($categories->fetchAll());die();
      return $product->fetchAll();
  }

  function get_products_by_word()
  {
      $product = $this->db->query("SELECT * FROM products WHERE name='" . $_POST['word'] ."'");
      //var_dump($product->fetchAll());die();
      return $product->fetchAll();
  }
}
