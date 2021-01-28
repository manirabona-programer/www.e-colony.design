<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-colony.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="shortcut icon" href="images/Big-Data-Analytics.png" type="image/x-icon">
    <style>
       .start-account{
            margin-top: 13px;
            margin-left: 5px;
            padding: 5px;
            border: none;
            letter-spacing: 0.1ch;
      }
      .desc-cart-option {font-size: 11px;margin-left: 50px;}
      .desc-cart-option a{color: green;}
      .mycart {font-size: 12px;margin-right: 10px;text-decoration: none;}
      .seller-link {font-size: 13px;text-decoration: none;margin-right: 10px;}
    </style>
</head>
<body id="mainContent">
    <header>
       <div class="logo-field">
            <a href="#"><img src="images/home_open_shift.png" width="60"></a>
            <span class="text-logo"><a href="">E-colony.com</a></span>
       </div>
       <div class="product-link-navbar">
            <div>
                <ul>
                    <li><a href="#">Computer / tablets & Networking</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Jewely & Watches</a></li>
                    <li><a href="#">All Products <span><i class="fa fa-caret-down" aria-hidden="true" style="margin-left: 2px;"></i></span></a></li>
                </ul>
            </div>
            <div class="carting-incons">
                <span class="Mycart">
                    <a href="#">
                        <i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 5px;margin-top: 15px;"></i>
                        <span class="mycart">
                            Mycart
                        </span>
                    </a>
                </span>
                <span class="dealing-link">
                   <a href="#" class="seller-link">
                   Great Seller </a>
                </span>
            </div>
       </div>
       <div class="down-navbar-user-delicate">
           <div style="display: flex;">
                <div class="region-user">
                    <span><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a></span>
                    <span><a href="#">Rwanda</a></span>
                </div>
                <div class="signup-icons">
                    <span>Find,Share And Keep Secure. </span><br>
                    <span>Signin / Signup For MyThoth <i class="fa fa-caret-down" aria-hidden="true" style="margin-left: 2px;"></i></span>
                </div>
                <div class="signup-icons">
                    <span>Your Fast  </span><br>
                    <span>Great Order<i class="fa fa-caret-down" aria-hidden="true" style="margin-left: 2px;"></i></span>
                </div>
                </div>
                <div class="search-form">
                    <form action="#" method="POST" class="form-inline">
                        <input type="text" name="search" class="form-group-search" placeholder="  Search ..">
                        <button type="submit" name="submit-search-form" class="submit-form"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                    </form>
                </div>
            </div>
       </div>
    </header>
    <div class="products-container-main">
      <div class="top-product-pre">
         <div class="product-online-watchs">
             <div class="product-placeholder">
                <img src="images/product/71efLwwFbaL._SY445_.jpg" width="100"><br>
                <a href="#" style="font-size: 13px;text-decoration: none;">Know More</a>
             </div>
             <div class="product-placeholder">
                <img src="images/product/712+lIx4SlL._SY445_.jpg" width="100"><br>
                <a href="#" style="font-size: 13px;text-decoration: none;">Know More</a>
             </div>
             <div class="product-placeholder">
                <img src="images/product/71VfqdDJ+oL._SY445_.jpg" width="100"><br>
                <a href="#" style="font-size: 13px;text-decoration: none;">Know More</a>
             </div>
             <div class="product-placeholder">
                <img src="images/product/download (1).jpg" width="100"><br>
                <a href="#" style="font-size: 13px;text-decoration: none;">Know More</a>
             </div>
             <div class="product-placeholder">
                <img src="images/product/71efLwwFbaL._SY445_.jpg" width="100"><br>
                <a href="#" style="font-size: 13px;text-decoration: none;">Know More</a>
             </div>
             <div class="product-placeholder">
                <img src="images/product/712+lIx4SlL._SY445_.jpg" width="100"><br>
                <a href="#" style="font-size: 13px;text-decoration: none;">Know More</a>
             </div>
             <div class="product-placeholder">
                <img src="images/product/71VfqdDJ+oL._SY445_.jpg" width="100"><br>
                <a href="#" style="font-size: 13px;text-decoration: none;">Know More</a>
             </div>
         </div>
         <div class="advertize-right">
            <span>
               <span class="pre-click-into" style="font-weight: bold;"> Shop 1000+ more movies , music, videos , and more Fashion style all the way up </span><br>
                for only one click and lead update on your favorite choice , you just in right way ,enable it <br>
                and get it 
                <button class="start-account">Explore More With MyThoths <i class="fa fa-caret-right" aria-hidden="true"></i></button>
            </span>
         </div>
      </div>
      <div class="sparcing-pre-product">
            <div class="product-card-pre">
                <span style="font-weight: bold;margin-bottom: 10px;padding: 10px;font-size: 15px;">Jewely Ring From Australia</span><br><br>
                <img src="images/product/silva-ring.jpg"><br>
                <span><a href="#"style="font-size: 14px;color: black;">Great idea to do this in moood <br> this will be in there</a></span><br>
                <span style="font-size: 14px;color: black;">For Only $2.00</span><br>
                <a href="#" style="font-size: 14px;">Know More</a><span class="desc-cart-option"> <a href="#">Add In Cart</a></span>
            </div>
            <div class="product-card-pre">
                <span style="font-weight: bold;margin-bottom: 10px;padding: 10px;font-size: 15px;">Great Fruiet in Cart</span><br><br>
                <img src="images/product/ring01.jpg"><br>
                <span><a href="#"style="font-size: 14px;color: black;">Great idea to do this in moood <br> this will be in there</a></span><br>
                <span style="font-size: 14px;color: black;">For Only $2.00</span><br>
                <a href="#" style="font-size: 14px;">Know More</a><span class="desc-cart-option"> <a href="#">Add In Cart</a></span>
            </div>
            <div class="product-card-pre">
                <span style="font-weight: bold;margin-bottom: 10px;padding: 10px;font-size: 15px;">Great Fruiet in Cart</span><br><br>
                <img src="images/product/ring.jpg"><br>
                <span><a href="#"style="font-size: 14px;color: black;">Great idea to do this in moood <br> this will be in there</a></span><br>
                <span style="font-size: 14px;color: black;">For Only $2.00</span><br>
                <a href="#" style="font-size: 14px;">Know More</a><span class="desc-cart-option"> <a href="#">Add In Cart</a></span>
            </div>
            <div class="product-card-pre">
                <span style="font-weight: bold;margin-bottom: 10px;padding: 10px;font-size: 15px;">Great Fruiet in Cart</span><br><br>
                <img src="images/product/petron.jpg"><br>
                <span><a href="#"style="font-size: 14px;color: black;">Great idea to do this in moood <br> this will be in there</a></span><br>
                <span style="font-size: 14px;color: black;">For Only $2.00</span><br>
                <a href="#" style="font-size: 14px;">Know More</a><span class="desc-cart-option"> <a href="#">Add In Cart</a></span>
            </div>
            <!--<div class="product-card-pre">
                <span style="font-weight: bold;margin-bottom: 10px;">Great Fruiet in Cart</span><br><br>
                <img src="images/product/petron.jpg"><br>
                <span><a href="#"style="font-size: 14px;color: black;">Great idea to do this</a></span><br><br>
                <a href="#" style="font-size: 14px;">Know More</a>
            </div>-->
            <div class="advertize-business">
                <img src="images/bussiness.png" alt="advert">
            </div>
      </div>
      <!--<div class="present-the-next">
         
      </div>-->
      <div class="mult-one-product">
            <div class="mult-pre-img">
                <span style="font-weight: bold;margin-bottom: 10px;">Great Fruiet in Cart</span><br><br>
                <div class="first-cast">
                    <img src="images/product/un01.jpg"><br>
                    <span style="font-size: 13px;">camera canon 3 , is now on market <br> for only low price</span><br>
                     <span style="font-size: 13px; color: blue;"><i class="fa fa-check" aria-hidden="true" style="color: green;"></i>$50.4000 only </span>
                </div>
                <!--<span><a href="#"style="font-size: 14px;color: black;">Great idea to do this</a></span><br><br>
                <a href="#" style="font-size: 14px;">Know More</a>-->
            </div>
            <div class="mult-pre-img">
                <span style="font-weight: bold;margin-bottom: 10px;">Great Fruiet in Cart</span><br><br>
                <div class="first-cast">
                    <img src="images/product/super02.jpg"><br>
                    <span style="font-size: 13px;">camera canon 3 , is now on market <br> for only low price</span><br>
                     <span style="font-size: 13px; color: blue;"><i class="fa fa-check" aria-hidden="true" style="color: green;"></i>$50.4000 only </span>
                </div>
                <!--<span><a href="#"style="font-size: 14px;color: black;">Great idea to do this</a></span><br><br>
                <a href="#" style="font-size: 14px;">Know More</a>-->
            </div>
            <div class="mult-pre-img">
                <span style="font-weight: bold;margin-bottom: 10px;">Great Fruiet in Cart</span><br><br>
                <div class="first-cast">
                    <img src="images/product/supre01.jpg"><br>
                    <span style="font-size: 13px;">camera canon 3 , is now on market <br> for only low price</span><br>
                     <span style="font-size: 13px; color: blue;"><i class="fa fa-check" aria-hidden="true" style="color: green;"></i>$50.4000 only </span>
                </div>
                <!--<span><a href="#"style="font-size: 14px;color: black;">Great idea to do this</a></span><br><br>
                <a href="#" style="font-size: 14px;">Know More</a>-->
            </div>
            <div class="mult-pre-img">
                <span style="font-weight: bold;margin-bottom: 10px;">Great Fruiet in Cart</span><br><br>
                <div class="first-cast">
                    <img src="images/product/01.jpg"><br>
                    <span style="font-size: 13px;">camera canon 3 , is now on market <br> for only low price</span><br>
                     <span style="font-size: 13px; color: blue;"><i class="fa fa-check" aria-hidden="true" style="color: green;"></i>$50.4000 only </span>
                </div>
                <!--<span><a href="#"style="font-size: 14px;color: black;">Great idea to do this</a></span><br><br>
                <a href="#" style="font-size: 14px;">Know More</a>-->
            </div>
      </div>
      
    </div>
</html>