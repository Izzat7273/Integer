<?php
$son = isset($_POST['son']) ? $_POST['son'] : null;

$yuzlar = floor($son / 100);

echo "Yuzlar xonasidagi raqam: " . $yuzlar;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer9</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="son" placeholder="son ni kiriting" value="<?php echo $son ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>