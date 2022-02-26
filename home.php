<?php


session_start();

    include('php/connection.php');
    include('php/function.php');

  $user_data = check_login($con);

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>Alem</title>
    <!--this is the css link-->
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/footer.css">

    <link rel="icon" href="image/Shopping_icon.jpg" type="image/png" sizes="16x16">
</head>
<body>
    <!--this is the topmost navigation bar -->
    <header>
        <!--this is logo -->
        <a href="#"><img id="logo" src="image/shopping.jpg"></a>
        <!--this is the navigation panel-->
        <div class="navpanel">
            <!--this is for the search to search in the php-->
            <form action="">
                <div class="search-box">
                    <img src="icons/search.ico">
                    <input type="text" placeholder="Search...">
                    <!--<button type="submit">Search</button>-->
                </div>
            </form>
            <!--this is for the account with an icon-->
            <div class="panel">
                <li class="menu-item">
                <a href="#"><span class="button_text">Hello,<?php echo $user_data['user_name']; ?> </span>
                <span class="button_icon">
                    <img src="icons/approved.ico">
                </span>
                </a>
                <ul class="sub-menu">                    
                    <li class="sub-item"><a href="#"><img src="icons/mi-account.ico" alt="">My Account</a></li>
                    <li class="sub-item"><a href="#"><img src="icons/order.ico" alt="">Orders</a></li>
                    <li class="sub-item"><a href="#"><img src="icons/apple.ico" alt="">Saved Items</a></li>
                    <li class="sub-item"><a href="php/logout.php" class="butclick">Log-Out</a></li>
                </ul>
               
            </li>
                <!--this is for the shopping cart with icon-->
                <li class="menu-item">
                    <a href="#"><span class="button_text">Cart</span>
                        <span class="button_icon">
                            <img src="icons/shopping.png">
                        </span>
                        </a>
                    </li>
               <!--this is for the help bar with icon-->
               <li class="menu-item">
                <a href="#"><span class="button_text">Help</span>
                <span class="button_icon">
                    <img src="icons/help.ico">
                </span>
                </a>
                <ul class="sub-menu">
                    <li class="sub-item"><a href="#">Help Center</a>

                    </li>
                    <li class="sub-item"><a href="#">Place & Track Order</a></li>
                    <li class="sub-item"><a href="#">Order Cancellation</a></li>
                    <li class="sub-item"><a href="#">Returns & Refunds</a></li>
                    <li class="sub-item"><a href="#">Payments & Alem Account</a></li>
                    <li class="sub-item"><a href="#"><img src="icons/message.ico" alt="">Live Help</a></li>
                </ul>
            </li>
            </div>
        </div>
    </header>
<!--this is the end of the header-->

<!--This is the side panel-->
<div class="sidepanel">
    <a href="" class="panel-item"><img src="icons/shop.ico" alt="">Super-Market</a>
        <!--Creating a list to display the content 
          <ul class="menu-category">
             <li class="category"><a href="#">food cupboard</a></li>
             <li class="category"><a href="#">drinks</a></li>
             <li class="category"><a href="#">house hold</a></li>
             <li class="category"><a href="#">shop by brand</a></li>
        </ul> -->
    <a href="" class="panel-item"><img src="icons/health.ico" alt="">Health & Beauty</a>
    <a href="" class="panel-item"><img src="icons/home-oof.ico" alt="">Home & Office</a>
    <a href="" class="panel-item"><img src="icons/phone&tab.ico" alt="">Phones & Tablets</a>
    <a href="" class="panel-item"><img src="icons/computer.ico" alt="">Computing</a>
    <a href="" class="panel-item"><img src="icons/electronics.ico" alt="">Electronics</a>
    <a href="" class="panel-item"><img src="icons/clothes.ico" alt="">Fashion</a>
    <a href="" class="panel-item"><img src="icons/gaming.ico" alt="">Gaming</a>
    <a href="" class="panel-item"><img src="icons/baby.ico" alt="">Baby products</a>
    <a href="" class="panel-item"><img src="icons/sports.ico" alt="">Sporting goods</a>
    <a href="" class="panel-item"><img src="icons/grass.ico" alt="">Garden & Outdoor</a>
    <a href="" class="panel-item"><img src="icons/more.ico" alt="">Other categories</a>

</div>
<!--This is the end of the side panel-->

<!-- This is for the start of slider  next to the panel-->
  <!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="image/nivea1.jpg" style="width:100%">
      
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="image/nivea2.jpg" style="width:100%">
    
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="image/nivea3.jpg" style="width:100%">
      
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles 
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div> 
<!-- This is for the end of slider  next to the panel-->

<!--The Labels starts here -->

<a href="#"class="label"><img src="icons/festivals.ico">Festivals</a>
<a href="#"class="label"><img src="icons/airplane.ico">Alem Global</a>
<a href="#"class="label"><img src="icons/resharge.ico">Airtime & Bills</a>
<a href="#"class="label"><img src="icons/food.ico">Alem Food</a>
<!--The Labels ends here -->
<!-- this is where the java script goes-->

