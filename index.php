<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	require "society-details.php";
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo $pageTitle; ?></title>
	<!-- CSS  -->
	<link rel="icon" type="image/ico" href="images/site/favicon.ico" />
	<link href="css/materialize.min.css" type="text/css" rel="stylesheet"/>
</head>
<body class='nude'>
<header>
<div class="navbar-fixed">
	<nav class="ags-colour">
		<div class="nav-wrapper">
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
			<a href="#!" class="flow-text brand-logo center"><?php echo $logo; ?></a>
		</div>
	</nav>
</div>
</header>
<main>
	<ul id="slide-out" class="side-nav fixed container">
		<li class="brand-logo">
			<img src="images/agsSquare.png" alt="the society Logo" class="responsive-img">
		</li>
		<li><ul class="section table-of-contents">
			<li><a href="#introduction">Who are we?</a></li>
			<li><a href="#meetTheTeam">Meet The Team</a></li>
			<li><a href="#freshers">Freshers Info</a></li>
			<li><a href="#events">Events</a></li>
			<li><a href="#signUp">Become a member</a></li>
			<li><a href="#contactUs">Contact Us</a></li>
			<li><a href="#ourFriends">Our Friends</a></li>
		</ul></li>
	</ul>

	<div class="slider scrollspy" id="introduction">
		<ul class="slides">
		  <li>
			<img src="images/slide1.jpeg" alt="Large hand placing a game piece on a board game"> 
			<div class="caption center-align">
			  <h3><?php echo $slider1Title; ?></h3>
			  <h5 class="light grey-text text-lighten-3"><?php echo $slider1Slogan; ?></h5>
			</div>
		  </li>
		  <li>
			<img src="images/slide2.jpg"  alt="Board game being played"> 
			<div class="caption left-align">
			  <h3><?php echo $slider2Title; ?></h3>
			  <h5 class="light grey-text text-lighten-3"><?php echo $slider2Slogan; ?></h5>
			</div>
		  </li>
		  <li>
			<img src="images/slide3.jpg" alt="friends playing board games">
			<div class="caption right-align">
			  <h3><?php echo $slider3Title; ?></h3>
			  <h5 class="light grey-text text-lighten-3"><?php echo $slider3Slogan; ?></h5>
			</div>
		  </li>
		</ul>
	</div>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col s12">
				  <div class="icon-block center-align">
					<img src="images/site/die.svg" alt="image of a d6">
					<h4 class="center">Who are we?</h4>
					<p class="flow-text">
						<?php echo $whoAreWeDescription; ?>
					</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="divider"></div>
</div>	
	<div class="section scrollspy" id="meetTheTeam">
		<div class="container">
			<div class="row">
				<div class="col s12 m5">
				  <div class="icon-block center-align">
					<img src="images/site/president.svg" alt="Presidential icon">
					<h4 class="center text-red">President</h4>
					<p class="flow-text">
						<a href="https://www.facebook.com/mikeywotton">Jane Doe</a>
					<br>
					The president is here to keep everyone else in line and to ensure that the society events run according to plan. 
					It's their job to know what the AGS is doing and organise the committee into making sure they know what they're doing.
					</p>
				  </div>
				</div>
				<div class="col s12 m5 offset-m2">
					<div class="icon-block center-align">
					<img src="images/site/secretary.svg" alt="Secretary icon">
					<h4 class="center">Secretary</h4>
					<p class="flow-text">
						<a href="https://www.facebook.com/mikeywotton">John Doe</a>
					<br>
					The secretary is responsible for booking rooms for gaming events, for the society at large and for individual members running games.
					They also organise the timing and agenda for committee meetings, and keeps minutes for publishing later.
					</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-container valign-wrapper"> 
		<div class="parallax">
			<img src="images/boardGame.jpg" alt="Image of a board game being played">
		</div>
	</div>
	<div class="section scrollspy" id="freshers">
		<div class="container">
			<div class="row">
				<div class="col s12 m6">
				  <div class="icon-block center-align">
					<img src="images/site/flag.svg" alt="flag icon">
					<h4 class="center">Fresher's Fair</h4>
					<p class="flow-text">
						<?php echo $freshersDescription; ?>
					</p>
				  </div>
				</div>
				<div class="col s12 m5 offset-m1">
					<div class="icon-block">
					<img src="images/site/location.svg" alt="location icon">
						<h4 class="center">Find us here</h4>
					<div id="map"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="divider"></div>
