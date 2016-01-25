@extends('master')

@section('header')
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {
	  var mapProp = {
	    center:new google.maps.LatLng(14.5797657,121.0459423),
	    zoom:18,
	    mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  var map=new google.maps.Map(document.getElementById("map"),mapProp);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	// google.maps.event.addDomListener(window, "resize", function() {
	// var center = map.getCenter();
	// google.maps.event.trigger(map, "resize");
	// map.setCenter(center);
</script>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12" id="map" style="height: 400px;"></div>
	</div>

	<div class="row" style="background-color: #dcdfe3; color: whixte;">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12" style="font-weight: bold;">
					<h2>Contact Us</h2>
					<p>You may contact us by filling in this form any time you need professional support or have any questions.</p>
					<p>You can also fill in the form to leave your comments or feedback.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2>Contact Information</h2>
					<address>
						<strong>GIBX Division</strong><br>
						11/F Rm. 1108-1109 DMG Center Bldg., Domingo M. Guevara St.,<br>
						Mandaluyong City, Philippines<br>
						<abbr title="Telephone">Tel:</abbr> (02) 470 9283
					</address>
				</div>
			</div>
		</div>
		<div class="col-md-6" style="padding-top: 20px; padding-bottom: 20px;">
			<form>
				<div class="form-group">
					<label for="name">Name</label>
					<input class="form-control" id="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<input class="form-control" id="subject" placeholder="Subject">
				</div>
				<div class="form-group">
					<textarea class="form-control" name="message" rows="5"></textarea>
				</div>
				<button type="submit" class="btn btn-primary center-block btn-block">Submit</button>
			</form>
		</div>
	</div>
@endsection