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
	<title>Himachal</title>
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
		
		<img src="himachalmain.jpg" id="keralamain">
		<div class="left">
			<div class="lefttext">Nestled in between the snow-capped slopes of the Pir Panjal and the Dhauladhar ranges, Manali is one of the most popular hill stations in the country. With jaw-dropping views, lush green forests, sprawling meadows carpeted with flowers, gushing blue streams, a perpetual fairy-tale like mist lingering in the air, and a persistent fragrance of pines and freshness -  Manali has been blessed with extraordinary scenic beauty. From museums to temples, from quaint little hippie villages to bustling upscale streets, river adventures to trekking trails, Manali has ever a reason to be the tourist magnet it is, all year round.

Clean roads, swaying eucalyptus trees, endearing little eateries, small kitschy local market places, and cafes which serve delicious local food at unbelievable prices, Old Manali is a serene, tranquil place, whose lingering silence is broken only by the twittering of the birds and the sound of the roaring waters of the Kullu river.
</div>
			<img src="himachal1.jpg" class="pics">
		</div>
		<div class="right">
			<img src="himachal2.jpg" class="pics">
			<div class="righttext">Strung out along a 12km ridge, with steep forested hillsides falling away in all directions, the Himachal capital is a good appetite-whetter for the awe-inspiring mountain tracts of the state's interior. Shimla is one of India's most popular hill resorts, buzzing with a happy flow of Indian vacationers and full of relics of its previous life as the summer capital of British India. Traffic is banned from the central part of town, so walking is pleasant – even when huffing and puffing uphill. The long, winding main street, the Mall, runs east and west just below the spine of the hill. South of it, the maze-like alleys of the bustling bazaar cascade steeply down to traffic-infested Cart Rd. </div>
		</div>
		<div class="left">
			<div class="lefttext">Experience a serene vacation exploring the exquisiteness of nature with a vacation in the picturesque Dharamshala. Situated at an average altitude of 1,475 meters above sea level, Dharamshala lies on the scenic stretch of land of Kangra Valley making tourists spellbound for its spectacular beauty. Often cited as the ‘Little Lhasa of India’, Dharamshala is popularly known as the holy residence of the exiled Tibetan monk Dalai Lama. With the backdrop of the breathtaking Dhauladhar ranges, Dharamshala is the one of the most tranquil destinations which you will find in North India, the perfect amalgamation of natural beauty and culture. Surrounded by thick deodar cedar trees and the snow capped peaks which decorate the landscape, the quaint city is visited by thousands of tourists to beat the summer blues and explore the best places to visit in Dharamshala.</div>
			<img src="himachal3.jpg" class="pics">
		</div>
		<div class="right">
			<img src="himachal4.jpg" class="pics">
			<div class="righttext">The tiny tinsel town Dalhousie tucked away in the lap of Himachal Pradesh is a piece of paradise for all the travellers. It boasts of old world charm, mesmerising natural landscape, pine-clad valleys, flower bedecked meadows, fast flowing rivers, magnificent misty mountains and some of the most spectacular views in the world. The air smells of the Scottish and Victorian architecture and the ambience reminds you of the pristine British flavours.

			Dalhousie, one of the favourite among most tourists travelling to Himanchal Pradesh is famously known for its mesmerizing natural beauty and its old world charm. This hill station was one of the most favourite summer destinations of the ruling Britishers and this is truly reflected in the majestic Victorian style mansions in this region. Situated far from the buzzing cities in the country, this quaint town transports you to a pollution-free environment in the lap of nature. Dalhousie is known for its scenic beauty has a number mountains and river streams that tourists must visit</div>
		</div>

</body>
</html>
