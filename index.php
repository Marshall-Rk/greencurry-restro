<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "online_rest";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `restaurant`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2





?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Green-Curry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
   
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<link href="online-food-ordering/css/style.css" rel="stylesheet"> </head>
  </head>
  <body>
  

  

    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 9874563214</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">greencurry@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">GREENCURRY</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="online-food-ordering/restaurants.php" class="nav-link">Restaurants</a></li>
	        	<li class="nav-item"><a href="online-food-ordering/menu.php" class="nav-link">Menu</a></li>
	        	<li class="nav-item"><a href="online-food-ordering/login.php" class="nav-link">Customer</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			
			
			  <li class="nav-item"><a href="online-food-ordering" class="nav-link">Order</a></li>
			  <li class="nav-item"><a href="online-food-ordering/admin/index.php" class="nav-link">ADMIN</a></li>
            <li class="nav-item"><a href="restro-dashboard.php" class="nav-link">MANAGER</a></li>
		
            <li class="nav-item cta"><a href="reservation.php" class="nav-link">Book a table</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div>
		
	</div>
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12  col-sm-12 text-center ftco-animate">
			
			

            	<span class="subheading">Greencurry<br></span>
				<!-- <h2>
				<form class="form" action="online-food-ordering/resultrestdihses.php" method="POST">
      <input class="form-control form-control " type="text" placeholder="Enter any Dish Name... " name="title" valsize="40">
          <input class="btn btn-primary btn-lg" type="submit"  name="save">
          </form>
		  </h2> -->
		  <div id="subscription_area">
  <div class="container">
    <div class="row">
      <div class="col-sm-12" >
        <div class="subscribe_now">
        

          <form class="subscribe_form" action="online-food-ordering/resultrestdihses.php" method="POST">
            <div class="input-group">
               <input type="text" class="form-control mt-2" name="title" placeholder="What are you Hungry for?" required>
			   <input class="btn btn-primary btn-lg mt-2" type="submit"  name="save">
               
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>
</div>
				
				
				
					
              <h1 class="mb-4">Best Food & Restaurants</h1>
			 
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/bg_7.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Greencurry</span>

<div id="subscription_area">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="subscribe_now">
        
       
		<form class="subscribe_form" action="online-food-ordering/resultrestdihses.php" method="POST">
            <div class="input-group">
               <input type="text" class="form-control mt-2" name="title" placeholder="What are you Hungry for?" required>
			   <input class="btn btn-primary btn-lg mt-2" type="submit"  name="save">
               
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>


              <h1 class="mb-4">Nutritious &amp; Tasty</h1>
            </div>

          </div>
        </div>
      </div>

      <!-- <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Greencurry</span>

