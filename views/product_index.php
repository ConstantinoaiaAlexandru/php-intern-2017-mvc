<ul>
  <?php foreach($product as $pr) {
    echo '<li>'. $pr['id'] . ' ' .
    $pr['name'] . ' '. $pr['details'] .' '.$pr['price'].
    '<img src="http://'. $_SERVER["HTTP_HOST"] .'/assets/images/'.$pr['image'].'" alt="img" width=150px></li>';
  } ?>
</ul>
