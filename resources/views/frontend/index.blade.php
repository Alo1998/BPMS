<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>Beauty Parlour</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gym website, Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 

    <!-- Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/users')}}/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/users')}}/vendors/slick-carousel/slick.css"> 
    <link rel="stylesheet" type="text/css" href="{{asset('admin/users')}}/fonts/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/users')}}/vendors/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/users')}}/css/hovereffects.css"> 
    <!-- Theme Styles -->
    <link href="{{asset('admin/users')}}/css/scrolling-nav.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/users')}}/css/theme.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/users')}}/css/styles.css">
  </head>
  <!-- End Head -->

  <body>
    <!-- Header -->
    <header id="top">
      <!-- Navbar --> 
	  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">Women's <span>Beauty Parlour</span></a>  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-menu"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#top">HOME</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#services">SERVICES</a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#about">ABOUT</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{route('adminlogin')}}">ADMIN</a>
          </li>
			</ul>
		  </div>
		</div>
	  </nav>
      <!-- End Navbar --> 
		<section class="hero-large hero">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="{{asset('admin/users')}}/img/intro/banner-bg1.png" alt="Los Angeles" width="1100" height="500">
				  <div class="container">
				   <div class="carousel-caption">
					<h2>Trendy Hair Styles</h2>
          <p>Professional Parlour</p>
          <h6>We pride ousrselves on our high quality work and attention to detail. The products we use are of top quality branded products</h6>
				  </div> 
				  </div>
				
				</div>
				<div class="carousel-item">
				  <img src="{{asset('admin/users')}}/img/intro/banner-bg2.png" alt="Chicago" width="1100" height="500">
				    <div class="container">
				  <div class="carousel-caption">
					<h2>Best Beauty Parlour</h2>
          <p>Get Pretty Look</p>
          <h6>We pride ousrselves on our high quality work and attention to detail. The products we use are of top quality branded products</h6>
				  </div>   
				</div>
				</div>
				<div class="carousel-item">
				  <img src="{{asset('admin/users')}}/img/intro/banner-bg3.png" alt="New York" width="1100" height="500">
				    <div class="container">
				  <div class="carousel-caption">
					<h2>Trendy Beauty Look</h2>
          <p>Outstanding Looks</p>
          <h6>We pride ousrselves on our high quality work and attention to detail. The products we use are of top quality branded products</h6>
				  </div>   
				  </div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			</div>
			<!-- <div class="hero-img bg-overlay" data-overlay="0" style="background-image: url(assets/img/intro/banner-bg.png);"></div> -->
			<!-- <div class="container mt-md-5 pt-md-3"> -->
				<!-- <div class="row text-white hero-content"> -->
					<!-- <div class="col-md-6"> -->
						<!-- <!-- heading -->  
						<!-- <h1 class="text-uppercase mb-3 display-4 font-weight-bolder" data-aos="fade-right" data-aos-easing="linear"> -->
							<!-- Change the World -->
						<!-- </h1>  -->
						<!-- <p class="lead text-white opacity-2" data-aos="fade-right" data-aos-easing="linear"> -->
						<!-- Always deliver more than expected -->
						<!-- </p> -->
						<!-- <a class="btn btn-lg btn-outline-light py-2 mt-3 px-4 btn-pill" data-aos="fade-right" data-aos-easing="linear" src="#services" -->
						<!-- href="#services">Our Services</a> -->
					<!-- </div> -->
					<!-- <div class="col-md-5"> -->
					 <!-- <img src="assets/img/intro/rocket.svg" width="70%" class="float-right" alt="" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="200"> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
		</section>

    </header>
    <!-- End Header -->

    <main role="main" class="mt-lg-5 m-0">
	
	<section class="wt-section" id="services">
        <div class="container">
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0">
            <h2 class="mb-md-2">Our Service Prices</h2>
            <p class="lead text-muted">MAKE A CUSTOMER NOT A SALE</p>
          </div>
		</div> 
      
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card-header">
              <table class="table table-bordered table-hover table-striped">
                <tr>
                  <th>#</th>
                  <th>Service Name</th>
                  <th>Service Price</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>03 Facial</td>
                  <td>6000</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Fruit Facial</td>
                  <td>1200</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Charcol Facial</td>
                  <td>1200</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Deluxe Menicure</td>
                  <td>1500</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Deluxe Pedicure</td>
                  <td>1500</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Normal Menicure</td>
                  <td>800</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Normal Pedicure</td>
                  <td>800</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>U-shape Hair Cut</td>
                  <td>600</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Layer Hair Cut</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Rebonding</td>
                  <td>3000</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Loreal Hair Color(Full)</td>
                  <td>2500</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Body Spa</td>
                  <td>2000</td>
                </tr>
              </table>
            </div>
          </div>
      </div>
    </div>



          
		  
        
          <!-- End Feature Blocks -->
        </div>
      </section> 
