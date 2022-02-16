<table class="table table-bordered table-primary">
	    <tbody>
	    	<?php $row = $database->getDataByID($table,$id);?>
	    	<form method="POST" >
					<tr><th>id</th><th><?php echo $row['id']?></th></tr>
					<tr><th>name</th><th><input type="text" name="name" value="<?php echo $row['name'];?>"></th></tr>
					<tr><th>link</th><th><input type="text" name="link" value="<?php echo $row['link']?>"></th></tr>
					<tr><th>content</th><th><input type="text" name="content" value="<?php echo $row['content']?>"></th></tr>
					<tr><th>id_truyen</th><th><input type="text" name="id_truyen" value="<?php  echo $row['id_truyen']?>"></th></tr>
					<tr><th>tacgia</th><th><input type="text" name="tacgia" value="<?php echo $row['tacgia']?>"></th></tr>
					<tr><th>nxb</th><th><input type="text" name="nxb" value="<?php echo $row['nxb']?>"></th></tr>
					<tr><th>price</th><th><input type="text" name="price" value="<?php echo $row['price']?>"></th></tr>
					<tr><th></th><th><input type="submit" name="btn1" value="update"></th></tr>
					<tr><th></th><th></th></tr>
			</form>
			<?php 
			if(isset($_POST['btn1'])) {
				
					$array1['name']=$_POST['name'];
					$array1['link']=$_POST['link'];
					$array1['content']=$_POST['content'];
					$array1['id_truyen']=$_POST['id_truyen'];
					$array1['tacgia']=$_POST['tacgia'];
					$array1['nxb']=$_POST['nxb'];
					$array1['price']=$_POST['price'];
					//var_dump($array1);
					$database-> update($table,$array1,'id='.$id);
					echo " <b>update thành công</b>";
			}
			?>

	    </tbody>
	  </table>