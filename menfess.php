<?php 
    include "function.php";
    $ps = query("SELECT * FROM pesan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/menfess.css">
    <title>PROJECT KELOMPOK 2</title>
</head>
<body style="max-width: auto; margin: auto;">
    <div class="container">
        <nav>
            <a href="kirim.php">KIRIM</a>
            <a href="saran.php">KRITIK/SARAN</a>
            <a href="index.php" id="navlg">LOGOUT</a>
        </nav>
    </div>
    <div id="pesan">
        <h1 style="text-align: center; margin-bottom: 10px;">Pesan</h1>
        <table border="1" cellpedding="15" cellspacing="0">
            <tr>
                <th>Pengirim</th>
                <th>Penerima</th>
                <th>Pesan</th>
            </tr>
            <?php foreach($ps as $psn) :?>
            <tr>
                <td><?php echo $psn["pengirim"]?></td>
                <td><?php echo $psn["penerima"]?></td>
                <td><?php echo $psn["pesan"]?></td>
            </tr>
            <?php endforeach;?>
    </div>
    
</body>
</html>