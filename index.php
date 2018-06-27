
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes designed by 365bootstrap.com" />
    <meta name="author" content="www.365bootstrap.com" />
	<title>Sport Fashion</title>
	
	
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>	
	
	<!-- /////////////////////////////////////////Top -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="index.html"><h1> SPORTS_FASHION.com</h1></a>
				</div>

			</div>
		</div>
	</header>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--adminstrater.-->
				<?php 
				session_start();
				if($_SESSION['username']=='moh97') :?>
				<a class="navbar-brand" href="del/index.php">
					delete users
				</a>
				<?php endif ?>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
					<li>
                        <a class="page-scroll" href="single.html">About</a>
                    </li>
					<li>
                        <a class="page-scroll" href="men.html">MEN</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="women.html">WOMEN</a>
                    </li><li>
                        <a class="page-scroll" href="kids.html">KIDS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contacts</a>
                    </li><li>
                        <a class="page-scroll" href="login.php">login</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="slide">
		<div class="container">
			<div class="row">
				<!-- Carousel -->
				<div id="carousel-example-generic" class="carousel slide box-shadow" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/009.jpg" alt="First slide">
							<!-- Static Header -->
						</div>
						<div class="item">
							<img src="images/898.jpg" alt="Second slide">
							<!-- Static Header -->
						</div><div class="item">
							<img src="images/676.jpg" alt="third slide">
							<!-- Static Header -->
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div><!-- /carousel -->
			</div>
		</div>
	</div>
	
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
	
		<!-- ////////////Content Box 01 -->
		<div id="services"></div>
		<section class="box-content container box-1">
			<div class="row">
				<div class="col-sm-4 ">
					<div class="service">
						<a href="#"><img src="images/4.jpg" title="icon-name"></a><br>
						<h3>The Men Department</h3>
						<br>
						<p>Shoses, Dresses, Balls, Caps,Jackets,Pants ... </p>
						<br>	<br>
						<a class="btn btn-2 btn-sm" href="men.html">Read More</a>
					</div>
				</div>
				<div class="col-sm-4 ">
					<div class="service">
						<a href="#"><img src="images/33.png" title="icon-name"></a>
						<h3>The Women Department</h3>
						<p>Shoses, Dresses, Balls, Caps,Jackets,Pants ...</p>
						<a class="btn btn-2 btn-sm" href="women.html">Read More</a>
					</div>
				</div>
				<div class="col-sm-4 ">
					<div class="service">
						<a href="#"><img src="images/3.jpg" title="icon-name"></a><br>
						<h3>The Kids Department</h3> <br>
						<p>Shoses, Dresses, Balls, Caps,Jackets,Pants ...</p>
						<br><br>
						<a class="btn btn-2 btn-sm" href="men.html">Read More</a>
					</div>
				</div>		
			</div>
		</section>
	
	
		
		<!-- ////////////Content Box 03 -->
		<section class="box-content container box-3 box-shadow">
			<div class="row">
				<div class="col-md-4">	
					<img src="images/44.jpg" alt="">
	            </div>
				<div class="col-md-4">	
					<p>for more information about fashion sport like clothes and news about what new in fashion and what ever you want and need you can visit these websites.	</p>
	            </div>
				<div class="col-md-4">	
					<ul class="list-unstyled">
						<li><a href="https://us.puma.com/en/us/womens"><i class="fa fa-check"></i> PUMA</a></li>
						<li><a href="https://www.adidas.com/us"><i class="fa fa-check"></i> ADIDAS</a></li>
						<li><a href="https://kappa-usa.com/"><i class="fa fa-check"></i> KAPPA</a></li>
						<li><a href="https://www.asics.com/us/en-us/sports-shoes/c/sports-shoes"><i class="fa fa-check">ASICS</i></a></li>
						<li><a href="https://www.vans.com/mens.html"><i class="fa fa-check">VANS </i> </a></li>

					</ul>
	            </div>
			</div>
		</section>
	
		
	</div>

	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-footer footer-1">
						<div class="footer-heading"><h4>Partners</h4></div>
						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<a href="https://www.clarks.co.uk/Trainers/c/305"><img src="images/6.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/3.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/4.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/9.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/8.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/7.jpg" /></a>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-3 col-footer footer-2">
						<div class="footer-heading"><h4>About Us</h4></div>
						<div class="content">
								<p> we create this page to display and offering to you all models of sport fahions </p>
						</div>
					</div>
					<div class="col-md-3 col-footer footer-3">
						<div class="footer-heading"><h4>Follow us</h4></div>
						<div class="content">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
								<li><a href="#"><i class="fa fa-rss"></i> RSS</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-footer footer-4">
						<div class="footer-heading"><h4>Navigation</h4></div>
						<div class="content">
							<ul>
								<li><a href="index.html"><i ></i> Home</a></li>
								<li><a href="single.html"><i ></i> About</a></li>
								<li><a href="men.html"><i ></i> Men</a></li>
								<li><a href="women.html"><i ></i>  Women</a></li>
								<li><a href="contact.html"><i ></i> Contacts</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="coppy-right">
		<div class="wrap-footer">
			<div class="clearfix">
				<div class="col-md-6 col-md-offset-3">
					<p>Copyright @ SPORTFASHION.COM - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> Designed by mohammed and samar.</p>
				</div>
			</div>	
		</div>
	</div>
	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'red',
			});
		});
	</script>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items : 1,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,2],
		navigation: false,
      });
    });
    </script>
</body>
</html>
	
