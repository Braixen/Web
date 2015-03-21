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

            <a href="./index.php"><div id="header"></div></a>

            <!-- SIDEBAR -->
            
                <?php include("sidebar.php") ?>

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