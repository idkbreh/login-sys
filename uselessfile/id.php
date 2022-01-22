
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
        <label class="lg" style="font-size: xx-large;font-family: 'Josefin Sans', sans-serif; " > PATCHARAPOl INFO</label>
        <ul>
            <li><a class="act" href="index.php">หน้าหลัก</a></li>
            <li><a href="id.php">Website.demo</a></li>
            <li><a href="donte.me!">donte.me!</a></li>
        </ul>
    </nav>
    <h1>
        <?php
        $name = $_GET['user'];
        $pass = $_GET['pasx'];
        echo $name;
        echo "<br>";
        echo $pass;


        ?>

    </h1>

    <?php include("footer.php");?>
                


            
            
</html>