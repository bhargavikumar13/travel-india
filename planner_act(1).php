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
				background-color: white;
		    	/* Center and scale the image*/
		        background-position: center;
	    		background-repeat: no-repeat;
	    		background-size: 100%;
	    		background-attachment: fixed;
	    		
	    		margin: 0px;
			}
	</style>
</head>
	<body>
        <div id="header" align="right">
        <a href="map_page.html"><i class="material-icons" style="font-size:50px;position: absolute;left: 25px; top: 8px">public</i></a>
        <a href="h_page.html" style="color: #e15b00; border-bottom: 2px solid #e15b00;" > Home </a>
        <a href="planner.html"> Planner </a>
        <span class="homehead" onclick="document.getElementById('id01').style.display='block'" style="cursor:pointer;padding: 18px;">Login</span>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a href="kerala.html">Kerala</a>
            </div>
        </div>
        <span class="homehead" style="cursor:pointer;padding: 18px" onclick="openNav()">Destinations <i class="fa fa-angle-down" style="font-size:15px"></i></span>
        <script>
            function openNav() {
            document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
            document.getElementById("myNav").style.width = "0%";
            }
        </script>
        <a href="h_page.html"> About </a>
        </div>

        <h1>Planner</h1>


</body>
</html>