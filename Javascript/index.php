<!doctype html>
<html>
	<head>
		<title> Javascript </title>
	</head>
	
	<script>
		function meddelande(){
			alert("HALLOJ");
		}
	
		function bigImg(x) {
			x.style.height = "150px";
			x.style.width = "250px";
		}

		function normalImg(x) {
			x.style.height = "50px";
			x.style.width = "70px";
		}
		
		
	</script>
	<body>
		<button onClick="meddelande()"> uppgift 1 </button>
		<br>
		<br>
		<img src="ontopoftheworld.jpg" alt="Uppgift 2" onmouseover="bigImg(this)" onmouseleave="normalImg(this)" />
		<br>
		
	</body>
</html>