<?php 
$host = 'localhost';
$user = 'id15619990_mihin';
$password ='Ub$4ib~Kf[}445PN';
$database = 'id15619990_trivia';
 if ($connected_server = mysqli_connect($host,$user,$password)){
 	if (mysqli_select_db($connected_server,$database)){
         if (isset($_POST['search_hotel'])){
         	$search_hotel = $_POST['search_hotel'];
         	$split = str_split($search_hotel);

         	 if (!empty($search_hotel)){
         	 	if (strlen($search_hotel)<0){
                          echo 'search some meaningfull thing';
         	 	}else {
                   $search_query = "SELECT * FROM `area` where `area_name`='$search_hotel' ";
                   $run_search_query = mysqli_query($connected_server,$search_query);
                     if ($run_search_query){
                     	 $get_searched_row = mysqli_num_rows($run_search_query);
                     	 if ($get_searched_row>=1){
                     	 	$get_data_set = mysqli_fetch_assoc($run_search_query);
                     	 	print_r($get_data_set);

                     	 }
                     }else {
                     	echo 'error';
                     }

         	 	}
         	 }
         }else {
         }
 	}else {
 		echo 'error';
 	}
 }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Check Us | TRIVIA</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">
    <link rel="stylesheet" href="cssmy/bootstrap.css">
    <link rel="stylesheet" href="cssmy/offers.css">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



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
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Atomic+Age&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@500&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@500&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@500&family=Kulim+Park:wght@600&display=swap" rel="stylesheet"> 




    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body style="background-color:#2c2c2b;">
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

<!-- Search form -->


<!-- search form close -->


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="background-color: #464342 ; color:white;margin-top:1px;">
  <h1 class="display-4">HURRY UP!</h1>
  <h3 class="display-5">Get Best Offers From TRIVIA</h3>
  <p class="lead">Spontaneous savings. Bookmark this page and check back daily.</p>
</div>

<div class="container" style="margin-top:1px;margin-bottom:1px;background-color:#3c3b3a;padding:10px;">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">FROM US</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">10%</h1>
         <p>If you are Register now in TRIVIA , You can get 10% Discount from any Local hotels , villas and resorts . </p>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary"><a href="signup.php" style="text-decoration:none;">Sign Up Now</a></button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> Family Fun Package
</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15 Discount <small class="text-muted"></small></h1>
       <p>Wake up to breakfast for four and internet access when you book your next stay at  participating hotels.</p>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Today's Special</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">15% Discount<small class="text-muted"></small></h1>
        <p>Today's Special 15% Discount From Hotel Transylvania , This is a great chance to you enjoy with your family members.</p>
        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
      </div>
    </div>
  </div>
</div>

<div id="footer" style="margin-top:2px; height:55px;background-color:black;">
  <h4 style="text-align:center; font-size:15px; font-family: 'Staatliches', cursive;padding:20px 10px 10px 10px;color:white;">2020 | All Right Reserved | Copyright by TRIVIA&copy;</h4> 
  </div>


</body>
</html>
