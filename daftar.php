<?php
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/daftar.css">
    <title>PROJECT KELOMPOK 2</title>
</head>

<body>
  <div class="container">
      <nav> 
          <a href="index.php">HOME</a>
      </nav>   
  </div>
  <form method="POST" class="form card">
    <div class="card_header">
      <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"></path>
        <path d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z" fill="currentColor"></path>
      </svg>
      <h1 class="form_heading">DAFTAR DISINI</h1>
    </div>
    <div class="field">
      <label for="username">Username</label>
      <input id="username" placeholder="Username" type="text" name="username" class="input">
    </div>
    <div class="field">
      <label for="password">Password</label>
      <input id="password" placeholder="Password" type="password" name="password" class="input">
    </div>
    <div class="field">
      <label for="password2">Konfirmasi Password</label>
      <input id="password2" placeholder="Konfirmasi Password" type="password" name="password2" class="input">
    </div>
    <div class="field">
      <button class="button" type="submit" name="OK"><?php daftar()?>DAFTAR</button>
    </div>
  </form> 
</body>

</html>