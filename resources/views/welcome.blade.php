@extends('layouts.app')

@section('content')
	<!-- about -->
	<div class="about" id="about" style="background: #212121;"> 
		<div class="container"> 
			<div class="welcome">
				<div class="agileits-title"> 
					<h2>Welcome</h2>
					<p>Formed in early 2018, Serenity Gaming is a community that 5 friends came together to make. Serenity Gaming offers great benefits such as regular events, gaming competitions with prizes and a Saturday night pub quiz!</p>
				</div>
			</div>
			<div class="about-w3lsrow"> 
				<div class="col-md-7 col-sm-7 w3about-img"> 
					<div class="w3about-text"> 
						<h5 class="w3l-subtitle">- About Us</h5>
						<p>Serenity Gaming was created with one focus in mind, having fun. We are a mature(18+), relaxed gaming community based within the EU. Our aim is to provide a place for all players to have a comfortable gaming experience with a stress free enviroment.</p>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!-- markets -->
	<div class="markets" id="markets" style="background: #333;">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Our Links</h3>
			</div>
			<div class="markets-grids">
				<div class="col-md-4 w3ls-markets-grid">
					<a href="https://discord.gg/57RQYEN" target="_blank">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-gamepad" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Discord</h5>
							<p>Feel free to join our discord and apply for membership to play with us, we dont bite and it is free!</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					</a>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<a href="https://www.twitch.tv/serenitygameeu" target="_blank">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Twitch</h5>
							<p>Follow our Twitch channel for awesome content. We stream aswell as host members on a regular basis!</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					</a>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<a href="https://www.youtube.com/channel/UCbI1OxhQjnwk2KuPlZTVxiA" target="_blank">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>YouTube</h5>
							<p>Subscribe to our new YouTube channel, where we will be uploading member compilations!</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //markets -->
	<!-- portfolio -->
	<div class="portfolio" id="gallery" style="background: #212121;">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Our Games</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<li class="w3layouts agileits" data-filter="1">FPS</li>
				<li class="w3layouts agileits" data-filter="2">Online Multiplayer</li>
				<li class="w3layouts agileits" data-filter="3">MOBA</li>
				<li class="w3layouts agileits" data-filter="4">Strategy</li>
				<li class="w3layouts agileits" data-filter="5">Table Top/Other</li>
			</ul>

			<div class="filtr-container w3layouts agileits">

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 2" data-sort="Overwatch">
					<a href="images/overwatch.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/overwatch.jpg" class="img-responsive w3layouts agileits" alt="Overwatch">
							<figcaption>
								<h3>Overwatch</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="Heroes Of The Storm">
					<a href="images/hots.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/hots.jpg" class="img-responsive w3layouts agileits" alt="HOTS">
							<figcaption>
								<h3>Heroes Of The Storm</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2" data-sort="Fortnite">
					<a href="images/fortnite.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/fortnite.jpg" class="img-responsive w3layouts agileits" alt="Fortnite">
							<figcaption>
								<h3>Fortnite</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 2" data-sort="PUBG">
					<a href="images/pubg.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/pubg.jpg" class="img-responsive w3layouts agileits" alt="PUBG">
							<figcaption>
								<h3>PUBG</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 2" data-sort="CS:GO">
					<a href="images/csgo.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/csgo.jpg" class="img-responsive w3layouts agileits" alt="CS:GO">
							<figcaption>
								<h3>CS:GO</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="Diablo 3">
					<a href="images/diablo3.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/diablo3.jpg" class="img-responsive w3layouts agileits" alt="Diablo 3">
							<figcaption>
								<h3>Diablo 3</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="League Of Legends">
					<a href="images/lol.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/lol.jpg" class="img-responsive w3layouts agileits" alt="League Of Legends">
							<figcaption>
								<h3>League Of Legends</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="5" data-sort="Minecraft">
					<a href="images/minecraft.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/minecraft.jpg" class="img-responsive w3layouts agileits" alt="Minecraft">
							<figcaption>
								<h3>Minecraft</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="5" data-sort="Poker">
					<a href="images/poker.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/poker.jpg" class="img-responsive w3layouts agileits" alt="Poker">
							<figcaption>
								<h3>Poker</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="Rocket League">
					<a href="images/rl.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/rl.jpg" class="img-responsive w3layouts agileits" alt="Rocket League">
							<figcaption>
								<h3>Rocket League</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="Sea Of Thieves">
					<a href="images/sot.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sot.jpg" class="img-responsive w3layouts agileits" alt="Sea Of Thieves">
							<figcaption>
								<h3>Sea Of Thieves</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="5" data-sort="Table Top RPG's">
					<a href="images/rpg.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/rpg.jpg" class="img-responsive w3layouts agileits" alt="Table Top RPG's">
							<figcaption>
								<h3>Table Top RPG's</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="5" data-sort="Dungeons and Dragons">
					<a href="images/dnd.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/dnd.jpg" class="img-responsive w3layouts agileits" alt="Dungeons and Dragons">
							<figcaption>
								<h3>Dungeons and Dragons</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="4" data-sort="Total War (Warhammer)">
					<a href="images/tw.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/tw.jpg" class="img-responsive w3layouts agileits" alt="Total War (Warhammer)">
							<figcaption>
								<h3>Total War (Warhammer)</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="4" data-sort="Vermintide 2">
					<a href="images/v2.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/v2.jpg" class="img-responsive w3layouts agileits" alt="Vermintide 2">
							<figcaption>
								<h3>Vermintide 2</h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!-- modal -->
	<!-- <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Games <span>Hub</span></h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //modal -->
	<!-- testimonial -->
	<div class="jarallax testimonial" id="testimonial">
		<div class="testimonial-dot">
			<div class="container">
				<div class="agileits-title testimonial-heading"> 
					<h3>Our Admin Team</h3> 
				</div>
				<div class="w3-agile-testimonial">
					<div class="row">
						<div class="col=sm-12 col-md-2 col-md-offset-1 text-center">
							<img src="images/jack.jpg" class="img img-responsive adminImage" />
							<p style="color: white; margin-top: 10px;">
								SG | Jxckaroo
							</p>
						</div>
						<div class="col=sm-12 col-md-2 text-center">
							<img src="images/jonny.jpg" class="img img-responsive adminImage" />
							<p style="color: white; margin-top: 10px;">
								SG | Jonnyandwot
							</p>
						</div>
						<div class="col=sm-12 col-md-2 text-center">
							<img src="images/ryu.jpg" class="img img-responsive adminImage" />
							<p style="color: white; margin-top: 10px;">
								SG | Ryu
							</p>
						</div>
						<div class="col=sm-12 col-md-2 text-center">
							<img src="images/reef.jpg" class="img img-responsive adminImage" />
							<p style="color: white; margin-top: 10px;">
								SG | Reefer
							</p>
						</div>
						<div class="col=sm-12 col-md-2 text-center">
							<img src="images/kinky.jpg" class="img img-responsive adminImage" />
							<p style="color: white; margin-top: 10px;">
								SG | K1NKYN1NJA
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<!-- team -->
	<!-- <div class="team" id="team">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Our Admin Team</h3> 
			</div>
			<div class="agileits-team-grids">
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/t1.jpg" alt="">
						<div class="team-caption"> 
							<h4>SG | Jxckaroo</h4>
							<p>Fusce laoreet</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/t2.jpg" alt="">
						<div class="team-caption"> 
							<h4>Johan Botha</h4>
							<p>Fusce laoreet</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/t3.jpg" alt="">
						<div class="team-caption"> 
							<h4>Justo Congue</h4>
							<p>Fusce laoreet</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/t4.jpg" alt="">
						<div class="team-caption"> 
							<h4>Steven Wilson</h4>
							<p>Fusce laoreet</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
	<!-- //team -->
	<!-- blog -->
	<!-- <div id="blog" class="blog">
		<div class="container"> 
			<div class="agileits-title">
				<h3>Our Blog</h3>
			</div> 
			<div class="wthree-blog-grids">
				<div class="col-md-6 w3-agileits-blog-grid">
					<div class="col-sm-4 col-xs-3 blog-left">
						<h4>24/01</h4>
						<ul>
							<li>Posted : <a href="#">Admin</a></li>
							<li>Likes : 31<li>
							<li>Comments : (4)</li>
						</ul>
					</div>
					<div class="col-sm-8 col-xs-9 blog-right">
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet luctus gravida.</a>
						<p>Sed ut feugiat felis. Morbi tempor ut nibh id consectetur. Morbi turpis arcu, interdum at feugiat non, iaculis id dui. Cras vestibulum dapibus volutpat. Fusce id molestie mauris, nec pulvinar nibh. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3-agileits-blog-grid">
					<div class="col-sm-4 col-xs-3 blog-left">
						<h4>09/12</h4>
						<ul>
							<li>Posted : <a href="#">Admin</a></li>
							<li>Likes : 80<li>
							<li>Comments : (8)</li>
						</ul>
					</div>
					<div class="col-sm-8 col-xs-9 blog-right">
						<a href="#" data-toggle="modal" data-target="#myModal">Etiam ut nibh quis magna placerat euismod ac id eros. Cras eleifend nulla vel eros blandit.</a>
						<p>Duis sodales eleifend laoreet. Vestibulum luctus venenatis massa, in vulputate mi porta ac. Maecenas sollicitudin eros lectus, a rutrum nisi vulputate quis. Proin tempus, lectus vitae gravida</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
	<!-- //blog -->
	<!-- mail -->
	<!-- <div class="mail" id="mail">
		<div class="container">
			<div class="agileits-title">
				<h3>Mail Us</h3>
			</div> 
			<div class="w3_mail_grids">
				<form action="#" method="post">
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-10" name="Name" placeholder="Your Name" required=""/>
						<label class="input__label input__label--jiro" for="input-10">
							<span class="input__label-content input__label-content--jiro">Your Name</span>
						</label>
					</span>
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="email" id="input-11" name="Email" placeholder="Your Email Address" required=""/>
						<label class="input__label input__label--jiro" for="input-11">
							<span class="input__label-content input__label-content--jiro">Your Email</span>
						</label>
					</span>
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-12" name="Phone Number" placeholder="Phone Number" required=""/>
						<label class="input__label input__label--jiro" for="input-12">
							<span class="input__label-content input__label-content--jiro">Phone Number</span>
						</label>
					</span>
					<textarea name="Message" placeholder="Message..." required=""></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
	<script src="js/classie.js"></script>
	<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script> -->
	<!-- //mail -->
	<!-- contact -->
	<!-- <div id="contact" class="contact">
		<div class="contact-row agileits-w3layouts">  
			<div class="col-md-5 contact-w3lsleft map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.948805392833!2d-73.99619098458929!3d40.71914347933105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1479793484055"></iframe>
			</div>
			<div class="col-md-7 contact-w3lsright">
				<h6>Sed interdum interdum accumsan nec purus ac orci finibus facilisis sapien Sed interdum . </h6>
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Visit Us</h5>
						<p>Broome St, Canada, <br>NY 10002, New York </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-xs-6 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Mail Us</h5>
						<p><a href="mailto:info@example.com"> mail@example1.com </a></p>
						<p><a href="mailto:info@example.com"> mail@example2.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Call Us</h5>
						<p>+01 222 333 4444<br></p>
						<p>+01 222 333 5555</p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Working Hours</h5>
						<p>Mon - Fri : 8:00 am to 10:30 pm<br>
						Sat - Sun : 9:00 am to 11:30 pm</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div> -->
	<!-- //contact -->  
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 amet-sed"> 
					<div class="footer-title">
						<h3>About Us</h3>
					</div> 
					<p>Serenity Gaming was created with one focus in mind, having fun. We are a mature(18+), relaxed gaming community based within the EU. Our aim is to provide a place for all players to have a comfortable gaming experience with a stress free enviroment.</p>
				</div>
				<div class="col-md-4 amet-sed amet-medium">
					<div class="footer-title">
						<h3>Our Discord</h3>
					</div> 
					<iframe style="margin-top: 30px;" src="https://discordapp.com/widget?id=406125099163320323&theme=dark" height="200" allowtransparency="true" frameborder="0"></iframe>
				</div>
				<div class="col-md-4 amet-sed ">
					<div class="footer-title">
						<h3>Follow Us</h3>
					</div> 
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="https://www.youtube.com/channel/UCbI1OxhQjnwk2KuPlZTVxiA" target="_blank"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.twitch.tv/serenitygameeu" target="_blank"><i class="fa fa-twitch"></i></a></li>
						</ul>
					</div>
					<!-- <div class="support">
						<form action="#" method="post">
							<input type="email" placeholder="Enter email...." required=""> 
							<input type="submit" value="Subscribe" class="botton">
						</form> 
					</div> -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p class="footer-class">© 2017 Serenity Gaming EU. All Rights Reserved | Developed By <a href="https://github.com/Jxckaroo" target="_blank">Jack Mollart (SG | Jxckaroo)</a></p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
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
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->
@endsection
