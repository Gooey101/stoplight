<?php 

include "../Functions/Header.php";

$user = $_SESSION['user']; 

echo "<img src='https://api.qrserver.com/v1/create-qr-code/?data=" . $_SESSION['user'] . "&size=100x100'/>";

/*while(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM encounters where Party2 = '$user' && Viewed = '1'")) == 0) {
	sleep(15);
}

$Party1 = mysqli_query($conn,"SELECT Party1 FROM encounters where Party2 = '$user' && Viewed = '1'");
$update = mysqli_query($conn,"UPDATE encounters SET Viewed = 2 WHERE Party2 = '$user' && Party1 = $Party1");
header("location:Profile.php?username='" . $Party1);
*/
?>



</body>