</div>	
	<div class="section scrollspy" id="events">
		<div class="container">
			<div class="row">
				<div class="col s12 m6">
				  <div class="icon-block center-align">
					<img src="images/site/megaphone.svg" alt="megaphone icon">
					<h4 class="center">What do we do?</h4>
					<p class="flow-text">
						<?php echo $whatDoWeDoDescription; ?>
					</p>
				  </div>
				</div>
				<div class="col s12 m5 offset-m1">
					<div class="icon-block">
					<img src="images/site/calendar.svg" alt="calendar icon">
						<h4 class="center">Events</h4>
					<table class="responsive-table bordered centered">
						<thead>
						  <tr>
							  <th>Name</th>
							  <th>When?</th>
							  <th>Where?</th>
							  <th>Point of contact?</th>
						  </tr>
						</thead>
							<tbody>
						  <tr>
							<td>Board Game Saturday</td>
							<td>2pm, every Saturday</td>
							<td>Keynes College</td>
							<td><a href="https://www.facebook.com/mikeywotton">John Doe</a></td>
						  </tr>
						  <tr>
							<td>Freshers' Fair</td>
							<td>28th of September</td>
							<td>Eliot College</td>
							<td><a href="https://www.facebook.com/mikeywotton">Jane Doe</a></td>
						  </tr>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-container valign-wrapper"> 
		<div class="parallax">
			<img src="images/boardGame2.jpeg" alt="image of an rpg board game being played">
		</div>
	</div>
	<div class="section scrollspy" id="signUp">
		<div class="container">
			<div class="row">
				<div class="col s12 m6">
					<div class="icon-block center-align">
						<img src="images/site/lightbulb.svg" alt="lightbulb icon">
						<h4 class="center">Why become a member?</h4>
						<p class="flow-text">
							<?php echo $whyBecomeAMemberDescription; ?>
						</p>
					</div>
				</div>
				<div class="col s12 m5 offset-m1">
					<div class="icon-block center-align">
						<img src="images/site/member.svg" alt="Membership icon">
						<h4 class="center">How to join?</h4>
						<p class="flow-text">
							<?php echo $howToBecomeAMember; ?>
						</p>
						<a href="<?php echo $becomeAMemberURL; ?>" class="waves-effect waves-light btn center-align" target="_blank">Become a member</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="divider"></div>
