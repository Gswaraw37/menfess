<?php 
    include "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/menfess.css">
    <title>PROJECT KELOMPOK 2</title>
</head>
<body style="max-width: max-content; margin: auto;">
    <div class="container">
        <nav>
            <a href="menfess.php">Kembali</a>
        </nav>
    </div>
    <div id="kirim">
        <h2 style="text-align: center;">Kirim Pesan Disini :)</h2>

        <form method="POST">
            <label style="padding-top: 50px;">Pengirim :</label>
            <input type="text" name="pengirim">
            <label>Penerima :</label>
            <input type="text" name="penerima">
            <label>Pesan :</label>
            <textarea name="pesan" id="psn"></textarea>
            <input id="krm" type="submit" name="kirim" value="KIRIM"><?php echo pesan()?>
        </form>
    </div>
</body>
</html>