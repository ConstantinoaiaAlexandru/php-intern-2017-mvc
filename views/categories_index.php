<ul>
  <?php foreach($categories as $cat) {
    echo '<li><a href="/categories/products/'.$cat['id'].'">' . $cat['id'] . ' ' . $cat['category_name'] .'</a></li>';
  } ?>
</ul>
