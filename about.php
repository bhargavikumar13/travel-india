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
	<title>about</title>
	<link rel="stylesheet" type="text/css" href="mylink.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
			body 
			{
				background-opacity: 0.1;
		        background-position: center;
	    		background-repeat: no-repeat;
	    		background-size: 100%;
	    		background-attachment: fixed;
	    		margin: 0px;
			}
			.nav-tab:hover {
				background-color: #f79859;
			}
			.nav-tab {
				padding: 10px;
				color: black;
				border-left: 0.2px solid grey;
				border-radius: 4px;
			}
			.nav-tab a:link {
				color: black;
			}
			.nav-tab a:hover, a:active, a:focus {
				color: black;
			}
			#header {
				border: 0.2px solid grey;
			}
			.dropdown {
				position: absolute;
				margin-top: 1%;
				margin-left: -1%;
				background-color: rgba(245, 255, 250,0.6);
				opacity: 0;
				-webkit-transition: opacity 1s ease-in;
				-moz-transition: opacity 1s ease-in;
		    	-o-transition: opacity 1s ease-in;
    			-ms-transition: opacity 1s ease-in;
    			transition: opacity 1s ease-in;
			}
			.dropdown td {
				border-bottom: 0.2px solid grey;
				padding-top: 10px;
				padding-bottom: 10px;
				width: 160px;
				padding: 10px;
				cursor: pointer;
			}
			.destinations:hover .dropdown {
				opacity: 1;
			}
	</style>
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
	<div style="position: absolute; top: 7.8%; left: 0%; right: 0%; bottom: 45%; background-color: #bc721e; padding: 50px;">
			<span style="font-size: 100px;color: white; word-spacing: -40px; letter-spacing: -4px;position: absolute; left: 36%;color: #edd0ad; font-family: monospace;">
				About Us
			</span>
			<br/>
			<span style="font-size: 20px; color: white; position: absolute; left: 31%; top: 60%; font-family: monospace;">
				How we plan on changing your travel experience	
			</span>
	</div>
	<div style="position: absolute; top: 57%; text-align: center; left: 20%; right: 20%">
			<p style="font-family: Comic Sans MS; color: black; text-align: justify;">
	To make such experience easier to achieve, our focus has been how to help people travel better especially in India. For this reason, we have showcased a long list of tour packages to choose from. If you are into adventure, we probably have one for you. If you are into culture, then you have come to the right place. Our staff are routine travelers with proven track records. Should you require assistance on travel itineraries, booking, or travel advice in specific countries, please contact us and we’ll be more than happy to help you out.</p>
	<p style="font-family: Comic Sans MS; color: black; text-align: justify;">
We would like to thank those who have been very resourceful to the including our genius our visitors. At Travel India, we are looking forward to providing more value-added services to travelers around the world. We hope you enjoy surfing as much as we do.</p>
	</div>

	<div style="position: absolute; top: 105%; left: 18%; right: 10%">
		<span style="width: 100%;position: absolute;left: 31%; top: -24%; color: #bc721e">
			<h2>Meet Our Creators</h2>
		</span>
		<table style="width: 100%">
			<tr>
				<td>
					<img src="team_member_1.jpg" height="200px" width="200px" style="border-radius: 200px" class="team-member"></img>
				</td>
				<td>
					<img src="team_member_2.jpg" height="200px" width="200px" style="border-radius: 200px" />
				</td>
				<td>
					<img src="team_member_3.jpg" height="200px" width="200px" style="border-radius: 200px" />
				</td>
			</tr>
			<tr>
				<td>
					<h2 style="margin-left: 14%; display: inline-block;">Saipriya</h2>
				</td>
				<td>
					<h2 style="margin-left: 16%; display: inline-block;">Bhargavi</h2>
				</td>
				<td>
					<h2 style="margin-left: 14%; display: inline-block;">Navneetha</h2>
				</td>
			</tr>

		</table>
	</div>

</body>
</html>