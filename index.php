<!DOCTYPE html>
<html lang="en">
<head>
<title>Digital ClassRoom</title>
<!-- for-mobile-apps -->
<meta http-equiv="expires" content="0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Brilliance Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- pop-up-box -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up-box -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<div class="header-w3ls-agileinfo">
		
			<div class="wthree_agile_top_header">
				<div class="logo-agileits">
					<h1><a href="index.html"><span>Digital</span>ClassRoom <i class="fa fa-graduation-cap" aria-hidden="true"></i></a></h1>
				</div>
				<div class="agileits_w3layouts_sign_in">
					<ul>
						<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2" >Sign In</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal4" >Sign Up</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="container">
			<div class="w3layouts_agileits_nav_section">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="w3ls__agileinfo_search">
								<form action="http://google.com/search" method="get">
									<input type="search" name="q" placeholder="Search here..." required="">
									<input type="submit" value=" ">
								</form>
							</div>
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="/">Home</a></li>
								
								<li><a href="#abt" class="hvr-rectangle-out scroll">About This project</a></li>
								<li><a href="#team" class="hvr-rectangle-out scroll">Team Member</a></li>
                                <li><a href="#abt" class="hvr-rectangle-out scroll">Contact</a></li>
							</ul>
							
						</nav>
					</div>
				</nav>	
			</div>
		</div>
	</div>
<!-- //header -->

													<!-- Modal1 -->
													<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign In</h3>	
																			<div class="login-form">
																				<form action="user_login.php" method="post">
																					<input type="text" name="email" placeholder="E-mail" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																				
																					     <select name="type" class="form-control">
																					   
																							<option value="teacher">Teacher</option>
																							<option value="student">Student</option> 
																							
																					
																						</select>
																					<div class="tp">
																						<input type="submit" name="submit" value="Sign In">
																					</div>
																					
																					
																				</form>
																			</div>
																			
	
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal1 -->	
													<!-- Modal2 -->
													<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign Up</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																				   <input type="text" name="name" placeholder="Username" required="">
																					<input type="email" name="email" placeholder="Email" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<input type="password" name="password" placeholder="Confirm Password" required="">
																					<input type="submit" value="Sign Up">
																				</form>
																			</div>
																			<p><a href="#"> By clicking register, I agree to your terms</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->	
													<!-- Modal4 -->
													<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Join as Teacher</h3>	
																			<div class="login-form">
																				<form action="t_signup.php" method="post">
																				     <input type="text" name="fname" placeholder="First Name" required="">
																					
																					 <input type="text" name="lname" placeholder="Last Name" required="">
																					 <input type="text" name="email" placeholder="email" required="">
																					 <input type="text" name="phone" placeholder="Phone No" required="">
																					 <input type="text" name="versity" placeholder="Your Institution" required="">
																					 <input type="password" name="password" placeholder="Enter a  Password" required="">
																					 
																					<div class="address">
																				      
																					  <select name="sex" class="form-control">
																					   
																							<option value="male">Male</option>
																							<option value="female">Female</option> 
																							
																					
																						</select>
																		
																						
																						<div class="clearfix"></div>
																					</div>
																					
																					<div class="address">
																					  <input type="submit" value="Signup Now">
																					  <input type="reset" value="Clear">
																					  <div class="clearfix"></div>
																					</div>
																				</form>
																			</div>
																			<p><a href="#"> By clicking Signup, I agree to your terms</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal4 -->	
													
													
													
													
													<!-- Modal9 -->
													<div class="modal fade" id="myModal9" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Student Sign Up Form</h3>	
																			<div class="login-form">
																				<form action="s_signup.php" method="post">
																				     <input type="text" name="fname" placeholder="First Name" required="">
																					
																					 <input type="text" name="lname" placeholder="Last Name" required="">
																					 <input type="text" name="email" placeholder="email" required="">
																					 <input type="text" name="phone" placeholder="Phone No" required="">
																					 
																					 <input type="text" name="versity" placeholder="Your University Name" required="">
																					 <input type="text" name="id" placeholder="Your Student Id" required="">
																					 <input type="password" name="password" placeholder="Enter a  Password" required="">
																			
																					     <center>
																						
																						 <select class="form-control" name="sex">
																							<option value="male">Male</option>
																							<option value="female">Female</option>
																			
																						</select>
																						
																						 </center>
																						
																						<div class="clearfix"></div>
																				
																					
																					<div class="address">
																					  <input type="submit" value="Signup Now">
																					  <input type="reset" value="Clear">
																					  <div class="clearfix"></div>
																					</div>
																				</form>
																			</div>
																			<p><a href="#"> By clicking Signup, I agree to your terms</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal9 -->	
													
													
													
													
													


