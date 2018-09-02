<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP QR Code</title>
</head>
<body>
    <?php
        include_once "main/qrlib.php";
        QRcode::svg('http://www.sumon-it.com', 'qr.svg','M','10','50'); // creates file 
       

    ?>
    <img src="qr.svg" alt="" srcset="">

    
</body>
</html>