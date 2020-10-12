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
		<a href="UserDisplay.php"><span > View all Customers</span> </a>
		<a href="transferPaige.php"> <span class= "active first"> Transfer Money</span> </a>
		<a href="transaction.php"><span> Transactions</span> </a>
	</div>
</div>
<div>
	<h4 class="hh">Select Customer</h4>
  <?php 

  ?>

	<?php 
  		include 'init.php'; 
  		if ($result->num_rows > 0) {

			echo "<form method='POST' action='transferPaige.php'> <select name='id'> <option>----Select Customer---- </option>";
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "<option value= ".$row["id"].">".$row["Names"]." </option>";
    		}
      echo "</select >";
		} 

		else {
		    echo "0 results";
		}
		$conn->close();
  	?>
  	<input type="text" name="money" placeholder="Amount" required="">
  	<input type="submit" name="" value="Transfer">
  </form>
  <?php  
  	$walletAmount = $idSelector = $prevmoney='';
  	if (isset($_POST['money']) && isset($_POST['id'])) {
  		$idSelector = $_POST['id'];
      $currentyear = date("Y-m-d");
      $currenttime = date('h:ia');
      $monman = $_POST['money'];
  		$walletAmount = $amount - $_POST['money'];
  		include 'init.php'; 
      $prevmoney = "SELECT Amount from candiates WHERE id=$idSelector";
      $updatmon = $conn->query($prevmoney);
      while($row = $updatmon->fetch_assoc()) {
            $GLOBALS['finally'] = $row['Amount'];
      }
      $newmoney = $finally + $monman;
  		$newsql = " UPDATE admin SET Amount = $walletAmount WHERE 1";
  		$newdata = "UPDATE candiates SET Amount = $newmoney WHERE id= $idSelector";
      $sqltransac = "INSERT INTO  transaction (id, Message, Dater, soney) VALUES ('', 'Txn: Debit \n Amt: NGN $monman \n Bal : NGN $walletAmount \n Date : $currentyear $currenttime \n COVID19 is real #StaySafe', '$currentyear $currenttime' , '$monman')";
		    if ($conn->query($newsql) === TRUE && $conn -> query($newdata) === TRUE && $conn -> query($sqltransac) === TRUE && $conn->query($prevmoney)) {
            
            echo "Record updated successfully";
		    } else {
		        echo "Error updating record: " . $conn->error;
		    }
		$conn->close();
	}

  ?>
</div>

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
  });
</script>
</html>
