<?php
if ($_GET['randomId'] != "USzncUugMbwrRqw9gxK79ki_OUDwTT6zLlBdxilMgHYeYudioeubUtbNaNKPMzPJ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
