<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div style="text-align: center; font-size: 30px; color: red">
            Software Security
            <br>
        </div>
        <div style="text-align: center; font-size: 20px; color:black"
        <form action="index.php" method="POST">
            User Name: <input type="text" name="userName" value=""><br>
            Password: <input type="text" name="password" value=""><br>
            <input type="submit" name="login" value="Login"><br>
        </form>
        </div>
        <?php
        // put your code here
        if($_POST['login']){
            $userName = stripslashes($_POST['userName']);
            $password = stripslashes($_POST['password']);
            include_once 'dbConnection.php';
            $dbConnection = new dbConnection();
            if($dbConnection->verifyUser($userName, $password))
                    echo "Login Correct ...";
            else
                echo "Login is NOT Correct ...";
        }
        ?>
         
    </body>
</html>
