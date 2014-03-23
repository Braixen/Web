<?php
if ($_GET['randomId'] != "OWoQR_gT_kg3uQkGQs7hf2bqdPZ1f7U3AjnNNMLz_TTIvVaEAGiIjJG0cGFnbTn_") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
