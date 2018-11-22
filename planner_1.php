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
	<title>planner</title>
	<link rel="stylesheet" type="text/css" href="mylink.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
    <script type="text/javascript" src="javascript.js"></script>
	<style type="text/css">
			body 
			{
				background-image: url(planner1.jpg);
		    	/* Center and scale the image*/
		        background-position: center;
	    		background-repeat: no-repeat;
	    		background-size: 100%;
	    		background-attachment: fixed;
	    		margin: 0px;
            }
                .login-form {
                position: absolute;
                top: 20%;
                left: 5%;
                right: 65%;
                bottom: 15%;
                display: inline-block;
                background-color: white;
                border-radius: 8px;
                border: 2px solid #d8dee2;
                background: rgba(255, 255, 255, 0.6);
            }
            .login-form td {
                padding: 15px;
            }
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

        </div>

        <div class="login-form">
            <span style="color: #e15b00;font-weight: 700;font-size: 20px;align-self: center;left: 4%; top: 40%;"> Planner </span><br>
            <form name="form" method="POST" onsubmit="hello()">
            <table>
                <tr>
                    <td>
                         <select class="destclass" name="Destination1" style="display: block;" id="start" required>
                            <option>Select</option>
                            <option>Kerala</option>
                            <option>Delhi</option>
                            <option>Jaipur</option>
                            <option>Agra</option>
                            <option>Mysore</option>
                            <option>Varanasi</option>
                            <option>Goa</option>
                            <option>Himachal Pradesh</option>
                            <option>Kolkata</option>
                            <option>Pune</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <select name="Destination2" style="display: none;">
                        <option>Select</option>
                        <option>Kerala</option>
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Agra</option>
                        <option>Mysore</option>
                        <option>Varanasi</option>
                        <option>Goa</option>
                        <option>Himachal Pradesh</option>
                        <option>Kolkata</option>
                        <option>Pune</option>
                    </select>
                    </td>
                </tr>
                <tr name="Destination3" style="display: none;">
                    <td>
                    <select>
                        <option>Select</option>
                        <option>Kerala</option>
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Agra</option>
                        <option>Mysore</option>
                        <option>Varanasi</option>
                        <option>Goa</option>
                        <option>Himachal Pradesh</option>
                        <option>Kolkata</option>
                        <option>Pune</option>
                    </select>
                    </td>
                </tr>
                <tr name="Destination4" style="display: none;">
                    <td>
                     <select>
                        <option>Select</option>
                        <option>Kerala</option>
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Agra</option>
                        <option>Mysore</option>
                        <option>Varanasi</option>
                        <option>Goa</option>
                        <option>Himachal Pradesh</option>
                        <option>Kolkata</option>
                        <option>Pune</option>
                    </select>
                    </td>
                </tr>
                <tr name="Destination5" style="display: none;">
                    <td>
                    <select>
                        <option>Select</option>
                        <option>Kerala</option>
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Agra</option>
                        <option>Mysore</option>
                        <option>Varanasi</option>
                        <option>Goa</option>
                        <option>Himachal Pradesh</option>
                        <option>Kolkata</option>
                        <option>Pune</option>
                    </select>
                    </td>
                </tr>
                <tr name="Destination6" style="display: none;">
                    <td>
                    <select>
                        <option>Select</option>
                        <option>Kerala</option>
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Agra</option>
                        <option>Mysore</option>
                        <option>Varanasi</option>
                        <option>Goa</option>
                        <option>Himachal Pradesh</option>
                        <option>Kolkata</option>
                        <option>Pune</option>
                    </select>
                    </td>
                </tr>
                <tr name="Destination7" style="display: none;">
                    <select>
                        <option>Select</option>
                        <option>Kerala</option>
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Agra</option>
                        <option>Mysore</option>
                        <option>Varanasi</option>
                        <option>Goa</option>
                        <option>Himachal Pradesh</option>
                        <option>Kolkata</option>
                        <option>Pune</option>
                    </select>
                </tr>
                <tr name="Destination8" style="display: none;">
                    <td>
                    <select>
                        <option>Select</option>
                        <option>Kerala</option>
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Agra</option>
                        <option>Mysore</option>
                        <option>Varanasi</option>
                        <option>Goa</option>
                        <option>Himachal Pradesh</option>
                        <option>Kolkata</option>
                        <option>Pune</option>
                    </select>
                    </td>
                </tr>
                <tr name="Destination9" style="display: none;">
                    <td>
                    <select>
                        <option>Select</option>
                        <option>Kerala</option>
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Agra</option>
                        <option>Mysore</option>
                        <option>Varanasi</option>
                        <option>Goa</option>
                        <option>Himachal Pradesh</option>
                        <option>Kolkata</option>
                        <option>Pune</option>
                    </select>
                    </td>
                </tr>
                <tr name="Destination10" style="display: none;">
                    <td>
                    <select>
                        <option>Select</option>
                        <option>Kerala</option>
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Agra</option>
                        <option>Mysore</option>
                        <option>Varanasi</option>
                        <option>Goa</option>
                        <option>Himachal Pradesh</option>
                        <option>Kolkata</option>
                        <option>Pune</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="cursor: pointer; font-size: 10px; color: blue;" onclick="dest()">+Add another Destination<br></span>
                    </td>
                    <td>
                        <span style="cursor: pointer; font-size: 10px; float: right; padding-bottom: 10px;color: blue;" onclick="destdel()">-Delete Destination<br></span>
                    </td>
                </tr>
            </table>
            
            
            <!-- <span style="color: #e15b00;font-weight: 400;font-size: 15px;align-self: left; padding: 21px"> Start Date </span> -->
            <label style="color: #e15b00;font-weight: 600;font-size: 15px;float:  left; line-height: 2.7em; left: 4%; top: 40%;">Start Date:&emsp;<input type="date" name="startdate" style="width: 62%; float: none; margin: 0;" required></label>
            <div style="left: 4%; top: 40%;">
            <a href="planner_act.php" onclick="hello()" id="sub"><p>See your plan</p></a>
        </div></form>

        </div>
    </body>
</html>