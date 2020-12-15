<?php 
require('session.inc.php');
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'trivia';
  if ($connected_server = mysqli_connect($host,$user,$password)){
  	 if (mysqli_select_db($connected_server,$db_name)){
  	 	  if (isset($_POST['user_name']) && isset($_POST['password'])){
               $user_name = $_POST['user_name'];
               $password = $_POST['password'];
               $hash_password = md5($password);

	                if (!empty($user_name) && !empty($password)){
	                		$_SESSION['username_session'] = $user_name;
	                	    $_SESSION['password_session'] = $hash_password;
	                	    $select_query = "SELECT `user_name`,`password` FROM `user_register` WHERE `user_name`='$user_name' && `password`='$hash_password' ";
	                	    $select_query_run = mysqli_query($connected_server,$select_query); 
	                	     $select_num_row = mysqli_num_rows($select_query_run);
	                	      if ($select_query_run){
	                	      	 if ($select_num_row == 1){
                                      echo 'you are log in';
	                	      	 }else {
                                      header('Location:signup.php');
	                	      	 }
                                 
	                	      }else {
	                	      	echo 'query doesnt execute';
	                	      }
	                }else {
	                	echo 'Enter Username and Password';
	                }
            
  	 	  }else {
  	 	  }
  	 }else {
  	 	echo 'not connected to the db';
  	 }

  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Trivia | Explore</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="cssmy/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="cssmy/signin.css">
  <script src="jsmy/explore.js"></script>
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
  
</head>
<body>
  <!-- navigation Section -->
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

  <!-- main Containt -->
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

      <!-- Second - Content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1>SIGNIN</h1>
          </div>
          <div class="col-lg-12">
            <form action="" method="POST">
              <h2>Enter UserName :</h2><input type="text" name="user_name"><br>
              <h2>Enter Password  :</h2><input type="password" name="password"><br>
              <input type="submit" value="LogIn">
            </form>
          </div>
        </div>
      </div>
      
<!-- Footer section -->
<div id="footer">
  <h4>Copyright &copy; 2020 All Rights Reserved by - TRIVIA &copy;</h4> 
  </div>



  <!-- Script Section -->
    
<!-- End of the Script Section -->

</body>
</html>