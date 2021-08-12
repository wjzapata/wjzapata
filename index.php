<?php
session_start();

if (!$_SESSION) {
  header("Location: http://localhost:/clases_php/base/Login_Poo/login.php");
}

require_once('User.php');
require_once('Connect.php');

$connect = new Connect;
$connect->init();
echo '<br><br>';

$id = random_int(1, 10000);
$user = new User($id);

/*
$user->setName('Pepe');
$user->setLastname('Perez');
var_dump($user);
echo '<br><br>';
var_dump($user->getFullName());
echo '<br><br>';
*/

//$user->id = 10;
$user->email = 'b@b.b';
/*var_dump($user);
echo '<br><br>';*/

$userByEmail = $user->getByEmail($user->email);

foreach ($userByEmail as $key => $value) {
  var_dump($key);
  echo '<br><br>';
  var_dump($value);
}
echo '<br><br>';
var_dump($userByEmail);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
</head>
<body>
  <h1>Sesión iniciada, Hola 
    <?php echo $_SESSION['email']; ?>
  </h1>

  <!-- BOTON DENTRO DE UN FORM PARA CERRAR SESION https://www.w3schools.com/php/php_sessions.asp-->
  <form action="logout.php" method="post">
    <button type="submit">Cerrar sesión</button>
  </form>
</body>
</html>


