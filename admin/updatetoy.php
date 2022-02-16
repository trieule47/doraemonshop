<table class="table table-bordered table-primary">
	    <tbody>
	    	<?php $row = $database->getDataByID($table,$id);?>
	    	<form method="POST" >
					<tr><th>id</th><th><?php echo $row['id']?></th></tr>
					<tr><th>name</th><th><input type="text" name="name" value="<?php echo $row['name'];?>"></th></tr>
					<tr><th>link</th><th><input type="text" name="link" value="<?php echo $row['link']?>"></th></tr>
					<tr><th>content</th><th><input type="text" name="content" value="<?php echo $row['content']?>"></th></tr>
					<tr><th>price</th><th><input type="text" name="price" value="<?php echo $row['price']?>"></th></tr>
					<tr><th></th><th><input type="submit" name="btn1" value="update"></th></tr>
					<tr><th></th><th></th></tr>
			</form>
			<?php 
			if(isset($_POST['btn1'])) {
					$array1['name']=$_POST['name'];
					$array1['link']=$_POST['link'];
					$array1['content']=$_POST['content'];
					$array1['price']=$_POST['price'];
					//var_dump($array1);
					$database-> update($table,$array1,'id='.$id);
					echo " <b>update thành công</b>";
			}
			?>

	    </tbody>
	  </table>