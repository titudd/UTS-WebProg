<?php
    session_start();

    $textAlign = isset($_SESSION['textAlign']) ? $_SESSION['textAlign'] : 'left';
    $fontFamily = isset($_SESSION['fontFamily']) ? $_SESSION['fontFamily'] : 'default';
    $warna = isset($_SESSION['warna']) ? $_SESSION['warna'] : 'black';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Uts - Hasil</title>=
    <style>
        .paragraph{
            text-align: <?php echo $textAlign; ?>;
            font-family: <?php echo $fontFamily; ?>, sans-serif;
            color: <?php echo $warna; ?>;
        }
    </style>
</head>
<body>
    <label>Halaman Hasil</label><br><br>

    <label for="hasilSetting">Setting yang tersedia:</label><br><br>

    <textarea name="hasilSetting" rows="10" cols="50">
    .paragraph{
        text-align: <?php echo $textAlign; ?>;
        font-family: <?php echo $fontFamily; ?>, sans-serif;
        color: <?php echo $warna; ?>;
    }</textarea><br><br>

    <a href="setting.php">Ganti Setting</a><br><br>

    <label>Contoh Paragraf:</label><br></br>
    <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fermentum euismod aliquet. 
        <br>Pellentesque aliquam odio erat, sed imperdiet nisi porta id. Nunc at metus ut diam 
        <br>fringilla elementum sed sed mauris. Integer semper est in tortor finibus, sed eleifend 
        <br>leo scelerisque. Ut laoreet elit lectus, et rutrum mauris feugiat eu.
    </p>

</body>
</html>