
<?php 
	// require_once("../Model/DBConfjg.php");
	// $database = new Database;
	// $dt['name']='abbb';
	// $data=$database->getAllDataa('toy');
	
?>
 <?php $data=$database->getAllDataa('toy');?>

	
	  <h2 style="color: green" >DANH SÁCH ĐỒ CHƠI</h2>            
	  <table class="table table-bordered table-primary">
	    <thead>
	      	<tr>
				<th>id</th>
				<th>name</th>
				<th>link</th>
				<th>content</th>
				<th>price</th>
				<th></th>
				<th></th>
			</tr>
	    </thead>
	    <tbody>
	      <?php
		foreach ($data as $v) {
			echo"<tr><td>".$v['id']."</td>";
			echo"<td>".$v['name']."</td>";
			echo"<td><img src=\"../images/".$v['link']."\" width=150px ></td>";
			echo"<td>".$v['content']."</td>";
			echo"<td>".$v['price']."</td>";
			echo"<td><a href=\"?table=toy&action=remove&id=".$v['id']."\">Remove</td>";
			echo"<td><a href=\"?table=toy&action=update&id=".$v['id']."\">Update</td></tr>";
		}?>
	    </tbody>
	  </table>

