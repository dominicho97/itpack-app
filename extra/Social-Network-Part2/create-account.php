<?php
include('classes/DB.php');

if (isset($_POST['createaccount'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        

        DB::query('INSERT INTO users VALUES (\'\', :username, :password, )', array(':username'=>$username, ':password'=>$password));
        echo "Success!";

}

?>

<h1>Register</h1>
<form action="create-account.php" method="post">
<input type="text" name="username" value="" placeholder="Username ..."><p />
<input type="password" name="password" value="" placeholder="Password ..."><p />

<input type="submit" name="createaccount" value="Create Account">
</form>
