
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
    $password= ($_POST['password']);
    $Re_Entered= ($_POST['Re_Entered']);

    $select = " SELECT * FROM signpage WHERE email = '$email'&& password = '$password' " ;
    $result = mysqli_query($con,$select);

    if(mysqli_num_rows($result)>0){
        $error[]='User already exist!';
    }
    else{
         if($password != $Re_Entered )
         {
            $error[]='Password not matched';
            if(empty($password) && empty($Re_Entered))
         {
            $error[]='please enter password ';
         }
         }
         else if (empty($fname)) {
            $error[]='please enter First Name';
            
         }
         else if (empty($lname)) {
            $error[]='please enter Last Name';
         }
         else if (empty($gender)) {
            $error[]='please enter Gender ';
         }
         else if (empty($profession)) {
            $error[]='please enter profession ';
         }
         else if (empty($email)) {
            $error[]='please enter email ';
         }
         else if (empty($password)) {
            $error[]='please enter password ';
         }
         else if (empty($Re_Entered)) {
            $error[]='please Re-enter password ';
         }
         else{
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
    
    

    $con->close();
};

?>



<!DOCTYPE html>
<html >
    <head>
        <title>
            HTML forms 
        </title>
        
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
<!--header section ends-->
<div class="container2"> 

       
    <div class="login">

        <form style="padding: 30px;" align = "Center" action="" method="post">
        <p >
            Sign In Page
        </p>
        <?php 
        if(isset($error)){
            foreach($error as $error){
                echo'<span class="error-msg">'.$error.'</span>';
            };
        };



        ?>
        <label style="font-size: 30; " class ="input2">
            First Name:</label>
        <input type = "text" name ="fname" id="fname" placeholder="First Name:"> <br>

        
        <br>
       
        <label  for="Text" class ="input3">Last Name:</label>
        <input type = "text" name = "lname" id="lname" placeholder="Last name:"><br>


        <br>
        <label for="Text" class ="input2"> Enter your Gender: </label> 
        <input  type = "text" name = "gender" id="gender" placeholder="Gender">
        <br>
        <br>
         <label for="Text" class ="input2"> Enter Your Profession: </label> 
        <input  type = "text" name = "profession" id ="profession"placeholder="Profession">
        <br>
        <br>
        <label for="Text" class ="input3"> Enter your Email: </label> 
        <input  type = "email" name = "email" id ="email"placeholder="em@il">
  
        <br>
        <br>
        <label for=" password" class ="input2"> Enter The password : </label> 
        <input  type = "password" name = "password" id = "password"placeholder="Password 8-16 alphanumeric">
        <br>
        <br>
        <label for=" password" class ="input2"> Re-Enter the password: </label> 
        <input  type = "password" name = "Re_Entered" id = "Re_Entered"placeholder="Re-Enter your password">
        <br>
        <br>
        <label for=" submit" class ="input">  </label> 
        <input  type = "submit" name = "submit">
      

    </form>    
    </div>
    </div>
    </body>
</html>


