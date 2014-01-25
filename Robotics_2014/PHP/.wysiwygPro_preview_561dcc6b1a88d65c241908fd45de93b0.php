<?php
if ($_GET['randomId'] != "RO5GYbRgDaVcrGQpfOkOqj4hZhnVM00HYfSKMB_scSGBJY3sd2FXIKZrBUtimxvx") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
