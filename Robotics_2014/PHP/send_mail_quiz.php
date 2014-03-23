<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$quiz_email = "keybladeroxas@frontier.com";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$quiz_page = "quiz_form.html";
$error_page = "error_message_quiz.html";
$thankyou_page = "thank_you_quiz.html";
$when_sent = date("D Md : h:i A", time());

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$urlanswer = $_REQUEST['url_answer'] ;
$teamanswer = $_REQUEST['team_answer'] ;
$obsanswer = $_REQUEST['obs_answer'] ;
$mostanswer = $_REQUEST['most_answer'] ;
$cr1answer = $_REQUEST['cr1_answer'] ;
$cr2answer = $_REQUEST['cr2_answer'] ;
$gpanswer = $_REQUEST['gp_answer'] ;
$excanswer = $_REQUEST['exc_answer'] ;
$threeanswer = $_REQUEST['three_answer'] ;
$supercaliborn = $_REQUEST['word_list'] ;



// If the user tries to access this script directly, redirect them to the quiz,
if (!isset($_REQUEST['url_answer'])) {
header( "Location: $quiz_page" );
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {
mail( "$quiz_email", "Quiz test",
"Quiz Submitted at: $when_sent
URL : $urlanswer
Team List: $teamanswer
Obscene Penalty : $obsanswer
Most Points : $mostanswer
Copyright : $cr1answer
Infingement Penalty : $cr2answer 
Professionalism : $gpanswer 
Extra Credit : $excanswer
Three things : $threeanswer
Word_list : $supercaliborn",
"From: keybladeroxas@frontier.com"
);

header( "Location: $thankyou_page" );
}
?>