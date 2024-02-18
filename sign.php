<!DOCTYPE html>
<html >
    <head>
        <title>
            HTML forms 
        </title>\
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    </head>
    <body>
    <section class="header">
    <a href="home.php" class="logo">DATA LEARNER</a><hr>
    <nav class="navbar">

        <a class ="btnn" href="home.php">HOME</a>
        <a class ="btnn" href="mentalhealth.php">OBJECTIVES</a>
        <a class ="btnn" href="about.php">ABOUT US</a>
      
        <a class ="btnn" href="survey.php">DATA SETS</a>
        <a class ="btnn" href="learnmore.php">LEARN MORE</a>
        <a class ="btnn" href="login.php">LOGIN/SIGN-IN</a>
    </nav>
    </section>
    </body>

<?php

@include 'config.php';

if(isset($_POST['submit']))
{   
    $server = "localhost";
    $username = "root";
    $password = "";
    $db="signpage";

    $con = mysqli_connect($server,$username,$password,$db);

    $fname = $_POST['fname'];
    $lname =  $_POST['lname'];
    $gender= $_POST['gender'];
    $profession= $_POST['profession'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);
    $Re_Entered= md5($_POST['Re_Entered']);

    $select = " SELECT * FROM signpage WHERE email = '$email'&& password = '$password' " ;
    $result = mysqli_query($con,$select);

    if(mysqli_num_rows($result)>0){
        $error[]='User already exist!';
    }
    else{
         if($password != $Re_Entered)
         {
            $error[]='Password not matched';
         }else{
            $sql = "INSERT INTO `signpage`.`signpage`( `fname`, `lname`, `gender`, `profession`, `email`, `password`, `Re_Entered`, `Date_of_login`)
            VALUES ( '$fname', '$lname', '$gender', '$profession', '$email', '$password', '$Re_Entered', current_timestamp());";
            mysqli_query($con,$sql);
            header('location:login.php');
         }
        }

    
    if(!$con){
        die("Connection to database failed due to".mysqli_connect_error());
    }
     $say = "Successfully connected to database \n";
    
    echo"CONGRATULATIONS YOU HAVE SUCCESSFULLY CREATED AN ACCOUNT \n"; 

    

    
    // echo $sql;

    

    $con->close();
};

?>

<a href="login.php" class= "btn" align = "center"> CLICK HERE TO LOGIN</a>