<!--here goes the hottest items list-->
<main>
    
    <header>
        <h1>Top Hottest Product</h1>
        <p>
            <span>&#139;</span>
            <span>&#155;</span>
        </p>
    </header>
    <section>
        <div class="product">
            <picture>
                <img src="image/Product-1.png" alt="">
            </picture>
            <div class="details">
                <p>
                    <b>Product One</b>
                    <small>New Arrival</small>
                </p>
                <samp>ksh.4500/=</samp>
            </div>
            <div class="button">
                <p class="star">
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>    
                </p>
                <a href="#">Add-cart</a>
            </div>
        </div>

        <div class="product">
            <picture>
                <img src="image/Product-2.png" alt="">
            </picture>
            <div class="details">
                <p>
                    <b>Product Two</b>
                    <small>New Arrival</small>
                </p>
                <samp>ksh.4500/=</samp>
            </div>
            <div class="button">
                <p class="star">
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>    
                </p>
                <a href="#">Add-cart</a>
            </div>
        </div>

        <div class="product">
            <picture>
                <img src="image/Product-3.png" alt="">
            </picture>
            <div class="details">
                <p>
                    <b>Product Three</b>
                    <small>New Arrival</small>
                </p>
                <samp>ksh.4500/=</samp>
            </div>
            <div class="button">
                <p class="star">
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>    
                </p>
                <a href="#">Add-cart</a>
            </div>
        </div>

        <div class="product">
            <picture>
                <img src="image/Product-4.png" alt="">
            </picture>
            <div class="details">
                <p>
                    <b>Product Four</b>
                    <small>New Arrival</small>
                </p>
                <samp>ksh.4500/=</samp>
            </div>
            <div class="button">
                <p class="star">
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>  
                <strong>&star;</strong>  
                </p>
                <a href="#">Add-cart</a>
            </div>
        </div>

        <div class="product">
            <picture>
                <img src="image/Product-5.png" alt="">
            </picture>
            <div class="details">
                <p>
                    <b>Product Five</b>
                    <small>New Arrival</small>
                </p>
                <samp>ksh.4500/=</samp>
            </div>
            <div class="button">
                <p class="star">
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>  
                <strong>&star;</strong>  
                </p>
                <a href="#">Add-cart</a>
            </div>
        </div>

        <div class="product">
            <picture>
                <img src="image/Product-6.png" alt="">
            </picture>
            <div class="details">
                <p>
                    <b>Product Six</b>
                    <small>New Arrival</small>
                </p>
                <samp>ksh.4500/=</samp>
            </div>
            <div class="button">
                <p class="star">
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong> 
                <strong>&star;</strong>   
                </p>
                <a href="#">Add-cart</a>
            </div>
        </div>

        <div class="product">
            <picture>
                <img src="image/Product-7.png" alt="">
            </picture>
            <div class="details">
                <p>
                    <b>Product Seven</b>
                    <small>New Arrival</small>
                </p>
                <samp>ksh.4500/=</samp>
            </div>
            <div class="button">
                <p class="star">
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>  
                <strong>&star;</strong>  
                </p>
                <a href="#">Add-cart</a>
            </div>
        </div>

        <div class="product">
            <picture>
                <img src="image/Product-8.png" alt="">
            </picture>
            <div class="details">
                <p>
                    <b>Product Eight</b>
                    <small>New Arrival</small>
                </p>
                <samp>ksh.4500/=</samp>
            </div>
            <div class="button">
                <p class="star">
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong>
                <strong>&star;</strong> 
                <strong>&star;</strong>   
                </p>
                <a href="#">Add-cart</a>
            </div>
        </div>
    </section>
</main>
<!--this is the part 2 section-->
<div class="section2">
    <div class="box">
        <div class="imgBox">
            <img src="image/pombe.jpg" alt="">
        </div>
    </div>

    <div class="box">
        <div class="imgBox">
            <img src="image/liquir.jpg" alt="">
        </div>
    </div>
</div>
<!--this is the end of the part 2-->

<!--this is the start of the brands section-->
<div class="brand-section">
    <header>
        <h3>Exclusive Brand Partners</h3>
    </header>
    <div class="box">
        <div class="imgBox">
            <img src="image/ad1.jpg" alt="">
        </div>
    </div>
    <div class="box">
        <div class="imgBox">
            <img src="image/ad2.jpg" alt="">
        </div>
    </div>
    <div class="box">
        <div class="imgBox">
            <img src="image/ad3.jpg" alt="">
        </div>
    </div>
    <div class="box">
        <div class="imgBox">
            <img src="image/ad4.jpg" alt="">
        </div>
    </div>
    <div class="box">
        <div class="imgBox">
            <img src="image/ad5.jpg" alt="">
        </div>
    </div>
  
</div>
<!--this is the end of the brands section-->

<!--this is the begining of the footer -->
    	<footer>

			<div class="sec aboutus">
				<h2>About Us</h2>
				<p> </p>	
				<ul class="sci">

				<li><a href="#"><img src="icons/fb.ico"></a></li>
				<li><a href="#"><img src="icons/twitter.ico"></a></li>
				<li><a href="#"><img src="icons/instagram.png"></a></li>
			</ul>			
			</div>
			<div class="sec quickLinks">
				<h2>Quick Links</h2>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Blogs</a></li>
				</ul>								
			</div>
			<div class="sec contact">
				<h2>Contact Us</h2>
				<ul class="geoinfo">
					<li>
						<span> <img src="icons/map.ico"> </span>
						<span>We have no physical landmarks yet</span>
					</li>
					<li>
						<span><img src="icons/phone.ico"></i></span>
						<p><a href="tel:0706839313">+254 0706839313</a></p><br><br>
						
					</li>	
					<li>
						<span><img src="icons/mail.ico"></i></span>
						<p><a href="mailto:amurimi332@gmail.com">alemonlineshopping.com</a></p>
					</li>						
				</ul>
				
			</div>
			
		</div>
	</footer>
	<div class="copyrightText">
		<p>copyright ©2021 Alem Online Shopping. All Rights Reserved.</p>
		
	</div>


<!--this is the end of the footer -->
<script src="js/script.js"></script>

</body>

</html>
<script src="js/main.js"></script>
