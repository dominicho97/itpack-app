<?php


$pdo = new PDO('mysql:host=localhost;dbname=itpack;charset=utf8', 'root','' );
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['createaccount'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
}


?>

<h1>Register</h1>
<form action="create-account.php" method="post">
<input type="text" name="username" value="" placeholder="Username ..."></p >
<input type="password" name="password" value="" placeholder="Password ..."></p >

<input type="submit" name="createaccount" value="Create Account">
</form>