<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$dbname = "appdb"; /* Database name */

$con = mysqli_connect($host, $Username,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>