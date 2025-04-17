<?php
session_start();

if (!isset($_SESSION['visited'])) {
    session_unset();  
    session_destroy();
    
    $_SESSION['visited'] = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Uts - Index</title>
    <style>
        .button{
            text-align: center;
            width: 100px;
            height: 30px;
            margin: 200px 40px;
        }

    </style>
</head>
<body>
    <form action="hasil.php" method="post" style="display: inline;">
        <input type="submit" class="button buttonHasil" value="Lihat Hasil">
    </form>

    <form action="setting.php" method="post" style="display: inline;">
        <input type="submit" class="button buttonHasil" value="Lihat Setting">
    </form>
</body>
</html>