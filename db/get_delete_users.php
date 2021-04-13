<?php
include "connection.php";



  function get_delete_users($user){

  $sql = "SELECT * FROM $taula WHERE `username` = $_SESSION['username']";
//connect to database
$conn = new mysqli($servidor, $usuari, $contrasenya,  $basededades);

//check connection
if ($conn->connect_error) {
	return "DATABASE ERROR: ".$conn->connect_error;
	die();
}

//run the query
$resultat = $conn->query($sql);

//check results
if ($resultat->num_rows != 0) { //num rows = 0 means thant this user doesnt exist
	// $return = -1;
	$username = $fila["username"];
			$mail = $fila["mail"];
			$password = $fila["password"];
			$realname = $fila["realname"];
			$birthdaydate = $fila["birthdaydate"];
			$bio = $fila["bio"];
			$id = $fila["id"];
		}
	


$conn->close();

if(file_exists("img/$id.jpg")){
	$img = $id;
}else{
	$img = 0;
}


$return = [$username, $mail, $password, $name, $birthdaydate, $bio, $img, $id];
return $return;
	// $query=mysqli_query($basededades,"SELECT * FROM users where username='$user'")or die(mysqli_error());
	// $row=mysqli_fetch_array($query);
  }














// function get_delete_users(){



// //escribim la consulta que voldrem executar
//  $sql = "SELECT * FROM $taula WHERE `username` = $varaux "; 
// // $sql = "SELECT * FROM $table WHERE username = '$_POST['username']' AND password = '$_POST['password']'";
// // $sql = "SELECT * FROM $table WHERE username = '$_POST["username"] ' AND password = '$_POST["password"]'";
// // $sql = "SELECT * FROM $taula WHERE `username` = $_SESSION['username'] LIMIT 1";

// //fem la connexió
// $conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

// // comprovem la connexió
// if ($conn->connect_error) { //si falla
// echo "Fallada en la connexió: ".$conn->connect_error;
// die();
// // }else{ //tot ok
// //   echo "ok<br>";
// }

// $resultat = $conn->query($sql); // indicamos que la variable resultado almacena el resultado de la consulta que es el id.


// if ($resultat -> num_rows > 0){ //si la nova id es mes gran que 0, pertant es cualsevol id.
//   while($fila = $resultat->fetch_assoc()){ //mentres que la variable fila sigui igual al resultat recuperem les dades de la pelicula
//     $username = $_POST["username"];
//     $mail = $_POST["mail"];
//     $password = $_POST["password"];
//     $name = $_POST["name"];
//     $birthdaydate = $_POST["birthdaydate"];
//     $bio = $_POST["bio"];
//     $id = $fila["id"]; // usado para poner la imagen  
   
//   }
// }else{
//   header("Location: index.php"); // en caso de que no tengamos resultados de id, redirigimos al index.
//   die();
// }
// $conn->close();

// if(file_exists("img/$id.jpg")){
//   $img = $id;
// }else{
//   $img = 0;
// }


// $return = [$username, $mail, $password, $name, $birthdaydate, $bio, $img, $id];
// return $return;
// }


?>