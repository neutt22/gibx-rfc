<!DOCTYPE html>
<html lang="en">
<head>
<title>GIBX</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/responsiveslides.css" />
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="js/css3-mediaqueries.js"></script>
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
	
	<script src="js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 960,
			namespace: "centered-btns"
		  });
		});
	</script>
	
</head>
<body id="page1">
<div class="body1">
	<div class="body2">
		<div class="main zerogrid">
<!-- header -->
			<header>
				@include('include/header')

				<div class="wrapper row">
					<div class="slider">
					  	<div class="rslides_container">
							<ul class="rslides" id="slider">
								<li><img src="images/img1.jpg" alt=""></li>
								<li><img src="images/img2.jpg" alt=""></li>
								<li><img src="images/img3.jpg" alt=""></li>
								<li><img src="images/img4.jpg" alt=""></li>
							</ul>
						</div>
					</div>
				</div>
			</header>
<!-- header end-->
		</div>
	</div>
</div>
	<div class="body3">
		<div class="main zerogrid">
<!-- content -->
			<article id="content">
				<div class="wrapper row">
					<section class="col-1-4">
						<div class="wrap-col">
							<h3><span class="dropcap">A</span>Save Time/<span>Money</span></h3>
							<p class="pad_bot1">You no longer have to search on your own for the best car insurance and financial products in the Philippines. We make sure you don’t miss out on the best deals!</p>
						</div>
					</section>
					<section class="col-1-4">
						<div class="wrap-col">
							<h3><span class="dropcap">B</span>Instant<span>Access</span></h3>
							<p class="pad_bot1">Find all the product and pricing information you need in one website. See all offers and make the right choice with just a few clicks.</p>
						</div>
					</section>
					<section class="col-1-4">
						<div class="wrap-col">
							<h3><span class="dropcap">C</span>Free<span>Qoutes</span></h3>
							<p class="pad_bot1">Get free quotes and select the best car insurance in the Philippines. Know your auto insurance options and choose a plan with adequate coverage for your needs and budget.</p>
						</div>
					</section>
					<section class="col-1-4">
						<div class="wrap-col">
							<h3><span class="dropcap">D</span>Pay<span>Annually</span></h3>
							<p class="pad_bot1">Paying your premium in an annual lump sum may reduce the cost of your insurance. Some insurers often charge you with additional fees if you choose to pay your premium on a monthly basis.</p>
						</div>
					</section>
				</div>
				<div class="wrapper row">
					<!-- <section class="col-3-4">
						<div class="wrap-col">
							<h2 class="under">Welcome, visitor!</h2>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="images/1.jpg" alt=""></figure>
								<p class="pad_bot1">It may be tempting to save money by sticking to CTPL insurance. But getting comprehensive coverage will keep you from spending thousands of pesos on repairs if your car gets damaged. Here some basic tips to help save you money when getting a policy.</p>
							</div>
						</div>
					</section> -->
					<section class="col-2-4">
					<!-- <figure class="left marg_right1"><img src="images/1.jpg" alt=""></figure> -->
						<div class="wrap-col">
							<h2 class="under">Compare Auto Insurance</h2>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="images/1.jpg" alt=""></figure>
								<p class="pad_bot1">
								</p>
							</div>
						</div>
					</section>
					<section class="col-1-4">
						<div class="wrap-col">
							<h2>...</h2>
							<p class="pad_bot1">
									<!-- It may be tempting to save money by sticking to CTPL insurance. But getting comprehensive coverage will keep you from spending thousands of pesos on repairs if your car gets damaged. Here some basic tips to help save you money when getting a policy. -->
									<form method="GET" action="/compare">
										<p>
											Brand:
											<select name="car" id="cars">
												<option>Choose brand</option>
											</select>
										</p>
										<p>
											Year:
											<select name="year" id="years">
												<option>Choose year</option>
											</select>
										</p>
										<p>
											Model:
											<select name="model" id="models">
												<option>Choose model</option>
											</select>
										</p>
										<p>
											Location: <br/>
											<input type="radio" name="location" value="luzon" checked="checked">Luzon
											<input type="radio" name="location" value="Viz/Min">Vizayas/Mindanao									</p>
										<p>
											Usage: <br/>
											<input type="radio" name="usage" value="private" checked="checked">Personal
											<input type="radio" name="usage" value="commercial">Commercial
										</p>
										<p>
											Mortgaged??:<br/>
											<input type="radio" name="coverage" value="yes" checked="checked">Yes
											<input type="radio" name="coverage" value="no">No
											<br/>
											<input type="submit" value="Compare" />
										</p>
									</form>
								</p>
						</div>
					</section>
					<section class="col-1-4">
						<div class="wrap-col">
							<h2>Testimonials</h2>
							<div class="testimonials">
							<div id="testimonials">
							  <ul>
								<li>
									<div>
										“Major major thanks to GIBX! I got to get Car Insurance that I can afford, and all the features I need!”
									</div>
									<span><strong class="color1">James Coloway,</strong> <br>
									Director</span>
								</li>
								<li>
									<div>
										“Can't believe how easy to use MoneyMax.ph's comparison tool is. Winner”
									</div>
									<span><strong class="color1">Jimmy Santos,</strong> <br>
									Artist</span>
								</li>
								<li>
									<div>
										“When I ask around in insurance companies, puro dedma lang, but with MoneyMax.ph, I got the assistance I needed to get my car insurance!”
									</div>
									<span><strong class="color1">Joaquin Morato,</strong> <br>
									Developer</span>
								</li>
							  </ul>
							</div>
							<a href="#" class="up"></a>
							<a href="#" class="down"></a>
							</div>
						</div>
					</section>
				</div>
			</article>
		</div>
	</div>
	<!-- footer -->
	@include('include/footer')
	<!-- footer end -->
</body>
</html>