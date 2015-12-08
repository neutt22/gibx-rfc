<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
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
<body id="page5">
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
				<div class="wrapper row">
					<section class="col-3-4">
					<div class="wrap-col">
						<h2 class="under">Contact form</h2>
						<form id="ContactForm" method="post">
						<div>
							<div  class="wrapper">
								<span>Your Name:</span>
								<input type="text" class="input" >
							</div>
							<div  class="wrapper">
								<span>Your City:</span>
								<input type="text" class="input" >
							</div>
							<div  class="wrapper">
								<span>Your E-mail:</span>
								<input type="text" class="input" >
							</div>
							<div  class="textarea_box">
								<span>Your Message:</span>
								<textarea name="textarea" cols="1" rows="1"></textarea>
							</div>
							<a href="#" onClick="document.getElementById('ContactForm').submit()">Send</a>
							<a href="#" onClick="document.getElementById('ContactForm').reset()">Clear</a>
						</div>
						</form>
					</div>
					</section>
					<section class="col-1-4">
					<div class="wrap-col">
						<h2 class="under">Contacts</h2>
						<div id="address"><span>Country:<br>
								City:<br>
								Telephone:<br>
								Email:</span>
								USA<br>
								San Diego<br>
								+354 5635600<br>
								<a href="mailto:" class="color2">elenwhite@mail.com</a></div>
						<h2 class="under">Miscellaneous</h2>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium volupta- tum deleniti atque corrupti quos dolores et quas molestias excep- turi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
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