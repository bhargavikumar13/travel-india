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
	<title>Varanasi</title>
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
		<img src="varanasimain.jpg" id="keralamain">
		<div class="left">
			<div class="lefttext">Kashi Vishwanath temple is an important temple located in Varanasi. It is a famous shrine dedicated to Lord Shiva, Hindu God. It is one of the 12 holiest Shiva temples termed as jyotrilingas. Varanasi is also called as Kashi and Shiva is considered as the ruler of the universe. Vishwanath refers to the term ruler of the universe.The temple will be at prime beauty throughout the year. Winter (October – March) has a pleasant climate which makes sightseeing easier. The rituals starts early by 3 am in the morning. The second ritual starts by 11:15 am. In the evening, rituals starts at 7 pm, 9 pm and 10:30 pm. The temple closes by 11 in the night.</div>
			<img src="varanasi1.jpg" class="pics">
		</div>
		<div class="right">
			<img src="varanasi2.jpg" class="pics">
			<div class="righttext">The Chunar fort is situated in the Vindhya Range at a distance of about 45 odd km from Varanasi. The Chunar fort is located in the Mirzapur district. According to the Puranas the oldest name of Chunar was Charanadri as Lord Vishnu had taken his first step in his Vaman incarnation in the dynasty of Great king Bali. However Chunar came into prominence after the visit of Babar followed by Shershah Suri, Humayun, Akbar, Aurangzeb and finally the Britishers. 

It is said that Maharaja Vikramaditya, the king of Ujjain established the fort of Chunar. According to the Alha Khand, King Sahadeo made this fort as his capital and established the statue of Naina Yogini in a cave of Vindhya hill. To commemorate his victory on 52 rulers, King Sahadeo built a stone umbrella inside the fort.
</div>
		</div>
		<div class="left">
			<div class="lefttext">The Alamgir Mosque enjoys an enviable location. Flanked by the sacred River Ganges, it overlooks the Panchganga Ghat. The masjid manifests impressive architectural skills. It is a fine example of what can be achieved if Hindu and Mughal styles of architecture are beautifully blended. The Hindu effect is more noticeable in the lower portions of the mosque and the enclosure walls whereas in the rest of the mosque the Muslim effect is far more conspicuous.
When you are out on a sight seeing trip to visit the various Tourist Attractions in Varanasi, make sure that the Alamgir Mosque is included. It is undisputedly a fine edifice that makes a mark in the minds of all onlookers. The domes, the turrets, the pillars are all reflective of the remarkable dexterity of Indian craftsmen. One should not miss out an opportunity to witness this commanding structure in Uttar Pradesh, India.</div>
			<img src="varanasi3.jpg" class="pics">
		</div>
		<div class="right">
			<img src="varanasi4.jpg" class="pics">
			<div class="righttext">Godowlia Market is the oldest and most loved market for its variety of goods and its privilege to offer wholesale to retail goods. The archaic and dilapidated buildings posing a threat to innovation are the recognition of the market. The market is nearly 3kms from Varanasi Cantt Railway Station and could be reached within 10 minutes by rickshaw. Godowlia Market is Located in Maheshpur, Godowlia is the Central Business District (CBD) of Varanasi.</div>
		</div>

</body>
</html>
