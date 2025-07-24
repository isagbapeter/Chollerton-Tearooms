<!doctype html> 
<html lang= "en">
<head>
	<meta charset= "utf-8">
	<meta name = "viewport" content= "width=device-width, initial-scale= 1.0">
	<title>Your Details</title>
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
	<h1>Thanks For Getting in Touch</h1>
</div>
</section>
	
<main class = "QF">
<div class= "constant">
  	<?php 
		$fname= $_REQUEST['firstName'];
		$sname= $_REQUEST['surname'];
		$email= $_REQUEST['email'];
		$mNo= $_REQUEST['teleNo'];
		$address= $_REQUEST['postalAddress'];
		$PCC= $_REQUEST['contactChoice'];
		$CF= $_REQUEST['preferredFacility'];
		

error_reporting(E_ALL & ~E_NOTICE);

// Check if the data has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = isset($_REQUEST['firstName']) ? htmlspecialchars($_REQUEST['firstName']) : "";
    $sname = isset($_REQUEST['surname']) ? htmlspecialchars($_REQUEST['surname']) : "";
    $email = isset($_REQUEST['email']) ? htmlspecialchars($_REQUEST['email']) : "";
    $mNo = isset($_REQUEST['teleNo']) ? htmlspecialchars($_REQUEST['teleNo']) : "";
    $CF = isset($_REQUEST['preferredFacility']) ? htmlspecialchars($_REQUEST['preferredFacility']) : "";
    $address = isset($_REQUEST['postalAddress']) ? htmlspecialchars($_REQUEST['postalAddress']) : "";
    $PCC = isset($_REQUEST['contactChoice']) ? htmlspecialchars($_REQUEST['contactChoice']) : "";

    include "GD.php";

 
    $fname = mysqli_real_escape_string($conn, $firstName);
    $sname = mysqli_real_escape_string($conn, $surname);
    $email = mysqli_real_escape_string($conn, $email);
    $mNo = mysqli_real_escape_string($conn, $mNo);
    $CF = mysqli_real_escape_string($conn, $CF);
    $address = mysqli_real_escape_string($conn, $address);
    $contactChoice = mysqli_real_escape_string($conn, $contactChoice);

    // Insert user input into the database
    $query = "INSERT INTO CT_expressedInterest (forename, surname, postalAddress, mobileTelNo, email, catID, sendMethod)
              VALUES ('$fname', '$sname', '$address', '$mNo', '$email', '$CF', '$contactChoice')";
    if (mysqli_query($conn, $query)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

?>

			<h1 class= "heading">CONFIRMATION</h1>
			<h2 class="subHeading">We have received the following information.</h2>
			<label id= "confLab">FIRST NAME:</label> 
				<p class= "output"> <?php echo"$fname \n"?> </p>
				
			
			<label id= "confLab" >SURNAME:</label>
			 
				<p class= "output"> <?php echo"$sname \n"?> </p>
			
			<label id= "confLab">EMAIL:</label>
			 
				<p class= "output"> <?php echo"$email \n"?> </p>
			
			
			<label id= "confLab">MOBILE NUMBER:</label>
			 
				<p class= "output"> <?php echo"$mNo \n"?> </p>
			
			
			<label id= "confLab">ADDRESS:</label>
			 
				<p class= "output"> <?php echo"$address \n"?> </p>
			
			
			<label id= "confLab">PREFFERED CONTACT CHOICE:</label>
			 
				<p class= "output"> <?php echo"$PCC \n"?> </p>
			
			
			<label id= "confLab">CHOICE OF FACILITY:</label>
			 
				<p class= "output"> <?php echo"$CF \n"?> </p>
			
		<div id="returnButton">
                  <a href='AssessmentBackup.html'>RETURN HOME</a>
        </div>
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