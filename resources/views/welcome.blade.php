@extends('layouts.app')

@section('content')
	<section class="main-section alabaster" id="welcome">
		<!--main-section alabaster-start-->
		<div class="container">
			<div class="row">
				<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
					<img src="images/sg_logo_new.png" alt="">
				</figure>
				<div class="col-lg-7 col-sm-8 featured-work">
					<h2>Welcome</h2>
					<p class="padding-b fadeInLeft">
					Formed in early 2018, Serenity Gaming is a community that a group of friends came together to make. Serenity Gaming offers great benefits such as regular events, gaming competitions with prizes and a Saturday night pub quiz!
					<br/>
					<br />
					Serenity Gaming was created with one focus in mind, having fun. We are a mature(18+), relaxed gaming community based within the EU. Our aim is to provide a place for all players to have a comfortable gaming experience with a stress-free environment.
					</p>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-02s">
							<img src="images/twitch.png" class="img img-responsive socialImage">
						</div>
						<a href="https://www.twitch.tv/serenitygameeu" class="socialLink" target="_blank">
							<div class="featured-box-col2 wow fadeInRight delay-02s">
								<h3>Twitch</h3>
								<p>Follow our Twitch channel for awesome content. We stream and host our members! </p>
							</div>
						</a>
					</div>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-04s">
							<img src="images/discord.png" class="img img-responsive socialImage">
						</div>
						<a href="https://discord.gg/NkYYwGr" class="socialLink" target="_blank">
							<div class="featured-box-col2 wow fadeInRight delay-04s">
								<h3>Discord</h3>
								<p>Feel free to join our discord and apply for membership, we dont bite and it is free! </p>
							</div>
						</a>
					</div>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-06s">
							<img src="images/youtube.png" class="img img-responsive socialImage">
						</div>
						<a href="https://www.youtube.com/channel/UCbI1OxhQjnwk2KuPlZTVxiA" class="socialLink" target="_blank">
							<div class="featured-box-col2 wow fadeInRight delay-06s">
								<h3>YouTube</h3>
								<p>Subscribe to our new YouTube channel, where we will be uploading member compilations! </p>
							</div>
						</a>
					</div>
					<a class="Learn-More" href="#">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!--main-section alabaster-end-->



	<section class="main-section paddind" id="games">
		<!--main-section-start-->
		<div class="container">
			<h2>Our Games</h2>
			<h6>Here is a list of all the games we play.</h6>
			<div class="portfolioFilter">
				<ul class="Portfolio-nav wow fadeIn delay-02s">
					<li><a href="#" data-filter="*" class="current">All</a></li>
					<li><a href="#" data-filter=".fps">FPS</a></li>
					<li><a href="#" data-filter=".online">Online Multiplayer</a></li>
					<li><a href="#" data-filter=".moba">MOBA</a></li>
					<li><a href="#" data-filter=".other">Other</a></li>
				</ul>
			</div>

		</div>
		<div class="portfolioContainer wow fadeInUp delay-04s">
			<div class=" Portfolio-box fps online">
				<a href="images/overwatch.jpg"><img src="images/overwatch.jpg" alt=""></a>
				<h3>Overwatch</h3>
			</div>
			<div class="Portfolio-box moba">
				<a href="images/hots.jpg"><img src="images/hots.jpg" alt=""></a>
				<h3>Heroes of The Storm</h3>
			</div>
			<div class=" Portfolio-box fps">
				<a href="images/fortnite.jpg"><img src="images/fortnite.jpg" alt=""></a>
				<h3>Fortnite</h3>
			</div>
			<div class=" Portfolio-box fps online">
				<a href="images/pubg.jpg"><img src="images/pubg.jpg" alt=""></a>
				<h3>PUBG</h3>
			</div>
			<div class=" Portfolio-box fps online">
				<a href="images/csgo.jpg"><img src="images/csgo.jpg" alt=""></a>
				<h3>CS: GO</h3>
			</div>
			<div class=" Portfolio-box moba">
				<a href="images/diablo3.jpg"><img src="images/diablo3.jpg" alt=""></a>
				<h3>Diablo 3</h3>
			</div>
			<div class=" Portfolio-box moba">
				<a href="images/lol.jpg"><img src="images/lol.jpg" alt=""></a>
				<h3>League of Legends</h3>
			</div>
			<div class=" Portfolio-box other">
				<a href="images/poker.jpg"><img src="images/poker.jpg" alt=""></a>
				<h3>Poker</h3>
			</div>
			<div class=" Portfolio-box fps">
				<a href="images/rl.jpg"><img src="images/rl.jpg" alt=""></a>
				<h3>Rocket League</h3>
			</div>
			<div class=" Portfolio-box online">
				<a href="https://cdn.discordapp.com/attachments/418343814546325504/457161970752290817/blood-bowl-2-listing-thumb-01-ps4-us-13aug15.png"><img src="https://cdn.discordapp.com/attachments/418343814546325504/457161970752290817/blood-bowl-2-listing-thumb-01-ps4-us-13aug15.png" alt=""></a>
				<h3>Blood Bowl 2</h3>
			</div>
			<div class=" Portfolio-box online other">
				<a href="images/sf5.jpg" alt=""><img src="images/sf5.jpg" alt=""></a>
				<h3>Street Fighter 5</h3>
			</div>
			<div class=" Portfolio-box online">
				<a href="images/wow.jpeg" alt=""><img src="images/wow.jpeg" alt=""></a>
				<h3>World of Warcraft</h3>
			</div>
			<div class=" Portfolio-box online">
				<a href="images/destiny2.jpg" alt=""><img src="images/destiny2.jpg" alt=""></a>
				<h3>Destiny 2</h3>
			</div>
		</div>
	</section>
	<!--main-section-end-->
	<!--main-section client-part-end-->
	<div class="c-logo-part" id="partners">
		<!--c-logo-part-start-->
		<div class="container">
			<ul class="affils">
				<li><a href="#"><img src="images/gmg.png" alt=""></a></li>
				<li><a href="#"><img src="images/razer.png" alt=""></a></li>
				<li><a href="#"><img src="images/g2a.png" alt=""></a></li>
				<li><a href="#"><img src="images/kinguin.png" alt=""></a></li>
				<li><a href="#"><img src="images/mmoga.png" alt=""></a></li>
			</ul>
		</div>
	</div>
	<!--c-logo-part-end-->
	<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>team</h2>
			<h6>Take a closer look into our amazing team. We won’t bite.</h6>
			<div class="team-leader-block clearfix">

				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<img src="images/jack.jpg" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">SG | Jxckaroo</h3>
					<span class="wow fadeInDown delay-03s">Clan Administrator</span>
				</div>

				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-03s">
						<img src="images/jonny.jpg" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">SG | Jonnyandwot</h3>
					<span class="wow fadeInDown delay-03s">Clan Administrator</span>
				</div>

				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<img src="images/ryu.jpg" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">SG | Ryu</h3>
					<span class="wow fadeInDown delay-03s">Clan Administrator</span>
				</div>

				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<img src="images/kinky.jpg" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">SG | K1NKYN1NJA</h3>
					<span class="wow fadeInDown delay-03s">Clan Administrator</span>
				</div>

				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<img src="images/tyrdeath.png" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">SG | Tyrdeath</h3>
					<span class="wow fadeInDown delay-03s">Clan Administrator</span>
				</div>

				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<img src="images/kit.png" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">SG | Kit</h3>
					<span class="wow fadeInDown delay-03s">Game Administrator</span>
				</div>

				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<img src="images/monad.png" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">SG | Monad</h3>
					<span class="wow fadeInDown delay-03s">Game Administrator</span>
				</div>

				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<img src="images/moon.jpg" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s">SG | Bountiful Moon</h3>
					<span class="wow fadeInDown delay-03s">Game Administrator</span>
				</div>

			</div>
		</div>
	</section>
	<!--main-section team-end-->


	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>Discord</h2>
		</div>
	</section>
	<!--business-talking-end-->
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<p><h3 style="width: auto;">General Server Guidance</h3><br><br>

