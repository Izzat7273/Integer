<?php
$son = isset($_POST['son']) ? $_POST['son'] : null;

$yuzlar = intval($son/100);
$onlar =intval(($son%100)/10);
$birlar = $son%10;
echo $onlar.$birlar.$yuzlar
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer13</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="son" placeholder="son ni kiriting" value="<?php echo $son ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>