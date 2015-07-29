<!DOCTYPE html>
<html>
<head>
	<title>Web Code Bar</title>
	<?php include "BarcodeQR.php";  ?>
</head>
<body>
<?php 
$qr = new BarcodeQR(); 
$qr->bookmark("title", "url"); 

// contact 
$qr->contact("Ram Pukar", "Patan", "9849122794", "rampukar@gamil.com"); 

$qr->draw(150, "tmp/qr-code.png");
 ?>
</body>
</html>