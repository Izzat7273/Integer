<?php
$l = isset($_POST['l']) ? $_POST['l'] : null;

$a=(100/1);
$b=intval($l/$a);
echo ($b);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer1</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="l" placeholder="l ni kiriting" value="<?php echo $l ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>