<?php
if ($_GET['randomId'] != "t7c05S4TZWQfZ34FZF0Bh1IHArD8omcHIx0AbF3jkpH3W8i6e0C3HWgzr5NfZQhC") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
