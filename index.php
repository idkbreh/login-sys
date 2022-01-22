<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    if (!isset($_SESSION['username'])){
        $_SESSION['msg']="You must log in first";

        header('location:login.php');
    }

    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:login.php');
        
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="lg" style="font-size: xx-large;font-family: 'Josefin Sans', sans-serif; " > WEBLOG TEST</label>
        <ul>
            <li><a class="act" href="#">หน้าหลัก</a></li>
            <li><a href="abme.php">aboutme!</a></li>
            <li><a href="donte.me!">donte.me!</a></li>
            <li><a href = "index.php?logout='1'">Log out</a></li>
            <li><a href = "index.php"><?php echo $_SESSION['username'];?></a><li>
        </ul>
    </nav>
    <div class="container">
        <?php if(isset($_SESSION['success'])):?> 
        
            <div class="success">   
            <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
            <?php endif?>

        
        
            
    </div>

    <?php include("./funct/footer.php");?>
                


            
            
</html>