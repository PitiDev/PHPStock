<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<title>Stock Management System</title>
  <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="custom/css/custom.css">
  <link rel="stylesheet" href="custom/css/style.css">
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">
  <link rel="stylesheet" href="lao/style.css">
	<script src="assests/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      

      <ul class="nav navbar-nav navbar-right">        

        <li id="navDashboard"><a href="index.php"><h4><b  style="color: #FFFFFF"><i class="glyphicon glyphicon-home"></i>   ໜ້າຄວບຄຸມ</b></h4></a></li>        
        
        <li id="navBrand"><a href="brand.php"><h4><b  style="color: #FFFFFF"><i class="glyphicon glyphicon-btc"></i>  ຍີ່ຫໍ້</b></h4></a></li>

        <li id="navCategories"><a href="categories.php"><h4><b style="color: #FFFFFF"><i class="glyphicon glyphicon-list-alt"></i>  ໝວດໝູ່</b></h4></a></li>  

        <li id="navProduct"><a href="product.php"><h4><b style="color: #FFFFFF"> <i class="glyphicon glyphicon-tags"></i>   ສີນຄ້າ</b></h4></a></li>

        <li class="dropdown" id="navOrder">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4><b style="color: #FFFFFF"><i class="glyphicon glyphicon-shopping-cart"></i> ລາຍການສັ່ງ </b><span class="caret"></span></h4></a>
          <ul class="dropdown-menu">            
            <li id="topNavAddOrder"><a href="orders.php?o=add"><h4> <i class="glyphicon glyphicon-plus"></i><b> ເພີ່ມລາຍການສັ່ງ</b></h4></a></li>            
            <li id="topNavManageOrder"><a href="orders.php?o=manord"> <b><h4><i class="glyphicon glyphicon-edit"></i> ຈັດການການສັ່ງທັງໝົດ</h4></b></a></li>            
          </ul>
        </li> 

        <li id="navReport"><a href="report.php"><h4><b style="color: #FFFFFF"><i class="glyphicon glyphicon-check"></i>  ລາຍງານ</b></h4> </a></li>

        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4 style="color: #FFFFFF"><b><i class="glyphicon glyphicon-user"></i>  ຜູ່ໃຊ້ລະບົບ<span class="caret"></span></h4></b></a>
          <ul class="dropdown-menu">            
            <li id="topNavSetting"><a href="setting.php"> <b><h4><i class="glyphicon glyphicon-wrench"></i> ຕັ້ງຄ່າ</h4></b></a></li>  
            <li id="topNavLogout"><a href="logout.php"> <b><h4><i class="glyphicon glyphicon-log-out"></i> ອອກຈາກລະບົບ</h4></b></a></li>            
          </ul>
        </li>        
               
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
</div>

	<div class="container">