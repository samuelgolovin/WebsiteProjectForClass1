<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($username === "username" && $password === "password") {
    #echo "Username: $username \r\nPassword: $password";
    header("Location: index.php");
    exit();
} else {
    unset($username);
    unset($password);
        ?>
        <form class="box" action="index.php" method="POST">
            <h1>Login Unsuccessful</h1>
            <input type='submit'/>
        </form>
        <?php

}
?>
</body>
</html>
