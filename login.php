<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./funct/server.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
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
            <li><a class="act" href="regis.php">หน้าลงทะเบียน</a></li>
            <li><a href="abme.php">aboutme!</a></li>
            <li><a href="http://donate-twitch.42web.io/">donte.me!</a></li>
            <li><a href="mail.php">contractme!</a></li>
        </ul>
    </nav>
    
        
            
        
        <form action="login_db.php" method="post">
        <?php include('./funct/error.php');?>
            <br>
            <br>
            <h2>Login</h2>
            <br>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username"require>
            </div>
            <br>
            

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" require>
            </div>
            <br>
            <div class="input-group">
                <button type="submit" name="login_user" class="btn"><span>Login</span></button>
            </div>
            <p>Not member ?<a href="regis.php" class="two">register Here</a></p>
            <br>
            <br>
        </form>

        
    

    <?php include("./funct/footer.php");?>
                


            
            
</html>