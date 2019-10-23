
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sportz </title>
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
            <li class="active"><a  href="http://localhost/sportz/matches.php">Matches</a></li>
            <li><a href="http://localhost/sportz/team.php">Team</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="http://localhost/sportz/contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
  
    <div class="site-blocks-cover overlay" style="background-image: url(images/matches_wallpaper.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">Match</h1>
            <p class="mt-4">Today I will do what others won't, so tomorrow I can accomplish what others can't.</p>
          </div>
          <form class="col-md-6 text-center text-md-left"  method="POST">
          <div class="">
            <select class="form-control" id="sel1" name="match">
              <option value="gs">Group Stage</option>
              <option value="ros">Round of 16</option>
              <option value="qf">Quater-finals</option>
              <option value="sf">Semi-finals</option>
              <option value="fin">Finals</option>
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

    
    <div class="site-section site-blocks-vs">
      <div class="container">
   
        <div class="row align-items-center mb-5">
          <div class="col-md-12">

          	<!-- start row -->

	          	<?php  

	          		if(isset($_POST['submit'])){
					$selected_val = $_POST['match'];  // Storing Selected Value In Variable
					if($selected_val=='gs'){$query = "SELECT * FROM fixtures WHERE Stage IN ('A','B','C','D','E','F','G','H')";}
					elseif($selected_val=='ros'){$query = "SELECT * FROM fixtures WHERE Stage='16'";}
					elseif($selected_val=='qf'){$query = "SELECT * FROM fixtures WHERE Stage='QF'";}
					elseif($selected_val=='sf'){$query = "SELECT * FROM fixtures WHERE Stage='SM'";}
					elseif($selected_val=='fin'){$query = "SELECT * FROM fixtures WHERE Stage='FIN'";}
					}
						$host = "localhost";
					    $dbUsername = "dwayne";
					    $dbPassword = "DRFJFKD8080";
					    $dbname = "sportz";
					    //create connection
					    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
					    if (mysqli_connect_error()) {
					     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
					     // echo "theres an error";
					    } else {
					    	// echo "connection created";

					    	
					    	$result = mysqli_query($conn, $query);

					    	while($row = mysqli_fetch_assoc($result)){
					    		$no = $row['matchNo'];
					    		$date = $row['Date'];
					    		$time = $row['Time'];
					    		$location = $row['Location'];
					    		$t1 = $row['Team_1'];
					    		$t2 = $row['Team_2'];
					    		$res = $row['Result'];
					    		
				            echo"<div class='row bg-white align-items-center ml-0 mr-0 py-4 match-entry'>";
				              echo"<div class='col-md-4 col-lg-4 mb-4 mb-lg-0'>";

				                echo"<div class='text-center text-lg-left'>";
				                  echo"<div class='d-block d-lg-flex align-items-center'>";
				                    echo"<div class='image image-small text-center mb-3 mb-lg-0 mr-lg-3'>";
				                      echo"<img src='images/img_1_sq.jpg' alt='Image' class='img-fluid'>";
				                    echo"</div>";
				                    echo"<div class='text'>";
				                      echo"<h3 class='h5 mb-0 text-black'>$t1</h3>";
				                      // echo"<span class='text-uppercase small country'>Brazil</span>";
				                    echo"</div>";
				                  echo"</div>";
				                echo"</div>";

				              echo"</div>";
				              echo"<div class='col-md-4 col-lg-4 text-center mb-4 mb-lg-0'>";
				                echo"<div class='d-inline-block'>";
				                  echo"<div class='bg-black py-2 px-4 mb-2 text-white d-inline-block rounded'><span class='h5'>$res<br><h6>$date</h6><h6>$time</h6></span></div>";
				                echo"</div>";
				              echo"</div>";

				              echo"<div class='col-md-4 col-lg-4 text-center text-lg-right'>";
				                echo"<div class=''>";
				                  echo"<div class='d-block d-lg-flex align-items-center'>";
				                    echo"<div class='image image-small ml-lg-3 mb-3 mb-lg-0 order-2'>";
				                      echo"<img src='images/img_4_sq.jpg' alt='Image' class='img-fluid'>";
				                    echo"</div>";
				                    echo"<div class='text order-1 w-100'>";
				                      echo"<h3 class='h5 mb-0 text-black'>$t2</h3>";
				                      // echo"<span class='text-uppercase small country'>London</span>";
				                    echo"</div>";
				                  echo"</div>";
				               echo"</div>";
				              echo"</div>";
				            echo"</div>";

					    	}

					     $conn->close();
					    }

				?>



            <!-- END row -->


          </div>

        </div>
  
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