<section class="wt-section bg-primary">
        <div class="container">
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
            <h2 class="mb-md-2">Best Offers</h2>
            <p>The Makeover Beauty Salon will also sell hair care products, which is forecasted to account for about 15% of sales. These professional-quality supplies will include shampoos, conditioners, brushes, combs, and other styling aids.</p>
          </div>
		</div>
          <!-- Feature Blocks -->
          <div class="row">  
			<div class="col-md-4">
               <div class="card" style="width: 18rem;">
				  <img src="{{asset('admin/users')}}/img/portfolio/img4.jpg" class="card-img-top" alt="img">
				  <div class="card-body">
				   <h5>Bridal Hair Style</h5>
					<p class="card-text">cuts, relaxers, perms, colors, shampoo, conditioning, curling, reconstructing, weaving, and waving.</p>
				  </div>
				</div>
            </div>
					<div class="col-md-4">
               <div class="card" style="width: 18rem;">
				  <img src="{{asset('admin/users')}}/img/portfolio/img5.jpg" class="card-img-top" alt="img">
				  <div class="card-body">
				  <h5>Fully Beauty Touch</h5>
					<p class="card-text">European facials, body waxing, massage, bridal makeup, casual makeup, formal makeup, amongst others</p>
				  </div>
				</div>
            </div>
			
			<div class="col-md-4">
          <div class="card" style="width: 18rem;">
				  <img src="{{asset('admin/users')}}/img/portfolio/img6.jpg" class="card-img-top" alt="img">
				  <div class="card-body">
				   <h5>Nails Touchup</h5>
					<p class="card-text">manicures, pedicures, polish, sculptured nails.</p>
				  </div>
				</div>
            </div>
          </div>
          <!-- End Feature Blocks -->  
        </div>
      </section>
  <section class="wt-section bg-light" id="about">
    <div class="container">
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0">
            <h2 class="mb-md-2">About Us</h2>
            <p class="lead text-muted">Our main focus is on quality and hygiene. our parlour is well equipped with advanced technology equipements and provides best quality services. our staff is well trained and experienced. offering advanced services in skin. Hair and body shapping that will provide you with a luxurious experienced tht leave you feeling relaxed and stress free.</p>
          </div>
		</div>
        <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
		  <div class="col-md-5">
                <img src="{{asset('admin/users')}}/img/about/3.jpg" width="60%" class="rounded-md" alt="">
            </div>
            <div class="col-md-7"> 
                <h3 class="mb-4 ">Who am I ?</h3>
                <p class="text-muted"> I am the owner of The Makeover Beauty Parlour and I perceive an unsatisfied customer need for a low-cost salon that provides maximum flexibility and great customer attention. Using this strategy, The Makeover Beauty Salon will gain much reputation and create long-term relationships with its customers.</p>
            </div>
          
        </div>
    </div>
</section> 

  <section class="wt-section">
    <div class="container">
        <div class="row justify-content-between align-items-center" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="400">
            <div class="col-md-7"> 
                <h3 class="mb-4">Our Mission and Goals</h3
                <p class="text-muted">The Makeover Beauty Salon’s vision is to create a harmonious, productive, and profitable salon environment, supplying the community with Avon cosmetology. The mission statement is very clear: The Makeover Beauty Salon has been established to set a new path in the beauty line by providing an exceptional service which aims at satisfying people of all age. Through its services, the salon aims at exceeding customer’s expectations.</p>
            </div>
          
		  <div class="col-md-5">
               <img src="{{asset('admin/users')}}/img/about/2.jpg" width="90%" class="rounded-md" alt="">
            </div>
        </div>
    </div>
