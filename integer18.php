<?php
$son = isset($_POST['son']) ? $_POST['son'] : null;


$birlar = $son%10;
$onlar = intval($son/10)%10;
$yuzlar = intval($son/100)%10;
$minglar = intval($son/1000)%10;

echo $minglar;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer17</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="son" placeholder="son ni kiriting" value="<?php echo $son ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>