<?php
    session_start();
    include('./funct/server.php');
    $errors = array();
    if(isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password_1 = mysqli_real_escape_string($con,$_POST['password_1']);
        $password_2= mysqli_real_escape_string($con,$_POST['password_2']);

        if (empty($username)){
            array_push($errors,"ใส่ชื่อuserด้วยนะครับ");
        }
        if (empty($email)){
            array_push($errors,"Email required !");
        }
        if (empty($password_1)){
            array_push($errors,"Password is required");
        }
        if ($password_1 != $password_2){
            array_push($errors,"Confirm password wrong");
        }

        $user_check_query="SELECT * FROM user WHERE username ='$username' OR email = '$email'";
        $query = mysqli_query($con,$user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['username'] === $username){
                array_push($errors,"Username นี้ถูกใช้ไปเเล้ว");
            }
            if($result['email'] === $email){
                array_push($errors,"Email นี้ถูกใช้ไปเเล้ว");
            }

        }

        if(count($errors) == 0){
            $password = md5($password_1);

            $sql="INSERT INTO user (username,email,password)VALUE('$username','$email','$password')";
            mysqli_query($con,$sql);
            $_SESSION['username']= $username;
            $_SESSION['success']= "Login success! ! ! ล็อคอินสำเร็จ Refresh this page to remove this message";
            header('location:index.php');
        }else {
            header("location:regis.php");
        }
    }

?>