</section> 

 <section class="bg-dark position-relative pt-5">
        <div class="container">
          <div class="row text-center text-uppercase text-white">
            <div class="col-lg-3 col-sm-6 pb-5">
              <h5 class="js-counter display-4 mb-1">12</h5>
              <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm">Trainer</small>
            </div>

            <div class="col-lg-3 col-sm-6 pb-5">
              <h5 class="js-counter display-4 mb-1">20</h5>
              <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm">Equipments</small>
            </div>

            <div class="col-lg-3 col-sm-6 pb-5">
              <h5 class="js-counter display-4 mb-1">30</h5>
              <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm">Customers</small>
            </div>

            <div class="col-lg-3 col-sm-6 pb-5">
              <h5 class="js-counter display-4 mb-1">1</h5>
              <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm">Center</small>
            </div>
          </div>
        </div>
      </section>
<section class="wt-section">
        <div class="container">
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
            <h2 class="mb-md-2">Testimonials</h2>
            <p>The Makeover Beauty Parlour will be entirely owner by me. I have done a degree in Beauty Salon management and a degree in General Cosmetology in the United States. I also worked in a salon for more than 5 years there. I have a very friendly approach in the salon and when I am tutoring.</p>
          </div>
		</div>
		 
          <div class="row">
            <div class="col-lg-6 mb-7 mb-lg-0 px-lg-5" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
              <!-- Testimonial -->
              <blockquote class="wt-blockquote-v2 rounded mb-5">Completely Satisfied with the service!</blockquote>
              <div class="media wt-font-size-90">
                <img class="d-flex align-self-center rounded-circle wt-blockquote-v2__image wt-box-shadow-lg mx-3 mt-2" src="{{asset('admin/users')}}/img/ava/img2.jpg" alt="Image description">
                <div class="media-body align-self-center">
                  <strong class="d-block">Kristen Morres</strong>
                  <span class="wt-font-size-75 text-dark">Manager</span>
                </div>
              </div>
              <!-- End Testimonial -->
            </div>

            <div class="col-lg-6 px-lg-5" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="400">
              <!-- Testimonial -->
              <blockquote class="wt-blockquote-v2 rounded mb-5">Amazing service, I am sure that I will use them in the future again.</blockquote>
              <div class="media wt-font-size-90">
                <img class="d-flex align-self-center rounded-circle wt-blockquote-v2__image wt-box-shadow-lg mx-3 mt-2" src="{{asset('admin/users')}}/img/ava/img3.jpg" alt="Image description">
                <div class="media-body align-self-center">
                  <strong class="d-block">James Vintel</strong>
                  <span class="wt-font-size-75 text-dark">Sales Manager</span>
                </div>
              </div>
              <!-- End Testimonial -->
            </div>
          </div>
        </div>
      </section>	  
