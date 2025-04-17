<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['fontFamily'] = $_POST['fontFamily'];
    $_SESSION['textAlign'] = $_POST['textAlign'];
    $_SESSION['warna'] = $_POST['warna'];
    header('Location: hasil.php'); 
    exit();
}

$simpanFont = isset($_SESSION['fontFamily']) ? $_SESSION['fontFamily'] : 'default';
$simpanTextAlign = isset($_SESSION['textAlign']) ? $_SESSION['textAlign'] : 'default';
$simpanWarna = isset($_SESSION['warna']) ? $_SESSION['warna'] : 'black';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Uts - Setting</title>
</head>
<body>
    <form method="post">

    <label>Halaman Setting</label><br><br>

    <label for="textAlign">Text-align:</label>
        <select name="textAlign" id="textAlign" style="width:150px; height:30px; color: red;">
            <option value="default" <?php echo $simpanTextAlign == 'default' ? 'selected' : ''; ?>>--Pilih Text Align--</option>
            <option value="left" <?php echo $simpanTextAlign == 'left' ? 'selected' : ''; ?>>left</option>
            <option value="right" <?php echo $simpanTextAlign == 'right' ? 'selected' : ''; ?>>right</option>
            <option value="center" <?php echo $simpanTextAlign == 'center' ? 'selected' : ''; ?>>center</option>
            <option value="justify" <?php echo $simpanTextAlign == 'justify' ? 'selected' : ''; ?>>justify</option>
        </select><br></br>

    <label for="fontFamily">Font-family:</label>
        <select name="fontFamily" id="fontFamily" style="width:165px; height:30px; color: red;">
            <option value="default" <?php echo $simpanFont == 'default' ? 'selected' : ''; ?>>--Pilih Font Family--</option>
            <option value="arial" <?php echo $simpanFont == 'arial' ? 'selected' : ''; ?>>Arial</option>
            <option value="tahoma" <?php echo $simpanFont == 'tahoma' ? 'selected' : ''; ?>>Tahoma</option>
            <option value="calibri" <?php echo $simpanFont == 'calibri' ? 'selected' : ''; ?>>Calibri</option>
        </select><br></br>

    <label for="warna">Color:</label>
    <input type="color" id="warna" name="warna" value="<?php echo $simpanWarna; ?>"><br><br>

    <button type="submit" name="submit" style="text-align: center; width: 60px; height: 30px;">Simpan</button>
    </form>
</body>
</html>