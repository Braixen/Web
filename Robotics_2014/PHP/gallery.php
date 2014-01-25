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
        
            <!--[if lte IE 7]>
            <link rel="stylesheet" type="text/css" href="IEStyle.css" />
            <![endif]-->
   
            
    	<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	text-align: left;
}
</style>
   
            
    </head>

    <body>

        <div id="wrap">

            <a href="./index.html"><div id="header" class="auto-style1"></div></a>

            <!-- SIDEBAR -->
            
                <div id="sidebar">
                
                <!-- NAVIGATION LIST -->

                    <ul id="nav">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="http://news.pittsfordrobotics.org/">News</a></li>
                    <li class="current_page"><a href="./gallery.php">Gallery</a></li>
                    <li><a href="./calendar.html">Calendar</a></li>
                    <li><a href="./sponsors.html">Sponsors</a></li>
                    <li><a href="./donations.html">Donations</a></li>
                    <li><a href="./subteams.html">Subteams</a></li>
                    <li><a href="./game.html">The Game</a></li>
                    <li><a href="./first.html">About FIRST</a></li>
                    <li><a href="./resources.html">Resources</a></li>
                    </ul>

                <hr />
                
                <!-- MAJOR SPONSORS -->
                
                    <!--SENTRY SAFE-->

                        <a href="http://sentrysafe.com/"><img border="0" alt="Sentry Safe" width="150" src="Images/sentrysafelogo.png" /></a><br />
	<img alt="Cisco" height="68" src="Images/Cisco_sm.jpg" width="154" /><br />
<!--XEROX--><a href="http://www.xerox.com/"><img border="0" alt="Xerox" width="150" src="Images/xlogo.gif" /></a><hr />

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
            
                <div id="main" class="auto-style2">

                    <?php the_plogger_gallery(); ?>
                    
                    <br /><br />
                    
                    <a href="./gallery/plogger/plog-admin/plog-upload.php">Upload</a>

                </div>
            
            <!-- FOOTER -->

                <div id="footer">

                    <p align="center">Copyright &copy; 2009-2014 Pittsford Panthers Robotics Club. All Rights Reserved.</p>

                </div>
            
        </div>

    </body>

</html>