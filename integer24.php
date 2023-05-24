
<?php
$n = isset($_POST['n']) ? $_POST['n'] : null;
echo "1-yanvar dushanba bo'lsa = ".($n%7);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integer24</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="n" placeholder="n ni kiriting" value="<?php echo $n ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>