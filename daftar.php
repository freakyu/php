<?php

require "koneksi/koneksi.php";


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>simple web</title>
  </head>
  <body height="100" background="gambar/b.png">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
      <div class="container">
      <a class="navbar-brand" href="https://sun-shine7.000webhostapp.com/index.html">Sun_shine7</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="https://sun-shine7.000webhostapp.com/index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-sm">Login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="churros.php">Makanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Lemontea.php">Minuman</a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-end">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    
    </div>
    </nav>

    
    <div class="container">
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center" >
        <img width="1000" height="400" src="gambar/VN20201120_192716.gif" alt="sunshine">
        <h1 class="display-4" style="font-family: cursive; color:greenyellow">W E L C O M E | H O M E</h1>
        <p class="lead" style="font-family: sans-serif; color: darkkhaki;">Disini tempat kamu merasa pulang ke kampung halaman.</p>
      </div>
    </div>
    </div>
      
    <div class="container mb-6" >
      <div class="raw">
        <div class="col text-center" style="font-family: Lucida Sans Unicode;">
          <p> = F O R M U L I R =</p>
          <p style="color: red"> = Mohon isi formulir untuk mengakses website = </p>
        </div>
      </div>

      <section class="ml-5">
        <form action="berhasil.php" method="POST">
      <div class="form-group">
        <label for="username"><b>Nama</b></label>
        <input type="text" name="username" class="form-control" id="username" required="" placeholder="Enter username">
      </div>
      <div class="form-group">
        <label for="pass"><b>Nim</b></label>
        <input type="password" name="password" class="form-control" id="pass" required="" placeholder="Enter password">
      </div>
      <div class="form-group">
        <label for="gender"><b>Jenis Kelamin</b></label>
      
      
       <select for="gender">Jenis Kelammin</select>
       <option value="Lakilaki"> Laki-laki </option>
       <option value="Perempuan"> Perempuan </option>
      </div>
      <input type="submit" class="btn btn-success" name="btnDaftar" value="Registrasi">
    </form>
      
    </section>

      <footer class="bg-success text-white">
        <div class="raw">
          <div class="col text-center" style="font-family: cursive;">
            <p>Copyright &#169 2020 by Diah Paramitha</p>
          </div>
        </div>
    </footer>









  </body>
</html>