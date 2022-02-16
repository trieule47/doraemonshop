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
				
				$data = $database -> getAllData('toy');
				$t = count($data);

			for ($i=0; $i< $t; $i++){
				echo "<div class=\"col-xs-12  col-md-4\">
					  <img src = \"./images/".$data[$i]['link']."\" >
					  <h4 style='height:13%;'>".$data[$i]['name']."</h4>
					  <p style='height:20%';>".$data[$i]['content']."</p>
					  <a href=\"detail-detail-toy-".$data[$i]['id'].".html\" class=\"btn btn-outline-secondary\">Xem Thêm</a>
					
			</div>";
			}
		?>
		
	</div>
	</div>
<!-- 	<a href="#" class="btn btn-outline-secondary">Mua</a> -->