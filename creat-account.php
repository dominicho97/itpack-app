<?php


$pdo = new PDO('mysql:host=127.0.0.1;dbname=itpack;charset=utf8', 'root',''  );
$pdo>setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




?>

<h1>Register</h1>
<form class="create-account.php" action="index.html" method="post" >
<input type='text' name="username" value="" placeholder="Username..">
<input type='password' name="password" value="" placeholder="Password..">
<input type='submit' name='createaccount' value="Create Account">
</form>
