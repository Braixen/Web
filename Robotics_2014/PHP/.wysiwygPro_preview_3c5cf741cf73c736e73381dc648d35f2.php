<?php
if ($_GET['randomId'] != "thCB4FRlek8djTrp32olMHmrmxvOsLG3xxHmWszXBA09y6vDuvbu2Jl3btVAhXRn") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
