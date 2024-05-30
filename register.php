<?php
require 'tambah.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat - Form Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <h2> Membuat - Form Register</h2>
    <div class="kotak_form">
    <form action="tambah.php" method="POST">
    <label for="Username">Username:</label><br>
    <input type="text" name="Username" value="" class="form_register" required><br>
    <label for="Password">Password:</label><br>
    <input type="Password" name="Password" value="" class="form_register" required><br><br>
    <label for="Email">Email:</label><br>
    <input type="text" name="Email" value="" class="form_register">
    <p>
    <label> 


    <label for="Gender"> Gender:</label><br>
  <input type="radio" name="Gender" value="L">
  <label for="Male">Male</label><br>

  <input type="radio" name="Gender" value="P">
  <label for="Female"> Female</label><br><br>

<!-- HOBI -->

<label for="hobi">Hobi:</label><br>
  <input type="checkbox" id="a" name="hobi[]" value="Makan">
  <label for="hobi"> Makan</label><br>

  <input type="checkbox" id="a" name="hobi[]" value="Main">
  <label for="hobi"> Main</label><br>

  <input type="checkbox" id="a" name="hobi[]" value="Rebahan">
  <label for="hobi"> Rebahan</label><br>

  <input type="checkbox" id="a" name="hobi[]" value="Masak">
  <label for="hobi"> Masak</label><br>

  <input type="checkbox" id="a" name="hobi[]" value="Healing">
  <label for="hobi"> Healing</label><br><br>
<br>  

</label>

<!-- ROLE -->

<label for="Role">Role:</label>
  <select name="Role" id="Role">
    <option value="user">User</option>
    <option value="admin">Admin</option>
  </select>
    <p>
    <button input type="submit" name="submit" value="Submit" class="tombol_register"> Register<br>
</form> 

  </div>
  </body>
  </html>