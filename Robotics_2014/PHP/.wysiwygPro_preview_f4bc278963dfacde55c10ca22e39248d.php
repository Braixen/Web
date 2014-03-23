<?php
if ($_GET['randomId'] != "D1BOaZGsuFo8vWYOhD9K0hESnRt2G_ZEs2ESj75NW9LBpeDy_vkczjVcR4eAyzXP") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
