<?php
?>

<?php
$connection = mysql_connect('localhost', 'root', '1234');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('account');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>