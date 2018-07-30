<!DOCTYPE HTML>
<html>
	<head>
		<title>Omega</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<!--Set the shortcut icon-->
		<link rel="shortcut icon" type="image/ico" href="images/icons/favicon.ico">

		<!--Progressive Web App meta tags-->
		<link rel="manifest" href="manifest.json">
		<meta name="theme-color" content="#EE6E73">
		<meta name="Description" content="Omega is a collaborative classroom platform for teachers and students alike.">

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header>
					<h1>Omega</h1>
					<p>Classrooms</p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">Proceed as anticipated</a>
				</footer>
			</section>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>This is Omega</h2>
				</header>
				<p>A brand new collaboration tool for students and teachers.<br />
				It’s responsive, built on HTML5/CSS3, and entirely free<br />
				under the <a href="https://omegaclassrooms.ga/LICENSE.md">MIT License</a>.</p>
				<footer>
					<a href="signin/" class="button style2 scrolly">Let me in!</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image fit"><img src="https://media.istockphoto.com/vectors/group-of-students-vector-id910098436?k=6&m=910098436&s=612x612&w=0&h=ts1tIGl2J40iXoVrDAJHIIo1ah7uS9BotKx7qMQxeWg=" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Students</h2>
					</header>
					<p>Omega Classrooms enables students to take their entire classroom experience online. From assignments to notes. Everything is here.</p>
				</div>
			</article>

		<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="https://opportunityculture.org/wp-content/uploads/2017/07/rows-teachers-no-stars.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Teachers</h2>
					</header>
					<p>A fool-proof platform to manage assignment submissions, distribute course material and clarify doubts on the go.</p>
				</div>
			</article>

		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>Open Source</h2>
					<p>Omega is an open source software protected by the <a href="https://omegaclassrooms.ga/LICENSE.md">MIT License</a>. Feel free to fork the repository on <a href="https://github.com/siddhantvinchurkar/omega/" target="_blank">GitHub</a>!</p>
				</header>
			</article>

		<section id="footer">
			<ul class="icons">
				<li><a href="https://github.com/siddhantvinchurkar/omega/" target="_blank" class="icon fa-github"><span class="label">GitHub</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; <p id="year" style="display:inline;"></p> <a href="https://volatile.ga/">Volatile, Inc.</a> All rights reserved.</li><li>Designed by <a href="https://siddhantvinchurkar.me/">Siddhant Vinchurkar.</a></a></li>
				</ul>
			</div>
		</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

		<script type="text/javascript">
			window.onload = function(){
				document.getElementById("year").innerHTML = new Date().getFullYear();
			}
		</script>

	</body>
</html>
