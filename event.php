<!DOCTYPE html>
<html lang="en" class="no-js"> 
  <head>
    <title>VAAAR FOUNDATION | Let's Help Togather.</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="VAAARFOUNDATION , vaaar_official_2023 , vaaar foundation github , vaaar foundation">
    <meta name="description" content="VAAAR FOUNDATION Here for provide Free Education and Basic Need Of People.">
    <meta name="author" content="shubhammauryainfo.github.io">

    <!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/x-icon"> 

    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="assets/css/slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick-carousel/slick.css"> 
	<link href="assets/vendors/ace-responsive-menu/ace-responsive-menu.css" rel="stylesheet" type="text/css" />
	
	<link href="assets/vendors/aos/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" type="text/css">

  </head>  
  <body >
    <div id="preloader">
<script>

 var loader = document.getElementById("preloader");

 window.addEventListener("load" , function(){
  loader.style.display = "none";
 })

</script>
    </div>
  <div class="hidden-xs hidden-sm nav-top bg-primary py-1">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="nav-top-contact">
                <!-- Social links -->
                <ul class="list-inline text-center text-md-left">
                  <li class="list-inline-item mx-2" ><i class="fa fa-phone"></i> +91-7775053618 / 9373458337</li>
                  <li class="list-inline-item mx-2" ><i class="fa fa-envelope" aria-hidden="true"></i> officialvaaar@gmail.com</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 text-right">
                 <ul class="list-inline text-center text-md-right mb-0">
				  <li class="list-inline-item mx-3" data-toggle="tooltip" data-placement="top" title="Facebook">
					<a target="_blank" href="#">
					  <i class="fab fa-facebook"></i>
					</a>
				  </li>
				  <li class="list-inline-item mx-3" data-toggle="tooltip" data-placement="top" title="Instagram">
					<a target="_blank" href="https://www.instagram.com/vaaar_official_2023">
					  <i class="fab fa-instagram"></i>
					</a>
				  </li>
          <li class="list-inline-item mx-3" data-toggle="tooltip" data-placement="top" title="Youtube">
            <a target="_blank" href="https://www.youtube.com/@VAAAROFFICIAL"">
              <i class="fab fa-youtube"></i>
					</a>
				  </li>
			
				</ul>
            </div>
          </div>
        </div>
      </div>
    <!-- Header -->
    <header class="main-header"> 
	<div class="container">
			<div class="logo">
					<a href="index.html">
						 <img  src="logo.png" alt="VAAARFOUNDATION">
					  </a>
				</div> 
			 <!-- Navbar --> 
				<nav class="mainNav">
				<!-- Menu Toggle btn-->
				<div class="menu-toggle">
					<h3 class="text-uppercase">Menu</h3>
					<button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Responsive Menu Structure-->
				<!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
				<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
					 <li class="menu-active">
						<a href="index.html"> 
							<span class="title">Home</span>
						</a>
					</li>
					 <li>
						<a href="about.html"> 
							<span class="title">About Us</span>
						</a>
					</li>
					<li>
						<a href="event.php"> 
							<span class="title">Events</span>
						</a>
					</li>
          <li>
						<a href="bank-details.html"> 
							<span class="title">Bank Details</span>
						</a>
					</li>
					<li>
								<a href="gallery.html"> 
									<span class="title"> Gallery</span>
								</a>
							</li>
         	
					<li class="last ">
						<a href="contact.html"> 
							<span class="title">Contact Us</span>
						</a>
					</li>
 
				</ul>
				</nav>   
				</div>
    </header>
      <!-- End Navbar --> 
	  <section class="wt-section bg-gray text-center inner-page-header"> 
			<div class="container">
				<div class="row justify-content-md-center align-items-center text-white py-4 py-lg-3">
					<div class="col-md-7">
						<div class="text-center">
							<h1 class="display-sm-4 display-lg-3 text-uppercase">Events</h1>
						
					  </div>
					</div>
				</div>
			</div>
		</section>
  
		<main class="px-3" style="background: #ccedf5;">
