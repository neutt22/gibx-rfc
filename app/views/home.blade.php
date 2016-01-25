@extends('master')

@section('content')
	@include('include.sign_pane')
	<div class="row home-left-pane">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12 text-center" style="background-color: none; padding: 0; height: 400px;">
					<iframe  src="/gibx.1.15.16/index.html" height="400px;" width="100%" frameBorder="0" scrolling="no" style="background-color: none; height: 400px;"></iframe>
				</div>
			</div>
			<div class="row" style="padding-bottom: 10px;">
				<div class="col-md-12">
					<h3><b><i>LATEST BLOGS</i></b></h3>
					<div class="row" style="padding: 5px; background-color: none;">
						<div class="col-md-5" style="background-color: none;">
							<img src="/images/news/news_3.jpg" class="img-responsive center-block" style="width: 100%;">
						</div>
						<div class="col-md-7" style="background-color: none;">
							<h4><b><u>This Guy Don't Know How To Park</u></b></h4>
							<p class="text-muted">
								Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampde
								<small><u><a href="">read more...</a></u></small>
							</p>
							<p>
								<div class="row">
									<div class="col-md-6">
										<small>January 14, 2016</small>
									</div>
									<div class="col-md-6">
										<small><i>14 comments</i></small>
									</div>
								</div>
							</p>
						</div>
					</div>
					<div class="row" style="padding: 5px; background-color: none;">
						<div class="col-md-5" style="background-color: none;">
							<img src="/images/news/news_2.jpg" class="img-responsive center-block" style="width: 100%;">
						</div>
						<div class="col-md-7" style="background-color: none;">
							<h4><b><u>Do You Really Need An Insurance?</u></b></h4>
							<p class="text-muted">
								Contrary to popular belief, Lorem Ipsum is not simply random text. It has roo45 BC, making it ots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
								<small><u><a href="">read more...</a></u></small>
							</p>
							<p>
								<div class="row">
									<div class="col-md-6">
										<small>January 11, 2016</small>
									</div>
									<div class="col-md-6">
										<small><i>21 comments</i></small>
									</div>
								</div>
							</p>
						</div>
					</div>
					<div class="row" style="padding: 5px; background-color: none;">
						<div class="col-md-5" style="background-color: none;">
							<img src="/images/news/news_1.jpg" class="img-responsive center-block" style="width: 100%;">
						</div>
						<div class="col-md-7" style="background-color: none;">
							<h4><b><u>Top 10 Reasons Why You Get Kidnapped</u></b></h4>
							<p class="text-muted">
								Contrary to popular belief, Lorem Ipsum isfrom 45 BC, making it over 2 McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a L
								<small><u><a href="">read more...</a></u></small>
							</p>
							<p>
								<div class="row">
									<div class="col-md-6">
										<small>January 10, 2016</small>
									</div>
									<div class="col-md-6">
										<small><i>4 comments</i></small>
									</div>
								</div>
							</p>
						</div>
					</div>
					<div class="row" style="padding: 5px; background-color: none;">
						<div class="col-md-5" style="background-color: none;">
							<img src="/images/news/news_4.jpg" class="img-responsive center-block" style="width: 100%;">
						</div>
						<div class="col-md-7" style="background-color: none;">
							<h4><b><u>How To Brake A Pancake Insurance</u></b></h4>
							<p class="text-muted">
								Contrary to popular belief, Lorem Ipsum isfrom 45 BC, making it over 2 McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a L
								<small><u><a href="">read more...</a></u></small>
							</p>
							<p>
								<div class="row">
									<div class="col-md-6">
										<small>January 05, 2016</small>
									</div>
									<div class="col-md-6">
										<small><i>2 comments</i></small>
									</div>
								</div>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<form method="GET" action="/compare">
			<div class="col-md-6 home-right-pane accent" style="padding-top: 10px; padding-bottom: 10px;">
				<div class="row text-center">
					<div class="col-md-12">
						<h2><p><i>Start Comparing Now!</i></p></h2>
					</div>
				</div>
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
						<button type="submit" class="btn btn-lg btn-block btn-success center-block" id="okc">COMPARE NOW</button>
					</div>
				</div>
				<div class="row text-center cool-words" style="margin-top: 40px;">
					<div style="background-color: white; border-radius: 10px; border-top-right-radius: 0; border-bottom-right-radius: 0; 10px; padding: 10px;">
						<h3>DOWNLOAD OUR APPS</h3>	
						<div class="row">
							<div class="col-md-6" style="font-size: 15px;">
								<p>
									Get updates through your mobiles apps! 
									Download our latest mobile app to get a chance to have special promos and vouchers.
									Read daily news and blogs right in your fingertips!
								</p>
							</div>
							<div class="col-md-6">
								<a href="https://play.google.com/store/apps/details?id=com.ovejera.jim.snailracer">
									<img src="/images/google_play.png">
								</a>
								<div style="height: 5px;"></div>
								<a href="https://play.google.com/store/apps/details?id=com.ovejera.jim.snailracer">
									<img src="/images/app_store.png">
								</a>
							</div>
						</div>
