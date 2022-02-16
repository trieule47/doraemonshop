
<style type="text/css">
	table,th,td{
		padding: 10px;
		/*border: 1px solid black;*/
	}
	
	input[type=text]{
		font-size: 20px;
		width: 100%;
		height: 40px;
	}
	input[type=submit]{
		width: 55%;
		height: 40px;
		background: gold;
		color: red;
	}
</style>

	<?php
		if(isset($_POST['nut'])){
			if(isset($_POST['hoten'])) $hoten = $_POST['hoten'];
			if(isset($_POST['sdt'])) $sdt = $_POST['sdt'];
			if(isset($_POST['ngaythue'])) $c = $_POST['ngaythue'];
			if(isset($_POST['diachi'])) $d = $_POST['diachi'];

			//$m['tensp']= $data['name'];

			$today  = mktime(0, 0, 0, date("m") , date("d"),date("Y"));
			$tomorrow  = mktime(0, 0, 0, date("m") , date("d") + $c,date("Y"));
			
			$m['hoten']=$hoten;
			$m['sdt'] = $sdt;
			$m['diachi']=$d;
			$m['ngay_muon']=date('d/m/Y', $today);//date('d/m/Y', $today);
			$m['ngay_tra']=date('d/m/Y', $tomorrow);
			var_dump($m);
		}

		?>
	
		<div class="col-xs-12  col-md-4"  >
			<form method="post">
			<table>
			<tr><th colspan="2">Chọn thời gian thuê</th></tr>
			<tr>
				<td colspan="2">
				<input type="radio" name="ngaythue" value="7">7 ngày 
				<input type="radio" name="ngaythue" value="14">14 ngày
				<input type="radio" name="ngaythue" value="30">30 ngày
				</td>
			</tr>
			<tr>
				<th>Ho tên:</th><td><input type="text" name="hoten" <?php if(isset($_POST['hoten'])) echo "value=\"".$hoten."\"" ?>></td>
			</tr>
			<tr>
				<th>Số điện thoại:</th><td><input type="text" name="sdt" <?php if(isset($_POST['sdt'])) echo "value=\"".$sdt."\"" ?>></td>
			</tr>
			<tr>	
				<th>Địa chỉ:</th><td><input type="text" name="diachi" <?php if(isset($_POST['diachi'])) echo "value=\"".$d."\"" ?>></td>
			</tr>
			<tr>
				<th colspan="2"><input type="submit" name="nut" value="Thuê" ></th>
			</tr>
			<?php 
			/*if(isset($_POST['nut']))thiet ke lai giao dien admin la dc
			{	
				if($database -> insert('thue',$m))
				{
					echo "<tr><th colspan=\"2\"> đã thêm vào thư viện !</th></tr>";
				}
			}*/
			?>
			</table>
			</form>
		</div>