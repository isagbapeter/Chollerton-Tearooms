<!doctype html>
<html lang= "en">
<head>
	<meta charset= "utf-8">
	<meta name = "viewport" content= "width=device-width, initial-scale= 1.0">
	<title>View Requests</title>
	<link rel = "stylesheet" href= "AssessmentBackup.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel= "stylesheet" type = "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<section class = "header2">
	<nav>
	<!--<a href= ""><img src= ""></a>-->
	<div class= "navlinks" id="nav-links">
	<i class="fa fa-times" onclick="hideMenu()"></i>
	<ul>
            <li><a href="AssessmentBackup.html">Home</a></li>
          
            <li><a href="findOutMore1.html">Find Out More</a></li>
            
            <li><a href="viewRequests1.php">View Requests</a></li>
         
            <li><a href="credit1.html">Credits</a></li>
        </ul>
	</div>
	<i class="fa fa-bars" onclick="showMenu()"></i>
	</nav>

<div class= "textbox">
	<h1>View Requests</h1>
</div>
</section>

<!--Main section-->
<main class = "QF">
<div class= "constant">
<?php
include "GD.php";
if ($conn->connect_error) 
	{echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
	exit;}
	
	$sql = "SELECT forename, surname, postalAddress, mobileTelNo, email, sendMethod, catDesc FROM CT_expressedInterest
	JOIN CT_category on CT_category.catID = CT_expressedInterest.catID";
	$queryResult = $conn->query($sql);
	// check if query was successful
	if ($queryResult === false) {
		echo "<p>Query failed: " . $conn->error . "</p>";
		exit;
		}else{
		while ($row = $queryResult->fetch_object()) {
			echo "<p> {$row->forename}, {$row->surname}, {$row->postalAddress}, {$row->mobileTelNo}, {$row->email}, {$row->sendMethod}, {$row->catDesc} </p>";}
		}
		$queryResult->close();
		$conn->close();
?>
</div>
</main>

<!----Javascript for toggle Menu----->
<script>
	var navLinks = document.getElementById("nav-links");
	function showMenu(){
	 navLinks.style.right = "0";
	}
	function hideMenu(){
	 navLinks.style.right = "-200px";
	}
</script>

<!--footer-->
<footer class= "footer">
	<div class = "container">
	<div class = "row">
	<div class = "footer-col">
		<h4>Company</h4>
		<ul class = "points">
		<li><a href= "#">about us</a></li>
		<li><a href= "#">our services</a></li>
		<li><a href= "#">privacy policy</a></li>
		<li><a href= "#">affiliate program</a></li>
		</ul>
	</div>
	<div class = "footer-col">
		<h4>Get Help</h4>
		<ul class = "points">
		<li><a href= "#">FAQ</a></li>
		<li><a href= "#">shipping</a></li>
		<li><a href= "#">returns</a></li>
		<li><a href= "#">payment options</a></li>
		</ul>
	</div>
	<div class = "footer-col">
		<h4>online shop</h4>
		<ul class = "points">
		<li><a href= "#">clothing</a></li>
		<li><a href= "#">tearooms</a></li>
		<li><a href= "#">jewellry</a></li>
		<li><a href= "#">groceries</a></li>
		</ul>
	</div>
	<div class = "footer-col">
		<h4>Follow us</h4>
		<div class = "social-links">
		<a href= "#"><i class = "fab fa-facebook-f"></i></a>
		<a href= "#"><i class = "fab fa-twitter"></i></a>
		<a href= "#"><i class = "fab fa-instagram"></i></a>
		<a href= "#"><i class = "fab fa-linkedin-in"></i></a>
		</div>
	</div>
	</div>
	</div>
	<p class = "copyright">©This website is property of Peter Isagba.</p>
</footer>
</body>
</html>