<?php 
		
   
	   include "connect.php";
	   $query = "SELECT * FROM `events` ORDER BY `id` DESC;" ;
	   $result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>0) {
			echo "<div class='container'>
			<div class='row justify-content-center align-items-center g-1'>";
			while ($rows = mysqli_fetch_array($result)) {
			   echo "
			   <div class='card col-md-6 col-lg-4 col-xl-3 m-3 p-1'>
			   <img class='card-img-top img-fluid rounded-top ' src='http://localhost/vaaar-admin/{$rows['image']}' alt='post'  />
			   <div class='card-body'>
				   <h4 class='card-title'>{$rows['title']}</h4>
				   <p class='card-text'>{$rows['about']}</p>

			   </div>
		   </div>
		   
			";
			}
			echo "
			</div>
		</div>";
		} else {
			echo "no records found......";
		}
		
		?>
</div>
	</div>
	</main> 
    <!-- Footer --> 
    <footer class="wt-section bg-dark main-footer">
		<div class="container">
		<div class="row">
		<div class=" col-sm-4 col-md col-sm-4 col-12 col mb-4">
		<h5 class="mb-4">Reach us</h5>
		 
		<p><i class="fa fa-location-arrow mr-2"></i> Nallasopara (East), MH IND  </p>
		<p><i class="fa fa-phone mr-2"></i>  +91-9373458337 / 7775053618 </p>
		<p><i class="fa fa fa-envelope mr-2"></i> officialvaaar@gmail.com </p>
		
		
		</div>
		
		
		<div class="col-sm-4 col-md  col-6 col mb-4">
		<h5 class="mb-4">Site links</h5>
		
		<ul class="list-inline">
		  <li class="list-block-item mx-2"><a href="index.html">Home</a></li>
		  <li class="list-block-item mx-2"><a href="about.html">About Us</a></li>
		
		  <li class="list-block-item mx-2"><a href="gallery.html">Gallery</a></li>
		  <li class="list-block-item mx-2"><a href="privacy.txt">Privacy Policy</a></li>
		
		</ul>
		
		</div>
		
		
		<div class="col-sm-4 col-md  col-6 col mb-4">
		<h5 class="mb-4">Quick links</h5>
		
		<ul class="list-inline">
		<li class="list-block-item mx-2"><a href="contact.html">Contact Us</a></li>
		<li class="list-block-item mx-2"><a href="bank-details.html">Bank Details</a></li>
		<li class="list-block-item mx-2"><a href="funds-details.html">Funds Details</a></li>
		
		<li class="list-block-item mx-2"><a href="http://vaaarfoundation.github.io/README.md">Terms & Conditions</a></li>
		</ul>
		
		</div>
		
		
		<div class="col-sm-4 col-md  col-12 col mb-4">
		<h5 class="mb-4">Follow us</h5>
		<ul class="social_footer_ul list-inline text-left mb-0">
		<li class="list-inline-item mx-2"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item mx-2"><a href="https://www.instagram.com/vaaar_official_2023"><i class="fab fa-instagram"></i></a></li>
		<li class="list-inline-item mx-2"><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item mx-2"><a href="https://www.youtube.com/@VAAAROFFICIAL"><i class="fab fa-youtube"></i></a></li>
		</ul>
		</div>
		</div>
		<div class="row">
		<div class="col-md-12 pt-4"> 
		
		<p class="text-center copyrights"><a class="text-white" href="#"></a>VAAAR FOUNDATION <br>2023 © All Rights Reserved <br> Develop By ShubhamMaurya (8828724893)</p>
		</div>
		</div> 
		</div> 
		</footer>
			<!-- End Footer --> 
		  
			<!-- JS Script Files -->
			<!-- Global Vendor -->
			<script src="assets/vendors/jquery.min.js"></script>
			<script src="assets/vendors/jquery.migrate.min.js"></script>
			<script src="assets/vendors/popper.min.js"></script>
			<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
		  <script src="assets/vendors/aos/aos.js"></script>
		
			<!-- Components Vendor  --> 
			<script src="assets/vendors/slick-carousel/slick.min.js"></script>
			 <script src="assets/vendors/ace-responsive-menu/ace-responsive-menu.js"></script>
		
			<!--Plugin Initialize-->
			<script src="assets/js/global.js"></script> 
			<script src="assets/vendors/carousel.js"></script>
			<script src="assets/js/slider.js"></script>
		  
			<!-- END JAVASCRIPTS -->
		  </body> 
		</html>