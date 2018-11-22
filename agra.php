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
	<title>Agra</title>
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
		
		<img src="agramain.jpg" id="keralamain">
	
		<div class="left">
			<div class="lefttext">The Taj Mahal is considered the finest example of Mughal architecture, a style that combines elements from Persian, Indian, and Islamic architectural styles. In 1983, the Taj Mahal became a UNESCO World Heritage Site and was cited as "the jewel of Muslim art in India and one of the universally admired masterpieces of the world's heritage.
	The Taj is an experience of its own kind, while on the one hand its magnanimity is so sublime, so on the other the exquisite inlay work and detailed craftsmanship together with the calligraphy is simply amazing. The combination simply leaves one absolutely mesmerized. The sheer splendour of the mausoleum is consummate, and the vastness is simply monumental.</div>
			<img src="agra1.jpg" class="pics">
		</div>
		<div class="right">
			<img src="agra2.jpg" class="pics">
			<div class="righttext">Also known as Lal Qila, Fort Rouge or Red Fort of Agra, the Agra Fort is a massive fortification located on the right bank of the river Yamuna in Agra, Uttar Pradesh, at a mere distance of 2.5 kilometres from the world famous Taj Mahal. Encompassing an entire city within its walls, this imposing structure was built in the year 1573 by Mughal supremo Akbar himself. Agra Fort was the main residence of the Mughal up to the year 1638 when the capital was shifted from Agra to New Delhi. Owing to its historic importance and bedazzling construction, the Agra Fort has also been listed as a UNESCO world heritage site.</div>
		</div>
		<div class="left">
			<div class="lefttext">The city of Agra is full of architectural wonders. On one hand, it has the famous Taj Mahal, and on the other hand, it has the Agra Fort and Itmad-ud-Daulah's mausoleum. Itmad-ud-Daulah's tomb is a highly ornate edifice, which is looked upon as an imminent precursor of the Taj Mahal as far as elaborate carvings and inlay work are concerned. The tomb marks a significant departure from the tombs of the Mughal dynasty built before its construction.The pure white and elaborately carved tomb of Itmad-ud-Daulah conforms to the Islamic style of architecture. The use of arched entrances, octagonal shaped towers or minarets, use of exquisitely carved floral patterns, intricate marble-screen work and inlay work are all representative of the Islamic style. The absence of a dome and the presence of a closed kiosk on top of this building and the use of chhatris (small domed canopies, supported by pillars) atop the four towers (minarets) instead of proper domes are reflective of local influence.</div>
			<img src="agra3.jpg" class="pics">
		</div>
		<div class="right">
			<img src="agra4.jpg" class="pics">
			<div class="righttext">As the name suggests, Kinari Bazaar is the wholesale market for fancy laces, borders and tassles. Additionally, you will find all kinds of beads and bead work items, fancy paper items including envelopes for gifting, adornments for idols and festival decorations, and much more. In short, Kinari Bazaar is a designer’s paradise. You will routinely find many design students and professionals that are hoping to find unique laces, borders, bead work and other accessories to realize their design vision or to simply unleash their creative juices. Kinari Bazaar also happens to be a popular jaunt with tourists for a lot of funky silver jewellery and accessories that is so very affordable</div>
		</div>

</body>
</html>
