
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

<style type="text/css">
		ul{
			display: flex;
			flex-direction: column-reverse;
			width: 90%;
			font-weight: 400;
			font-family: "Open Sans Regular";
			font-size: 83%;
			margin: auto !important ;
			margin-top: 20px !important;
			border: 1px solid #ddd;
			background-color: white;
		}
		ul:hover{
			border: 1px solid #ddd;
		}

		ul li{
			padding: 10px;
			width: 100%;
			border-bottom: 1px solid #ddd;
			justify-content: space-between;
			display: flex;
			cursor: pointer;
		}
		ul li:hover{
			background-color: #ddd;
			border-bottom: 1px solid #ddd;
		}
		.order{
			background-color:  #007bff;
			color: white;
			border-bottom: 1px solid grey;
		}
		.order:hover{
			background-color:  #007bff;
		}
		.message{
			margin-left: 60px;
			margin-right: 60px;
			width: 60%;
			
		}
		.amonnt{
			width: 60px;
			color: red !important;
			font-weight: bold !important;
		}
	</style>
<div class="navigator">
	<div style="display: flex;">
		<a href="UserDisplay.php"><span > View all Customers</span> </a>
		<a href="transferPaige.php"> <span > Transfer Money</span> </a>
		<a href="transaction.php"><span class= "active first"> Transactions</span> </a>
	</div>
</div>

<?php
	include 'init.php';
	if ($resulter->num_rows > 0) {
		echo "<ul>  </li>";
    	// output data of each row
    	while($row = $resulter->fetch_assoc()) {
    		echo "<li> <span> ".$row['Dater']." </span>  <span class='message'> ".$row["Message"]. "</span> <span class='amonnt'> ".$row['soney']." </span> </li>";
    	}
    	echo "</ul>";
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
		$('ul li').eq($('ul li').length - 1).after(" <li class='order'> <b> Date </b> <b>Messages </b> <b> Amount </b>");
		$('.amonnt').prepend("-");
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