<?php
if ($_GET['randomId'] != "Fsmu0gyX8f3CAfEhPJu7v03qtWsDGZvuFd_vVKVuUfPF4nugvIPHPeE4tHBTiiVn") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
