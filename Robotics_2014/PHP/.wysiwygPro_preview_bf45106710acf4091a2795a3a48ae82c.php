<?php
if ($_GET['randomId'] != "jfka5gwU88FKlr78SjQSh7OaHFwTvnYGMBcDkTaj8SoDHsCFaFYxCvfJyPerjiVe") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
