<?php

include_once 'productos.php';
//M`pear solicitudes de los usuarios
if (isset($_GET['categoria'])) {
	$categoria=$_GET['categoria'];
	if ($categoria=='') {
		echo json_encode(['statuscode'=>400,'response'=>'No existe esa categoria']);
	}else{
		$productos=new Productos();
		$items=$productos->getItemsByCategory($categoria);
		echo json_encode(['statuscode'=>200,'items'=>$items]);
	}
}elseif (isset($_GET['get-item'])) {
	$id=$_GET['get-item'];
	if ($id=='') {
		echo json_encode(['statuscode'=>400,'response'=>'No ehay valor para id']);
	}else{
		$productos=new Productos();
		$item=$productos->get($id);
		echo json_encode(['statuscode'=>200,'item'=>$item]);
	}
}else{
	echo json_encode(['statuscode'=>400,'response'=>'No existe esa categoria']);
}

?>