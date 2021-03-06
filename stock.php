<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cango Automart</title>
    <!---BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!--END BOOTSTRAP-->
</head>
<style>
    img{
        max-height: 800px;
    }
</style>
<body style="font-family: 'Roboto Light';background-color: #343A3F">
<section id="navbar" class="container" style="font-family: 'Roboto Light';">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/NEWCANGO.png" width="40" height="30" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#" >HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">STOCK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#partner">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact">CONTACT US</a>
                </li>
                <li class="nav-item active" >
                    <a class="nav-link text-primary " href="#" ><strong>LOGIN</strong></a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<section class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" >
            <div class="carousel-item active" >
                <img class="d-block w-100 " src="img/img3.webp" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/homepic.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="img/img4.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section  class="container" id="partner" style="background-color: #343A3F;padding-bottom: 5%;padding-top: 2%">
    <div class="container">
        <p class="text-center text-white">PARTNERSHIP</p>
        <div class="row justify-content-md-center" >
            <div class="col col-lg-2">
                <img src="img/finance-logo/lb-logo.png" alt="" class="img-thumbnail">
            </div>
            <div class="col col-lg-2">
                <img src="img/finance-logo/com-finance.png" alt="" class="img-thumbnail">
            </div>
            <div class="col col-lg-2">
                <img src="img/finance-logo/lb-logo.png" alt="" class="img-thumbnail">
            </div>
            <div class="col col-lg-2">
                <img src="img/finance-logo/lb-logo.png" alt="" class="img-thumbnail">
            </div>
            <div class="col col-lg-2">
                <img src="img/finance-logo/lb-logo.png" alt="" class="img-thumbnail">
            </div>
            <div class="col col-lg-2">
                <img src="img/finance-logo/lb-logo.png" alt="" class="img-thumbnail">
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 3%">
        <p class="text-center text-white">CUSTOMER BASE</p>
        <p></p>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">SALES</div>
        </div>
        <p></p>

        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">CUSTOMER REVIEW</div>
        </div>
    </div>
    <div class="container" style="padding-top: 3%">
        <p class="text-center text-white">GALLERY</p>
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="img/img2.jpeg" alt="Card image cap">
                <!---  <div class="card-body">
                      <h5 class="card-title">OPENING CEREMONY</h5>
                      <p class="card-text">Cango Auto-Mart was started in 2015.</p>
                  </div>-->
            </div>
            <div class="card">
                <img class="card-img-top" src="img/img2.jpeg" alt="Card image cap">

            </div>
            <div class="card">
                <img class="card-img-top" src="img/img2.jpeg" alt="Card image cap">

            </div>
            <div class="card">
                <img class="card-img-top" src="img/img2.jpeg" alt="Card image cap">

            </div>
        </div>
    </div>
</section>
</body>
<!-- Footer -->
<footer>
    <div class="container bg-dark font-small text-white pt-4">
        <div class=" text-center text-md-left">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-uppercase">CANGO AUTOMART</h5>
                    <p>Cango Automart is a car sale which create more than 10000+ customer all around Sri Lanka.</p>
                </div>
                <div class="col-md-3">
                    <h5 class="text-uppercase">Navigation</h5>
                    <ul class="list-unstyled " >
                        <li>
                            <a href="#navbar" style="color: white"><i class="far fa-arrow-alt-circle-right" style="color: white"></i> Home</a>
                        </li>
                        <li>
                            <a href="/stock.php" style="color: white"><i class="far fa-arrow-alt-circle-right" style="color: white"></i> Stock</a>
                        </li>
                        <li>
                            <a href="#partner" style="color: white"><i class="far fa-arrow-alt-circle-right" style="color: white"></i> About Us</a>
                        </li>
                        <li>
                            <a href="/login.php" style="color: #017BFE"><i class="far fa-arrow-alt-circle-right" style="color: white"></i> Login</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <p><i class="fas fa-home me-3"></i> No.100, Kandy Road, Yakkala</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                newcangoautomart@gmail.com
                            </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone me-3"></i> +9433 2222007, +9477 6380160</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #3b5998;"
                    href="#!"
                    role="button"
                ><i class="fab fa-facebook-f"></i></a>
                <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: green;"
                    href="#!"
                    role="button"
                ><i class="fab fa-whatsapp"></i
                    ></a>
                <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #0082ca;"
                    href="#!"
                    role="button"
                ><i class="fab fa-facebook-messenger"></i
                    ></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ?? 2020 Copyright:
            <a class="text-white" href="">BINURA THIRANJAYA</a>
        </div>

    </div>
</footer>
<!-- Footer -->
</html>