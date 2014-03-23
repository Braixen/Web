<?php
if ($_GET['randomId'] != "5Lnz1BFxtQvFi3WVLx8GdJr7RLiiGcBeMPPS7hQmfhCLoaOWV4obQiEaSd0kpu7g") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
