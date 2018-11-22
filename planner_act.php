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
	<title>map</title>
	<link rel="stylesheet" type="text/css" href="mylink.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
    <link rel="stylesheet" type="text/css" href="plannercss.css">
    <script type="text/javascript" src="javascript.js"></script>
	<style type="text/css">
			body 
			{
				background-color: white;
		    	/* Center and scale the image*/
		        background-position: center;
	    		background-repeat: no-repeat;
	    		background-size: 100%;
	    		background-attachment: fixed;
	    		
	    		margin: 0px;
			}
	</style>
    <script type="text/javascript">
            function func()
            {
                dests = [
                    sessionStorage.getItem("dest1"),
                    sessionStorage.getItem("dest2"),
                    sessionStorage.getItem("dest3"),
                    sessionStorage.getItem("dest4"),
                    sessionStorage.getItem("dest5"),
                    sessionStorage.getItem("dest6"),
                    sessionStorage.getItem("dest7"),
                    sessionStorage.getItem("dest8"),
                    sessionStorage.getItem("dest9"),
                    sessionStorage.getItem("dest10")
                ]
                    var i=0;
                    while(dests[i]!="Select") {
                        i=i+1;
                    }
                    plan(sessionStorage.getItem("startdate"),i);
                    daybday(sessionStorage.getItem("startdate"), dests);
            }
            function plan(date1,n)
            {
                date1 = date1.split("-");
                var mydate = new Date(date1[0], date1[1] - 1, date1[2]);
                var end = new Date(date1);
                end.setDate(mydate.getDate() + (n*4));
                document.getElementById("start").innerHTML = " " + mydate.toDateString();
                document.getElementById("end").innerHTML = " " + end.toDateString();

            }
            function daybday(sdate, dests)
            {
                    var i=0;
                    while(dests[i]!="Select")
                    {
                        
                        var temp = new Date(sdate)
                        temp.setDate(temp.getDate() + ((i)*4))
                        document.getElementById(""+(i+1)).innerHTML +=  dests[i] + '</h3>';
                         document.getElementById(""+(i+1)).parentElement.parentElement.innerHTML += '</td><td><h3>' +  (temp.toDateString()) + '</h3>'
                        i=i+1;
                    }
            }
    </script>
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
        <div style="background-image: url('plan3.jpg');background-repeat: no-repeat;background-size: 100%;position: absolute;width: 100%;height: 100%" id="dts">
            <table>
                <tr>
                    <td>
                        <h3 id="may">Your trip starts at</h3>
                    </td>
                    <td>
                        <h3 id="start"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="be">Your trip ends at</h3>
                    </td>
                    <td>
                        <h3 id="end"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="1"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="2"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="3"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="4"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="5"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="6"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="7"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="8"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="9"></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="10"></h3>
                    </td>
                </tr>
            </table>
        </div>
        <script type="text/javascript">
            func();
        </script>       
</body>
</html>