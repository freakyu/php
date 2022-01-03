<?php 
 

	require 'fungsi.php';

	// Ambil data dari url
	$id = $_GET["id"];

	// query data mahasiswa berdasarkan id
	$maba = query("SELECT * FROM data1 WHERE id = $id")[0];

	// cek apakah tombol submit sudah ditekan atau belum
	if ( isset($_POST["btnSimpan"]) ) {
		
			// cek apakah data berhasil di tambahkan aatu tidak
			if (ubah($_POST) > 0) {
				echo "
					<script>
						alert('Yeay! Data Anda berhasil di ubah.');
						document.location.href= 'daftarsukses.php';
					</script>
				";
			}else{
				echo "
					<script>
						alert('Yah.. gagal di ubah nih.');
						document.location.href= 'daftarsukses.php';
					</script>
				";
			}

}
 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>MarFo Sabu</title>
    <style type="text/css">
    .carousel-item img {
      height : 500px;
      width: 1000px;
    }
     #wrapper {
     width: 300px;
     margin: 0 auto;
    }
 
    </style>
  </head>
  <body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                     <a class="navbar-brand" href="index.html"><img width="125px" src="images/logofruit.jpg" class="logo" alt=""></a>
                     <p style="text-align: center; font-size: 20px; font-family:Times, Times New Roman, serif">Mar Fo | S a B u</p>
                </div>
                <!-- End Header Navigation -->

                 <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Postingan</a></li>
                        <li class="nav-item active"><a  class="nav-link" data-toggle="modal" data-target=".bd-example-modal-sm">Login</a></li>
                        <li class="nav-item active"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        <li>
                           <div class="top-search">
                              <div class="container">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                      <input type="text" class="form-control" placeholder="Search">
                                      <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                                  </div>
                              </div>
                          </div>
                        </li>
                    </ul>
                </div>
              </div>
            </nav>
          </header>
                <!-- /.navbar-collapse -->

       <!-- Start Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner-01.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
          <h1 class="m-b-20" ><strong>Welcome to <br> Mar Fo | S a B u</strong></h1>
          <p>The place that make your day full of smile</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner-02.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="m-b-20" ><strong>Welcome to <br> Mar Fo | S a B u</strong></h1>
          <p>The place that make your day full of smile</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner-03.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
          <h1 class="m-b-20" ><strong>Welcome to <br> Mar Fo | S a B u</strong></h1>
          <p>The place that make your day full of smile</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- End Slider -->
    

        <div style="background-image: url(images/f.jpeg);">
        <div class="container mt-5">
    	<div id="wrapper">
    		<h1 style="text-align: center"> Update Data </h1>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?= $maba["id"]; ?>">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" id="username" value="<?= $maba["username"]; ?>">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" name="password" class="form-control" id="pass" value="<?= $maba["password"]; ?>" aria-describedby="passwordHelp">
    <small id="passwordHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" value="<?= $maba["nama"]; ?>"> 
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" value="<?= $maba["email"]; ?>"> 
  </div>

   <button type="submit" class="btn btn-primary" name="btnSimpan">Update</button>
  
</form>
  </div>
</div>
</div>

                   
           
        
    
   


      




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Small modal -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form method="POST" style="background-image: url(images/a.jpeg);">
            <table>
                <tr>
                <th></th>
                <th></th>
                <th>Menu Login</th>
                </tr>
                <tr>
                    <th style="text-align: center;">Username</th><td>:</td><td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <th style="text-align: center;">Password</th><td>:</td><td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" class="btn btn-primary" name="btnlogin">Login</button></td>
                </tr>
            </table>
            <p style="text-align: center;"> Belum punya akun? Daftar <a href="daftar.php">disini!</a></p>
        </form>
    </div>
  </div>
</div>






  </body>
</html>