<!DOCTYPE html>
<html lang="en">
<head>
<title>Products</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css">
<link rel="stylesheet" href="css/responsive.css">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
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

</head>

<body id="page4">
	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main zerogrid">
<!-- header -->
			<header>
				@include('include/header')
			</header>
<!-- header end-->
		</div>
	</div>
	</div>
	</div>
	<div class="body3">
		<div class="main zerogrid">
<!-- content -->
			<article id="content">
				<div class="wrapper">
					<section class="col-1-3">
					<div class="wrap-col">
						<div class="wrapper pad_bot2">
							<h3><span class="dropcap">1</span>Product name</h3>
							<figure><img src="images/page4_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<div class="wrapper">
							<h3><span class="dropcap">4</span>Product name</h3>
							<figure><img src="images/page4_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese- runt mollit anim id est laborum.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					</section>
					<section class="col-1-3">
					<div class="wrap-col">
						<div class="wrapper pad_bot2">
							<h3><span class="dropcap">2</span>Product name</h3>
							<figure><img src="images/page4_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<div class="wrapper">
							<h3><span class="dropcap">5</span>Product name</h3>
							<figure><img src="images/page4_img4.jpg" alt=""></figure>
							<p class="pad_bot1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					</section>
					<section class="col-1-3">
					<div class="wrap-col">
						<div class="wrapper pad_bot2">
							<h3><span class="dropcap">3</span>Product name</h3>
							<figure><img src="images/page4_img5.jpg" alt=""></figure>
							<p class="pad_bot1">Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<div class="wrapper">
							<h3><span class="dropcap">6</span>Product name</h3>
							<figure><img src="images/page4_img6.jpg" alt=""></figure>
							<p class="pad_bot1">Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					</section>
				</div>

			</article>
		</div>
	</div>
	@include('include/footer')
<script type="text/javascript"> Cufon.now(); </script>
<script>
	$(document).ready(function() {
		tabs.init();
	})
</script>
</body>
</html>