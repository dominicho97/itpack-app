<?php
include('classes/DB.php');

if (isset($_POST['createaccount'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
       
        if(!DB::query('SELECT username FROM users WHERE username=:username',array(':username'=>$username))){

          if (strlen($username) >= 3 && strlen($username) <= 32){

            if (preg_match('/[a-zA-Z0-9_]+/', $username)){

              if (strlen($password) >= 6 && strlen($password) <= 60){

                DB::query('INSERT INTO users VALUES (\'\', :username, :password)', array(':username'=>$username, 
                 /*without hash: ':password'=>$password)); */
                ':password'=>password_hash($password,PASSWORD_BCRYPT)));
                echo "Success!";

            } else {
              echo 'Invalid username';
            }

      } else {
       echo 'Invalid username!';
        }

   } else{
       echo 'User already exists!';
     }
      
}
}else{
  echo 'invalid password';
}

?>

<h1>Register</h1>
<form action="create-account.php" method="post">
<input type="text" name="username" value="" placeholder="Username ..."><p />
<input type="password" name="password" value="" placeholder="Password ..."><p />

<input type="submit" name="createaccount" value="Create Account">
</form>
