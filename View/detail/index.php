	<style type="text/css">
		.slider{
		max-width: 380px;
		width: 100%;
		position: relative;
		padding-top: 340px;
		margin: auto;
		}
		.slider>img{
			position: absolute;
			top: 20px;
			left: 30px;
			height: 380px;
			width: 300px;
		}
		.anh{
			position: absolute;
			top: 20px;
			left: 30px;
			height: 324px;
			width: 300px;
		}
		input[name='slide_switch']{
			display: none;
		}
		.slider label{
			margin: 120px 10px 0px 0px;
			padding: auto;
			border: 3px solid #999;
			float: left;
			cursor: pointer;
			opacity: .6;
		}
		.slider label img{
			display: block;
			max-height: 50px;
			max-width: 50px;
			width: 100%;
			height: 100%;
		}

		.slider input[name='slide_switch']:checked + label{
			opacity: 1;
			border-color: #666;
		}
		.slider input[name='slide_switch'] ~ img{
			opacity: 0;
			-webkit-transform: scale(1.1);
					transform: scale(1.1);

		}
		.slider input[name='slide_switch']:checked + label + img{
			opacity: 1;
		}
		#mota p{
			text-align: left;
			height: 50px;
			overflow: hidden;
		}



		table,th,td{
			padding: 10px;
		/*border: 1px solid black;*/
		}
		th{
			height: 44px;
		}
		.error {
			
			width: 100%;
			font-size: 16px;
			color: red;
		}
		
		input[type=text],input[type=number]{
			font-size: 20px;
			width: 100%;
			height: 40px;
		}
		input[type=submit]{
			width: 55%;
			height: 40px;
			color: green;
		}
		
	</style>
	<div class="container-fluid padding">
	<div class="row text-center padding">
		<?php 
				$a= $_GET['table'];
				$b= $_GET['id'];
				$data = $database -> getDataByID($a,$b);
				if($a == 'truyen'){
					$c = $data['id_truyen'];
					$data1 = $database -> getAllDataByID('images_library',$c);
				}
				

		?>
		<?php 
		if($a == 'truyen')
		{
			echo "<div class=\"col-xs-12  col-md-4\">
					<article class=\"logo\"><h3>". $data['name']."</h3></article>
						<div class=\"slider\">";
			echo "<input type=\"radio\" name=\"slide_switch\" id=\"id0\" checked=\" \" >
					<label for=\"id0\">
						<img src=\"./images/". $data['link'] ."\">
					</label>
					<img src=\"./images/". $data['link'] ."\">";
					
			for ($i =0; $i < count($data1); $i++) { 
				$s=$i+1;
				echo " <input type=\"radio\" name=\"slide_switch\" id=\"id" . $s . "\">
				<label for=\"id" .$s. "\">
					<img src=\"./images/". $data1[$i]['link']. "\">
				</label>
				<img src=\"./images/". $data1[$i]['link']. "\">";
			}
			echo"</div>
				</div>";
		}
		else{
			echo "<div class=\"col-xs-12  col-md-4\">
					<div class=\"slider\">
				<h4 style='height:13%;'>".$data['name']."</h4>
			  	<img class=\"anh\" style=\"height:324px;\" src = \"./images/".$data['link']."\" >
			</div></div>";
			
			}	
		
		?>
	
		<?php
		if($a=='truyen'){
		echo "<div class=\"col-xs-12  col-md-4\" id=\"mota\" >
			<p>T??c gi???: ".$data['tacgia']."</p>
			<p>Nh?? xu???t b???n: ".$data['nxb']."</p>
			<p>Gi??: ".$data['price']."</p>
			<strong> ". $data['name']."</strong> ".$data['content']."
			</div>";
		}
		else{
			echo "<div class=\"col-xs-12  col-md-4\" id=\"mota\" ><br/><br/>
			<strong> ". $data['name']."</strong> ".$data['content']."
			<p>Gi??: ".$data['price']."</p>
			</div>";
			}
			?>

		<?php
		if(isset($_POST['nut'])){
			
		}

		?>
	
		<div class="col-xs-12  col-md-4"  >
			<form method="POST">
			<table>
			<tr><th colspan="2">Ch???n th???i gian thu??</th></tr>
			<tr>
				<td colspan="2">
				<input type="radio" name="ngaythue" value="7" checked="checked">7 ng??y 
				<input type="radio" name="ngaythue" value="14">14 ng??y
				<input type="radio" name="ngaythue" value="30">30 ng??y
				</td>
			</tr>
			<tr>
				<th>H??? t??n:</th><td><input type="text" id="hoten" name="hoten" ></td>
			</tr>
			<tr>
				<th colspan="2" class="error" id="hoten-error"></th>
			</tr>
			<tr>
				<th>S??? ??i???n tho???i:</th><td><input type="number" id="sdt" name="sdt" ></td>
			</tr>
			<tr>
				<th colspan="2" class="error" id="sdt-error"></th>
			</tr>
			<tr>	
				<th>?????a ch???:</th><td><input type="text" id="diachi" name="diachi" ></td>
			</tr>
			<tr>
				<th colspan="2"class="error" id="diachi-error"></th>
			</tr>
			<tr>
				<th colspan="2"><input type="submit" name="nut" value="Thu??" onclick="checkform();if(checkform()!=1) return false"></th>
			</tr>


			<?php 
			if(isset($_POST['nut']) )
			{	
				if(isset($_POST['hoten'])) $hoten = $_POST['hoten'];
				if(isset($_POST['sdt'])) $sdt = $_POST['sdt'];
				if(isset($_POST['ngaythue']))  $c = $_POST['ngaythue'];
				if(isset($_POST['diachi'])) $d = $_POST['diachi'];

				$today  = mktime(0, 0, 0, date("m") , date("d"),date("Y"));
				$tomorrow  = mktime(0, 0, 0, date("m"), date("d") + $c ,date("Y"));
				//echo $today['mday']."/".$today['mon']."/".$today['year'];
				$m['tensp']= $data['name'];
				$m['hoten']=$hoten;
				$m['sdt']= $sdt;
				$m['diachi']=$d;
				$m['ngay_muon']=date('d/m/Y', $today);
				$m['ngay_tra']=date('d/m/Y', $tomorrow);
				
				if ($database -> insert('thue',$m))
				echo "<tr><th colspan=\"2\"> ???? th??m v??o th?? vi???n !</th></tr>";
			}
		//	else echo "<tr><th colspan=\"2\">th??m v??o th?? vi???n kh??ng th??nh c??ng !</th></tr>";
			?>
			</table>
			</form>

			

			<script type="text/javascript">
				var textnum=/^[0-9]{10}$/;

				function checkform() {

				var hoten= document.getElementById("hoten");
				var sdt= document.getElementById("sdt");
				var diachi= document.getElementById("diachi");

				
				if (hoten.value == "" ) {
				hoten.focus();
	 			document.getElementById("hoten-error").innerHTML="kh??ng ???????c ????? tr???ng v?? kh??ng ch???a s???!";
	 			return false;
		 		}
		 		else{

		 			document.getElementById("hoten-error").innerHTML="";
		 		}
				if (sdt.value =="")
		 		{
		 			sdt.focus();
		 			document.getElementById("sdt-error").innerHTML="S??? ??i???n tho???i kh??ng ???????c ????? tr???ng";
		 			return false;
		 		}
		 		else if(textnum.test(sdt.value) == false || sdt.value.length <10)
		 			{
		 				sdt.focus();
		 				document.getElementById("sdt-error").innerHTML="S??? ??i???n tho???i sai";
		 				return false;
		 			}
		 			else{
		 				document.getElementById("sdt-error").innerHTML="";
		 			}
				if (diachi.value == "" ) {
					diachi.focus();
		 			document.getElementById("diachi-error").innerHTML="kh??ng ???????c ????? tr???ng!";
		 			return false;
				}
				 else{
					document.getElementById("diachi-error").innerHTML="";
				 }
				 document.getElementById("diachi-error").innerHTML="th??nh c??ng";
				 return 1;
				}
				
			</script>

		</div>
		
		<div class="container-fluid" >
			
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10" >
					<h5 style='height:100px;text-align: left;line-height: 100px;color: green'>S???n ph???m kh??c</h5>
				</div>
			
		</div>
		<?php 
		$data1 = $database -> getAllDataLimit($a,'3',$b);
		$t = count($data1);

		for ($i=0; $i< $t; $i++){
			echo "<div class=\"col-xs-12  col-md-4\">
				  <img style=\"height: 60%;\" src = \"./images/".$data1[$i]['link']."\" >
				  <h4 style='height:16%;'>".$data1[$i]['name']."</h4>
				  <a href=\"?controller=detail&action=detail&table=truyen&id=".$data1[$i]['id']."\" class=\"btn btn-outline-secondary\">Xem Th??m</a>
		</div>";
		}
			
		?>
		
	</div>
	</div>