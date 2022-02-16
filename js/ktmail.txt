<script type="text/javascript">
									
	$('#btn1').click(function(){
		var email=$('#exampleInputEmail1').val();
		var dangmail=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
		var kq=dangmail.test(email);
		if(kq == false)
			$('#loiemail').html('email không hơp lệ');

		var pass=$('#exampleInputPassword1').val();
	
		if(pass.length < 8)
			$('#loipass').html('password khong hop le');
		
	});
	$('#btn2').click(function(){
		$('#exampleInputEmail1').val("");
		$('#exampleInputPassword1').val("");
	})
</script>
		