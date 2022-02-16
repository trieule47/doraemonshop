<!DOCTYPE html>
<meta charset="utf-8">
<?php include"../Model/DBConfjg.php";
	$database = new database;
	$database -> connect();
	
	
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script language="javascript" src="../lib/jquery-3.4.1.min.js"></script>
    <script src="../lib/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="../css/css1.css">
    <script language="javascript" src="../js/jquery-3.4.1.min.js"></script>

    
    <title>Login</title>
  </head>
  <body>

	<form method="POST">
	    <div class="modal-dialog">
	      <div class="modal-content">
	      
	        <!-- Modal Header -->
	        <div class="modal-header">
	          <h4 class="modal-title">Login</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	  		<div class="modal-body">
	        <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" name="u" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		        <span id='loiemail'></span><br/>
			  
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="p" id="exampleInputPassword1" placeholder="Password">
			    <span id='loipass'></span><br/>
			  </div>							
			  </div>
			  <input type="submit" id="btn1" class="btn btn-primary" value='Login'  >
			 <button type="button" id="btn2" class="btn btn-secondary" value='clear' >Clear</button>
			
			</div>
	      </div>
	      <?php  
	      		include "../js/ktmail.js";
	      ?>
		</form>
<!-- 		<script type="text/javascript">
	
	$('#btn1').click(function(){
		var email=$('#exampleInputEmail1').val();
		var dangmail=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
		var kq=dangmail.test(email);
		if(kq == false)
			{
			$('#loiemail').html('email khong hop le');
			//$('#exampleInputEmail1').focus();
			}
		else{
			$('#loiemail').html('');
		}
		var pass=$('#exampleInputPassword1').val();
	
		if(pass.length < 8)
			{
			$('#loipass').html('password khong hop le');
			//$('#exampleInputPassword1').focus();
			}
		else
			{
			$('#loipass').html('');
			}
		return false;
	});
</script> -->
	<?php
	$data = $database->getAllData('login');
	if(isset($_POST['u'])&& isset($_POST['p' ])){
		$a=$_POST['u'];
		$b=$_POST['p'];
			
		if( $data['0']['username'] == $a && $data['0']['pass']== $b )
		{
		header('Location:../admin/index.php');
		}
	 
	}?>




 
</body>