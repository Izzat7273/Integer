<?php
$son = isset($_POST['son']) ? $_POST['son'] : null;


$birlik = $son % 10;
$onlik = floor(($son % 100) / 10);

echo "Birlar xonasidagi raqam: " . $birlik;
echo "O'nliklar xonasidagi raqam: " . $onlik;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer10</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="son" placeholder="son ni kiriting" value="<?php echo $son ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>