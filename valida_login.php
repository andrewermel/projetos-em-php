<?php

	session_start();




//variavel que verifica se a autenticação foi realizada
	$usario_autenticado = false;



//usuario do sistemas
//foi criado um array pra simular um banco de dados

	$usuarios_app = array(
		array('email'=> 'adm@teste.com.br','senha'=>'123456'),
		array('email'=> 'user@teste.com.br','senha'=>'abcd'),
	);

/*
	echo "<pre>";
	print_r($usuarios_app);
	echo "</pre>";
*/
	foreach ($usuarios_app as $user) {

		if ($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']){
			$usario_autenticado = true;

		}
	}

	if ($usario_autenticado) {
		echo "usuario autenticado";
		$_SESSION['autenticado'] = 'SIM';
		header('Location:home.php');
	}else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location:index.php?login=erro');
	}


/*
	print_r($_GET);
	
	echo "<br>/";

	echo $_GET['email'];
	echo "<br>/";

	echo $_GET['senha'];
	##deixa a senha a mostra
*/
/*
	print_r($_POST);
	echo "<br>/";

	echo $_POST['email'];
	echo "<br>/";

	echo $_POST['senha'];
*/



?>