</div>	
	<div class="section scrollspy" id="contactUs">
		<a id="contact"></a>
		<div class="container">
			<div class="row">
				<div class="col s12 m6">
				  <div class="icon-block center-align">
					<img src="images/site/phone.svg" alt="telephone icon">
					<h4 class="center">Contact Us</h4>
					<p class="flow-text">
						<?php echo $contactUsDescription; ?>
					</p>
					<div class="col s2 offset-s3">
						<a href="http://widget.mibbit.com/?settings=7d8f2c687ade923e7bac8d9ab17bc838&server=irc.darkmyst.org&channel=%23ags" target="_blank"><img src="images/site/chat.svg" alt="Chat icon link to IRC" class="circle"></a>
					</div>		
					<div class="col s2">
						<a href="<?php echo $societyFacebookURL; ?>" target="_blank"><img src="images/site/slack.svg" alt="Slack logo" class="circle"></a>
					</div>
					<div class="col s2">
						<a href="<?php echo $societyFacebookURL; ?>" target="_blank"><img src="images/site/facebook.svg" alt="Facebook logo image" class="circle"></a>
					</div>
					</div>
				</div>
				<div id="formwrap" class="col s12 m5 offset-m1">
					<div class="icon-block center-align">
						<img src="images/site/email.svg" alt="email icon">
						<h4 class="center">Quick Email</h4>
							<form id="contactUsForm">
								<div class="row">
								  <div class="input-field col s6">
									<input id="email" type="email">
									<label for="email">Email*</label>
								  </div>
								</div>
								<div class="row">
								  <div class="input-field col s12">
									<textarea id="textarea1" class="materialize-textarea"></textarea>
									<label for="textarea1">Message*</label>
								  </div>
								</div>
								<button class="btn waves-effect waves-light right" type="submit" name="submit" value="submit">Submit
									<i class="material-icons right">send</i>
								</button>
							</form>
					</div>
				</div>
				<div id="thankyou" class="col s12 m5 offset-m1 hide">
					<div class="icon-block">
						<h2 class="center">
						<i class="material-icons animated tada infinite">done</i>
						</h2>
						<h4 class="center">Thank you!</h4>
						<p class="flow-text">We will be in contact with you as soon as possible.</p>
						<a id="sendanotherbtn" class="waves-effect waves-light btn right"><i class="material-icons left">create</i>Send another</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-container valign-wrapper"> 
		<div class="parallax">
			<img src="images/community.jpeg" alt="Community of different coloured game pieces">
		</div>
	</div>
	<div class="section scrollspy" id="ourFriends">
		<div class="container">
			<div class="row">
				<div class="col s12 m6">
					<div class="icon-block center-align">
						<img src="images/site/heart.svg" alt="heart icon">
						<h4 class="center">Our Friends</h4>
						<p class="flow-text">
						<?php echo $ourFriendsDescription; ?>
						</p>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="icon-block center-align">
						<img src="images/site/globe.svg" alt="Globe icon">
						<h4 class="center">Our Community</h4>
						<p class="flow-text">
							<?php echo $ourCommunityDescription; ?>
						</p>
					</div>
				</div>
				<div class="col s12">
					<div class="carousel">
						<?php 
							foreach ($affiliates as $affiliate) {
								echo "<a class=\"carousel-item\" href=\"$affiliate[0]\"><img src=\"images/affiliates/$affiliate[1]\" alt=\"$affiliate[2]\"></a>";
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<footer class="page-footer ags-colour">
	<div class='row'>
		<div class="col s12">
			<div class="col s10 offset-s1 center">
			<p class="flow-text white-text"><?php echo $footerQuote; ?></p>
			<small><a href="https://wottonwit.co.uk" class="white-text center">Site Designed & Created by: Mikey Wotton, 2017</a></small>
			</div>
			<a href="#introduction" class="waves-effect waves-light btn center-align btn-flat right hide-on-med-and-up">Top of Page<i class="material-icons large right">navigation</i></a>
		</div>
	</div>
</footer>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/materialize.js.min.js"></script>
<script src="js/init.js.min.js"></script>
<script>
$(document).ready(function(){
	//this function closes the side nav on the click of a link, but only on small screens.
	$('.side-nav li a').on('click', function(e) {
		windowsize = $(window).width();
		if (windowsize < 992) {
		  $('.button-collapse').sideNav('hide');
		}
	});
	
	//These functions handle the contactUsForm, hiding it when it is used and displaying the acknowledgement after.
	$("#contactUsForm").submit(function(e) {
		e.preventDefault();
		$("#formwrap").addClass("hide");
		$("#thankyou").removeClass("hide");
		$("#reset").click();
		/*
		var postData = $( this ).serializeArray();
		$.ajax({
			url: 'contact-handler.php',
			type: 'post',
			data: postData,
			success: function (data) {
				Materialize.toast(data, 4000, 'rounded');
				$("#contactUsForm").addClass("hide");
				$("#thankyou").removeClass("hide");
				$("#reset").click();						
			}
		});
		*/
	});
	$("#sendanotherbtn").click(function(e) {
		$("#formwrap").removeClass("hide");
		$("#thankyou").addClass("hide");
	});
	
	//slide carousel every 6 seconds.
	setInterval(function(){ 
		$('.carousel').carousel('next');
	}, 6000);

});
</script>
<!-- Google Maps -->
<script>
	function initMap() {
		var uluru = {lat: 51.296103, lng:1.069090};
		var map = new google.maps.Map(document.getElementById('map'), {
		  zoom: 16,
		  center: uluru
		});
		var marker = new google.maps.Marker({
		  position: uluru,
		  map: map
		});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEIOBFjmlpcE9Too_xUCiyhnr9Mo5p_80&callback=initMap"></script>
<!-- End Google Maps -->
</body>
</html>
