<?php

session_start();
    $dbcon=mysqli_connect("localhost","root","","fashion_brand");
    if (!$dbcon) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    function login($email,$password){
        global $dbcon;
        $sqli="SELECT id,username,email,password,role FROM users
        WHERE email='$email' AND password='$password'";
        $result=mysqli_query($dbcon,$sqli);
        if(mysqli_num_rows($result)==1){
            $user=mysqli_fetch_object($result);
            $users=array(); 
            $users['id'] =$user->id;
            $users['username'] =$user->username;
            $users['email'] =$user->email;
            $users['role'] =$user->role;
            $_SESSION['users']=$users;
            if($_SESSION['users']['role']==1){
            header("Location: index.php");
        }elseif ($_SESSION['users']['role']==0) {
            header("Location: dashboard/index.php");
        }
      }else{
        echo "Email ose Password eshte gabim";
      }
    }

    function register($id,$username,$email,$password,$role){
        global $dbcon;
        $sqli="INSERT INTO `users`(`id`, `username`, `email`, `password`, `role`) 
         VALUES ('$id','$username','$email','$password','$role');";
        $result=mysqli_query($dbcon,$sqli);
        if ($result) {
           echo "U Regjistrua me Sukses";
        }
    }

    function about(){
        global $dbcon;
        $sqli="SELECT * FROM `about_us`";
        return $result=mysqli_query($dbcon,$sqli);
        
    }

    function contact($id,$first_name,$last_name,$email,$phone_number,$subject,$orderType,$order_number,$message,$attach){
        global $dbcon;
        $sqli="INSERT INTO `contact_us`(`id`, `first_name`, `last_name`, `email`, `phone_number`, `subject`, `orderType`, `order_number`, `message`, `attach`)
         VALUES ('$id','$first_name','$last_name','$email','$phone_number','$subject','$orderType','$order_number','$message','$attach')";
        $result=mysqli_query($dbcon,$sqli);
        if ($result) {
           echo "Mesazhi juaj eshte derguar me sukses.";
        }
    }



    ?>