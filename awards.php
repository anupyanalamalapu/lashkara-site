<html>
	<head>
		<title> UCD Lashkara </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/awards.css"/>
		<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'/>
		<link rel="shortcut icon" href="photos/logo.ico" type="image/x-icon">
	</head>
</html>
<body>
	<div class="video-background">
	    <div class="video-foreground" id="muteYouTubeVideoPlayer"></div>
	</div>
	<div id="mySidenav" class="sidenav">
	  <a href="index.html"><img src="photos/WhiteLogo.png" alt="navbarlogo" class="navbarlogo"></a>
	  <a href="background.html">Background</a>
	  <a href="performances.html">Performances</a>
	  <a href="awards.html">Awards</a>
	  <a href="sponsors.html">Sponsors</a>
	  <a href="auditions.html">Auditions</a>
	  <a href="meettheteam.html">Meet the Team</a>
	  <a href="contact.html">Contact Us</a>
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	</div>

	<div>
		<span onmouseover="openNav()"><img src="photos/WhiteLogo.png" alt="navbarlogo" class="navbarlogo-detect"></span>
		<h1 class="page-title general-text">Awards </h1>
	</div>
	<hr>
	<div class="col-xs-12">
		<h3 class="general-text center"> 2016 - 2017 Season </h3>
		<div class="col-xs-4 black-box">
			<iframe width="100%" height="25%" class="remo" src="https://www.youtube.com/embed/lOZqecbl0m0" frameborder="0" allowfullscreen></iframe>
			<h3 class="general-text">BA vs BOB International 2017</h3>
			<h2 class="general-text award-text">1st Place</h2>
			<h2 class="general-text">Judge: Remo D'Souza</h2>
		</div>
		<div class="col-xs-4 black-box">
			<img src="photos/BA2017.jpg" class="picture" alt="picture"/>
			<h3 class="general-text">Bollywood America 2017</h3>
			<h2 class="general-text award-text">3rd Place</h2>
			<h2 class="general-text">Mr. Bollywood America</h2>
		</div>
		<div class="col-xs-4 black-box">
			<img src="photos/BB2017.jpg" class="picture" alt="picture"/>
			<h3 class="general-text">Bollywood Berkeley 2017</h3>
			<h2 class="general-text award-text">1st Place</h2>
			<h2 class="general-text">Best Choreography</h2>
			<h2 class="general-text">Best Storyline</h2>
			<h2 class="general-text">Best Male Lead</h2>
		</div>
		<div class="col-xs-12">
			<div class="col-xs-6 black-box">
				<img src="photos/JhoomtiAward.jpg" class="picture-2016" alt="picture"/>
				<h3 class="general-text">Jhoomti Shaam 2017</h3>
				<h2 class="general-text award-text">2nd Place</h2>
				<h2 class="general-text">Best Male Lead</h2>
			</div>
			<div class="col-xs-6 black-box">
				<img src="photos/TamashaSDMale.jpg" class="picture-2016" alt="picture"/>
				<h3 class="general-text">Tamasha SD 2017</h3>
				<h2 class="general-text award-text">Best Male Lead </h2>
			</div>
		</div>
		<h3 class="general-text center col-xs-12"> 2015 - 2016 Season </h3>
		<div class="col-xs-12">
			<div class="col-xs-6 black-box">
				<img src="photos/Tamasha2016.jpg" class="picture-2016" alt="picture"/>
				<h3 class="general-text">Tamasha SD 2016</h3>
				<h2 class="general-text award-text">3rd Place</h2>
				<h2 class="general-text">Mr. Tamasha SD</h2>
			</div>
			<div class="col-xs-6 black-box">
				<img src="photos/BB2016Check.jpg" class="picture-2016-BB" alt="picture"/>
				<h3 class="general-text">Bollywood Berkeley 2016</h3>
				<h2 class="general-text award-text">2nd Place</h2>
				<h2 class="general-text">Best Choreography</h2>
				<h2 class="general-text">Best Intro Video</h2>
				<h2 class="general-text">Best Costumes</h2>
				<h2 class="general-text">Best Female Lead </h2>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="col-xs-6 black-box">
				<h3 class="general-text">2014 - 2015 Season </h3>
				<h2 class="general-text award-text">Jhoomti Shaam 2015</h2>
				<h2 class="general-text">Best Male Lead</h2>
			</div>
			<div class="col-xs-6 black-box">
				<h3 class="general-text">2012 - 2013 Season </h3>
				<h2 class="general-text award-text">Bollywood Berkeley 2013</h2>
				<h2 class="general-text">2nd Place</h2>
				<h2 class="general-text">Best Male Lead</h2>
			</div>
		</div>
	</div>
	<div class="center">
      <h4 class="general-text">Created by Anupya Nalamalapu</h4>
      <h4 class="general-text second-line">Bootstrap, HTML/CSS, Javascript</h4>
    </div>

	<script>
		function openNav() {
		    document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		}
	</script>
	<script async src="https://www.youtube.com/iframe_api"></script>
	<script>
	 function onYouTubeIframeAPIReady() {
	  var player;
	  player = new YT.Player('muteYouTubeVideoPlayer', {
	    videoId: 'SkkV6VnG9Nw', // YouTube Video ID
	    width: 560,               // Player width (in px)
	    height: 316,              // Player height (in px)
	    playerVars: {
	      autoplay: 1,        // Auto-play the video on load
	      controls: 0,        // Show pause/play buttons in player
	      showinfo: 0,  
	      playlist:  'SkkV6VnG9Nw',    // Hide the video title
	      modestbranding: 1,  // Hide the Youtube Logo
	      loop: 1,            // Run the video in a loop
	      fs: 0,              // Hide the full screen button
	      cc_load_policy: 0, // Hide closed captions
	      iv_load_policy: 3,  // Hide the Video Annotations
	      autohide: 0,
	      start: 112         // Hide video controls when playing
	    },
	    events: {
	      onReady: function(e) {
	        e.target.mute();
	      }
	    }
	  });
	 }
	</script>
</body>