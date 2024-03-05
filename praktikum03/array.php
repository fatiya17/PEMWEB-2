<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah</title>
</head>
<body>
    <?php
    if (isset($_REQUEST["name"])){
    echo "<p>Hi, ".$_REQUEST[name] ."</p>
    }
<form method = "post" action"<?php echo $_SERVER["PHP_SELF"];?">
?>
</body>
</html>