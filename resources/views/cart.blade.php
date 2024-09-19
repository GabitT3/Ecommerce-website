
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
                        <a class = "nav-link text-uppercase text-dark" href = "{{ route('contact') }} ">contact </a>
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
    <header id = "contact" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
        <div class = "container h-100 d-flex align-items-center carousel-inner">
           
            <div class = "text-center carousel-item active">
                <h2 class = "text-uppercase text-white">Leave a message, we love to hear from you</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">#Let's_talk</h1>
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
    <!-- cart -->
    <section id="cart" class="py-5">
    
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td><a href="#"><i class="fa fa-trash"></i></td>
                <td><img src="images/remote1.jpg" width="120px" height="100px" alt=""></td>
                <td>Smart watch</td>
                <td>FCFA 9998</td>
                <td><input type="number" value="1" name="" id=""></td>
                <td>FCFA 9998</td>
                
            </tr>
            <tr>
                <td><a href="#"><i class="fa fa-trash"></i></td>
                <td><img src="images/download (9).jpg" width="120px" height="100px" alt=""></td>
                <td>Camera</td>
                <td>FCFA 12000</td>
                <td><input type="number" value="1" name="" id=""></td>
                <td>FCFA 12000</td>
                
            </tr>
            <tr>
                <td><a href="#"><i class="fa fa-trash"></i></td>
                <td><img src="images/download (17).jpg" width="120px" height="100px" alt=""></td>
                <td>Smart lock</td>
                <td>FCFA 15955</td>
                <td><input type="number" value="1" name="" id=""></td>
                <td>FCFA 15955</td>
                
            </tr>



        </tbody>
    </table>
        </section>

    <section id="cart-add" class="py-5">
       
        <div class = "container">
           
              <h3 padding-bottom="15px">Apply coupon</h3>
           
            <input type="text" placeholder="Enter Your Coupon" >
            <button class="btn mt-3 text-uppercase">Apply</button>
        </div>
    
    </section >
        <div id="subtotal">
             <h3 border="1px">Cart Totals</h3>
               <table>
                 <tr>
                  <td>Cart Subtotals</td>
                   <td>FCFA 12000</td>  
                 </tr>
            <tr>
                <td>Delivery</td>
                <td>FCFA 1000</td>  
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>FCFA 13000</strong></td>  
            </tr>
               </table>
               <button class="btn mt-3 text-uppercase">Proceed to checkout</button> 
        </div>

            




    <!-- end of cart -->

   







    



    




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