<section class="wt-section bg-light" id="contact">
    <div class="container">
	<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
            <h2 class="mb-md-2">Let us know</h2>
            <p>The Makeover Beauty Parlour is located in UTTARA and will offer affordable priced, convenient hair styling. The Makeover Beauty Salon will accept walk-ins as well as appointments for the entire family.</p>
          </div>
    </div>
    
    
    
      <!-- FROM  -->

        <div class="container">
          <div class="row appoinment">
            <div class="col-md-6">
                <div class="card-header text-center" style="background: #9a69df">
                  <h4>Make an Appointment</h4>
                  </div>
                  <div class="card-body" style="background: #fd73a4;">
                    <form action="{{route('storeappointment')}}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="enter your name" required="">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="enter your email" required="">
                        </div>
                        <div class="form-group">
                          <label>Select Services</label>
                          <select name="select" class="form-control" required="">
                            <option value="03 Facial" style="margin-left: 30px;">03 Facial</option>
                            <option value="Fruit Facial">Fruit Facial</option>
                            <option value="Charcol Facial">Charcol Facial</option>
                            <option value="Deluxe Menicure">Deluxe Menicure</option>
                            <option value="Deluxe Pedicure">Deluxe Pedicure</option>
                            <option value="Normal menicure">Normal menicure</option>
                            <option value="Normal Pedicure">Normal Pedicure</option>
                            <option value="U-Shape Haircut">U-Shape Haircut</option>
                            <option value="Layer Haircut">Loreal Haircut</option>
                            <option value="Rebonding">Rebonding</option>
                            <option value="Loreal Hair color">Loreal Hair color</option>
                            <option value="Body Spa">Body Spa</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="date">Date</label>
                          <input type="date" name="date" class="form-control" id="date" placeholder="present date" required="">
                        </div>
                        <div class="form-group">
                          <label for="time">Time</label>
                          <input type="text" name="time" class="form-control" id="time" placeholder="present time" required="">
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="tel" name="phone" class="form-control" id="phone" placeholder="enter your phone number" required="">
                        </div><br>
                        <div class="form-group text-center">
                          <input type="submit" name="submit" value="Make an Appointment" class="btn btn-danger">
                        </div>
                    </form>
                  </div>
            </div>
            <!-- Contact Info -->

            <div class="col-md-6">
              <div class="list">
                <div class="bg-white p-4 d-flex mb-md-4 border rounded-md" data-aos-easing="linear" data-aos-delay="200">
                  <i class="fa fa-address-book mt-md-1 text-primary pr-4"></i>
       <div class="text-left">
         <h6 class="mb-2">Address</h6>
         <p class="text-muted">1230 Bangladesh., Dhaka, Uttara</p> 
       </div>
           </div>
   
   <div class="bg-white p-4 d-flex mb-md-4 border rounded-md" data-aos-easing="linear" data-aos-delay="300">
                  <i class="fas fa-envelope-open mt-md-1 text-primary pr-4"></i>
       <div class="text-left">
           <h3 class="h5">Email</h3>
       <p class="mb-0">alocse41@gmail.com</p>
       </div>
           </div>
   
   <div class="bg-white p-4 d-flex mb-md-4 border rounded-md" data-aos-easing="linear" data-aos-delay="400">
                  <i class="fa fa-phone mt-md-1 text-primary pr-4"></i>   
       <div class="text-left">
          <h3 class="h5">Phone Number</h3>
       <p class="mb-0">+8801556688946</p>
       </div>
           </div>
              </div>
            </div>
          </div>
        </div>
     </div>
     <!-- Map -->

        <div class="container-fluid mt-5">
          <div class="row">
            <div class="col-md-12">
              <div class="map">
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                 </div>
              </div>
            </div>
          </div>
        </div>
		</div>
</section> 
      <!-- End Clients Section -->
    </main>

    <!-- Footer -->
    <footer class="bg-dark py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
            <small class="text-white"><a class="text-white" href="https://www.kodeeo.com/">Beauty Parlour Management System</a> by Kodeeo. <br/>&copy; All Rights Reserved</small>
          </div>

          <div class="col-md-4 align-self-center">
            <ul class="list-inline text-center text-md-right mb-0">
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                <a class="text-white" target="_blank" href="https://www.facebook.com/yourpersona/">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="linkedin">
                <a class="text-white" target="_blank" href="https://www.linkedin.com/">
                  <i class="fab fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="instagram">
                <a class="text-white" target="_blank" href="https://www.instagram.com/iampersonafied/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  
    <!-- JS Script Files --> 
    <script src="{{asset('admin/users')}}/vendors/jquery.min.js"></script>
    <script src="{{asset('admin/users')}}/vendors/jquery.migrate.min.js"></script>
    <script src="{{asset('admin/users')}}/vendors/popper.min.js"></script>
    <script src="{{asset('admin/users')}}/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('admin/users')}}/vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Components Vendor  --> 
    <script src="{{asset('admin/users')}}/vendors/slick-carousel/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="{{asset('admin/users')}}/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('admin/users')}}/vendors/counters/waypoint.min.js"></script>
    <script src="{{asset('admin/users')}}/vendors/counters/counterup.min.js"></script>

	<script src="{{asset('admin/users')}}/contact/jqBootstrapValidation.js"></script>
	<script src="{{asset('admin/users')}}/contact/contact_me.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('admin/users')}}/js/scrolling-nav.js"></script>
    <!--Plugin Initialize-->
    <script src="{{asset('admin/users')}}/js/global.js"></script>

    <!-- Theme Components and Settings --> 
    <script src="{{asset('admin/users')}}/vendors/carousel.js"></script>
    <script src="{{asset('admin/users')}}/vendors/counters.js"></script>
	
    <!-- END JAVASCRIPTS -->
	
  </body>
  <!-- End Body -->
</html>