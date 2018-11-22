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
	<title>Jaipur</title>
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
		<script>
			function openNav() {
	  		document.getElementById("myNav").style.width = "100%";
			}

			function closeNav() {
	  		document.getElementById("myNav").style.width = "0%";
			}
		</script>
		
		<img src="jaipurmain.jpg" id="keralamain">
		<div class="left">
			<div class="lefttext">Amer Fort is the best tourist attraction of Jaipur and the sprawling complex combines both immense fortifications with unexpected beauty and charm. The fort which visitors are able to explore today dates from the 16th century and is situated on a natural ridge 11km north of Jaipur. Elephants slowly transport tourists up the ridge in the main entrance courtyard and this makes for a wonderful entrance to the Amer Fort. Inside the palace are beautiful styled state rooms with semi-precious jewel inlaid decoration the finest example is the Sheesh Mahal the mirror palace. The Amer Fort is a top rate tourist attraction of Jaipur and must be visited by all tourists to the region.</div>
			<img src="jaipur1.jpg" class="pics">
		</div>
		<div class="right">
			<img src="jaipur2.jpg" class="pics">
			<div class="righttext">Located in the heart of the Pink City Jaipur, the City Palace was where the Maharaja reigned from. This palace also includes the famous 'Chandra Mahal' and 'Mubarak Mahal', and other buildings which form a part of the palace complex. The palace is located towards the northeast side of central Jaipur and has many courtyards and buildings. The palace was built between 1729 and 1732 AD by Sawai Jai Singh II. He ruled in Amer and planned and built the outer walls of the palace and later rulers added to the architecture of this palace. These additions have been known to take place right up to the 20th century. The urban layout of the city of Jaipur was commissioned to Vidyadhar Bhattacharya and Sir Samuel Swinton Jacob. The architectural styles are largely based on a fusion of Rajput, Mughal and European styles. Today, the 'Chandra Mahal' has been turned into a museum which is home to unique handcrafted products, various uniforms of the rulers and many more things pertaining to the royal heritage of the City Palace.
</div>
		</div>
		<div class="left">
			<div class="lefttext">Possibly the most serene sight amidst the chaos of Jaipur is the beautiful Jal Mahal Jaipur, the Water Palace. This low-rise symmetrical palace, that once was a shooting lodge for the Maharajah, appears to float in the centre of Sagar Lake. The light sand coloured stone walls of the Jal Mahal Jaipur are at a stark contrast to the deep blue of the waters of the lake, while from the innards of the palace lush foliage sprouts.This majestic scene makes the Jal Mahal Jaipur’s most photographed (and photograph friendly) monument but unfortunately exploration of the actual palace is off limits to the majority of visitors as it is to be transformed into an ultra exclusive restaurant.</div>
			<img src="jaipur3.jpg" class="pics">
		</div>
		<div class="right">
			<img src="jaipur4.jpg" class="pics">
			<div class="righttext">Laxmi Narayan Temple, also known as Birla Mandir, is one of Delhi's major temples and a major tourist attraction. Built by the industrialst Sh. J.K. Birla in 1939, this beautiful temple is located in the west of Connaught Place.The temple is dedicated to Laxmi (the goddess of prosperity) and Narayana (The preserver). The temple was inaugurated by Mahatma Gandhi on the condition that people of all castes will be allowed to enter the temple.The architectural style of the Birla temple is a blend of North Indian and South Indian styles of temple architecture. The temple tower or the ‘Gopuram’ exhibits the salient features of South Indian temples. The Jagadananda Vimanam built atop the sanctum sanctorum resembles the Oriya style of temple architecture. It took 10 years of dedicated and hard work of sculptors and artisans to complete the construction of this temple.</div>
		</div>

</body>
</html>
