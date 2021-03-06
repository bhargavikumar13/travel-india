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
	<title>kerala</title>
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
		</div>
		<img src="keralamain.jpg" id="keralamain">
		<div class="left">
			<div class="lefttext">Thekkady is located about 257 km from Trivandrum, 114 km from Madurai City and Madurai Airport, 145 km from Cochin International Airport and 114 km from Kottayam railway station. Thekkady is located near to Kerala-Tamil Nadu border. The sanctuary is famous for its dense evergreen, semi-evergreen, moist deciduous forests and savanna grass lands. It is home to herds of elephants, sambar, tigers, gaur, lion-tailed macaques and Nilgiri langurs.<br>
			
			The Periyar Wildlife Sanctuary is spread across 777 km2, of which 360 km2 is thick evergreen forest. The splendid artificial lake formed by the Mullaperiyar Dam across the Periyar River adds to the charm of the park. The greatest attractions of Periyar are the herds of wild elephants, deer and bison that come down to drink in the lake. The sanctuary can be accessed through a trekking, boating or jeep safari.</div>
			<img src="kerala1.jpg" class="pics">
		</div>
		<div class="right">
			<img src="kerala2.jpg" class="pics">
			<div class="righttext">Vembanad is the longest lake in India,and the largest lake in the state of Kerala. Spanning several districts in the state of Kerala, it is known as Vembanadu Lake in Kottayam, Punnamada Lake in Kuttanad and Kochi Lake in Kochi. Several groups of small islands including Vypin, Mulavukad, Vallarpadam, Willingdon Island are located in the Kochi Lake portion. Kochi Port is built around the Willingdon Island and the Vallarpadam island.

			The Nehru Trophy Boat Race is conducted in a portion of the lake. High levels of pollution have been noticed at certain hotspots of the Vembanad backwaters. Government of India has identified the Vembanad wetland under National Wetlands Conservation Programme.</div>
		</div>
		<div class="left">
			<div class="lefttext">Athirappilly Falls, is situated in Athirappilly Panchayat, Chalakudy Taluk, Thrissur District of Kerala, India on the Chalakudy River, which originates from the upper reaches of the Western Ghats at the entrance to the Sholayar ranges.It is the largest waterfall in Kerala, which stands tall at 80 feet. Just a short drive from Athirappilly to the Vazhachal falls, which is close to dense green forests that are home to many endangered and endemic species of flora and fauna.

			There is another waterfall on the way from Athirappilly to Vazhachal Falls, in close proximity to the road, which is locally called "Charpa Falls". Athirappilly Falls is the largest waterfall in Kerala and is nicknamed "The Niagara of India".</div>
			<img src="kerala3.jpg" class="pics">
		</div>
		<div class="right">
			<img src="kerala4.jpg" class="pics">
			<div class="righttext">Cherai Beach is a beach located in Cherai, a suburb of the city Kochi in the state of Kerala, India. One of the most visited beaches in the state, it is situated at around 25 km from downtown Kochi and 20 km from Cochin International Airport.

			The beach is around 10 km long and is ideal for swimming as the tide is mostly low and the waves are gentle. It is known for frequent dolphin sightings. It is one of the few places where the backwaters and the sea can be seen in a single frame.[2] Cherai Beach offers the less busier and cleaner option accessible to Kochi and always attract the tourists from around and other states as well.</div>
		</div>

</body>
</html>
