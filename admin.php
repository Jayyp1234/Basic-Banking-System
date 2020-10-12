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
    <link href="assets/css/admin.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
  <div id="preloader"></div>
<?php 
include 'init.php';

if ($resulte->num_rows > 0) {
    // output data of each row
    while($row = $resulte->fetch_assoc()) {
        $GLOBALS['username'] = $row["name"];
        $GLOBALS['email'] = $row['Email'];
        $GLOBALS['amount'] = $row['Amount'];
    }
} 
else {
    echo "0 results";
}
$conn->close();


 
?>
<section>
	<h2>MY WALLET</h2>
	<img src="assets/images/iconfinder_3_avatar_2754579.png" width="100px" height="100px">
	<h4> <?php echo $username ?> </h4>
	<p class="mm"><?php echo $amount ?></p>

</section>
</body>
<script type="text/javascript" src="assets/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".mm").prepend("NGN&nbsp;");
    });
</script>
</html>
