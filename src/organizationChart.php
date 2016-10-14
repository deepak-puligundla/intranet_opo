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
            <a href="./team/blueHelixTeam.php" class="list-group-item list-group-item-success" >BlueHelix</a>
            <a href="./team/communication.php" class="list-group-item list-group-item-success" data-parent="#MainMenu">Communication</a>
            <a href="#Engineering"  class="list-group-item list-group-item-success" data-toggle="collapse" role="button" >Engineering<span class="caret"></span></a>
            <div class="collapse" id="Engineering">
              <a href="./team/engineering/mcTeam.php" class="list-group-item">MC</a>
              <a href="./team/engineering/hgTeam.php" class="list-group-item">HG</a>
              <a href="./team/engineering/marketplaceTeam.php" class="list-group-item">MarketPlace</a>
              <a href="./team/engineering/dbaTeam.php" class="list-group-item">DBA</a>
              <a href="./team/engineering/qaTeam.php" class="list-group-item">QA</a>
              <a href="./team/engineering/mobileDevelopersTeam.php" class="list-group-item">Mobile</a>
              <a href="./team/engineering/webDevelopersTeam.php" class="list-group-item">Web</a>
              <a href="./team/engineering/contractorsTeam.php" class="list-group-item">Contractors</a>

            </div>
            <a href="./team/finance.php" class="list-group-item list-group-item-success" data-parent="#MainMenu">Finance & Controller</a>
            <a href="./team/technology.php" class="list-group-item list-group-item-success" data-parent="#MainMenu">Technology</a>
            <a href="#Marketing"  class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu" >Marketing<i class="caret"></i></a>
            <div class="collapse" id="Marketing">
              <a href="./team/marketing/seoTeam.php" class="list-group-item">SEO</a>
              <a href="./team/marketing/autoSEMTeam.php" class="list-group-item">Autos SEM</a>
              <a href="./team/marketing/RE-SEM-Team.php" class="list-group-item">RE SEM</a>
              <a href="./team/marketing/HI-SEM-Team.php" class="list-group-item">HI SEM</a>
              <a href="./team/marketing/optimization.php" class="list-group-item">Optimization</a>
              <a href="./team/marketing/analytics.php" class="list-group-item">Analytics</a>
            </div>
            <a href="#Marketplace" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Marketplace<i class="caret"></i></a>
            <div class="collapse" id="Marketplace">
              <a href="./team/marketplace/publisher.php" class="list-group-item">Publisher</a>
              <a href="./team/marketplace/PHRetailTeam.php" class="list-group-item">PH Retail</a>
              <a href="./team/marketplace/USRetailSales.php" class="list-group-item">US Retail Sales</a>
              <a href="./team/marketplace/USSalesSupport.php" class="list-group-item">US Sales Support</a>
            </div>
            <a href="#Product" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Product<span class="caret"></span></a>
            <div class="collapse" id="Product">
              <a href="./team/product/product.php" class="list-group-item">Product</a>
              <a href="./team/product/design.php" class="list-group-item">Design</a>
            </div>
            <a href="#Legal" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Strategic Planning/Legal<i class="caret"></i></a>
            <div class="collapse" id="Legal">
              <a href="./team/strategicPlanningAndLegal/MCTeam.php" class="list-group-item">MC</a>
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-10" id="team">
      </div>
    </div>

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://intranet.oneplanetops.com/intranet_opo/css/bootstrap-3.3.7-dist/js/bootstrap.js"></script>

<script>
$(document).ready(function() {
  $("#Mainmenu a").click(function(e){
    if($(this).attr('href') != '#Engineering' && $(this).attr('href') != '#Marketing' && $(this).attr('href') != '#Marketplace' && $(this).attr('href') != '#Product' && $(this).attr('href') != '#Legal'){
          e.preventDefault();
          $('#team').load($(this).attr("href"));
        }
  });
});
</script>

</body>
</html>
