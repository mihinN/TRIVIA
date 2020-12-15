<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'trivia';
  if ($connected_server = mysqli_connect($host,$user,$password)){
    if (mysqli_select_db($connected_server , $database)){
           if (isset($_POST['search_me'])){
            $search_anything = $_POST['search_me'];
            $search_anything_charc = str_split($search_anything);
            //$dont_use = str_split('&*/&&@');
            //print_r($search_anything_charc);
            //print_r($dont_use);
             if (!empty($search_anything)){
              $search_lenght = strlen($search_anything);
                 if ($search_lenght<1 || $search_lenght>15){
                   echo 'Just check what you entered here';
                 }else if($search_lenght>1 && $search_lenght<=15){

                       for ($x=0;$x<$search_lenght;$x++){ 
                               $splitted =($search_anything_charc[$x]) ;   
                                     if ($splitted =='*' || $splitted =='&' || $splitted =='%' || $splitted =='@' || $splitted =='!' || $splitted =="<" || $splitted==">"){
                                       echo '<script>alert("Do not use any Symbols in Search bar , If You want to Continue With us , Please Press the OK  Button.")</script>';
                                     }  

                     }
                     if (true){
                      $search_query = "SELECT `area_id`,`area_name`,`hotel_id`,`hotel_name` from `get_hotel` where `area_name` = '$search_anything'";
                      $search_query_run = mysqli_query($connected_server,$search_query);
                       if ($search_query_run){
                        //echo 'query_run';
                        $find_or_not = mysqli_num_rows($search_query_run);

                           if ($find_or_not >1){
                              //print_r($get_hotel_array = mysqli_fetch_assoc($search_query_run));
                              //strtoupper($get_hotel_array['hotel_name']);
                              for ($y=1;$y<=$find_or_not;$y++){
                                 //echo $get_hotel_array['hotel_name'];
                                //print_r($get_hotel_array = mysqli_fetch_assoc($search_query_run));
                                //$get_hotel_array['hotel_name'];
                                $query_algo = "SELECT `hotel_id`,`hotel_name` FROM `get_hotel` where `hotel_id`='$y'";
                                $query_algo_run = mysqli_query($connected_server,$query_algo);
                                $query_algo_num = mysqli_num_rows($query_algo_run);
                                $query_algo_array = mysqli_fetch_assoc($query_algo_run);
                                //print_r($query_algo_array);
                                $query_algo_array['hotel_name']."<br>";
                                $_SESSION['get_hotel_name'] = $query_algo_array['hotel_name']."<br>";
                                header("Location:res.php");
                                
                              }

                           }else {
                            echo 'not found';
                           }
                       }else {
                        echo 'query_dosent_run';
                       }
                     }else {}
                

                 }else {
                    echo 'error';
                 }

             }else {
               echo 'Enter Place OR Hotel you want';
             }
 
           }else {
           }
    }else {
      echo 'error';
    }
 
  }else {
    echo 'error';
  }


 ?>

<!DOCTYPE html>
<html>
<head>
  <title>
  TRIVIA | Home 
  </title>
   <link rel="icon" href="images/05da93c2-7438-4acc-a6fa-bd09138a48b0_200x200.png">
  <link rel="stylesheet" href="cssmy/bootstrap.css">
  <link rel="stylesheet" href="cssmy/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css" integrity="sha512-sopmFEmRVsWt542K+yzH3FQ1KJfdosOJG+bGLs9ZJT07b/3gUxRA9ICuJg2JtoZ9WeknAUuwJ0ggnmrV1YL6kQ==" crossorigin="anonymous" />
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
 <div id="search_button" style="text-align:center;margin-left:20px;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="home.php" method="POST">
         <input type="text" name="search_me" style="width:400px;height:40px; border:1px solid white;border-radius:3px; text-align:center;" placeholder="TRIVIA | Search">
       </form>
      </div>
      <div class="col-12">
      </div>
    </div>
  </div>
        
  </div>
   
 </div>
  </div>
  <!-- Second Content -->

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/mike-swigunski-HKValBHChNM-unsplash.jpg" alt="First slide" height="1100" width="1660">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>EXPLORE THE PARADISE WITH US</h1>
                <p>TRIVIA is a newly launched traveling companion website to help travelers to our
                      favourite parts of Sri Lanka.Get the most out of their trips to the region, 
as well as to help off-the-radar places gain a little more exposure to the world.</p>
                <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">SIGN UP TODAY</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/theme-photos-N0khKuzbDX8-unsplash.jpg" alt="Second slide" height="1100" width="1660">
            <div class="carousel-caption text-center">
                <h1>ONE MORE FOR GOOD MEASURE.</h1>
               
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Make a Reservation</a></p>
              </div>
            <div class="container">
             
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/naganath-chiluveru-Uzl-KYPAH44-unsplash.jpg"  alt="Third slide"height="1100" width="1660">
            <div class="container">
              <div class="carousel-caption text-right">
               
                <h3>Chilling out on the bed in your hotel room watching television, while wearing your own pajamas, is sometimes the best part of a vacation.     </h3>
                <p><a class="btn btn-lg btn-primary" href="explore.php" role="button">EXPLORE</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

  <!-- third-content-->
  

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
              <li><a href="explore.php">Hotels</a></li>
              <li><a href="explore.php">Villas</a></li>
              <li><a href="explore.php">Resorts & Spa</a></li>
              <li><a href="explore.php">Cottages</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="offers.php">Check Us</a></li>
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