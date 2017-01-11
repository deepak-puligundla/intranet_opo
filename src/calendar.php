<?php $pageId="calendar"; ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Deepak Puligundla" >

  <title>One Planet Ops - Intranet</title>
  <!-- Bootstrap Core CSS -->
  <link href="http://intranet.oneplanetops.com/intranet_opo/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
  </div>

  <div class="container">
    <div class="row">
        <div class="col-md-6" id="calender-block">
          <embed src="https://calendar.google.com/calendar/embed?src=reply-corp.com_iphp6ek7qfqtkb7f6vhhlg7ias%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no">
        </div>
        <div class="col-md-6" id="calender-block">
          <embed src="https://calendar.google.com/calendar/embed?src=reply-corp.com_1mhgn2pdnkjnohpfacfvvr8ml4%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no">
        </div>
    </div>
  </div>


</body>
</html>
