<?php
    session_start();
    if (!isset($_SESSION['username']) && $_SERVER['REQUEST_METHOD'] == "POST") {
        if (check_login($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = $_POST['username'];
        }
    }
    
    function check_login($username, $password) {
        if ($username == "root@gmail.com" && $password == "password") {
            return true;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>map</title>
	<link rel="stylesheet" type="text/css" href="mylink.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<style type="text/css">
			body 
			{
				background-image: url(wt_map1.jpg);
		        background-position: center;
	    		background-repeat: no-repeat;
	    		background-size: 100%;
	    		background-attachment: fixed;
	    		margin: 0px;
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
		<a href="map_page.php" class="d">
				<i class="material-icons" style="position: fixed; left: 380px; top: 530px; background-attachment: fixed;">
				</i>
		</a>
			
			<!-- name="kerala" -->
		<a href="delhi.php" class="d" title="Delhi" target="_blank"><i class="material-icons" style="position: absolute; left: 29%; top: 35%; background-attachment: fixed;">place</i></a>
		<a href="jaipur.php" class="d" title="Jaipur" target="_blank"><i class="material-icons" style="position: absolute; left: 24%; top: 40%; background-attachment: fixed;">place</i></a><!-- name="jaipur" -->
		<a href="agra.php" class="d" title="Agra" target="_blank"><i class="material-icons" style="position: absolute; left: 31%; top: 39%; background-attachment: fixed;">place</i></a><!-- name="agra" -->
		<a href="mysore.php" class="d" title="Mysore" target="_blank"><i class="material-icons" style="position: absolute; left: 27%; top: 76%; background-attachment: fixed;">place</i></a><!-- name="mysore" -->
		<a href="varanasi.php" class="d" title="Varanasi" target="_blank"><i class="material-icons" style="position: absolute; left: 33%; top: 40%; background-attachment: fixed;">place</i></a><!-- name="varanasi" -->
		<a href="goa.php" class="d" title="Goa" target="_blank"><i class="material-icons" style="position: absolute; left: 25%; top: 72%; background-attachment: fixed;">place</i></a><!-- name="goa" -->
		<a href="himachal.php" class="d" title="Himachal" target="_blank"><i class="material-icons" style="position: absolute; left: 29%; top: 28%; background-attachment: fixed;">place</i></a><!-- name="himachal pradesh" -->
		<a href="kolkata.php" class="d" title="Kolkata" target="_blank"><i class="material-icons" style="position: absolute; left: 40%; top: 53%; background-attachment: fixed;">place</i></a><!-- name="kolkata" -->
		<a href="pune.php" class="d" title="Pune" target="_blank"><i class="material-icons" style="position: absolute; left: 26%; top: 61%; background-attachment: fixed;">place</i></a><!-- name="pune" -->	    
		<a href="kerala.php" class="d" title="Kerala" target="_blank"><i class="material-icons" style="position: absolute; left: 27.5%; top: 83%; background-attachment: fixed;">place</i></a><!-- name="pune" -->	    
	</body>
</html>