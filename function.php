<?php
    $server     = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "menfess";

    $connection = mysqli_connect($server, $user, $password, $database);

    if (!$connection) {
        echo "koneksi gagal" . mysqli_connect_error();
    }

function salam() {
    return "Selamat Datang Di Menfess!!";
}

function register($data) {
    global $connection;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($connection, $data["password"]);
    $password2 = mysqli_real_escape_string($connection, $data["password2"]);

    $result = mysqli_query($connection, "SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar!');
            </script>";
        return false;
    }

    if($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($connection, "INSERT INTO users VALUES ('', '$username', '$password')");
    
    return mysqli_affected_rows($connection);
}


function sapa() {
    return "Silahkan Kirim Pesan :)";
}

function login() {
    global $connection;
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_assoc($result);
          if(password_verify($password, $row["password"])) {
            echo "<script>
                    alert('Anda Berhasil Masuk!');
                    window.location.replace('home2.php');
                  </script>";
          }
        } 

        $error= true;

        if(isset($error)) {
          echo "<script>
                  alert('username / password salah!');
                  window.location.replace('login.php');
                </script>";
        }
    }
}

function daftar() {
    global $connection;
    if(isset($_POST["OK"])) {
        if(register($_POST) > 0) {
         echo "
             <script>
                 alert('User berhasil ditambahkan!');
                 window.location.replace('index.php');
             </script>
         ";
        } else {
         echo mysqli_error($connection);
        }  
     }
}

function query($query) {
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function pesan() {
    global $connection;
    if(isset($_POST["kirim"])) {
        if(kirim($_POST) > 0) {
            echo "<script>
                    alert('Pesan Berhasil Dikirim!');
                    window.location.replace('menfess.php');
                 </script>";
        } else {
            echo mysqli_error($connection);
        }
    }
}

function kirim() {
    global $connection;
    $pengirim = $_POST["pengirim"];
    $penerima = $_POST["penerima"];
    $pesan = $_POST["pesan"];
    
    if($pengirim == '') {
        $pengirim = "Anonymous";
    }
    
    if($pesan == '') {
        echo "<script>
                alert('Pesan Tidak Boleh Kosong!');
              </script>";
        return false;
    } else {
        mysqli_query($connection, "INSERT INTO pesan VALUES ('', '$pengirim', '$penerima', '$pesan')");
        return mysqli_affected_rows($connection);
    }
}

function kritik() {
    global $connection;
    if(isset($_POST["saran"])) {
    $pengirim = $_POST["pengirim"];
    $saran = $_POST["pesan"];

    mysqli_query($connection, "INSERT INTO saran VALUES ('', '$pengirim', '$saran')");

    echo "
            <script>
                alert('Terima Kasih Atas Kritik/Saran Anda :)');
                window.location.replace('saran.php');
            </script>
        ";
    }
}
?>