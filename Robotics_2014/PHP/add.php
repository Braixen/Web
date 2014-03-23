<?
$DBhost = "localhost";
$DBuser = "pittsfo2_work";
$DBpass = "Pitt-pan3181";
$DBName = "pittsfo2_worklog";
$table = "workers";
mysql_connect($DBhost,$DBuser,$DBpass) or die("Unable to connect to database");

@mysql_select_db("$DBName") or die("Unable to select
database $DBName");

$sqlquery = "INSERT INTO $table
VALUES('$pass','$taskother','$name')";

$results = mysql_query($sqlquery);

mysql_close();

print "<HTML><TITLE> PHP and MySQL </TITLE><BODY
BGCOLOR=\"#FFFFFF\"><center><table border=\"0\"
width=\"500\"><tr><td>";
print "<p><font face=\"verdana\" size=\"+0\"> <center>You
Just Entered This Information Into the
Database<p><blockquote>";
print "Name : $name<p>E-Mail : $email<p>Opinion :
$opinion</blockquote></td></tr></table>
</center></BODY></HTML>";
?>