<?php
require 'fungsi.php';

  if(!isset($_SESSION)) {

      session_start();
    }

        if ( !isset($_SESSION["login"]) ) {
          header("location: login.php");
          exit;
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
      .carousel-item {
      
    }
    .carousel-item img {
      height : 500px;
      width: 1000px;
    }
    .about-box-main {
      background-image: url(images/a.jpeg);
      }
    .wrapper {
      width: 500px;
     margin: 0 auto;
      }
      .tengah {
         width: 850px;
     margin: 0 auto;
      }
    }
    </style>
  </head>
  <body background="images/a.jpeg">
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

     <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container mb-5">
            <div class="row">
        <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid"  src="images/ayam.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mt-5 bg-warning">
                    <h1></h1>
                    <h2 class="noo-sh-title-top">We are <br>Mar Fo | S a B u</h2>
                    <p>Hai guys ! we are back... <br/> Have you been waiting long? <br/> Here we go  !!<br/></p>
                    <p>We bring you fresh and new informational articles. Which can add insight to your knowledge,
                       especially about vegetables and fruit which are discussed from all sides. So, let's read our article and we make sure you like it!
                    </p>
                </div>
            </div>
            <div class="row my-5" style="background-color:cadetblue;">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Colorful website</h3>
                        <p>You can see the colorful website by the template that we made.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Wide Information</h3>
                        <p>You will surprised because information that we prepared soooo wide.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Easy Listening</h3>
                        <p>You can easily understand about the content.</p>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title" style="text-align: center; color: orange">Meet Our Team</h2>
                </div>
                <div class="col-sm-6 col-lg-4" style="background-color:darksalmon";>
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/pp2.jpg" class="card-img-top" alt="" />
                            <div class="team-content">
                                <h3 class="title" style="font-family: Times New Roman; color: rgb(255, 255, 239)"><b>Afdoni Prabawa Said</b></h3> <span class="post"><b>NIM 201402118</b></span> </div>
                            
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p><b>Afdoni</b><br/>  Mahasiswa Teknologi Informasi Universitas Sumatera Utara Tahun 2020. Lahir pada tanggal 19 Maret 2002 dan saat ini berusia 19 tahun. Biasa dipanggil Doni.</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-4" style="background-color:darksalmon";>
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/pp6.jpg" class="card-img-top" alt="" />
                            <div class="team-content">
                                <h3 class="title" style="font-family: Times New Roman; color: rgb(255, 255, 239)"><b>Abd Rahman as Siddiq</b></h3> <span class="post"><b>NIM 201402142</b></span> </div>
                            
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p><b>Siddiq</b><br/>  Mahasiswa Teknologi Informasi Universitas Sumatera Utara Tahun 2020. Lahir pada tanggal 22 Juli 2002 dan saat ini berusia 19 tahun. Biasa dipanggil Siddiq.</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-4" style="background-color:darksalmon";>
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/pp1.jpg" class="card-img-top" alt="" />
                            <div class="team-content">
                                <h3 class="title" style="font-family: Times New Roman; color: rgb(255, 255, 239)"><b>Rio Abdullah Siregar</b></h3> <span class="post"><b>NIM 201402130</b></span> </div>
                            
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p><b>Rio</b><br/>  Mahasiswa Teknologi Informasi Universitas Sumatera Utara Tahun 2020. Lahir pada tanggal 14 Maret 2002 dan saat ini berusia 19 tahun. Biasa dipanggil Rio.</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="about-box-main">
        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-4 col-lg-4" style="background-color:darksalmon";>
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/pp4.jpg" class="card-img-top" alt="" />
                            <div class="team-content">
                                <h3 class="title" style="font-family: Times New Roman; color: rgb(255, 255, 239)"><b>Diah Paramitha</b></h3> <span class="post"><b>NIM 201402118</b></span> </div>
                            
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p><b>Diah</b><br/>  Mahasiswa Teknologi Informasi Universitas Sumatera Utara Tahun 2020. Lahir pada tanggal 08 Juli 2002 dan saat ini berusia 19 tahun. Biasa dipanggil Diah atau Mitha.</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-4 col-lg-4" style="background-color:darksalmon";>
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/pp3.jpg" class="card-img-top" alt="" />
                            <div class="team-content">
                                <h3 class="title" style="font-family: Times New Roman; color: rgb(255, 255, 239)"><b>Dara Fadilah</b></h3> <span class="post"><b>NIM 201402106</b></span> </div>
                            
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p><b>Dara</b><br/>  Mahasiswa Teknologi Informasi Universitas Sumatera Utara Tahun 2020. Lahir pada tanggal 05 Agustus 2002 dan saat ini berusia 19 tahun. Biasa dipanggil Dara.</p>
                        </div>
                        <hr class="my-0"> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    <!-- End About Page -->

    <!-- Start Footer  -->
    <footer>
      <div class="tengah">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Mar Fo S a B u</h4>
                            <p>the place that you can read and give an information about vegetables and fruits.</p> 
                            <p>Dont forget to always happines my dear friends!! 
                            Enjoy your life and never give up for your dreams.</p>                             
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Private <br>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </footer>
    <!-- End Footer  -->

     <!-- Start copyright  -->
     <div class="wrapper">
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="about.php">Mar fo S a B u</a> | Design By :
            own</p>
    </div>
  </div>
    <!-- End copyright  -->




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