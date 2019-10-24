
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sportz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="images/logo.png" alt="Image"></a>
        </div>
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar absolute transparent" role="banner">
      <div class="py-3">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-3">
              <a href="#" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-instagram"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-twitter"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
            </div>
            <div class="col-6 col-md-9 text-right">
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">sportz@gmail.com</span></a></div>
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+19 808 0408 321</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
        <div class="container position-relative">
          <div class="site-logo">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
          </div>

          <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li><a  href="index.html">Home</a></li>
            <li><a href="http://localhost/sportz/matches.php">Matches</a></li>
            <li class="active"><a  href="http://localhost/sportz/team.php">Team</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="http://localhost/sportz/contact.php">Contact</a></li>
            <li ><a href="http://localhost/sportz/feedback.php">Feedback</a></li>
          </ul>
        </div>
      </nav>
    </header>
  
    <div class="site-blocks-cover overlay" style="background-image: url(images/teams_wallpaper.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">Meet The Team</h1>
            <p class="mt-4">The supreme quality for leadership is unquestionably integrity. Without it, no real success is possible, no matter whether it is on a section gang, a football field, in an army, or in an office.</p>
          </div>
	          	<form class="col-md-6 text-center text-md-left"  method="POST">
		          <div class="">
		            <select class="form-control" id="sel1" name="team1">

		            	<?php 
		            	$host = "localhost";
					    $dbUsername = "dwayne";
					    $dbPassword = "DRFJFKD8080";
					    $dbname = "sportz";
					    $query = "SELECT * FROM teams";
					    //create connection
					    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
					    if (mysqli_connect_error()) {
					     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
					     // echo "theres an error";
					    } else {
					    	// echo "connection created";
					    	$result = mysqli_query($conn, $query);
					    	while($row = mysqli_fetch_assoc($result)){
					    		$team = $row['Country'];	

					    		echo"<option value='$team'>$team</option>";
					    	}

						}
		            	 ?>
		              
		            </select>
		          </div>
		          <div class="col-md-6 text-center form-group container">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary" value="Go">
                  </div>
                </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5">
            <h2 class="text-black">Team</h2>
          </div>
        </div>
        <div class="row">

        	<?php 
        	$query = "SELECT * FROM players WHERE Team='ARGENTINA'";
        	if(isset($_POST['submit'])){
					$country = $_POST['team1'];  // Storing Selected Value In Variable
					$query = "SELECT * FROM players WHERE Team='$country'";
					}
					$result = mysqli_query($conn, $query);
					$i=0;
					while($row = mysqli_fetch_assoc($result)){
					    		$sn = $row['squadNo'];	
					    		$name = $row['name'];	
					    		$pos = $row['position'];	
					    		$age = $row['age'];	
					    		$mp = $row['mp'];	
					    		$goals = $row['goals'];

					          echo"<div class='mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center'>";
					            echo"<div class='player mb-5'>";
					              echo"<span class='team-number'>$sn</span>";
					      
					              echo"<img src='images/img_1_sq.jpg' alt='Image' class='img-fluid image rounded-circle'>";
					              echo"<h2>$name</h2>";
					              echo"<h4><span class='position '>$pos</span></h4>";
					              echo"<h6>Age:$age</h6>";
					              echo"<h6>Played:$mp</h6>";
					              echo"<h6>Goals:$goals</h6>";
					            echo"</div>";
					          echo"</div>";
					        
					    	}

        	 ?>
          

      </div>
    </div>
  

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Sportz</h3>
              <p>Created by the students of</p>
              <p> St Francis Inst. of Technology</p>
              <p>Dwayne Rosario Fernandes TE_CMPN_39</p>
              <p>Joshua Fernandes TE_CMPN_40</p>
              <p>Kevin Dsouza TE_CMPN_34</p>
            </div>

            <div class="mb-5">
              <h3 class="footer-heading mb-4">Recent Blog</h3>
              <div class="block-25">
                <ul class="list-unstyled">
                  
                  <li class="mb-3">
                    <a href="https://arkansasrazorbacks.com/soccer-opens-season-with-3-0-road-win-at-unc-greensboro/" class="d-flex">
                      <figure class="image mr-4">
                        <img src="https://arkansasrazorbacks.com/wp-content/uploads/2019/08/JWB_3091.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <h3 class="heading font-weight-light">Soccer Opens Season With Shutout At UNC-Greensboro</h3>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Menu</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Matches</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Team</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Membership</a></li>
                </ul>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Watch Video</h3>

              <div class="block-16">
                <figure>
                  <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                  <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div>

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>You can be pinged and kept updated instantly by simply sharing your emaid address</p>

              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
                  </div>
                </div>
              </form>

            </div>

          </div>
          
        </div>
        
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>


