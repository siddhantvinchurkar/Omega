<!DOCTYPE html>

<html lang="en">

	<head>
		<!--Basic meta tags-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<!--Fetch minified materializecss from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"  media="none" onload="if(media!='screen,projection')media='screen,projection'">

		<!--Fetch material icons from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"  media="none" onload="if(media!='screen,projection')media='screen,projection'">

		<!--Fetch font (Roboto) from the CDN asynchronously-->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

		<!--Set the shortcut icon-->
		<link rel="shortcut icon" type="image/ico" href="../images/icons/favicon.ico">

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--Progressive Web App meta tags-->
		<link rel="manifest" href="../manifest.json">
		<meta name="theme-color" content="#4DB6AC">
		<meta name="Description" content="Programs from web tech lab sessions">

		<!--Overriden Styles-->
		<style>
			body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
				font-family: 'Roboto', sans-serif;
				background-color: #F6F6F6;
			}

			main {
				flex: 1 0 auto;
			}

			.container {
				display: flex;
				justify-content: center;
			}

			.center {
				width: 250px;
				position: absolute;
				margin: auto;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
			}

			.center2 {
				opacity:0.1;
				position: absolute;
				margin: auto;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
			}

		</style>

		<title>Omega</title>
	</head>

	<body>

		<!--Header-->
		<header>

		<nav>

			<div class="nav-wrapper">
				<img src="../images/icons/72.png" style="height:95%;" />
				<a href="" class="brand-logo">Omega</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="https://siddhantvinchurkar.me/" target="_blank" title="Siddhant Vinchurkar">Siddhant Vinchurkar</a></li>
				</ul>
			</div>

		</nav>

		</header>

		<!--Main-->
		<main>

			<!--Progrss Bar-->
			<div class="container" id="progressBar">
				<img src="../images/icons/512.png" class="center2" />
				<div class="progress center">
					<div class="indeterminate" style="margin-right: auto; margin-left: auto; width: 250px;"></div>
				</div>
			</div>

			<!--Contents-->
			<div id="pageContents" style="display:none;">
				<img src="../images/icons/512.png" class="center2" />
				<div id="confirmedEmailMessageSpace" class="row" style="margin-top:8em;">
					<div class="col s12 m6 offset-m3">
						<div class="card horizontal">
							<div class="card-stacked">
								<div class="card-content">
									<p id="confirmedEmailMessage" style="font-size:1.5em; font-family:'Ubuntu', sans-serif;">Thank you for confirming your email! Please enter your roll number or employee ID below to continue</p>
									<br />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

		<!--Footer-->
		<footer class="page-footer" style="padding-top:0px;">
			<div class="footer-copyright">
				<div class="container" id="footerText">
					<a href="https://volatile.ga/" target="_blank" title="Volatile, Inc." style="color:#FFFFFF">&emsp;Volatile, Inc.&emsp;</a>
					<a class="grey-text text-lighten-4 right" href="#footertext">Made with love for everyone</a>
				</div>
			</div>
		</footer>

		<!--JavaScript at end of body for optimized asynchronous loading-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js" async></script>

		<!--Onload Function-->
		<script type="text/javascript">

			window.onload = function(){

				// Set the copyright year in the footer
				document.getElementById("footerText").innerHTML = '&copy; ' + new Date().getFullYear() + document.getElementById("footerText").innerHTML;

				// Align the confirmedEmailMessageSpace
				document.getElementById("confirmedEmailMessageSpace").style="margin-top:" + window.screen.availHeight/8 + "px;";

				// Get rid of the loader after three seconds
				setTimeout(function(){
					document.getElementById("progressBar").style.display="none";
					document.getElementById("pageContents").style.display="block";
					}, 3000);

			}

		</script>

	</body>

</html>
