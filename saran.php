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
            <a href="home2.php">Kembali</a>
        </nav>
    </div>
    <div id="kirim">
        <h2 style="text-align: center;">Berikan Kritik/Saran Anda Disini</h2>

        <form method="POST">
            <label style="padding-top: 50px;">Pengirim :</label>
            <input type="text" name="pengirim">
            <label>Kritik/Saran :</label>
            <textarea name="pesan" id="psn"></textarea>
            <input id="krm" type="submit" name="saran" value="KIRIM"><?php echo kritik()?>
        </form>
    </div>
</body>
</html>