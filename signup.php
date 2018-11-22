<?php
    session_start();
    if (!isset($_SESSION['username']) && $_SERVER['REQUEST_METHOD'] == "POST") {
        if (signup_user($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = $_POST['username'];
        }
    }

    function signup_user($username, $password) {
        $mysqli = new mysqli("localhost", "root", "", "travel_india"); //creates msql connection(db)
        $result = $mysqli->query("SELECT * from users WHERE username='" . $username . "'");
        if ($result && $result->fetch_assoc()) {
            return false;
        } else {
            $sql = "INSERT INTO users(username, password) VALUES ('" . $username. "', '". $password . "')";
            $result = $mysqli->query($sql);
            if (!$result) {
                return false;
            } else {
                return true;
            }
        }
    }
?>
<!DOCTYPE html>
<html>    
    <head>    
        <title>SignUp</title>
  <!--      <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
        <style type="text/css">
            body 
            {
                background-image: url(login_bg_3.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100%;
                background-attachment: fixed;
                margin: 0px;
            }
            .login-form {
                position: absolute;
                top: 20%;
                left: 35%;
                right: 35%;
                bottom: 30%;
                display: inline-block;
                background-color: white;
                border-radius: 8px;
                border: 2px solid #d8dee2;
                background: rgba(255, 255, 255, 0.6);
            }
            .login-form td {
                padding: 15px;
            }
            .login-form-header {
                font-size: 24px;
                font-weight: 400;
                letter-spacing: -.5px;
                font-family: "Arial";
                padding: 0px;
                display: inline-block;
                width: 100%;
                font-color: black;
            }
            .login-form-header td {
                align-content: center;
                text-align: center;
            }
            input[type="submit"]:hover {
                cursor: pointer;
            }
    </style>    
    <link href = "mylink.css" type = "text/css" rel = "stylesheet" />    
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
            <div class="login-form">
                <table class="login-form-header">
                    <tr>
                        <td>
                            <strong>Create Your Account on Travel India</strong>
                        </td>
                    </tr>
                </table>
                <hr/>

            <?php
                if (!isset($_SESSION['username']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
                    echo '<table style="width:100%;color: white; text-align: center">
                        <tr>
                            <td style="background-color: #ba563b; padding: 5px">
                                <strong>
                                    User Already Exists
                                </strong>
                            </td>
                        </tr>
                    </table>';
                }

                if (!isset($_SESSION['username'])) {
                    echo '
                <form method="POST" action="signup.php">
                    <table style="width: 100%;">
                        <tr>
                            <td style="text-align: right;">
                                <strong>Username</strong>
                            </td>
                            <td>
                                <input type="email" style="width: 100%; height: 25px" placeholder="bhargavi.kumar@gmail.com" name="username"/>
                            </td>
                        </tr>    
                        <tr>
                            <td style="text-align: right;">
                                <strong>Password</strong>
                            </td>
                            <td>
                                <input type="password" style="width: 100%; height: 25px" name="password"/>
                            </td>
                        </tr>
                    </table>
                    <table style="width: 100%">
                        <tr>
                            <td >
                                <input type="submit" style="color:white; background-color: #2e6da4; border-radius: 10px; width: 100%; font-size: 12px; padding: 10px;" value="Sign Up"></input>
                            </td>
                        </tr>
                    </table></form>';
                } else {
                    echo '<h3 style="text-align: center"> You are already logged in</h3>';
                }
            ?>
        </div>
    </body>    
</html>    