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
	<title>Goa</title>
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
		<img src="goamain.jpg" id="keralamain">
		<div class="left">
			<div class="lefttext">The majestic cascade of white water, gushing over the steep, nearly vertical face of the mountain from a spectacular height of 1017ft; is both breath taking and awe inspiring, making one aware that there are many forces in nature much more powerful that the human mind and body.
The name ‘Dudhsagar’ literally translates to ‘sea of milk’ which many believe is an allusion to the white spray and foam that the great waterfall creates as it cascades into the waters of the lake. The falls are at their zenith during the monsoon season, although they are a popular attraction all year round.</div>
			<img src="goa1.jpg" class="pics">
		</div>
		<div class="right">
			<img src="goa2.jpg" class="pics">
			<div class="righttext">Overlooking the vast expanse of ‘seeming to be endless’ blue waters in front of it, Fort Aguada is one of the most popular tourist destinations of Goa. It receives a lot of tourist traffic all around the year. Reasons are that it’s excellent for sightseeing and also that it stands as a testimony to the glory of Portuguese empire.So this is one of oldest of its kinds in Asia as it was built in 1864. It is a four storeyed structure and when you take a view of the surrounding acreage from the lighthouse, it is just par amazing. For the ones who love to take photographs, this is a place for you to look out for beautiful scenes and clicking opportunities!</div>
		</div>
		<div class="left">
			<div class="lefttext">Calangute Beach is a perfect tourist retreat, filled with souvenir stalls, shacks and other stalls selling everything from beer, trinkets to pawns. All these simply add to the popularity of beach, making it a must-visit place. Huge showrooms with exquisite handicrafts from Tibet, Kasmir, Rajasthan, Indonesia and other striking places, queue the main road running towards Anjuna. The beach showcases a distinctive Goan beach culture and assures a splendid time with loved ones. So, if you want an unstrained solitude, plan for Calangute beach holidays as it's a perfect destination for nature freaks and the glorious view of locales enfolding serene ambiance, mark the place as a dream destination for beach bums.</div>
			<img src="goa3.jpg" class="pics">
		</div>
		<div class="right">
			<img src="goa4.jpg" class="pics">
			<div class="righttext">The Saturday Night Market is located at Arpora in North Goa, 4.3 kilometers from Anjuna beach, and 3.7 kilometers from the Baga beach. The market is 17.7 kilometers north of Panaji. Also called Ingo’s Night Market, it is open between 4 PM and 11 PM from November to April. This is a great place not just for shopping, but also for feeling the Goa ambience. There are party zones for revelers. There is live music, bars, and restaurants serving organic salads, chocolate waffles, Greek food, and local delicacies. You can shop clothes, bags, spices, funky jewelry, handicrafts, leather accessories, shoes, exotic lamps, and more.
The night market at Arpora attracts a huge number of tourists – both Europeans and Indians. It is particularly popular with foreign tourists, and the hippie culture. You will find many stalls run by Europeans, making the ambience distinctively cosmopolitan. The nearby Mackies Saturday Night Bazaar beside the Baga River is much smaller in size and has less character.</div>
		</div>

</body>
</html>
