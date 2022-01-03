<?php

if(!isset($_SESSION)) {

      session_start();
    }

        if ( !isset($_SESSION["login"]) ) {
          header("location: simpleweb.php");
          exit;
        }

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>simple lemon tea</title>
  </head>
  <body background="gambar/Download premium vector of Gray frame with beige background vector 1214274.jpeg ">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style type="text/css">
      .carousel-item {
      height : 400px;
    }
    .carousel-item img {
      height : 350px;
      width: 50px;
    }
</style>


<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning">
  <div class="container ">
  <a class="navbar-brand" href="https://sun-shine7.000webhostapp.com/index.html">Sun_shine7</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="https://sun-shine7.000webhostapp.com/simpleweb.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://sun-shine7.000webhostapp.com/churros.html">Makanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://sun-shine7.000webhostapp.com/Lemontea.html">Minuman</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://sun-shine7.000webhostapp.com/Tugas2.html">Tugas 2</a>
          <a class="dropdown-item" href="https://sun-shine7.000webhostapp.com/tugas3Aritmatika.html">Tugas 3</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>

   <div class="jumbotron jumbotron-fluid">
     <div class="container text-center" >
        <P style="background-color:cadetblue; color:khaki; font-size: 70px; font-family: helvetica;">L E M O N | T E A</P>
      </div>
            
    
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner mt-5">
          <div class="carousel-item active">
            <img src="gambar/lt1.jpeg" class="d-block w-100" alt="gambar/teh lemon">
          </div>
          <div class="carousel-item">
            <img src="gambar/lt2.png" class="d-block w-100" alt="gambar/teh">
          </div>
          <div class="carousel-item">
            <img src="gambar/lt3.png" class="d-block w-100" alt="gambar/lemon">
          </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
 

      <div class="container mb-5">
        <div class="raw">
          <div class="col text-center">
            <h4>Cara Membuat Lemon Tea</h4>
          </div>
        </div>

        <div class="card-deck">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title" style="color: rgb(209, 0, 164); text-align: center;">T E H</h5>
                  <p class="card-text">
                    <ol>
                      <li>Siapkan air panas secukupnya sesuai dengan selera.</li>
                      <li>Tambahkan gula dan teh (boleh teh kantung atau teh bubuk).</li>
                      <li>Aduk campuran teh, gula, dan air panas hingga larut.</li>
                      <li>Setelah selesai, lanjut ke penambahan lemon.</li>
                    </ol>
                  </p>
                  <p class="card-text"><small class="text-muted">simple web</small></p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title" style="color: rgb(209, 0, 164); text-align: center;">L E M O N</h5>
                  <p class="card-text">
                    <ol>
                      <li>Siapkan 1 atau setengah buah lemon.</li>
                      <li>Potong buah lemon menjadi beberapa bagian.</li>
                      <li>Peras bagian-bagian buah lemon tadi sampai didapat airnya.</li>
                      <li>Jangan lupa, merasnya di wadah ya!</li>
                    </ol>
                  </p>
                  <p class="card-text"><small class="text-muted">simple web</small></p>
                </div>
              </div>
              <div class="card"> 
                <div class="card-body">
                  <h5 class="card-title" style="color: rgb(209, 0, 164); text-align: center;">LEMON TEA</h5>
                  <p class="card-text">
                    <ol>
                      <li>Tahap akhir;</li>
                      <li>Masukkan perasan air buah lemon tadi kedalam teh<br\>yang telah kita buat</li>
                      <li>Air perasan yang dimasukkan sesuai selera keasaman Anda.</li>
                      <li>Aduk kembali teh yang sudah diberi air lemon tersebut.</li>
                      <li>Tada! Teh Lemon Anda sudah jadi.</li>
                      <li class="text-muted">Anda bisa menambahkan es batu bila mau</li>
                    </ol>
                  </p>
                  <p class="card-text"><small class="text-muted">simple web</small></p>
                </div>
              </div>
            </div> 
      </div>

      <div class="container">
        <div class="raw">
          <div class="col text-center">
            <img width="1000" src="gambar/lemontea.jpeg" alt="gambar/lemon tea">
            <h3 style="color:rgb(234, 248, 35);">This is how lemon tea look alike!</h3>
          </div>
        </div>
      </div>

      <footer class="bg-warning text-dark">
        <div class="container">
          <div class="raw">
            <div class="col text-center" style="font-family: cursive;">
              <p>Copyright &#169 2020 by Diah Paramitha</p>
            </div>
          </div>
        </div>
      </footer>
  </body>
</html>