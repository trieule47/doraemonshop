

<?php 
	// require_once("../Model/DBConfjg.php");
	// $database = new Database;
	// $dt['name']='abbb';
	// $data=$database->getAllDataa('toy');
	
?>
<div class="container-fluid ">
<div class="row text-center padding">
	

  	

	<?php
	//$tb=  !empty($_GET['tb']) ? $_GET['tb']:'truyen';
	//$data= $database->getAllDataa('$tb'); ?>
	<h2 style="color: green" >insert data</h2>
	<?php
		echo"<a href=\"?table=insert&tb=truyen\">Truyện</a>";
		echo"<a href=\"?table=insert&tb=toy\">Đồ chơi</a>";
	?>            
	  <table class="table table-bordered table-primary">
	  <!--   <thead>
	      	<tr>
				<th>id</th>
				<th>name</th>
				<th>link</th>
				<th>content</th>
				<th>id_truyen</th>
				<th>tacgia</th>
				<th>nxb</th>
				<th>price</th>
				<th></th>
				<th></th>
			</tr>
	    </thead> -->
	    <tbody>
	    	
			<?php 
			$tb = (isset($_GET['tb'])? $_GET['tb']:'truyen');
			if ($tb=='truyen') {
				require"formtruyen.php" ;

				if(isset($_POST['btn'])) {
					if(isset($_POST['name']) && isset($_POST['link']) 
						&& isset($_POST['content']) && isset($_POST['id_truyen']) 
						&& isset($_POST['tacgia']) && isset($_POST['nxb']) && isset($_POST['price']))
					{
						$array['name']=$_POST['name'];
						$array['link']=$_POST['link'];
						$array['content']=$_POST['content'];
						$array['id_truyen']=$_POST['id_truyen'];
						$array['tacgia']=$_POST['tacgia'];
						$array['nxb']=$_POST['nxb'];
						$array['price']=$_POST['price'];
						$database->insert($tb,$array);
						echo " <b>insert thành công</b>";
					}
				}
			}
			else{ 
				require "formtoy.php";
				if(isset($_POST['btn'])) {
					if(isset($_POST['name']) && isset($_POST['link']) 
						&& isset($_POST['content']) && isset($_POST['price']))
					{
						$array['name']=$_POST['name'];
						$array['link']=$_POST['link'];
						$array['content']=$_POST['content'];
						$array['price']=$_POST['price'];	
						$database->insert($tb,$array);
						echo " <b>insert thành công</b>";
					}
				}
			}			
			?>

	    </tbody>
	  </table>
	</div>
</div>
</div>
</div>
