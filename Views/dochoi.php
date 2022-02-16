<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script language="javascript" src="../lib/jquery-3.4.1.min.js"></script>
    <script src="../lib/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <script language="javascript" src="../js/jquery-3.4.1.min.js"></script>
    <title>Hello, world!</title>
  </head>
<body>
<div class="container-fluid">
		<div class="jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<h1>Đồ chơi</h1>
			</div>
		</div>
	</div>
	
		<div class="container-fluid padding">
		<div class="row text-center padding">
			<?php 
				//include "../Models/DBConfjg.php";
					$db = new Database;
					$db->connect();
					$data = $db -> getAllData('toy');
					$t = count($data);

				for ($i=0; $i< $t; $i++){
					echo "<div class=\"col-xs-12  col-md-4\">
						  <img src = \"./images/".$data[$i]['link']."\" >
						  <h3>".$data[$i]['name']."</h3>
						  <p>".$data[$i]['content']."</p>
						  <a href=\"#\" class=\"btn btn-outline-secondary\">Xem Thêm</a>
				<a href=\"#\" class=\"btn btn-outline-secondary\">Mua</a>
				</div>";
				}
			?>
			
		</div>
	</div>
</body>
</html>