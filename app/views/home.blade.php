@extends('master')

@section('content')
	<div class="row home-left-pane">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12 home-left">
					<h1><b>SOME COOL HEADING</b></h1>
					<p>
						Stop paying more than you need for car insurance. MoneyMax.ph gives you the power to compare premiums from different insurance companies so you can choose the best one for you. Whether it’s for personal or commercial cars, finding the right car insurance doesn’t have to be complicated. Read on for more information on car insurance, how it works, and how you can benefit from it.
					</p>
				</div>
			</div>
			<div class="row" style="padding-bottom: 10px;">
				<div class="col-md-12">
					<h1><b>SOMETHING ABOUT GIBX?</b></h1>
					<p>
						<!-- <img data-src="holder.js/200x200?random=yes" class="pull-left img-circle" style="margin: 5px;"> -->
						<img src="images/dom.jpg" class="pull-left img-circle" style="margin: 5px;">
						Stop paying more than you need for car insurance. MoneyMax.ph gives you the power to compare premiums from different insurance companies so you can choose the best one for you. Whether it’s for personal or commercial cars, finding the right car insurance doesn’t have to be complicated. Read on for more information on car insurance, how it works, and how you can benefit from it.
					</p>
					<p class="text-muted"><small>- by someone from GIBX hihi</small></p>
				</div>
			</div>
			<div class="row text-center" style="padding-bottom: 10px;">
				<div class="col-md-12" style="border-top-style: solid; border-top-color: #39dbac">
					<div class="row">
						<div class="col-md-12 row-no-padding">
							<p>
								NEWS LETTER<br/>
								<small class="text-muted">
									Ya know if ya subscribed on our news letter
									it's gonna be alright
								</small>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form class="form-inline" method="POST" action="/subscribe">
								<div class="form-group">
									<input class="form-control input-sm" name="subscribe" placeholder="Enter your email..." type="text"/>
									<input type="submit" value="Subscribe" class="btn btn-danger btn-sm" />
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<form method="GET" action="/compare">
			<div class="col-md-6 home-right-pane" style="padding-top: 10px; padding-bottom: 10px;">
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
						<button type="submit" class="btn btn-lg btn-block btn-success center-block">COMPARE NOW</button>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection