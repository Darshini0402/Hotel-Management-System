<html>
    <head>
        <title>User login</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            #h4{
                color: black; 
                t-family: 'Times New Roman';
                Times, serif; 
                font-weight: bold; 
                text-align: center;
            }
            .bg-text {
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                color: white;
                font-weight: bold;
                border: 3px solid #f1f1f1;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 80%;
                padding: 10px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <h1 style="font-weight: bold; font-family: 'Times New Roman', Times, serif; color: black; font-size: 50px; text-align: center;">Hotel Management System</h1>
        <div style="position: absolute; top: 30px; left: 20px; width: 100px;">
            <a href="login.php"><i class="material-icons" style="font-size: 40px; color: black;">home</i></a>
        </div>
        <div class="bg-text">
            <form action="booking.html" method="POST">
                <h4>Username: <input type="text" placeholder="Username" name="username"></h4>
                <h4>Password: <input type="password" placeholder="Password" name="password"></h4>
                <input type="submit" placeholder="Login">
            </form>
            <h4>Do not have an account? <a href="sign.php" style="color:black;">Sign in</a></h4>
        </div>
    </body>
</html>