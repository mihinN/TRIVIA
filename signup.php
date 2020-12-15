<?php 
$host = 'localhost';
$user ='root';
$password='';
$my_database = 'trivia';
  if ($connected_server = mysqli_connect($host,$user,$password)){
     if (mysqli_select_db($connected_server,$my_database)){
            if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['re_password']) && isset($_POST['email'])){
              $first_name = $_POST['first_name'];
              $last_name = $_POST['last_name'];
              $user_name = $_POST['username'];
              $get_password = $_POST['password'];
              $get_password_hash = md5($get_password);
              $re_password = $_POST['re_password'];
              $re_pass_hash = md5($re_password);
              $email = $_POST['email'];
        
                if (!empty($first_name) && !empty($last_name) && !empty($user_name) && !empty($get_password) && !empty($re_password) && !empty($email)){
                  if ($get_password_hash == $re_pass_hash){
                          $check_query = "SELECT `email` FROM `user_register` where `email`= '$email' ";
                          $check_query_run = mysqli_query($connected_server,$check_query);
                               if ($check_query_run){
                                     $data_input_query = "INSERT INTO `user_register` VALUES('','$user_name','$first_name','$last_name','$get_password_hash','$email','')";
                                     $data_input_query_run = mysqli_query($connected_server,$data_input_query);
                                      if ($data_input_query_run){
                                        header('Location:signin.php');
                                      	//echo 'query_executed';
                                      }else {
                                      	echo 'query dosent work';
                                      }
                                      
                               }else {
                               	echo 'QUery dosent run';
                               }
                        
                  }else {
                    echo 'not mached passwords';
                  }

                }else {
                  echo ' All Fields are Required';
                }
                 
                  
            }else {
              
            }
     }else{

     }

  }else {
    echo 'not connected';
  }




?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="cssmy/bootstrap.css">
  <link rel="stylesheet" href="cssmy/signup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="cssmy/home.css">
  <script type="text/javascript" href="jsmy/header.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>

<!-- Navigation Section -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black;">
    <a class ="navbar-brand" href="index.html" style="font-family: 'Staatliches', cursive; font-size:40px;">Trivia</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#destination"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse justify-content-center " id="destination" style="font-family: 'Questrial', sans-serif;font-size:20px;">
      <ul class="navbar-nav" style="margin:5px 5px 5px 5px;">
        <li class="nav-item"><a class="nav-link" href="home.php"  style="color:white;">Home </li></a>
        <li class="nav-item"><a class="nav-link" href="aboutus.php" style="color:white;">About US </li></a>
        <li class="nav-item"><a class="nav-link" href="offers.php" style="color:white;">Offers</li></a>
        <li class="nav-item"><a class ="nav-link" href="forum.php" style="color:white;">Forums</li></a>
      </ul>

    </div>
    <a class ="navbar-brand" href="signin.php" style="font-family: 'Staatliches', cursive; font-size:20px;position: relative;">SIGN IN </a>

  </nav>
  <!-- main content -->
  <div id="main-content">
          <h1 class="ml5">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters letters-left">TRI</span>
    <span class="letters letters-right">VIA</span>
    <span class="line line2"></span>
  </span>
</h1>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script type="text/javascript">
  anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

</script>
  </div>
<!-- Sign up section -->
<div id="register_form">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <form action="" method ="POST">
      	<img src="images/05da93c2-7438-4acc-a6fa-bd09138a48b0_200x200.png"><br>
        First Name : <br><input type="text" name="first_name"><br>
        Last Name  : <br><input type="text" name ="last_name"><br>
        Username   : <br><input type="text" name="username"><br>
        Password   : <br><input type="password" name="password"><br>
        Retype your password: <br><input type="password" name="re_password"><br>
        Enter your Email: <br><input type="email" name="email"><br>
        <input type="submit" value="Register" id="but1"><br>

      </form>
    </div>
  </div>
  </div>
</div>
  <!-- footer -->
 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Our website gives you the tools to plan your next trip: in-depth information 
on destinations; inspiring ideas on what to see and do.
TRIVIA is a newly launched traveling companion website to help travelers to our
favourite parts of Sri Lanka. Get the most out of their trips to the region, 
as well as to help off-the-radar places gain a little more exposure to the world.
TRIVIA  is a travel adviser that helps the travelers across the globe.Whether 
planning or on a trip, travelers turn to TRIVIA to compare low prices on hotels, 
book popular tours and attractions, accommodations & restaurants.
We believe that responsible travel can be a force for good. </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">Hotels</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">Villas</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">Resorts & Spa</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Cottages</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="offers.php">Offers</a></li>
              <li><a href="forum.php">Forum</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="home.php">TRIVIA &copy;</a>
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
          
              <li><a class="twitter" href="#"><img src="social/f_logo_RGB-Black_58.png" width="38" height="38" style="text-align:center;"></i></a></li>
              <li><a class="dribbble" href="#"><img src="social/iconfinder_Circled_Instagram_svg_5279112.png" width="38" height="38" style="text-align:center;"></a></li>
              <li><a class="linkedin" href="#"><img src="social/iconfinder_Circled_Twitter_svg_5279123.png" width="38" height="38" style="text-align:center;"></i></a></li>
              <li><a class="linkedin" href="#"><img src="social/GitHub-Mark-120px-plus.png" width="38" height="38" style="text-align:center;"></i></a></li>
  </a> 

            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
</html>
