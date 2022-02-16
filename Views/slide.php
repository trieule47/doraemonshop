<div class="container">
	<div class="row">
	
		<div class = "col-sm-6">
			<div class="hot">
			<p><span>Sản phẩm siêu khuyến mãi</span> <span class ="hot1" ><i>35% HOT!</i></span></p>
	    <div id="slides" class="carousel slide" data-ride="carousel">
	    	<div class="carousel-inner">
	    	<?php
	    	//include "./Models/DBConfjg.php";
			
			$data = $database->getAllData('silde');
			$t= count($data);

	    	echo "<ul class=\"carousel-indicators\">";
				for($i=0;$i<$t;$i++){
					if($i==0)
						echo"<li data-target=\"#slides\" data-slide-to=\"".$i."\" class=\"active\"></li>";
					else
						echo"<li data-target=\"#slides\" data-slide-to=\"".$i."\"></li>";
				}
				echo "</ul>";

		    	for($i=0;$i<$t;$i++){
		    		if($i==0)
		    			echo"<div class=\"carousel-item active\" >
			    		<img src=\"./images/".$data[$i]['slide_link']. "\" title=\"".$data[$i]['slide_title']."\" width=\"250\" height=\"300\">;
			    	</div>";
			    	else
				    	echo"<div class=\"carousel-item\" >
				    		<img src=\"./images/".$data[$i]['slide_link']. "\" title=\"".$data[$i]['slide_title']."\" width=\"250\" height=\"300\">
				    	</div>";
			    }
		    	?>
		    </div>
	    	<!-- <ul class="carousel-indicators">
	    			<li data-target="#slides" data-slide-to="0" class="active"></li>
	    			<li data-target="#slides" data-slide-to="1"></li>
	    			<li data-target="#slides" data-slide-to="2"></li>
	    			<li data-target="#slides" data-slide-to="3"></li>
	    			<li data-target="#slides" data-slide-to="4"></li>
	    	</ul>
		    <div class="carousel-inner">
		    	<div class="carousel-item active" >
		    		<img src="./images/doraemon.jpg">
		    	</div>
		    	<div class="carousel-item ">
		    		<img src="./images/tiquay.jpg">
		    	</div>
		    	<div class="carousel-item">
		    		<img src="./images/than-dong.png">
		    	</div>
		    	<div class="carousel-item">
		    		<img src="./images/dragon.jpg">
		    	</div>
		    	<div class="carousel-item">
		    		<img src="./images/conan.jpg">
		    	</div>
		    		</div> -->
				</div>
			</div>
		</div>
		<div class= "col-sm-6">
				<div class="hot">
				<p><span>Sản phẩm</span> <span class ="hot1" ><i>HOT!</i></span></p>
				<p>
				<?php
					$db1 = new Database;
					$db1->connect();
					$data = $db1 -> getAllData('truyen');
					$t= count($data);
				 echo"
		    		<img src=\"images/".$data['3']['link']. "\"  title=\"".$data['3']['name']."\"  width=\"250\" height=\"300\">";?>
		    	</p>
		    	<p>
		    	<?php
		    		echo $data['3']['name']; ?>
		    	</p>
		    	

			</div>
	</div>
</div>