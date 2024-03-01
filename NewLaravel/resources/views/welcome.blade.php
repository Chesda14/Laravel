<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Store</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<!-- box icons -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<link href="img/snack.png" rel=" icon ">

</head>
<body>
    <script>
        localStorage.getItem('username');
        localStorage.getItem('userpassword');
    </script>
    
    <header>
        <a href="#" class="logo"><i class='bx bxs-home' ></i><h4>Snack That</h4></a>
        <ul class="toplist">
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="index1.html">Product</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>

        <div class="icons">
            <a href="#"><i class='bx bxs-search' ></i></a>
            <a href="login.html" class="cart">
                <i class='bx bxs-cart'><span>0</span></i>  
            </a>
            <a href="login form/login.html" >
                <i class='bx bxs-user-account'></i>  
            </a>
            <!-- <div class="bx bx-menu" id="menu-icon"></div> -->
        </div>
    </header>

   
    <section class="home">
        <div class="home-img">
            <img src="img/new2.png">
        </div>
        <div class="home-text">
            <h1>Find Your <br>Favorite
                <span>Snacks</span>
                <br>Here!</h1>   
        </div>
    </section>

    <section class="container">
        <div class="box-container">
            <img src="img/c1.png">
            <h3>8:00 am - 5:00 pm</h3>
            <a href="#">Open & Close</a>
        </div>
        <div class="box-container">
            <img src="img/c2.png">
            <h3>Phnom Penh</h3>
            <a href="https://www.google.com/maps/place/BELTEI+International+University+(Campus+1,+Tuol+Sleng)/@11.5476901,104.9142898,17z/data=!3m1!4b1!4m6!3m5!1s0x3109511f69ba6309:0xc65060947881cb4e!8m2!3d11.5476849!4d104.9168647!16s%2Fg%2F11rvt5h_n?entry=ttu">Get Direction</a>
        </div>
        <div class="box-container">
            <img src="img/c3.png">
            <h3>(+855)23-456-789</h3>
            <a href="#">Call Us Now</a>
        </div>
    </section>

    <section>
    <div class="m" >
            <img src="img/m_snack.png">
        
        <div  class="m-text">
            <h1>Warning</h1><br>
            <h3>This Content will make you <span>Hungry.<br>So Hungry.</span></h3>
        </div>
    </div>
    </section>

    <section class="shop">
        <div class="center">
            <h3><span> Our Store</span></h3>
            <h2>The Most Popular & Top Order Snacks</h2>
        </div>
        <div class="shop-content">
            <div class="row">
                    <img src="img/Nacho Cheese.png" >
                    <h3>Dorito Chip</h3>
                    <p>Buy with the lower price</p>
                <div class="in-text">
                    <div class="price">
                        <h6>$2.50</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Order Now</a>
                    </div>  
                </div>

                <div class="heart">
                    <a href="#"><i class='bx bx-heart'></i></a>  
                </div>
            </div>
        </div>

        <div class="shop-content">
            <div class="row">
                <img src="img/Original Flavor.png" >
                <h3>Origin Flavor</h3>
                <p>Buy with the lower price</p>
                <div class="in-text">
                    <div class="price">
                        <h6>2.50</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Order Now</a>
                    </div>
                    
                    <div class="heart">
                        <a href="#"><i class='bx bx-heart'></i></a>  
                    </div>
                </div>
            </div>
        </div>

         <div class="shop-content">
            <div class="row">
                <img src="img/Lemon Lime.png" >
                <h3>Lemon Lime</h3>
                <p>Buy with the lower price</p>
                <div class="in-text">
                    <div class="price">
                        <h6>2.50</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Order Now</a>
                    </div>
                    <div class="heart">
                        <a href="#"><i class='bx bx-heart'></i></a>  
                    </div>
                </div>
            </div>
        </div>

        <div class="row-btn">
            <div class="btn">
                <a href="index1.html">See All Products</a>

            </div>
            
        </div>

        <div>
            <img src="img/ndorito.png" width="100%">
        </div>
    </section>

    <a name="service"></a>
    <section>
        <div class="center">
            <h1><span>Our Service</span></h1>
        </div>
        <div  class="m">
            <div class="m-text">
                <h2><span>Special Occasion</span></h2><br>
                <h3>Spent More Than<br>
                <span>$49.99 Free Delivery</span><br>In Phnom Penh & Province.</h3>
            </div>
            <div class="m-img">
                <img src="img/free-d.png" >
            </div>
        </div> 
        
        <h1><span>Our Delivery Men</span></h1>
        <div class="d-man">
            <div class="row1">
                <img src="img/d1.png">   
            </div>
            <div class="row1">
                <img src="img/d.png">
            </div>
    
        </div>
    </section>

    
    <a name="contact"></a> 
    <section>
        <div class="center">
            <h1><span>Contact Us</span></h1>
        </div>
        <div class="logo">    
            <div class="con">
                <ul>
                    <li><a href="#"><i class='bx bxl-facebook-circle' ></i></a></li>
                    <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram-alt' ></i></a></li>
                    <li><a href="#"><i class='bx bxl-telegram' ></i></a></li>
                </ul>
            </div>
        </div>
        <div  class="letter">
            <div>
                <form>
                    <h3>NewsLetter</h3>
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Email">
                    <!-- <button type="submit" value="Submit" class="submit">Submit</button> -->
                    <input type="submit" value="Submit" class="submit">
                </form>

                
            </div>
            <div class="letter1">
                <form>
                    <h3>Leave Some Message Here</h3>
                    <input type="text" placeholder="Message" onclick="onclick">   
                </form>
            </div>
        </div>

       
    </section>


    <footer>
        <div class="footer">
            <div class="cont">
                <div class="rows">
                    <img src="img/slogo.png">
                </div>
            </div> 
        </div>

        <div class="footer">
            <div class="cont">
                <div class="rows">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                    </ul>
                </div>
            </div> 
        </div>
        <div class="footer">
            <div class="cont">
                <div class="rows">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Payment Option</a></li>
                    </ul>
                </div>
            </div> 
        </div>
        <div class="footer">
            <div class="cont">
                <div class="rows">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="#">Chip</a></li>
                        <li><a href="#">Chocolate</a></li>
                        <li><a href="#">Energy Drinks</a></li>
                        <li><a href="#">Beer</a></li>
                        
                    </ul>
                </div>
            </div> 
        </div>
    </footer>
   

    <script src="main.js"></script>

  
    
    

</body>
</html>