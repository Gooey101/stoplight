<?php 

//$host = "gohan.ad.nccu.edu:389";
//$user = "AD/PepperLookup";
//$password = "Aa9861hZyUTVY4sjljDMkgLSb7pUnmc1IU5iQUN2w86csamkSw1NxpKJsd0mCZo";
//DC=AD, DC=NCCU, DC=EDU

$server = "localhost";
$user = "id12252208_work";
$password = "12345";
$DB = "id12252208_work";

$conn = mysqli_connect("$server", "$user", "$password", "$DB") or die("cannot connect");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>