<?php require("./gallery/plogger/plogger.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        
        <!-- HOUSEKEEPING -->
        
            <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
            <title>Pittsford Panthers Robotics | Gallery</title>
            <link rel="shortcut icon" href="Images/PP.ico" type="image/x-icon" />
            <link rel="icon" href="Images/PP.ico" type="image/x-icon" />

        <!-- PLOGGER -->
        
            <?php the_plogger_head(); ?>  
            
        <!-- STYLESHEETS -->
        
            <link rel="stylesheet" type="text/css" href="robotics.css" />
            
           
            <link rel="stylesheet" type="text/css" href="IEStyle.css" />
            
   
            
    	<link href="first.css" rel="stylesheet" type="text/css">
            
   
            
    	<style type="text/css">
.auto-style5 {
	border-width: 0px;
}
</style>
            
   
            
    </head>

    <body>

        <div id="wrap">

            <a href="./index.html"><div id="header"></div></a>

            <!-- SIDEBAR -->
            
                <div id="sidebar">
                
                <!-- NAVIGATION LIST -->

                    <ul id="nav">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="http://www.pittsfordrobotics.org/wordpress/">Blog</a></li>                    
                    <li class="current_page"><a href="./gallery.php">Gallery</a></li>
                    <li><a href="./calendar.html">Calendar</a></li>
                    <li><a href="./sponsors.html">Sponsors</a></li>
                    <li><a href="./donations.html">Donations</a></li>
                    <li><a href="./subteams.html">Subteams</a></li>
                    <li><a href="./game.html">The Game</a></li>
                    <li><a href="./first.html">About FIRST</a></li>
						<li><a href="./parts.html">3D Printed&nbsp; Parts</a></li>
                    <li><a href="./resources.html">Resources</a></li>
                    </ul>

                <hr />
                
                <!-- MAJOR SPONSORS -->
                
                    <!--SENTRY SAFE-->
						<div id="sponsors">
                        <a href="http://sentrysafe.com/">
					<img alt="" height="55" src="Images/Sentry.jpg" width="153"></a><br />
<!--XEROX--><a href="http://www.xerox.com/"><img border="0" alt="Xerox" width="150" src="Images/xlogo.gif" /></a><br>
					<a href="http://www.rochesteroptical.com/">
					<img alt="Rochester Optical" class="auto-style5" height="72" src="Images/RochesterOpticalLogo_sm.png" width="150"></a>
					<img alt="Cisco" height="68" src="Images/Cisco_sm.jpg" width="154" /><hr /><br /></div>
<object width="150" height="91">
<param name="movie" value="CountDownShip.swf" />
	<embed src="file:///K:/SHS/Technology%20Education/Holliday%20B/Group%20Projects/Robotics%202014/CountDownShip.swf" width="150" height="91"></embed></object>
                <!-- FIRST LINKS -->
                
                    <center><a href="http://www.usfirst.org/"><img src="Images/firstLogo.jpg" alt="FIRST" width="150" border="0" /></a>
                    <a href="http://www.usfirst.org/">FIRST Robotics Website</a></center>

                <!--<hr />
                

                    <object width="150" height="91">
                    <param name="movie" value="CountDownShip.swf" />
                    <embed src="CountDownShip.swf" width="150" height="91">
                    </embed>
                    </object>-->

                </div>

            <!-- MAIN -->
            
                <div id="main" style="height:400px" >

                    <?php the_plogger_gallery(); ?>
                    
                    <br /><br />
                    
                    <a href="./gallery/plogger/plog-admin/plog-upload.php">Upload</a>

                </div>
            
            <!-- FOOTER -->

                <div id="footer">

                    <p align="center">Copyright &copy; 2009-2013 Pittsford Panthers Robotics Club. All Rights Reserved.</p>

                </div>
            
        </div>

    </body>

</html>