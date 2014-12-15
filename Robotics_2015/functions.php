<?php


function self_check($link,$name){
    if(TRUE)
    //$_SERVER['PHP_SELF'] == "'{$link}'.php")
    {
        echo '<li class="current_page"><a href="./';
        echo "{$link}.php\">{$name}</a></li>";
    }
    else
    {
        echo '<li><a href="./';
        echo "{$link}.php\">";
        echo "$name</a></li>";
    }
}

function sidebar(){
	<!--<head>
	<link href="IEStyle.css" rel="stylesheet" type="text/css">
	</head> -->

	<?php if( $_SERVER['PHP_SELF'] == "/sidebar.php" )
	{	
		echo '<link href="robotics" rel="stylesheet" type="text/css" />';
	}
	
	

echo '<div id="sidebar" style="float:left"><!-- NAVIGATION LIST -->';
echo '	<ul id="nav">';
		<?php if( $_SERVER['PHP_SELF'] == "/index.php" )
                { 
                    echo '<li class="current_page"><a href="./index.php">Home</a></li>';
                }
            else 
            {
            echo '<li><a href="./index.php">Home</a></li>';    
            } 
           
echo		'<li><a href="./wordpress">Blog</a></li>';
		<?php if( $_SERVER['PHP_SELF'] == "/gallery.php")
                {
                    echo '<li class="current_page"><a href ="./gallery.php">Gallery</a></li>';
                }
                else
                {
                    echo '<li><a href="./gallery.php">Gallery</a></li>';    
                }
               if( $_SERVER['PHP_SELF'] == "/calendar.php")
               {
                   echo '<li class="current_page"><a href ="./calendar.php">Calendar</a></li>';
               }
               else
               {
                   echo '<li><a href="./calendar.php">Calendar</a></li>';
               }
               if( $_SERVER['PHP_SELF'] == "/sponsors.php")
               {
                   echo '<li class="current_page"><a href ="./sponsors.php">Sponsors</a></li>';
               }
               else
               {
                   echo '<li><a href ="./sponsors.php">Sponsors</a></li>';
               }
               if( $_SERVER['PHP_SELF'] == "/donations.php")
               {
                   echo '<li class="current_page"><a href="./donations.php">Donations</a></li>';
               }
               else
               {
                   echo '<li><a href="./donations.php">Donations</a></li>';    
               }
               if( $_SERVER['PHP_SELF'] == "/contacts.php")
               {
                   echo '<li class="current_page"><a href="./contacts.php">Contacts</a></li>';
               }
               else
               {
                   echo '<li><a href="./contacts.php">Contacts</a></li>';
               }
               if( $_SERVER['PHP_SELF'] == "/mentors.php")
               {
                   echo '<li class="current_page"><a href="./mentors.php">Mentors</a></li>';
               }
               else
               {
                   echo '<li><a href="./mentors.php">Mentors</a></li>';
               }

               if( $_SERVER['PHP_SELF'] == "/subteams.php")
               {
                   echo '<li class="current_page"><a href="./subteams.php">Subteams</a></li>';
               }
               else
               {
                   echo '<li><a href="./subteams.php">Subteams</a></li>';
               }
               if( $_SERVER['PHP_SELF'] == "/game.php")
               {
                   echo '<li class="current_page"><a href="./game.php">The Game</a></li>';
               }
               else
               {
                   echo '<li><a href="./game.php">The Game</a></li>';
               }
               if( $_SERVER['PHP_SELF'] == "/first.php")
               {
                   echo '<li class="current_page"><a href="./first.php">About First</a></li>';
               }
               else 
               {
                   echo '<li><a href="./first.php">About First</a></li>';
               }
               if($_SERVER['PHP_SELF'] == "/parts.php")
               {
                   echo '<li class="current_page"><a href="./parts.php">3D Printed&nbsp; Parts</a></li>';
               }
               else
               {
                   echo '<li><a href="./parts.php">3D Printed&nbsp; Parts</a></li>';
               }
               if($_SERVER['PHP_SELF'] == "/resources.php")
               {
                   echo '<li class="current_page"><a href="./resources.php">Resources</a></li>';
               }
               else
               {
                   echo '<li><a href="./resources.php">Resources</a></li>';
               }

echo 		'</ul>';
echo        '<hr />';
}

function add_sponsor($name, $link, $thumbnail_link){
    if(!isset($sponsors){
        global $sponsors = array();
    }
    array_push($sponsors, array($name, $link, $thumbnail_link));
}

function sponsors()
{
        add_sponsor("xerox", "xerox.com",);
        <div id="sponsors">
        for($count = 0; $count < count($sponsors); $count++){
	        echo "<div id="$name" ><a href=\"http://www.$link">;
	    	echo "<img alt=\"";
            echo ucfirst($name);
            echo " \"src=\"Images/$thumbnail_link\"/>";
	        echo  '</a>';
	        echo  '</div>';
        }
}
	/*
<!--XEROX-->
	<div id="xerox">
		<a href="http://www.xerox.com/" >
			<img  alt="Xerox" width="150" src="Images/xlogo.gif" />
		</a>
	</div>
    <!--Rochester Optical -->
	<div>	<a href="http://www.rochesteroptical.com/">
		<img alt="Rochester Optical" class="auto-style5" height="72" src="Images/RochesterOpticalLogo_sm.png" width="150" />
		</a>
	</div>
	<div><!--Cisco -->
	<a href="http://www.cisco.com/">
		<img alt="Cisco" height="68" src="Images/Cisco_sm.jpg" width="150" />
	</a>
	</div>
	</div>
		<hr />
	<a href="http://www.usfirst.org/">
	<img alt="FIRST" width="150" src="Images/firstLogo.jpg" />
		</a>
		</div>
}
*/
 ?>

?>

