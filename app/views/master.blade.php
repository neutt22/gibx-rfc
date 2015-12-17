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

	<div class="row btn-danger">
		<div class="col-md-6 text-center btn-info row-no-padding">
			<img class="img-responsive" data-src="holder.js/580x300?random=yes">
		</div>
		<form method="GET" action="/compare">
			<div class="col-md-6 btn-primary" style="padding-top: 10px; padding-bottom: 10px;">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="list-group">
							<span class="list-group-item text-primary active">
								<h4 class="list-group-item-heading">Choose Brand</h4>
								<p class="list-group-item-text">Write something here about choosing car..</p>
								<select class="form-control" name="car" id="cars">
									<option>Choose brand...</option>
								</select>
							</span>
							<span class="list-group-item text-primary">
								<h4 class="list-group-item-heading">Choose Year</h4>
								<p class="list-group-item-text">Write something here about choosing year..</p>
								<select class="form-control" name="year" id="years">
									<option>Choose year...</option>
								</select>
							</span>
							<span class="list-group-item text-primary">
								<h4 class="list-group-item-heading">Choose Model</h4>
								<p class="list-group-item-text">Write something here about choosing model lol..</p>
								<select class="form-control" name="model" id="models">
									<option>Choose model...</option>
								</select>
							</span>
							<span class="list-group-item text-primary">
								<a href="#">Can't find your car?</a>
							</span>
						</div>
					</div>
				</div>
				<div class="row" style="font-size: 15px;">
					<div class="col-md-10 col-md-offset-1">
						<div class="list-group">
							<span class="list-group-item text-primary">
								<h4 class="list-group-item-heading">Options</h4>
								<p class="list-group-item-text">Write something about options here....!</p>
								<div class="row">
									<div class="col-md-6">
										<h5><span class="text-info">Location</span></h5>
										<div class="radio">
											<label>
											<input type="radio" name="location" id="location" value="luzon" checked>
												Luzon
											</label>
										</div>
										<div class="radio">
											<label>
											<input type="radio" name="location" id="optionsRadios1" value="Viz/Min">
												Visayas/Mindanao
											</label>
										</div>
									</div>
									<div class="col-md-6">
										<h5><span class="text-info">Usage</span></h5>
										<div class="radio">
											<label>
											<input type="radio" name="usage" id="usage" value="private" checked>
												Private
											</label>
										</div>
										<div class="radio">
											<label>
											<input type="radio" name="usage" id="usage" value="commercial">
												Commercial
											</label>
										</div>
									</div>
								</div>							
								<div class="row">
									<div class="col-md-6">
										<h5><span class="text-info">Mortgaged</span></h5>
										<div class="radio">
											<label>
											<input type="radio" name="coverage" id="coverage" value="private" checked>
												Private
											</label>
										</div>
										<div class="radio">
											<label>
											<input type="radio" name="coverage" id="coverage" value="commercial">
												Commercial
											</label>
										</div>
									</div>
									<div class="col-md-6">
										<h5><span class="text-info">Hmm?</span></h5>
										<div class="radio">
											<label>
											<input type="radio" name="usage" id="usage" value="private" checked>
												Hmm..1
											</label>
										</div>
										<div class="radio">
											<label>
											<input type="radio" name="usage" id="usage" value="commercial">
												Hmm..2
											</label>
										</div>
									</div>
								</div>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<button type="submit" class="btn btn-lg btn-block btn-primary center-block">COMPARE NOW</button>
					</div>
				</div>
			</div>
		</form>
	</div>

	@include('include.footer')

</div>
</body>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</html>