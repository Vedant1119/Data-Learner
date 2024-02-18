
<?php


if(isset($_POST['submit']))
{   
    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $db="signpage";
    $con = mysqli_connect($server,$username,$password,$db) or die('connection failed');
    


    $email = $_POST['email'];
    $password = ($_POST['password']);

         if(!empty($email) && !empty($password) && !is_numeric($email))
         {

         $select = mysqli_query($con,"SELECT * FROM `signpage` WHERE email = '$email' AND password = '$password'") or die ('query failed');
       

              if($select && mysqli_num_rows($select)>0)
              {
                  $user_data = mysqli_fetch_assoc($select);

                     if($user_data['password'] == $password)
                      {
                      header("location:home.php");
                       die;

                      }
                 }
                 $message[] = 'incorrect email or password ';
         }
         else{
            $message[] = 'incorrect email or password';
         
     }
     
 }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>Login Page</title>
  <link rel="php.php" href="php.php">


</head>
<body>
<!--header section starts-->
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

<div id="menu-btn" class = "fas fa-bars"></div>


<div class="container1">
    
  <div class="login">
    <form action="" method="post" >
    <h2>Login</h2>
  
    <?php 
     if(isset($message)){
            foreach($message as $message){
                echo'<div class="message">'.$message.'</div>';
            };
        };

        ?>
      <label class ="email" for="email">Username/email</label>
      <input type="email" id="email" name="email" >

      <label class ="password"for="password">Password:</label>
      <input type="password" id="password" name="password" >

      <input type="submit" value="Login" name="submit" >

      <p>If you have'nt created an account <a href="php.php" class="btn">CLICK HERE</a></p>
    </form>
  </div>
  </div>

<!--footer section starts-->

<section class="footer">
    <div class="box-container" >
        <div class="box">
            <h3>Quick Links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>HOME</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>ABOUT</a>
        <a href="mentalhealth.php"><i class="fas fa-angle-right"></i>MENTAL HEALTH</a>
        <a href="Survey.php"><i class="fas fa-angle-right"></i>SURVEY</a>
        <a href="learnmore.php"><i class="fas fa-angle-right"></i>LEARN MORE</a>
        <a href="login.php"><i class="fas fa-angle-right"></i>LOGIN/SIGN-IN</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policies</a>
        <a href="#"><i class="fas fa-angle-right"></i>term of use</a>
        
        </div>


        <div class="box">
            <h3>Contact Info</h3>
        <a href="#"><i class="fas fa-phone"> </i>+123-456-6790</a>
        <a href="#"><i class="fas fa-phone"> </i>+111-222-9999</a>
        <a href="#"><i class="fas fa-envelope"> </i>thiswebsites@gmail.com</a>
        <a href="#"><i class="fas fa-map"> </i>Nagpur, India - 440022</a>
        </div> 
        
        <div class="box">
            <h3>Follow us</h3>
            <a href="#"> <i class="fas fa-facebook-f"></i>facebook</a>
            <a href="#"> <i class="fas fa-twitter"></i>Twitter</a>
            <a href="#"> <i class="fas fa-instagram"></i>Instagram</a>
            <a href="#"> <i class="fas fa-linkedin"></i>linkedin</a>
        </div>


    </div>

    <div class="credit">created by <span>TEAM 13 Technical Skill Development Mini Project</span>| all rights reserved!</div>
</section>

<!--footer section ends-->    













<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>