<?php $pageId="organization chart"; ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content=
  "width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Deepak p" >

  <title>One Planet Ops - Intranet</title>
  <!-- Bootstrap Core CSS -->
  <link href=
  "http://intranet.oneplanetops.com/intranet_opo/css/bootstrap-3.3.7-dist/css/bootstrap.min.css"
  rel="stylesheet" type="text/css">
  <link href=
  "http://intranet.oneplanetops.com/intranet_opo/css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"
  rel="stylesheet" type="text/css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="container">
    <?php include_once("navigationHeader.html");?>

    <div class="row">
      <div class="col-md-2">

        <!-- menu -->
        <div id="MainMenu">
          <div class="list-group panel">
            <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">BlueHelix</a>
            <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">Communication</a>
            <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">Engineering</a>
            <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">Finance & Controller</a>
            <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">Technology</a>
            <a href="#Marketing" class="list-group-item list-group-item-success" data-toggle="collapse" role="button" data-parent="#MainMenu">Marketing<i class="fa fa-caret-down"></i></a>
            <div class="collapse" id="Marketing">
              <a href="#" class="list-group-item">SEO</a>
              <a href="#" class="list-group-item">Autos SEM</a>
              <a href="#" class="list-group-item">RE SEM</a>
              <a href="#" class="list-group-item">HI SEM</a>
              <a href="#" class="list-group-item">Optimization</a>
              <a href="#" class="list-group-item">Analytics</a>
            </div>
            <a href="#Marketplace" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Marketplace<i class="fa fa-caret-down"></i></a>
            <div class="collapse" id="Marketplace">
              <a href="#" class="list-group-item">Publisher</a>
              <a href="#" class="list-group-item">PH Retail</a>
              <a href="#" class="list-group-item">US Retail Sales</a>
              <a href="#" class="list-group-item">US Sales Support</a>
            </div>
            <a href="#Product" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Product<i class="fa fa-caret-down"></i></a>
            <div class="collapse" id="Product">
              <a href="" class="list-group-item">Product</a>
              <a href="" class="list-group-item">Design</a>
            </div>
            <a href="#SPorLegal" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Strategic Planning/Legal<i class="fa fa-caret-down"></i></a>
            <div class="collapse" id="SPorLegal">
              <a href="" class="list-group-item">MC</a>
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-10" id="team">

      </div>
    </div>

  </div>


  <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Organization Chart</h3>
          </div>
        <div class="panel-body">
           <img width="100%" height="100%" src="http://intranet.oneplanetops.com/intranet_opo/images/opo_department_org_chart.png" alt="">
        </div>
       </div>
      </div>
  </div>

  <div id="blueHelix" class="tab-content">
      <h2>London</h2>
      <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://intranet.oneplanetops.com/intranet_opo/css/bootstrap-3.3.7-dist/js/bootstrap.js"></script>




</body>
</html>
