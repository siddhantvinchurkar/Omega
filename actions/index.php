<!DOCTYPE html>
<html lang="en">
	<head>
		<title>API Enpoint Tester</title>
	</head>
	<body style="text-align:center;">
		<input id="link" type="text" placeholder="Enter API Query" value="http://localhost/omega/api/users/?key=WNetcNnHuxs2VjwtjfBA78m3whhMZV5dXddKXQrTkMLVvq75HpESRLf9GawVpef4&transform=1" />
		<button id="linkSubmit">Execute Query</button>
		<p id="resultContainer">
			<!-- Results will be put here -->
		<p/>
		<script type="text/javascript">
			function getHttpAsync(link, callback){
				var xmlHttp = new XMLHttpRequest();
				xmlHttp.onreadystatechange = function(){ 
					if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
					callback(xmlHttp.responseText);
				}
				xmlHttp.open("GET", link, true);
				xmlHttp.send(null);
			}

			function results(data){
				document.getElementById("resultContainer").innerHTML += "";
				document.getElementById("resultContainer").innerHTML += "<h2>Columns &rarr;</h2><br /><br />" + Object.keys(JSON.parse(data).users[0]);
				document.getElementById("resultContainer").innerHTML += "<br /><br /><h2>Entries &rarr;</h2><br /><br />";
				for(var i=0; i<JSON.parse(data).users.length; i++){
					document.getElementById("resultContainer").innerHTML += "<h4>Entry # " + (i+1) + "&rarr;</h4>";
					document.getElementById("resultContainer").innerHTML += '<br /><br /><u><b>First Name:</b></u>&emsp;' + JSON.parse(data).users[i].fn;
					document.getElementById("resultContainer").innerHTML += '<br /><br /><u><b>Last Name:</b></u>&emsp;' + JSON.parse(data).users[i].ln;
					document.getElementById("resultContainer").innerHTML += '<br /><br /><u><b>Email:</b></u>&emsp;' + JSON.parse(data).users[i].eml;
					document.getElementById("resultContainer").innerHTML += '<br /><br /><u><b>Confirmed:</b></u>&emsp;' + JSON.parse(data).users[i].cnf;
					document.getElementById("resultContainer").innerHTML += '<br /><br /><u><b>Photo:</b></u>&emsp;' + JSON.parse(data).users[i].photo;
					document.getElementById("resultContainer").innerHTML += '<br /><br /><u><b>Roll Number:</b></u>&emsp;' + JSON.parse(data).users[i].rno;
					document.getElementById("resultContainer").innerHTML += '<br /><br /><u><b>Approved:</b></u>&emsp;' + JSON.parse(data).users[i].approved;
				}
			}
			window.onload = function(){
				document.getElementById("linkSubmit").onclick = function(){
					getHttpAsync(document.getElementById("link").value, results);
				}
			}

		</script>
	</body>
</html>
