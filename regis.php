<!DOCTYPE html>
<html lang="en">
<head>
<?php include('./funct/server.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylreog.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="lg" style=";font-family: 'Josefin Sans', sans-serif; " > WEBLOG TEST</label>
        <ul>
            <li><a class="act" href="login.php">หน้าล็อคอิน</a></li>
            <li><a href="abme.php">aboutme!</a></li>
            <li><a href="http://donate-twitch.42web.io/">donte.me!</a></li>
            <li><a href="mail.php">contractme!</a></li>
        </ul>
    </nav>
    
        
            
        
        <form action="register_db.php" method = "post">
            <?php include('./funct/error.php');?>
            <div class="input-group">
            <br>
            <br>
            <h2>Register</h2>
                <label for="username">Username </label>
                <input type="text" name="username"require>
            </div>
            <div class="input-group">
                <label for="email">email    :</label>
                <input type="text" name="email"require>
            </div>
            <div class="input-group">
                <label for="password_1">Password  :</label>
                <input type="password" name="password_1"require>
            </div>
            <div class="input-group">
                <label for="password_2">confirm password:</label>
                <input type="password" name="password_2"require>
            </div>
            <div class="input-group">
                <button type="submit" name="reg_user" class="btn"><span>Register</span></button>
            </div>
            <p>Already member?<a href="login.php"class="two">Sign in Here</a></p>
            <br>
            <br>
        </form>
    

        <?php include("./funct/footer.php");?>
                


            
            
</html>