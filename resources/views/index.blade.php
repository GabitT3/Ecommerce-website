
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digims";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>




<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>
    
    
    <!-- navbar -->
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class = "container">
        
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "#">
                <img src = "images/download.png" class="logo"alt = "">
                
            </a>

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#home">home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ route('shop') }}">shop</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#special">specials</a>
                    </li>
                    
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#about">about us</a>
                    </li>
                    <li class = "nav-item px-2 py-2 border-0">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ route('contact') }}">contact </a>
                    </li>
                    <li class = "nav-item px-2 py-2 border-0">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ route('admin') }}">admin </a>
                    </li>
                    <li class = "nav-item px-2 py-2 border-0">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ route('cart') }}"><i class="fa fa-shopping-cart" ></i></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- header -->
    <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
        <div class = "container h-100 d-flex align-items-center carousel-inner">
            <div class = "text-center carousel-item active">
                <h2 class = "text-capitalize text-white">best collection</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">new arrivals</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">shop now</a>
            </div>
            <div class = "text-center carousel-item">
                <h2 class = "text-capitalize text-white">best price & offer</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">new tech</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">buy now</a>
                
            </div>
        </div>

        <button class = "carousel-control-prev" type = "button" data-bs-target="#header" data-bs-slide = "prev">
            <span class = "carousel-control-prev-icon"></span>
        </button>
        <button class = "carousel-control-next" type = "button" data-bs-target="#header" data-bs-slide = "next">
            <span class = "carousel-control-next-icon"></span>
        </button>
    </header>
    <!-- end of header -->

    <!-- shop -->
    <section id = "shop" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block">Featured products</h2>
            </div>

            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">All</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".best">Best Sellers</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".feat">Featured</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">New Arrival</button>
                </div>


             


                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "images/alarm1.jpg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">security alarm</p>
                            <span class = "fw-bold">FCFA 11.000</span>
                            <a href="#"><i class = "fa fa-shopping-cart"></i></a>
                        </div>
                            
                    </div>
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "images/download (1).jpg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">smart watch</p>
                            <span class = "fw-bold">FCFA 9.998</span>
                            <a href="#"><i class = "fa fa-shopping-cart"></i></a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <img src = "images/download (6).jpg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">desktop computer</p>
                            <span class = "fw-bold">FCFA 70.000</span>
                            <a href="#"><i class = "fa fa-shopping-cart"></i></a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "images/download (9).jpg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">camera</p>
                            <span class = "fw-bold">FCFA 12.000</span>
                            <a href="#"><i class = "fa fa-shopping-cart"></i></a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "images/images (2).jpg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">phone</p>
                            <span class = "fw-bold">FCFA 100.000</span>
                            <a href="#"><i class = "fa fa-shopping-cart"></i></a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <img src = "images/download (17).jpg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">smart lock</p>
                            <span class = "fw-bold">FCFA 15.955</span>
                            <a href="#"><i class = "fa fa-shopping-cart"></i></a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "images/images (19).jpg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">video doorbell</p>
                            <span class = "fw-bold">FCFA 12.000</span>
                            <a href="#"><i class = "fa fa-shopping-cart"></i></a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "images/download (24).jpg" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">electronic wheelchair</p>
                            <span class = "fw-bold">FCFA 300.000</span>
                            <a href="#"><i class = "fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->

    <!-- special products -->
    <section id = "special" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block">Special Selection</h2>
            </div>

            <div class = "special-list row g-0">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/images (29).jpg" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">smart board</p>
                        <span class = "fw-bold d-block">FCFA 30.000</span>
                        <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/images (11).jpg" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">e-reader</p>
                        <span class = "fw-bold d-block">FCFA 9.000</span>
                        <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/remote1.jpg" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">remote</p>
                        <span class = "fw-bold d-block">FCFA 4.000</span>
                        <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/images (22).jpg" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">smart speaker</p>
                        <span class = "fw-bold d-block">FCFA 12.000</span>
                        <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of special products -->

    <!-- blogs -->
    <section id = "offers" class = "py-5">
        <div class = "container">
            <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class = "offers-content">
                    <h3 class = "text-white">Discount Up To <span>40%</span></h3>
                    <h2 class = "mt-2 mb-4 text-white">Grand Sale Offer!</h2>
                    <a href = "#" class = "btn">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->


    <!-- about us -->
    <section id = "about" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class = "lead text-muted">The company itself is a very successful company. Does anyone hate our flexibility with desire for forgiveness, or does he want pleasure ?.</p>
                    <p> Fleeing the pleasures of flattery, the training of manners that will happen! If the accusers want to refuse the pleasures of the body with less labor, no one, not us, will spare any of them.</p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img src = "images/wp1.jpg" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us -->


  <!-- footer -->
    <footer class = "bg-dark py-5">
        <div class = "container">
            <div class = "row text-white g-4">
                <div class = "col-md-6 col-lg-3">
                    <img src = "images/download.png" alt = "">
                    <p class = "text-white text-muted mt-3">The company itself is a very successful company. Does anyone hate our flexibility with desire for forgiveness, or does he want pleasure ?</p>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light">Links</h5>
                    <ul class = "list-unstyled">
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> HOME
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> SHOP
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> SPECIALS
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> ABOUT US
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Contact Us</h5>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <span class = "fw-light">
                            Douala, Cameroon
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span class = "fw-light">
                            digimultiservice@gmail.com
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span class = "fw-light">
                            +237681108926
                        </span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class = "list-unstyled d-flex">
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->




    <!-- jquery -->
    <script src = "js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>