<?php
session_start();
$host = 'localhost';
$user = 'id15619990_mihin';
$password = 'Ub$4ib~Kf[}445PN';
$database = 'id15619990_trivia';
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
                                $display_out = $query_algo_array['hotel_name']."<br>";
                                
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssmy/res.css">
<link rel="stylesheet" href="cssmy/bootstrap.css">
<link rel="stylesheet" href="cssmy/home.css">

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
        <form action="res.php" method="POST">
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

  <!-- End OF the Navigation Section ----------------- -->

  <!-- Your Hotel Section -->

<div id ="choice" style="background-color:  #d68910 ;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h6 style="text-align:center; margin:10px 10px 10px 10px;font-family: 'Staatliches', cursive; font-size:25px;color:black;"><?php if (isset($_SESSION['get_hotel_name']) )
				{echo "<b>".'ANURADHAPURA(අනුරපුර):'.strtoupper($_SESSION['get_hotel_name']."<b>");
			}else if (!isset($display_out)){
                      
				}else {echo $display_out;
					session_unset();
					session_destroy();
				} 
				?>
					
				</h6>
			</div>
			<div class="col-12" style="text-align:center;">
				<div id ="imgg" style="text-align: center; margin:0px 10px 0px 10px;">
				<img src="images/michiel-annaert-lC-kg3FZ3PM-unsplash.jpg" width="300" height="300" style="text-align: center; margin:0px 10px 0px 10px; padding:5px;">
				<img src="images/pexels-efrain-alonso-3643104.jpg" width="300" height="300"  style="text-align: center; margin:0px 10px 0px 10px;  padding:5px;">
				<img src="images/leigh-cooper-vM64fYyvc1E-unsplash.jpg" width="300" height="300"  style="text-align: center; margin:0px 10px 0px 10px;  padding:5px;">
			</div>
			</div>
		</div>
		
	</div>
</div>







  <!-- -->
<div id ="check" style="background-color: #f4d03f ;">
<h2 style="text-align:center;font-family: 'Staatliches', cursive; font-size:40px;">TRIVIA | check Out</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="M.Nimnaka">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="mnm@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Matara">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="තිහගොඩ">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="8100">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="MN Ariyathilaka">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2019">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="002">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr" > Done and Dust
        </label>
        <input type="submit" value="Continue to checkout" class="btn" style="background-color:black;">
      </form>
    </div>
  </div>
</div>
 
 <div id="footer" style="margin-top:2px;
  height:50px;
  background-color:black;">
  <h4 style="text-align:center;
  font-size:15px;
  font-family: 'Staatliches', cursive;
  padding:20px 10px 10px 10px;
  color:white;">2020 | All Right Reserved | Copyright by NSBM&copy;</h4> 
  </div>

</body>
</html>
