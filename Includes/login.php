<?php


?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
    <style type="text/css">
    #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
    #button{
        padding: 25px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    #box{
        background-color: #6fc5ff;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
    }
    </style>
    <div id="box">
        <form method="post">
            <div style="font-size: 20px;margin: 10px;">Login</div>
            <input id="text" type="text" name="username"><br></br>
            <input id="text" type="password" name="password"><br></br>

            <input id="button" type="submit" value="Login"><br></br>

            <a href="signup.php">Click to Signup</a><br></br>
    </div>
</body>
</html>