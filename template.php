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
		<link rel="shortcut icon" type="image/ico" href="images/icons/favicon.ico">

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--Progressive Web App meta tags-->
		<link rel="manifest" href="manifest.json">
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
				<img src="images/icons/72.png" style="height:95%;" />
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
				<img src="images/icons/512.png" class="center2" />
				<div class="progress center">
					<div class="indeterminate" style="margin-right: auto; margin-left: auto; width: 250px;"></div>
				</div>
			</div>

			<!--Contents-->
			<div id="pageContents" style="display:none;">
				<img src="images/icons/512.png" class="center2" />
				<!--Card Panel [Info]-->
				<div class="row">
					<div class="col s12 m4" id="info1">
						<div class="card-panel teal">
							<span class="white-text">Welcome to <b>Omega</b>! Find all web tech lab programs here.</span>
						</div>
					</div>
					<div class="col s12 m4" id="info2" style="display:none;">
						<div class="card-panel teal">
							<span class="white-text">Welcome to <b>Omega</b>! Find all web tech lab programs here.</span>
						</div>
					</div>
					<div class="col s12 m4" id="info3" style="display:none;">
						<div class="card-panel teal">
							<span class="white-text">Welcome to <b>Omega</b>! Find all web tech lab programs here.</span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m3">
						<div class="card large">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="images/resume.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4" style="margin-top:1em;">HTML Resume<i class="material-icons right">arrow_upward</i></span>
								<p>A responsive resume built in HTML5, CSS3 and a little bit of JavaScript.</p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">HTML Resume<i class="material-icons right">close</i></span>
								<p>A responsive resume built in HTML5, CSS3 and a little bit of JavaScript.</p>
								<img src="https://user-images.githubusercontent.com/30186107/29488525-f55a69d0-84da-11e7-8a39-5476f663b5eb.png" style="height:30%; width:80%;" />
								<a href="" class="waves-effect waves-light btn"><i class="material-icons right">launch</i>Demo</a>
								<p style="margin-top:2em;">Image Credits: <a style="float:right;background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@rawpixel?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from rawpixel"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px">rawpixel</span></a></p>
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

				// Dismiss information panels on click
				document.getElementById("info1").onclick = function(){document.getElementById("info1").style.display="none";};
				document.getElementById("info2").onclick = function(){document.getElementById("info2").style.display="none";};
				document.getElementById("info3").onclick = function(){document.getElementById("info3").style.display="none";};

				// Get rid of the loader after three seconds
				setTimeout(function(){
					document.getElementById("progressBar").style.display="none";
					document.getElementById("pageContents").style.display="block";
					}, 3000);

			}

		</script>

	</body>

</html>
