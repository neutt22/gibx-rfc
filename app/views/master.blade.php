<!DOCTYPE html>
<html lang="en">
<head>
	<title>GIBX</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/holder.min.js"></script>
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
<body>
<!-- <img data-src="holder.js/300x200?theme=social&random=yes&text=title here"> -->

<div class="container">

	@include('include.header')

	@yield('content')

	@include('include.footer')

</div>
</body>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</html>