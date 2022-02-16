 <!DOCTYPE html>
<html lang="en">
  <head>
    
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
   <?php
  	include ('./nav.php');
  	//include ('./slide.php');?>
 

<div class="container-fluid">
		<div class="jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<h1 >Truyện tranh</h1>
			</div>
		</div>
	</div>
	
		<div class="container-fluid padding"><!--full mang hinh-->
		<div class="row text-center padding"><!-- cang giua-->
			<?php 
				include "../Models/DBConfjg.php";
					$db1 = new Database;
					$db1->connect();
					$data1 = $db1 -> getAllData('truyen');
					$t = count($data1);

				for ($i=0; $i< $t; $i++){
					echo "<div class=\"col-xs-12  col-md-4\">
						  <img src = \"../images/".$data1[$i]['link']."\" >
						  <h3>".$data1[$i]['name']."</h3>
						  <p>".$data1[$i]['content']."</p>
						  <a href=\"#\" class=\"btn btn-outline-secondary\">Xem Thêm</a>
				<a href=\"#\" class=\"btn btn-outline-secondary\">Mua</a>
				</div>";
				}
			?>
			<!-- <div class="col-xs-12  col-md-4">
				<img src="images/than-dong.png" alt="">
				<h3>Thần Đồng Đất Việt: Hoàng Sa - Trường Sa</h3>
				<p>
Hoàng Sa – Trường Sa đã được khẳng định thuộc chủ quyền Việt Nam qua sách sử Việt Nam!Nhưng bạn có biết, người Trung Quốc xưa và thư tịch cổ Trung Quốc đã từng nói gì, viết gì về  vùng đảo Hoàng Sa – Trường Sa ...				
			</p>
			<a href="#" class="btn btn-outline-secondary">Xem Thêm</a>
			<a href="#" class="btn btn-outline-secondary">Mua</a>
			</div>
			<div class="col-xs-12  col-md-4">
				<img src="images/doraemon.jpg" alt="">
				<h3>Doraemon</h3>
				<p>
					Nobita và người khổng lồ xanh

Nobita nhặt được một cây con và giúp nó hoạt động được như động vật. Cậu đặt tên cho nó là Kibou. Kibou rất ham học, thích xem tivi - đặc biệt là những chuyên mục tin tức và giáo dục...
				</p>
				<a href="#" class="btn btn-outline-secondary">Xem Thêm</a>
				<a href="#" class="btn btn-outline-secondary">Mua</a>
			</div>
			<div class="col-xs-12  col-md-4">
				<img src="images/dragon.jpg" alt="">
				<h3>Dragon Ball Super</h3>
				<p>
					3 năm sau trận chiến với ác nhân Majin Buu. Trái đất vẫn không được yên bình với sự xuất hiện của thần hủy diệt. Một nhân vật hoàn toàn mới mở ra đa vũ trụ với những sức mạnh thần thánh...
				</p>
				<a href="#" class="btn btn-outline-secondary">Xem Thêm</a>
				<a href="#" class="btn btn-outline-secondary">Mua</a>
			</div>
			<div class="col-xs-12  col-md-4">
				<img src="images/doraemon.jpg" alt="">
				<h3>Doraemon</h3>
				<p>
					Nobita và người khổng lồ xanh

Nobita nhặt được một cây con và giúp nó hoạt động được như động vật. Cậu đặt tên cho nó là Kibou. Kibou rất ham học, thích xem tivi - đặc biệt là những chuyên mục tin tức và giáo dục...
				</p>
				<a href="#" class="btn btn-outline-secondary">Xem Thêm</a>
				<a href="#" class="btn btn-outline-secondary">Mua</a>
			</div>
			<div class="col-xs-12  col-md-4">
				<img src="images/than-dong.png" alt="">
				<h3>Thần Đồng Đất Việt: Hoàng Sa - Trường Sa</h3>
				<p>
Hoàng Sa – Trường Sa đã được khẳng định thuộc chủ quyền Việt Nam qua sách sử Việt Nam!Nhưng bạn có biết, người Trung Quốc xưa và thư tịch cổ Trung Quốc đã từng nói gì, viết gì về  vùng đảo Hoàng Sa – Trường Sa ...				
			</p>
			<a href="#" class="btn btn-outline-secondary">Xem Thêm</a>
			<a href="#" class="btn btn-outline-secondary">Mua</a>
			</div>
			<div class="col-xs-12  col-md-4">
				<img src="images/dragon.jpg" alt="">
				<h3>Dragon Ball Super</h3>
				<p>
					3 năm sau trận chiến với ác nhân Majin Buu. Trái đất vẫn không được yên bình với sự xuất hiện của thần hủy diệt. Một nhân vật hoàn toàn mới mở ra đa vũ trụ với những sức mạnh thần thánh...
				</p>
				<a href="#" class="btn btn-outline-secondary">Xem Thêm</a>
				<a href="#" class="btn btn-outline-secondary">Mua</a>
			</div> -->
		</div>
	</div>

	<?php //include ('footer.php')
?>
<!-- </body>
</html> -->