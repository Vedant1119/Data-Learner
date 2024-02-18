                                                                             


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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

<!--home section starts-->

<section class="home">
    <div class="swiper home-slider">

        <div class="swiper-wrapper">
            <div class="swiper-slide" style = "background:url(images/data4.webp)no-repeat">
                <div class="content">
                    <span>DATA LEARNERS</span>
                    <h3>We provide solutions to your data analytics problems</h3><br>
                    <a href="learnmore.php" class="btn">READ MORE...<a>
                </div>

            </div>
            <div class="swiper-slide" style = "background:url(images/data2.webp)no-repeat">
                <div class="content">
                    <span>DATA LEARNERS</span>
                    <h3>“Most companies have an IT organization, but they haven’t thought of the possibilities of decoupling the 'I' from the 'T' and managing information and technology as separate assets.</h3>
                    
                    <a href="learnmore.php" class="btn">READ MORE...<a>
                </div>
            </div>
            <div class="swiper-slide" style = "background:url(images/data3.jpg)no-repeat">
                <div class="content">
                    <span>DATA LEARNERS</span>
                    <h3>“You can have all of the fancy tools, but if [your] data quality is not good, you're nowhere.”</h3>
                    
                    <a href="learnmore.php" class="btn">READ MORE...<a>
                </div>
            </div>
            <div class="swiper-slide" style = "background:url(images/data1.jpg)no-repeat">
                <div class="content">
                    <span>DATA LEARNERS</span>
                    <h3>“In most cases, you can’t build high-quality predictive models with just internal data.</h3>
                    
                    <a href="learnmore.php" class="btn">READ MORE...<a>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>




















</section>

<!--home section ends-->


<!--Initiatives sections starts-->

<section class="initiative">
   
    <h1 class="heading-title"> Our Initiatives</h1>
    <div class="box-container">
        <div class="box">
            <img src="images\data1.jpg" alt = "" width = 90% height =90%>
            <h3>SPECIAL ATTENTION FOR DATA SECURITY</h3>
        </div>
    
        <div class="box">
            <img src="images\data2.webp" alt = "" width = 90% height =90%>
            <h3> BEST LEARNING MODELS </h3>
        </div>
  


    
        <div class="box">
            <img src="images\data4.webp" alt = "" width = 90% height =90%>
            <h3> DIFFERENT DATA SET</h3>
        </div>
    

  
        <div class="box">
            <img src="images\data3.jpg" alt = "" width = 90% height =90%>
            <h3>IN DETAIL LEARNING</h3>
        </div>
  
    </div>

</section>


<!--Initiatives sections ends-->

<!--About sections starts-->

<section class ="home-about">
    <div class="image">
        <img src="images/data1.jpg" alt="">
    </div>
    <div class="content">
        
        <h3>About Us</h3>
        <P>Data analysis broadly describes the inference of conclusions based on statistics,
typically through research. Learn various forms of data, methods of data collection, and the general process of analyzing data.
        </P>
        <a href="about.php" class ="btn">Read More..</a>
    </div>


</section>



<!--About sections ends-->

<!--sections ends-->



<!--footer section starts-->

<section class="footer">
    <div class="box-container" >
    <div class="box">
            <h3>Quick Links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>HOME</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>ABOUT</a>
        <a href="mentalhealth.php"><i class="fas fa-angle-right"></i>OBJECTIVES</a>
        <a href="survey.php"><i class="fas fa-angle-right"></i>DATA SETS</a>
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