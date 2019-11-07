<?php
	//Guardar localmente variables para validar datos
    $mail = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    
    //Cargar el archivo xml
    $xml = simplexml_load_file("usuarios.xml") or die("Error: Cannot create object");
    //Nota: por short-circuit, el comando luego del OR no se ejecuta si la primera parte es true

    //Transformar el @ y otros caracteres para la consulta
    $mail = htmlspecialchars($mail);
    

    //Consulta xml, Email="mail", los /.. son para ir al nodo padre
    $elementosQuery = 'Email[.="' . $mail . '"]/../..';
    $nodes = $xml->xpath('//Usuarios/Usuario/Datos/' . $elementosQuery);
    
    //Si no encontr� coincidencia de mail
    if($nodes == false){
    	//Por ahora, solo lo devuelve a la p�gina principal
    	setcookie("loginincorrecto", "E-mail_inv�lido", time() + (60), "/");
    	header("Location:index.html");
    	return;
    }
    
    //Devuelve una lista de usuarios, pero por contexto solo tomamos el primer elemento
    $result = $nodes[0];
    
    //Comparar que la contrase�a sea la correcta
    if($pass != $result->Datos->Password){
    	//Contrase�a incorrecta
    	setcookie("loginincorrecto", "Contrase�a_incorrecta", time() + (60), "/");
    	header("Location:index.html");
    	return;
    }
	
    setcookie("loginincorrecto", "", time() - (3600), "/");
    
    //Redireccionar a la p�gina dependiendo del tipo de Usuario
   	switch($result->Tipo){
		case "Cliente":
			header("Location:cliente.html");
			break;
		case "Administrador":
			header("Location:administrador.html");
			break;
		case "Soporte":
			header("Location:soporte.html");
			break;
		case "CEO":
			header("Location:ceo.html");
			break;
		default:
			echo "Tipo de usuario inv�lido";
			break;
    }

    
?>