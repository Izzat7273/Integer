<?php
$n = isset($_POST['n']) ? $_POST['n'] : null;


$minut = intval($n/60);
$soat = intval($n/3600);
$sek = $n%60;
echo "soat = ".$soat." minut = ".$minut." sekund = ".$sek;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer19-23</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="n" placeholder="n ni kiriting" value="<?php echo $n ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>