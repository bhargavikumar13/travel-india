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
	<title>Pune</title>
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
	
		<img src="punemain.jpg" id="keralamain">
		<div class="left">
			<div class="lefttext">The Aga Khan Palace is also known as the Gandhi National Museum and is a part of the Indian freedom struggle. It served as a prison for national leaders like Mahatma Gandhi during the Quit India Movement in 1942.The Aga Khan Palace was donated to India by Aga Khan IV during 1969. The museum also serves as a memorial wherein the remains (samadhi) of Mahatma Gandhi wife, Kasturba Gandhi rest in peace. The palace was built in 1892 by Sultan Mohammed Shah, Aga Khan III.
			The palace comprises of five halls and large verandahs. Although the palace is architecturally Islamic yet it includes hints of Italian art with many arches. The palace also contains a gallery which has belongings of Gandhiji like clothes, footwear and a few more. The palace is situated on Nagar Road in Kalyani Nagar.
			When taking a trip to Pune, the Aga Khan Palace is a must visit as it is known for its historical as well as architectural significance.</div>
			<img src="pune1.jpg" class="pics">
		</div>
		<div class="right">
			<img src="pune2.jpg" class="pics">
			<div class="righttext">
			The former love-nest of Bajirao and Kashi, the Shaniwar Wada in Pune is now one of the most popular tourist destinations in Maharashtra. This grand mansion was built by the Peshwa Bajirao I himself as the residence of the Peshwas. Covering a vast area of about 625 acres, the palace is the ideal place to catch a glimpse of India's rich history. The place never fails to amaze the visitor with its various forts and fountain, and the majestic statue of Baji Rao I that greets the visitor at the entrance of the palace.</div>
		</div>
		<div class="left">
			<div class="lefttext">Sinhagad Fort is one of the most famous historical places to visit in Pune. It was earlier named Kondana and believed to have been built about 2000 years ago. Sinhagad Fort occupies an important place in the history of Pune as there were many important battles like the famous Battle of Sinhagad fought here. It boasts of a strategic location and is protected by natural frontiers.
The fort makes a mesmerising scenery with the Sahyadri mountains and serves an as popular place for outings in Pune. Many trekking lovers also flock the place for an enterprising day to complete a one day trek from the village to the fort. Some notable attractions which you can see inside the fort are Tanaji memorial, the tomb of Rajaram Chhatrapati, a Kali temple, some military stables and a brewery.</div>
			<img src="pune3.jpg" class="pics">
		</div>
		<div class="right">
			<img src="pune4.jpg" class="pics">
			<div class="righttext">One of the most famous temples in Pune, Chaturshringi Mountain is located on the top of a hill right on the Senapati Bapat Road. It is said to have been built during the reign of the Maratha king Chhatrapati Shivaji Raje Bhosle. The presiding deity of the temple is Goddess Chaturshringi, also known as Goddess Ambareshwari. To reach the main sanctum of the temple, tourists will have to climb approximately 100 stairs but the view of the hill that one gets from the top is worth all the efforts.
			The best time to visit the temple will be during the festival celebration as this when one can see the temple in full pomp and show. Navratri, Holi, Chaitra Padwa, and Ganesh Chaturthi are the best time to visit the temple</div>
		</div>

</body>
</html>