1. The minimum age requirement for the community is 18 years. No exceptions <br>

2. Treat your fellow community members with respect. Banter is completely fine as long as both parties are fine with it. <br>

3. English is a required language, it keeps everyone on the same page, no one gets left out. <br>

4. Advertising for another gaming community on this server is not cool and will not be tolerated. <br>

5. Use channels the way they are intended. There’s a channel description for them all at the top. <br>

6. If you’re going to be away from the discord for an extended period of time please let one of the admins know. We prune non-active members that haven't been seen in 30 days.<br>

7. Please don't jump into a team channels without messaging members of the team or having prior permission from the team.
<br/><br/>
<h3 style="width: auto;">Application process</h3><br><br>

If you are applying for Serenity Gaming, we assume you are reading this part so here is a little info on what to expect in regards to the application process. 
Shortly after making an application an “Administrator” will promote you to the status of “Recruit”, this will change your in server username to orange. While in the “Recruit” bracket you are encouraged to be active in the community, hop into channels, play with other members and just generally be an all-round good person to play with. This will be relayed back to the admin team where the decision will then be made to bump you up to “Member”. Your in-server username will become blue and you will be given an ''SG |'' tag and be welcomed to our ever-growing family.<br><br>
 
Conversely, inactivity on the applicant’s part will delay the application process and after a certain period of time your application could be deleted and lead to you being removed from the server.</p>
					</div>
					<!-- <ul class="social-link">
						<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul> -->
				</div>
				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">
						<div class="text-center">
						<iframe src="https://discordapp.com/widget?id=443691528951693312&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
						</div>
						<div class="text-center" style="margin-top: 20px;">
							<a href="https://discord.gg/NkYYwGr" style="text-decoration: none !important;" target="_blank">
								<button class="input-btn">Join Discord</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
