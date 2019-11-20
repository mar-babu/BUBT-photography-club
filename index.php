
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bubt photography club</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<section>

    <div class="container">
        <div class="top-nav">
            <div class="col-md-6">
                <img class="img-responsive logo-img" src="llogo.png" alt="">
            </div>
        </div>
    </div>
</section>

<section>


    <div class="container">
        <nav class="navbar navbar-expand-xl navbar-expand-lg navbar-light bg-light" style="width: 100%">
            <a class="navbar-brand" href="#">BUBTPC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Explore
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Trending</a>
                            <a class="dropdown-item" href="gallery.php">Galleries</a>
                            <a class="dropdown-item" href="#">Camera finder</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">World map</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="upload.php">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showall.php">Get Pro</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn" href="registration.php">Sign up</a>
                    </li>



                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
              <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">
                  <span class="sr-only">Search...</span>
                </span>
              </button>
            </span>
                        </div>
                    </form>

                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Sign in</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn" href="mail.php">Send mail</a>
                    </li>

                </ul>

            </div>
        </nav>
    </div>


</section>
<div class="container col-xl-12">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="1000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="w-100" src="phto/45628882_1768211309975261_8135985157589958656_o.jpg" height="400" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="w-100" src="phto/49168139_595495870906600_6398991896508628992_o.jpg" height="400" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="w-100" src="phto/33575988_10216358762349801_6958305116436824064_o.jpg" height="400" alt="Third slide">
    </div>

    <div class="carousel-item">
      <img class="w-100" src="phto/43691899_10217475093377379_136114475752226816_o.jpg" height="400" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="w-100" src="phto/14656285_1034177386692345_9009830311789768718_n.jpg" height="400"alt="Fifth slide">
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
</div>

<script src="assets/js/jquery-3.4.1.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
