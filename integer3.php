<?php
$m = isset($_POST['m']) ? $_POST['m'] : null;

$b=intval($m/1024);
echo ($b);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer3</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="m" placeholder="m ni kiriting" value="<?php echo $m ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>