<<<<<<< HEAD
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
=======
					</div>
				</div>
				<div class="row text-center" style="padding-bottom: 10px; margin-top: 60px;">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12 row-no-padding">
								<p>
									NEWS LETTER<br/>
									<small class="text-muted">
										Ya know if ya subscribed on our news letter
										it's gonna be alright
									</small>
>>>>>>> backup_unskin
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<form class="form-inline" method="POST" action="/subscribe">
									<div class="form-group">
										<input class="form-control input-sm" name="subscribe" placeholder="Enter your email..." type="text"/><br/>
										<input type="submit" value="Subscribe" class="btn btn-danger btn-sm" />
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-left" style="">
								<p>
									<small class="text-muted">
										By subscribing to GIBX newsletters, you acknowledge that you read and understood the Privacy Policy of GIBX.
									</small>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

	<!-- TRUSTED PARTNERS -->
	<div class="row" style="background-color: white;">
		<div class="col-md-12 text-center">
			<h4>Our Trusted Partners</h4>
			<img src="/images/partners.jpg" class="img-responsive center-block">
		</div>
	</div>

	<!-- MODE OF PAYMENTS -->
	<div class="row" style="background-color: #242424; color: #f8f8f8;">
		<div class="col-md-12 text-center">
			<h4><b>MODE OF PAYMENTS</b></h4>
			<img src="/images/payment_types.jpg" class="img-responsive center-block">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<p class="text-left">
						GIBX portal is powered and secured by Paypal through its payment gateway system. You can now pay for your chosen product online securely and hassle free with iChoose.ph and Paypal.
					</p>	
				</div>
			</div>
			
		</div>
	</div>

	<!-- TESTIMONIALS -->
	<div class="row" style="background-color: white;">
		<div class="col-md-6" style="color: #242424; background-color: none; margin-top: 25px;">
			<h4><p><b><i>TESTIMONIALS</i></b></p></h4>
			<div class="row" style="padding: 10px; background-color: none;">
				<div class="col-md-12" style="background-color: none;">
					<div class="row">
						<div class="col-md-2" style="background-color: none;">
							<img src="/images/clients/client_1.png" class="img-circle img-responsive center-block" style="width: 100%;">
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h4>Amazing!</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" style="background-color: none;">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
								</div>
							</div>
						</div>
					</div>

					<p>	
						<blockquote>
							<p class="cool-words">
								<b>"I love this thing kase hahah ewan basta! :)"</b>
							</p>
							<footer>Some famous person in <cite title="Source Title">Facebook</cite></footer>
						</blockquote>
					</p>
				</div>
				<div class="col-md-12" style="background-color: none;">
					<div class="row">
						<div class="col-md-2" style="background-color: none;">
							<img src="/images/clients/client_2.png" class="img-circle img-responsive center-block" style="width: 100%;">
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h4>Smooth Transaction!</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" style="background-color: none;">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
								</div>
							</div>
						</div>
					</div>

					<p>	
						<blockquote>
							<p class="cool-words">
								<b>"Ang bilis kumilos ng backroom, nasagot lahat ng tanong ko. HAHA."</b>
							</p>
							<footer>Some famous person in <cite title="Source Title">Facebook</cite></footer>
						</blockquote>
					</p>
				</div>
				<div class="col-md-12" style="background-color: none;">
					<div class="row">
						<div class="col-md-2" style="background-color: none;">
							<img src="/images/clients/client_3.png" class="img-circle img-responsive center-block" style="width: 100%;">
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h4>5 Star Service</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" style="background-color: none;">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
									<img src="/images/star.png" class="">
								</div>
							</div>
						</div>
					</div>

					<p>	
						<blockquote>
							<p class="cool-words">
								<b>"Ang babait ng mga taga GIBX lalo na yung Jim ba yun"</b>
							</p>
							<footer>Some famous person in <cite title="Source Title">Facebook</cite></footer>
						</blockquote>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-6" style="margin-top: 25px;">
			<h4><p><b><i>FACEBOOK CLAIMS FEED</i></b></p></h4>
			@include('include.fb_page_plugin')
		</div>
	</div>

@endsection
