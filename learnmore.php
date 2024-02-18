<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


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
<div id="menu-btn" class = "fas fa-bars"></div>

</section>
<!--header section ends-->

<div class="heading" style="background:url('images/data20.webp') fixed">
    <h1>About Us
    </h1>
    <p>In a world of data space where organizations deal with petabytes and exabytes of data, the era of Big Data emerged, the essence of its storage also grew. It was a great challenge and concern for industries for the storage of data until 2010. Now when frameworks like Hadoop and others solved the problem of storage, the focus shifted to processing of data. Data Science plays a big role here. All those fancy Sci-fi movies you love to watch around can turn into reality by Data Science. Nowadays it’s growth has been increased in multiple ways and thus one should be ready for our future by learning what it is and how can we add value to it. Without any hunches, let’s dive into the world of Data Science. After touching to slightest idea, you might have ended up with many questions like What is Data Science? Why we need it? How can I be a Data Scientist?? etc? So let’s clear out ourselves from this baffle.

Data science is a field that involves using statistical and computational techniques to extract insights and knowledge from data. It encompasses a wide range of tasks, including data cleaning and preparation, data visualization, statistical modeling, machine learning, and more. Data scientists use these techniques to discover patterns and trends in data, make predictions, and support decision-making. They may work with a variety of data types, including structured data (such as numbers and dates in a spreadsheet) and unstructured data (such as text, images, or audio). Data science is used in a wide range of industries, including finance, healthcare, retail, and more.

Data science is a multidisciplinary field that uses statistical and computational methods to extract insights and knowledge from data. It involves a combination of skills and knowledge from various fields such as statistics, computer science, mathematics, and domain expertise.

The process of data science involves several steps, including data collection, cleaning, exploration, analysis, and interpretation. These steps are often iterative, and the process may be refined based on the results obtained.


One of the primary goals of data science is to extract insights from data that can be used to inform decision-making. This may involve identifying patterns or trends in data, making predictions about future outcomes, or identifying opportunities for optimization or improvement.

Data science is used in a wide range of applications, including business, healthcare, social science, engineering, and many others. Some examples of data science applications include fraud detection, personalized marketing, medical diagnosis, predictive maintenance, and recommendation systems.

Data science has become increasingly important in recent years, driven by the growth of big data and the availability of powerful computing resources. As a result, data science has become an in-demand field, and there is a growing demand for professionals with data science skills and expertise.</p>
</div>

















<!--footer section starts-->

<section class="footer">
    <div class="box-container" >
        <div class="box">
            <h3>Quick Links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>HOME</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>ABOUT</a>
        <a href="mentalhealth.php"><i class="fas fa-angle-right"></i>MENTAL HEALTH</a>
        <a href="survey.php"><i class="fas fa-angle-right"></i>SURVEY</a>
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
<?php

@include 'config.php';

if(isset($_POST['submit']))
{   
    $fname = mysqli_real_escape_string( $con ,$_POST['fname']);
    $lname = $_POST['lname'];
    $gender= $_POST['gender'];
    $profession= $_POST['profession'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $Re_Entered= $_POST['Re_Entered'];

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("Connection to database failed due to".mysqli_connect_error());
    }
     $say = "Successfully connected to database \n";
    
    echo"CONGRATULATIONS YOU HAVE SUCCESSFULLY CREATED AN ACCOUNT \n"; 

    

    $sql = "INSERT INTO `signpage`.`signpage`( `fname`, `lname`, `gender`, `profession`, `email`, `password`, `Re_Entered`, `Date_of_login`)
    VALUES ( '$fname', '$lname', '$gender', '$profession', '$email', '$password', '$Re_Entered', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        //echo "successfully inserted";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
}