<!-- banner -->	
	<div class="w3ls_banner_section">
		<div class="container">
			<h2>Digital <span>Classroom</span></h2>
			<p>Signup Today</p>
			
			<br><br><br>
			
			<div class="agileits_more">
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal9" class="w3ls_banner_more hvr-icon-hang scroll ">Join as a Student</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal4" class="w3ls_banner_more hvr-icon-hang scroll ">Join as a Teacher</a></li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner -->

											



<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Our Team</h3>
			</div>
			<div class="w3layouts-grids">
					<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/19420441_1376552162441113_2520241767684546687_n.jpg?oh=84fd3a82f2f6a39661b36d9fa7ccae3b&oe=59EE03B0" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="wthree_team_grid1_pos">
							<h4>Shoaeb Salehin</h4>
						</div>
					</div>
					<div class="wthree_team_grid2">
						<ul class="social-icons">
							 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/18402742_1878927975715963_3443380884057633925_n.jpg?oh=36b123c75f59e1c92100e50dfd5df8c4&oe=59F3A2F1" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="wthree_team_grid1_pos">
							<h4>Nayeem Miah</h4>
						</div>
					</div>
					<div class="wthree_team_grid2">
						<ul class="social-icons">
							 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/14937213_1096838897089649_6368568574230010301_n.jpg?oh=e799a1530f026191bdb23a51efa8e05c&oe=59F8FCBF" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="wthree_team_grid1_pos">
							<h4>K.Shuvo</h4>
						</div>
					</div>
					<div class="wthree_team_grid2">
						<ul class="social-icons">
						 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="wthree_team_grid1_pos">
							<h4>Project Supervisor</h4>
						</div>
					</div>
					<div class="wthree_team_grid2">
						<ul class="social-icons">
							 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
		
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->




<!-- Footer -->
<div class="footer w3ls">
	<div class="container">

		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 ftr-grid fg1">
					<h3 id="abt"><a href="/"><span>Digital</span>Class Room</a></h3>
					<p>Digital Class Room is a virtual Platform for Teachers and Students</p>
				</div>
				<div class="col-md-4 ftr-grid fg2 mid-gd">
					<h3>Our Address</h3>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>Shukrabad,Dhanmondi 32</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>+8801680237961</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p><a href="mailto:info@example.com">me@shoaeb.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 ftr-grid fg2">
					<h3>Keep In Touch With Us</h3>
					<div class="right-w3l">
						<ul class="top-links">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="right-w3-2">
						<ul class="text-w3">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Google</a></li>
						</ul>
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<div class="copyrights">
				<p>&copy; 2017 DC All Rights Reserved | Design by  <a href="#" target="_blank">DC Team</a> </p>
			</div>
		</div>
	</div>
	
</div>
 
	

<!-- Footer -->	

	<!-- start-smoth-scrolling -->
	
<!-- js -->
		<!--//pop-up-box -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--pop-up-box -->
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});

					});
					</script>
<!-- //pop-up-box -->

<!-- //js -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

			<script src="js/jzBox.js"></script>

			<!-- Countdown-Timer-JavaScript -->
			<script src="js/simplyCountdown.js"></script>
			<script>
				var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

				// default example
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate()
				});

				// inline example
				simplyCountdown('.simply-countdown-inline', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					inline: true
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					enableUtc: false
				});
			</script>
		<!-- //Countdown-Timer-JavaScript -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>