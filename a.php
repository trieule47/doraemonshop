<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<style type="text/css">
	*{
		margin: 0 auto;
		padding: 0 auto;
	}
	.choose-btn {
		width: 50px;
		height: 50px;
	}
	.glyphicon
	{
		width: 20px;
		height: 20px;
	}
	input[type='text']{
		width:	75%;
		height: 30px;
		margin: 2px;
	}
</style>

<div class="col-xs-12  col-md-4"  >
	<form method="post">
	<p>chon thời gian thuê<br/>
	<input type="radio" name="ngaythue" value="1">7 ngày 
	<input type="radio" name="ngaythue" value="2">14 ngày
	<input type="radio" name="ngaythue" value="3">30 ngày
	</p>
	<p> Số lượng:<input type="text" name="soluong" >
     </p> 
    <p>Họ và tên    <input type="text" name="hoten" value="<?php if (isset($_POST['hoten'])) $_POST['hoten'];?>"></p>
    <p>Số điện thoại    <input type="text" name="sdt"></p>

    <label>Địa chỉ
    <input type="text" name="diachi"></label>

    <a href="" class="btn btn-outline-secondary\">Mua</a>
    <?php //$a=$_POST['sl'];
    //var_dump($a);
    if (isset($_POST['hoten']))
    	$a=$_POST['hoten'];
    echo $a;
    ?>
	</form>
     

</div>

