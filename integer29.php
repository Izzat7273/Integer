<?php
$a = isset($_POST['a']) ? $_POST ['a'] : null;
$b = isset($_POST['b']) ? $_POST ['b'] : null;
$c = isset($_POST['c']) ? $_POST ['c'] : null;
$d = intval($a/$c);
$e = intval($b/$c);
$kv_soni = $e*$d;

$yuza = $a*$b - ($kv_soni*$c*$c);


echo "kvadrat = ".$kv_soni.","."Yuzasi = ".$yuza;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>integer29</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
        <input type="text" name="b" placeholder="b ni kiriting" value="<?php echo $b ?>">
        <input type="text" name="c" placeholder="c ni kiriting" value="<?php echo $c ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>