<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-branch" href="#">
				<img src="./images/logo1.jpg" height="50">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<?php
						include "./Models/DBConfjg.php";
						$db = new Database;
						$db->connect();
						$data = $db -> getAllData('nav');
						$t = count($data);

						for ($i=0; $i< $t; $i++){
						echo"<li class=\"nav-item\"><a class=\"nav-link \" href=\"".$data[$i]['nav_link']."\">".$data[$i]['nav_name']."</a></li>";
						}
					?>
					
					<li class="nav-item">
					<form class="form-inline my-2 my-lg-0">
			          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			        </form>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	