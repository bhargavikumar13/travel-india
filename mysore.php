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
	<title>Mysore</title>
	<link rel="stylesheet" type="text/css" href="mylink.css">
	<link rel="stylesheet" type="text/css" href="destination.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,500" rel="stylesheet">
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
						<a href="h_page.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Planner</a>						
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
						<a href="about.php"><i class="fa fa-link"></i> About</a>
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
		<script>
			function openNav() {
	  		document.getElementById("myNav").style.width = "100%";
			}

			function closeNav() {
	  		document.getElementById("myNav").style.width = "0%";
			}
		</script>
		
		<img src="mysoremain.jpg" id="keralamain">
		<div class="left">
			<div class="lefttext">An incredibly breathtaking example of Indo - Saracenic style of architecture, the Mysore Palace is a magnificent edifice located in Mysore in the state of Karnataka. Also known as the Amba Vilas Palace, it is the former palace of the royal family of Mysore and is still their official residence. Referred to as the 'City of Palaces', Mysore houses seven other places, but none come close to awe - inspiring grandeur of this palace. Mysore Palace was built in the year 1912 for the 24th Ruler of the Wodeyar Dynasty and is counted amongst one of the biggest palaces in the country. </div>
			<img src="mysore1.jpg" class="pics">
		</div>
		<div class="right">
			<img src="mysore2.jpg" class="pics">
			<div class="righttext">The Brindavan Gardens, a celebrated beauty spot in this part of India is world famous for its symmetric design. It is one of the most beautifully laid out terrace gardens in the world. The creation of this garden in the Krishnaraja Sagar Dam site has been the achievement of Sir Mirza Ismail, the then Dewan of the princely State of Mysore. The beautification of the whole dam complex was conceived by Sir Mirza Ismail. Modeled on the design of the Shalimar Gardens of Kashmir in the Mughal style, the garden is enriched with a number of terraces, parterres, fountains, running and cascading waterchannels, water chutes, lush green lawns, flower beds, shrubs and trees. Today, the Brindavan Gardens is world famous for its ethereal beauty, grandeur and illumination/ musical fountain.</div>
		</div>
		<div class="left">
			<div class="lefttext">The Chamundeshwari Temple is traditional Hindu temple located on the eastern edge of Mysore at the height of 1000ft on the Chamundi hills. Dedicated to and named after goddess Durga, the temple also has statues of Nandi and Mahishasura, the demon. Being one of the oldest temples in the palace city of Mysore, the temple is a must-visit attraction for the travellers. The Chamundeshwari Temple is considered as a Shakti Peetha and is one among the 18 Maha Shakti Peethas. The temple exhibits a divine aura and offers an exhilarating view of the Mysore city.</div>
			<img src="mysore3.jpg" class="pics">
		</div>
		<div class="right">
			<img src="mysore4.jpg" class="pics">
			<div class="righttext">The Jaganmohan Palace was built during rule of Krishnaraja Wodeyar III in 1861, as an alternate retreat for the royal family. The Mysore Palace, which was the original home of the royal family, was burnt down in a fire and the construction of a new palace in its place was started in the year 1897. The Royal family lived in this palace till the construction of the new Amba Vilas Mysore Palace in 1912. The installation of Krishnaraja Wodeyar IV took place in a pavilion inside the Jaganmohan Palace in 1902. The early convocations of the Mysore University were also held in this palace. The first session of the Legislative Council of the Mysore state was held here in July 1907. The Legislative Council was then called as the Representative Council and was presided over by the Diwan. 
</div>
		</div>

</body>
</html>
