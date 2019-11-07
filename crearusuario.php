<?php

//Guardar localmente variables para validar datos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$domicilio = $_POST['domicilio'];
$dni = $_POST['dni'];
$nascimiento = $_POST['nascimiento'];
$tienetarjeta = $_POST['tienetarjeta'];
$numerotarjeta = $_POST['numerotarjeta'];
$email = $_POST['email'];
$password = $_POST['password'];
$referido = $_POST['referido'];

//Cargar el archivo xml
$xml = simplexml_load_file("usuarios.xml") or die("Error: Cannot create object");
//Nota: por short-circuit, el comando luego del OR no se ejecuta si la primera parte es true




//Transformar el @ y otros caracteres para la consulta
$email = htmlspecialchars($email);
//$nascimiento = alguna funcion para corregir Date()
//$password = alguna funcion para corregir password

//Consulta xml, Email="mail", los /.. son para ir al nodo padre
$elementosQuery = 'Email[.="' . $email . '"]/../..';
$nodes = $xml->xpath('//Usuarios/Usuario/Datos/' . $elementosQuery);
//Si -encontró- coincidencia de mail
if($nodes == true){
	//Por ahora, solo lo devuelve a la página de creación de usuario
	//Javascript debería evitar que se llegue a este punto
	header("Location:nuevocliente.html");
	return;
}



//Crear el arbol de datos en XML
$nuevousuario = $xml->addChild("Usuario");
$nuevousuario->addChild("Tipo","Cliente");
$datos = $nuevousuario->addChild("Datos");
$datos->addChild("Nombre",$nombre);
$datos->addChild("Apellido",$apellido);
$datos->addChild("Domicilio",$domicilio);
$datos->addChild("Dni",$dni);
$datos->addChild("FechaNac",$nascimiento);
if($tienetarjeta=="on") {
	$datos->addChild("Tarjeta",$numerotarjeta);
}else{
	$datos->addChild("Tarjeta","");
}
$datos->addChild("Email",$email);
$datos->addChild("Password",$password);
$datos->addChild("Referido",$referido);


//Guardar XML
//Crear un DOM para que mantenga identacion el XML
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
//Pasar el XML con el nuevo item a el DOM
$dom->loadXML($xml->asXML());
//Guardar el DOM en el archivo
$dom->save("usuarios.xml");


//Redireccionar al usuario
//setcookie($cookie_name, $cookie_value, time() + (60), "/"); // 60 = 1 min
setcookie("nombrelogin", $email, time() + (60), "/"); // 60 = 1 min
setcookie("passlogin", $password, time() + (60), "/"); // 60 = 1 min
header("Location:index.html");



?>