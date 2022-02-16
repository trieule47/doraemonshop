<?php 
	require "Model/DBConfjg.php";
	$database = new Database;
	//var_dump($database->getAllData('silde'));


	$controller = !empty($_GET['controller']) ? $_GET['controller'] : 'home';
	$action = !empty($_GET['action']) ? $_GET['action'] : 'index';
	//var_dump($controller);
	//var_dump($action);
	$controller_name = $controller."_controller";
	//var_dump($controller);
	$name="Controller/".$controller_name.".php";
	//var_dump($name);
	if(!file_exists($name)){
		exit("không tồn tại $name");
	}
	require_once($name);
	if (!class_exists($controller_name)) {
		exit("Class not found $controller");
	}
	$object = new $controller_name;
	if (!method_exists($object,$action)) {
		exit("Method not found $action");
	}
	$content=$object::$action();

		require_once("View/nav.php");
		if ($controller=="home") {
			require_once("View/slide.php");
		}
		require_once $content;
		require_once("View/footer.php");
		// $dt['name']='abbb';
		// $dt['link']='b';
		// $dt['content']='abc';
		// //$database->insert('toy',$dt)
		// $database->update('toy',$dt,'id=8')
	
 ?>