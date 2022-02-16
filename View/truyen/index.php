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
					$data1 = $database -> getAllData('truyen');
					$t = count($data1);

				for ($i=0; $i< $t; $i++){
					echo "<div class=\"col-xs-12  col-md-4\">
						  <img src = \"./images/".$data1[$i]['link']."\" >
						  <h4 style='height:13%;'>".$data1[$i]['name']."</h4>
						  <p style='height:20%;'>".$data1[$i]['content']."</p>
						  <a href=\"detail-detail-truyen-".$data1[$i]['id'].".html\" class=\"btn btn-outline-secondary\">Xem Thêm</a>
				</div>";
				}
			?>
		</div>
	</div>
	<!-- <a href="#" class="btn btn-outline-secondary">Mua</a> -->