<!DOCTYPE html>
<html>
<head>
  <title>
  TRIVIA | Forum
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

<!-- Forum -->

<div class="container mt-5 mb-5" >
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-7">
            <div class="card" style="background-color: #1abc9c ;">
                <div class="p-3">
                    <h6><b>TRIVIA | FORUM</b></h6>
                </div>
                <div class="mt-3 d-flex flex-row align-items-center p-3 form-color"> <img src="profiles/7.jpg" width="50" class="rounded-circle mr-2"> <input type="text" class="form-control" placeholder="Enter your comment..."> </div>
                <div class="mt-2">
                    <div class="d-flex flex-row p-3"> <img src="profiles/7.jpg" width="50" height="50" class="rounded-circle mr-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center"> <span class="mr-2"><b>Mihin Nimnaka</b></span> <small class="c-badge">Top Comment</small> </div> <small>12h ago</small>
                            </div>
                            <p class="text-justify comment-text mb-0">Hi there,

Not aware of any local sites with full selfservice (direct confirmation) doing this directly. Some hotels offer it also to e.g. Bookingcom/Agoda, like the Jetwing brand, and most others don't. So you really would need a local operator site (not fully selfservice, you fill in a room/quote request and they reply within a few hours) for HB and FB.</p>
                            <div class="d-flex flex-row user-feed"> <span class="wish"><i class="fa fa-heartbeat mr-2"></i>24</span> <span class="ml-3"><i class="fa fa-comments-o mr-2"></i>Reply</span> </div>
                        </div>
                    </div>
                    <div class="mt-3 d-flex flex-row align-items-center p-3 form-color"> <img src="profiles/6.jpg" width="50" class="rounded-circle mr-2"> <input type="text" class="form-control" placeholder="Enter your comment..."> </div>
                <div class="mt-2">
                    <div class="d-flex flex-row p-3"> <img src="profiles/3.jpg" width="40" height="40" class="rounded-circle mr-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center"> <span class="mr-2"><b>Mihin Nimnaka</b></span> <small class="c-badge">Top Comment</small> </div> <small>12h ago</small>
                            </div>
                            <p class="text-justify comment-text mb-0">Hi there,

Not aware of any local sites with full selfservice (direct confirmation) doing this directly. Some hotels offer it also to e.g. Bookingcom/Agoda, like the Jetwing brand, and most others don't. So you really would need a local operator site (not fully selfservice, you fill in a room/quote request and they reply within a few hours) for HB and FB.</p>
                            <div class="d-flex flex-row user-feed"> <span class="wish"><i class="fa fa-heartbeat mr-2"></i>24</span> <span class="ml-3"><i class="fa fa-comments-o mr-2"></i>Reply</span> </div>
                        </div>
                    </div>


                    <div class="d-flex flex-row p-3"> <img src="profiles/5.jpg" width="50" height="50" class="rounded-circle mr-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center"> <span class="mr-2"><b>සාන්ත සාන්ත </b></span> <small class="c-badge">Top Comment</small> </div> <small>2h ago</small>
                            </div>
                            <p class="text-justify comment-text mb-0">40 hotels from 12 European countries had applied this year, the top 10 were nominated at the beginning of September. The following three hotels were selected for the final round (in alphabetical order):

Grand Park Hotel Rovinj (Rovinj, Croatia)</p>
                            <div class="d-flex flex-row user-feed"> <span class="wish"><i class="fa fa-heartbeat mr-2"></i>14</span> <span class="ml-3"><i class="fa fa-comments-o mr-2"></i>Reply</span> </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row p-3"> <img src="profiles/4.jpg" width="50" height="50" class="rounded-circle mr-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center"> <span class="mr-2"><b>Nimdinu</b></span> <small class="c-badge">Top Comment</small> </div> <small>12h ago</small>
                            </div>
                            <p class="text-justify comment-text mb-0">Jens Sroka, Lighthouse Hotel & Spa and Lene Larsen, Hotel Ottilia were digitally brought on stage from Büsum and Copenhagen.

Parallel to the main stage three virtual panel discussions on the topics of digitalisation, investment and design were streamed live with a top line-up of experts:</p>
                            <div class="d-flex flex-row user-feed"> <span class="wish"><i class="fa fa-heartbeat mr-2"></i>54</span> <span class="ml-3"><i class="fa fa-comments-o mr-2"></i>Reply</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="footer" style="margin-top:2px; height:55px;background-color:black;">
  <h4 style="text-align:center; font-size:15px; font-family: 'Staatliches', cursive;padding:20px 10px 10px 10px;color:white;">2020 | All Right Reserved | Copyright by TRIVIA&copy;</h4> 
  </div>

</body>
</html>