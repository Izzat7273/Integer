<?php
$son = isset($_POST['son']) ? $_POST['son'] : null;


$onlik = floor($son / 10);
$birlik = $son % 10;

echo "O'nliklar xonasidagi raqam: " . $onlik . "\n";
echo "Birlar xonasidagi raqam: " . $birlik . "\n";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer6-7-8</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="son" placeholder="son ni kiriting" value="<?php echo $son ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>