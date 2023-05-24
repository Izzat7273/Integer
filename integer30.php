
<?php
$yil = isset($_POST['yil']) ? $_POST['yil'] : null;
$asr = intval($yil/100)+1;
echo $asr;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer30</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="yil" placeholder="yil ni kiriting" value="<?php echo $yil ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>