<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
  
<body>
<h1 style="font-weight: bold; font-family: 'Times New Roman', Times, serif; color: black; font-size: 50px; text-align: center;">Hotel Management System</h1>
    <form action="" method="post">
        <div class="login-box">
            <h1>User Login</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            <input class="button" type="submit" name="login" value="Sign In">
        </div>
    </form>
    <h4 style="font-weight: bold; font-family: 'Times New Roman', Times, serif; color: black; font-size: 20px; text-align: center; margin-top: 32%;" > Do not have an account? <a href="sign.php" style="color:black;">Sign up</a></h4>
</body>
<?php
  
include_once('connection.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM userlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
    
    $var = 1;

    foreach($users as $user) 
    {
        if(($user['Username'] == $username) && ($user['Password'] == $password)) 
        {
            header("Location: booking.php");
            $var = 1;
        }
        else
        {
            $var = 0;
        }
    }
    if($var == 0)
    {
        echo "<script language='javascript'>";
        echo "alert('Account does not exist. Create a new account')";
        echo "</script>";
        die();
    }
}

?>
</html>