<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Basic Banking System</title>
	<meta content=" Web Developer with a focus on Front-end and Mobile application." name="description">
  	<meta content="Okeke , Okeke Johnpaul , john's Biography , Johnpaul's Portfolio" name="keywords">
  	<!--icons link-->
  	<link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="preload" href="/fonts/OpenSans-Regular.ttf" as='font' crossorigin='anonymous'>
    <link href="assets/css/userdisplay.css" rel="stylesheet">
</head>
<body>

<?php include_once 'admin.php' ?>
<div class="navigator">
	<div style="display: flex;">
		<a href="UserDisplay.php"><span class="active first" > View all Customers</span> </a>
		<a href="transferPaige.php"> <span> Transfer Money</span> </a>
		<a href="transaction.php"> <span> Transactionss</span> </a>
	</div>
</div>

<?php 
  include 'init.php'; 



if ($result->num_rows > 0) {
	echo "<table><tr><th>SN</th><th>Name</th><th> Email Address </th> <th> Amount </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["Names"]." </td> <td>".$row["Email"]."</td> <td> ".$row['Amount']."</td> </tr>";
    }

    echo "</table>";
} 
else {
    echo "0 results";
}


$conn->close();

?>

</body>
<script type="text/javascript" src="assets/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    });
  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
    $(".header-container").css("transform" , "scale(1.0)");
  });
</script>
</html>


