<?php 

include "../Functions/Header.php";

$user = $_SESSION['user']; 

echo "<img src='https://api.qrserver.com/v1/create-qr-code/?data=" . $_SESSION['user'] . "&size=100x100'/>";

if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM encounters where Party2 = '$user' && Viewed = '1'")) == 1 ){

$Party1 = mysqli_query($conn,"SELECT Party1 FROM encounters where Party2 = '$user' && Viewed = '1'");
$update = mysqli_query($conn,"UPDATE encounters SET Viewed = 2 WHERE Party2 = '$user' && Party1 = $Party1");
header("location:Profile.php?username='" . $Party1);

}

?>

<script type="text/javascript">
	
	setTimeout(function() {
	  location.reload();
	}, 10000);

</script>

</body>