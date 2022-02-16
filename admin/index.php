
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script language="javascript" src="../lib/jquery-3.4.1.min.js"></script>
    <script src="../lib/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css" >
	<style type="text/css">
	table, th, td {
		  border: 1px solid black;
		  padding: 5px;
		}
		h1{
			color: green;
		}
		table a{color:red;}
		table input{
			width: 700px;
		}
		input[type='submit']{
			width: 100px;
			height: 40px;
		}
	</style>
</head>
<body>
<?php 
	require_once("../Model/DBConfjg.php");
	$database = new Database;
	
?>

<div class="container-fluid ">
<div class="row text-center padding">
	<div class="col-xs-12  col-md-2">
		<ul class="nav flex-column">
	    <li class="nav-item">
	      <a class="nav-link" href="?table=truyen">Truyện</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="?table=toy">Đồ Chơi</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="?table=insert">insert</a>
	    </li>
	 	</ul>
	</div>
	<div class="col-xs-12  col-md-10">

	 <?php

	 	$table = (isset($_GET['table']))? $_GET['table']:'a';
	 	$id= (isset($_GET['id'])) ? $_GET['id']:'';
	 	
	 	$action = (isset($_GET['action'])) ? $_GET['action']:'a';
	 		switch ($action) {
		 	case 'remove':
		 		$database->remove($table,'id='.$id);
		 		echo"đã remove". $id;
		 		break;
		 	case 'update':
		 	if($table=='truyen')
		 		require "updatetruyen.php";
		 	else
		 		require "updatetoy.php";
		 		break;

			 default:
		 		
	 	 		break;
		 }

	 	switch ($table) {
		 	case 'truyen':
		 		require_once "truyen.php";
		 		break;
		 	case 'toy':
		 		require_once "dochoi.php";
		 		break;
		 	case 'insert':
			 	require_once "insert.php";
			 	break;
			 default:
		 		echo"<h1>TRANG ADMIN</h1>";
	 	 		break;
		 }
		
	 ?>
	</div>
</div>
</div>


</body>
</html>