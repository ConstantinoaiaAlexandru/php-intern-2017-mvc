<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Roweb</title>
    <meta charset="iso-8859-1">
    <link rel="stylesheet" href="/assets/css/layout.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/curs2.css" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="/assets/css/jquery.bxslider.css" type="text/css">
    <script src="/assets/js/jquery.bxslider.js"></script>
	
	 <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--[if lt IE 9]><script src="/assets/js/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php
    include "views/partials/head.php";
?>
<!-- content -->
<div class="wrapper row2">
 <!-- Page Header -->
    <header class="masthead" style="background-image: url('/assets/images/home-bg.jpg'); height: 300px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1 style="padding-top: 120px;">Roweb</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
	<br><br>

    
    <?php include 'views/'.$content_view; ?>
</div>

    <!-- footer -->
    <?php include "views/partials/footer.php"; ?>

</body>
</html>