<div id="subscription_area">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="subscribe_now">
        
         
		
		<form class="subscribe_form" action="online-food-ordering/resultrestdihses.php" method="POST">
            <div class="input-group">
               <input type="text" class="form-control mt-2" name="title" placeholder="What are you Hungry for?" required>
			   <input class="btn btn-primary btn-lg mt-2" type="submit"  name="save">
               
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>


              <h1 class="mb-4">Delicious Specialties</h1>
            </div>

          </div>
        </div>
      </div> -->
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="featured">
    					<div class="row">
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(online-food-ordering/admin/Res_img/dishes/60a0f9ebaf391.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Uno Pizzeria & Grill</h3>
				              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(online-food-ordering/admin/Res_img/dishes/5ad75799df865.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Grilled Beef with potatoes</h3>
				              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(online-food-ordering/admin/Res_img/dishes/60cdc5da2625b.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Grilled Beef with potatoes</h3>
				              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(online-food-ordering/admin/Res_img/dishes/60cdc665e0f62.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Grilled Beef with potatoes</h3>
				              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
			              </div>
			            </div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	

		<section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2" style="background-image: url(images/about.jpg);"></div>
						<div class="img img-2 ml-md-2" style="background-image: url(images/about-1.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About</span>
	            <h2 class="mb-4">GREENCURRY</h2>
	          </div>
	          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<pc class="time">
							<span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
							<span><a class="text-dark" href="#">+ 1-978-123-4567</a></span>
						</p>
					</div>
				</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex">
    			<div class="col-md-9">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Menus/Dish</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Staffs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="15000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
          <div class="col-md-3 text-center text-md-left">
          	<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
    	</div>
    </section>
	<!-- style="background-image: url(images/bg_7.jpg);background-size:cover" -->
		<section class="ftco-section" >
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4 ">Catering Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading ">Birthday Party</h3>
                <p class="">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading ">Business Meetings</h3>
                <p class="">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading ">Wedding Party</h3>
                <p class="">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Trending</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
				
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(online-food-ordering/restaurantimage/fooditems/b1.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">₹1000</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>

		              <p><a href="online-food-ordering" class="btn btn-primary">Order now</a></p>

	              </div>
              </div>
            </div>
        	</div>
			
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(online-food-ordering/restaurantimage/fooditems/b3.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$₹1000</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="online-food-ordering" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(online-food-ordering/restaurantimage/fooditems/desitadka.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">₹1000</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="online-food-ordering" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(online-food-ordering/restaurantimage/fooditems/lakeside.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">₹1000</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="online-food-ordering" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(online-food-ordering/restaurantimage/fooditems/maratha.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">₹1000</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="online-food-ordering" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(online-food-ordering/restaurantimage/fooditems/ssailela.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">₹1000</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="online-food-ordering" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>
        </div>
    	</div>
    </section>
    
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Top Chefs</span>
            <h2 class="mb-4">Master Chefs From Mumbai</h2>
          </div>
		  
		          </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-4.jpg);"></div>
							<div class="text pt-4">
								<h3>John Smooth</h3>
								<span class="position mb-2">Restaurant Owner</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-2.jpg);"></div>
							<div class="text pt-4">
								<h3>Rebeca Welson</h3>
								<span class="position mb-2">Head Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-3.jpg);"></div>
							<div class="text pt-4">
								<h3>Kharl Branyt</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-1.jpg);"></div>
							<div class="text pt-4">
								<h3>Luke Simon</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section img" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
          	<div class="heading-section ftco-animate mb-5 text-center">
	          	<span class="subheading">Book a table</span>
	            <h2 class="mb-4">Make Reservation</h2>
	          </div>
            <form action="book.php" method="POST">
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Name</label>
	                    <input type="text" class="form-control" required placeholder="Your Name" name="fullname"required>
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Email</label>
	                    <input type="email" class="form-control" required placeholder="Your Email" name="email" pattern=".+@gmail.com" size="50" required>
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Phone</label>
	                    <input type="text" class="form-control" required placeholder="Phone" name="phone1"required>
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Date</label>
	                    <input type="text" class="form-control" id="book_date" required placeholder="Date" name="date"required>
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Time</label>
	                    <input type="text" class="form-control"  required placeholder="00:00am/pm to 00:00am/pm" name="time"required> 
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Person</label>
	                    <div class="select-wrap one-third">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="person" id="" required class="form-control">
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4</option>
	                        <option value="5">5+</option>
	                      </select>
	                    </div>
	                  </div>
	                </div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="">Restaurant</label>
						  <div class="select-wrap one-third">
							<div class="icon"><span class="ion-ios-arrow-down"></span></div>
							<select name="restaurant" id="" required class="form-control">
							<?php while($row1 = mysqli_fetch_array($result1)):;?>

<option value="<?php echo $row1[2];?>"><?php echo $row1[2];?></option>

<?php endwhile;?>
							</select>

						  </div>
						</div>
					  </div>
	                <div class="col-md-12 mt-3">
	                  <div class="form-group">
	                    <input type="submit" value="Make a Reservation" name="book" class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
	              </div>
	            </form>
          </div>
        </div>
			</div>
		</section>
		
		<section class="ftco-section testimony-section img">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jason McClean</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Stevenson</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Art Leonard</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rose Henderson</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ian Boner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Blog</span>
            <h2 class="mb-4">Recent Posts</h2>
          </div>
        </div>
				<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text pt-3 pb-4 px-4">
                <div class="meta">
                  <div><a href="#">Sept. 06, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-3 pb-4 px-4">
                <div class="meta">
                  <div><a href="#">Sept. 06, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-3 pb-4 px-4">
                <div class="meta">
                  <div><a href="#">Sept. 06, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>
	<?php
		
    include("footer.php");

	?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>