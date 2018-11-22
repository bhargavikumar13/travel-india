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
	<title>Kolkata</title>
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
		
		<img src="kolkatamain.jpg" id="keralamain">
		<div class="left">
			<div class="lefttext">The Victoria Memorial, a huge monument made of white marble located in the heart of the City of Joy, Kolkata (erstwhile Calcutta) in West Bengal, India is one of the most famous monuments in West Bengal that has become a museum and popular tourist spot of the state. A brainchild of George Curzon, 1st Marquess Curzon of Kedleston and Viceroy of India, this monument epitomising beauty and elegance was dedicated to the memory of Queen Victoria (1819–1901). This grand and exquisite memorial not only stands as reminiscence to the rule of British Crown in the Indian subcontinent but also stands out as an excellent architectural gem in Indo-Saracenic revivalist style. It is a must visit tourist destination for first time visitors to experience the essence of Victorian era in the midst of the bustling metro city of Kolkata.</div>
			<img src="kolkata1.jpg" class="pics">
		</div>
		<div class="right">
			<img src="kolkata2.jpg" class="pics">
			<div class="righttext">The iconic landmark of Kolkata, Howrah Bridge is a massive steel structure which is considered as one of the longest cantilever bridges of its type in the world. Also called as Rabindra Setu, it extends across the Hooghly River and connects Howrah and Kolkata. It is also regarded as one of the busiest ones among them as it carries a daily traffic of over 100,000 vehicles and countless pedestrians. For those who wish to see the grandeur of the bridge, you are recommended an excellent ride in the ferry services between Kolkata and Howrah, offered from Launch Ghat. The view of the city from the ferry, especially in the night, is priceless, to say the least. </div>
		</div>
		<div class="left">
			<div class="lefttext">Dakshineswar temple is one of the most revered, sacred temples in Kolkata, dedicated to goddess Kali. Dakshineswar Temple is one of the largest temples near Kolkata and it is also an architectural treasure. The temple was built in conventional Nava-ratna style. It boasts a towering height of more than 100 feet. The 12-spired temple with its massive courtyard is flanked by 12 other small temples, devoted to Lord Shiva. It was founded by Rani Rashmoni on the 31st of May 1855. The holy tithi was of Jagannath Deva Snanyatra. This widely famed temple of Dakshineswar is famous among pilgrims all over the world. It was at this very place that the Rama Krishna Paramhamsa, the highly revered religious thinker attained his spiritual vision and advocated the unity of all religions.</div>
			<img src="kolkata3.jpg" class="pics">
		</div>
		<div class="right">
			<img src="kolkata4.jpg" class="pics">
			<div class="righttext">The ninth oldest museum of the world and largest in India, the Indian Museum is located in the old city of Kolkata. The foundation stone of the Indian Museum was laid down in the year 1814 and has been a centre of multidisciplinary activities ever since. Popularly known as 'Jadughar', it exhibits some of the finest collection of historical importance ranging from contemporary paintings and a sacred relic of Buddha to Egyptian mummies and ancient sculptures. In addition to these, the Indian Museum boasts of some of the most exquisite collections of ornaments, fossils, skeletons, antiques, armours, and stunning Mughal paintings..</div>
		</div>

</body>
</html>
