<?php
    session_start();
    if (!isset($_SESSION['username']) && $_SERVER['REQUEST_METHOD'] == "POST") {
        if (check_login($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = $_POST['username'];
        }
    }
    function check_login($username, $password) {
        $mysqli = new mysqli("localhost", "root", "", "travel_india");
        $result = $mysqli->query("SELECT * from users WHERE username='" . $username . "' AND password='" . $password . "'");
        if ($result && $result->fetch_assoc()) {
            return true;
        } else {
            return false;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="mylink.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
		<style type="text/css">
			body 
			{
				background-image: url(homebg2.jpg);
		        background-position: center;
	    		background-repeat: no-repeat;
	    		background-size: 100%;
	    		background-attachment: fixed;
	    		margin: 0px;
			}
	</style>
	<script>
		function openNav() {
  			document.getElementById("myNav").style.width = "100%";
		}

		function closeNav() {
  			document.getElementById("myNav").style.width = "0%";
		}
		</script>
</head>
	<body>
		<a href="map_page.php">
			<i class="fa fa-globe fa-2x" style="position: absolute;padding-top: 5px;padding-left: 20px"></i>
		</a>
		<div id="header" align="right">
			<table>
				<tr>
					<td class="nav-tab">
						<a href="h_page.php" ><i class="fa fa-home" aria-hidden="true"></i> Home</a>
					</td>
					<td class="nav-tab">
						<a href="planner.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Planner</a>						
					</td>
					<td class="nav-tab destinations">
							<a href="#"><i class="fa fa-location-arrow" aria-hidden="true"></i> Destinations</a>
								<table class="dropdown">
								<tr>
									<td>
										<a href="himachal.php" target="_blank">
											Himachal Pradesh
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="delhi.php" target="_blank">
											Delhi
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="agra.php" target="_blank">
											Agra
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="varanasi.php" target="_blank">
											Varanasi
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="jaipur.php" target="_blank">
											Jaipur
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="kolkata.php" target="_blank">
											Kolkata
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="pune.php" target="_blank">
											Pune
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="goa.php" target="_blank">
											Goa
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="mysore.php" target="_blank">
											Mysore
										</a>
									</td>
								</tr>
									<tr>
									<td>
										<a href="kerala.php" target="_blank">
											Kerala
										</a>
									</td>
								</tr>
								</table>
					</td>
					<td class="nav-tab">
						<a href="about.php"><i class="fa fa-link" aria-hidden="true"></i> About</a>
					</td>
					<td class="nav-tab">
						<?php
                            if (isset($_SESSION['username'])) {
                                echo '<a href="login.php" class="login">
                                    <i  class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;' . $_SESSION['username'] . ' </a></td>
                                    <td class="nav-tab">
                                        <a href="logout.php" class="login">
                                        <i  class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Logout</a>  
                                    </td>';
                            } else {
                                echo '<a href="login.php"><i  class="fa fa-user-circle-o" aria-hidden="true"></i> Login</a></td>
                                <td class="nav-tab">
                                        <a href="signup.php">
                                        <i  class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; Signup</a>
                                </td>';
                            }
                        ?>
					<td>
						&nbsp;
					</td>
				</tr>
			</table>
		</div>
		</div>
	<div class="slideshow-container">

	<div class="mySlides fade">
	  
	  <img src="wt1_home.jpg" style="width:100%">
	  <div class="text">Incredile India</div>
	</div>

	<div class="mySlides fade">
	  
	  <img src="wt2_home.jpg" style="width:100%">
	  <div class="text">Incredible India</div>
	</div>

	<div class="mySlides fade">
	  
	  <img src="wt3_home.jpg" style="width:100%">
	  <div class="text">Incredible India</div>
	</div>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>

	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    slideIndex++;
	    if (slideIndex > slides.length) {slideIndex = 1}    
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";  
	    dots[slideIndex-1].className += " active";
	    setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
	</script>



	    
	</body>
</html>