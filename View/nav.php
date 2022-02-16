<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script language="javascript" src="./lib/jquery-3.4.1.min.js"></script>
    <script src="./lib/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="./lib/css/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="./css/css.css">
   
    <title>Doraemon Shop</title>
  </head>


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
						
						$data = $database->getAllData('nav');
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
	