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

    <title>simple churros</title>
  </head>
  <body height="100" background="gambar/Download premium vector of Blank gray background template with washi tape.jpeg">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-secondary">
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

    <div class="container">
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center" >
          <P style="background-color:darksalmon; color: teal; font-size: 70px; font-family: helvetica;"> C H U R R O S</P>
        </div>
      <div class="raw">
        <div class="col">
          <ul class="list-unstyled">
            <li class="media">
              <img width="550px" height="300px" src="gambar/ch1.jpeg" class="mr-3" alt="gambar/churros">
              <div class="media-body">
                <h5 class="mt-3 mb-1"> Alat dan Bahan yang harus disediakan :</h5>
                <ol>
                  <li>150 ml air</li>
                  <li>20 gram gula</li>
                  <li>40 gram mentega</li>
                  <li>110 gram tepung serbaguna</li>
                  <li>2 butir telur</li>
                  <li>minyak goreng</li>
                  <li>mangkuk</li>
                </ol>
              </div>
            </li>
            <li class="media my-4">
              <img width="550px" height="300px" src="gambar/ch3.jpeg" class="mr-3" alt="gambar/churros">
              <div class="media-body">
                <h5 class="mt-3 mb-1">Cara Membuat Churros Sederhana</h5>
                <ol>
                  <li>Masukkan 150 ml air ke dalam panci. Kemudian tuang 20 gram gula dan 40 gram mentega.</li>
                  <li>Masak semua bahan tadi dengan api kecil. Setelah cair, matikan kompor.</li>
                  <li>Masukkan 110 gram tepung serbaguna ke dalam panci tersebut. Aduk hingga rata. Pastikan adonan tidak kering!</li>
                  <li>Pindahkan adonan ke mangkuk dan usahakan buat adonan menjadi tipis. Ditekan-tekan.</li>
                  <li>Biarkan hingga 10 menit. Setelah itu masukkan telur.</li>
                </ol>
              </div>
            </li>
            <li class="media my-4">
              <img width="550px" height="300px" src="gambar/Churros (Homemade Recipe with Step by Step Photos) - Cooking Classy.jpeg" class="mr-3" alt="gambar/churros">
              <div class="media-body">
                <h5 class="mt-3 mb-1">Cara Membuat Churros Sederhana (lanjutan)</h5>
                <ol>
                  <li>Masukkan telur satu per satu agar adonan dan telur tercampur rata.</li>
                  <li>Adonan yang sudah jadi, kemudian masukkan ke dalam plastik pastry</li>
                  <li>Cetak adonan sesuai dengan yang anda inginkan</li>
                  <li>Tuangkan minyak diatas kuali dengan api sedang! Masukkan adonan churros dan tunggu hingga matang.</li>
                  <li>Churros sudah jadi! </li>
                </ol>
              </div>
            </li>
            
            <li class="media my-4">
              <img width="550px" height="300px" src="gambar/Chocolate Quente Cremoso especial.jpeg" class="mr-3" alt="gambar/churros">
              <div class="media-body">
                <h5 class="mt-3 mb-1">Cara Membuat Saus Coklat</h5>
                <ol>
                  <li>Siapkan coklat batang (boleh biasa boleh dark coklat)</li>
                  <li>Siapkan kuali berisi air yang sudah mendidih.</li>
                  <li>Letakkan mangkuk aluminium di atas kuali tersebut.</li>
                  <li>Masukkan coklat ke dalam mangkuk tersebut tunggu hingga meleleh. Jangan lupa diaduk, agar semua bagian coklat rata meleleh</li>
                  <li>Letak di mangkuk bila sudah jadi.</li>
                  <li>Tadaa! Saus coklat churrosnya sudah jadi.</li>
                </ol>
              </div>
            </li>
          </ul>
          </div>
       </div>
    </div>
    </div>

    <div class="raw">
      <div class="col text-center">
        <img width="350px" height="250px" src="gambar/everybody loves to eat.jpeg" alt="gambar/churros">
        <img width="350px" height="250px" src="gambar/everybody loves to eat.jpeg" alt="gambar/churros">
        <img width="350px" height="250px" src="gambar/everybody loves to eat.jpeg" alt="gambar/churros">
        <h3 style="color: springgreen;">This is how churros look alike!</h3>
      </div>
    </div>

    <footer class="bg-secondary text-white">
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