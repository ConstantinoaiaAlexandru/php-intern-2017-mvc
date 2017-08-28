<ul>
  <?php foreach($products as $prod) {
    echo '<li><a href="/categories/product/'.$prod['id'].'">' . $prod['id'] . ' ' . $prod['name'] . ' '. $prod['details'] .'</a></li>';
  } ?>
</ul>
