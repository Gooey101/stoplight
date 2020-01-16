<?php 

include "../Functions/Header.php";

$Party1 = $_SESSION['user'];
$Party2 = $_GET['username'];

$query = mysqli_query( $conn ,"select * from user where UK_ID = $Party2");

$store = mysqli_fetch_assoc($query);

echo $store['F_Name'], $store['L_Name'],$store['Status'],$store['Frequency'];

if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM encounters where Party1 = '$Party1' && Party2 = '$Party2' && Viewed = '1'")) == 0){
	$query = mysqli_query( $conn ,"INSERT INTO encounters(Party1, Party2, Viewed) VALUES ($Party1,$Party2,'1')");
}
else{
	
}

?>



</body>

