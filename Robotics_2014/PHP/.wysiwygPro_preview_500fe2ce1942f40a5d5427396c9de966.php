<?php
if ($_GET['randomId'] != "dbyHQBxu5NmS9Uekj6ryjVbzC0nTXvr9tbgJqG0aK3S81D2f7Bj9FuUWPYqUTwkn") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
