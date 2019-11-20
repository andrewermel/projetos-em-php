<?php

	session_start();


	// remover indice do array de sessão 
	// unset()



	//destruir a variavel de sessão
	//session_destroy()
	session_destroy();
	header('Location: index.php');

?>