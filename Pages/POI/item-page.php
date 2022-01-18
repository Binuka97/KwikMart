<?php

    $conn=mysqli_connect("localhost","root","","Kwikmart");
    if(!$conn){
        die("Error while connecting to database");
    }


    if(isset($_POST["submit"])){
        $rating=$_POST['rating'];
        $review=$_POST["review"];
        $query=mysqli_query($conn,"INSERT INTO review(rating,review) VALUES('$rating','$review')");
        if(!$query){
            die("ERROR: Could not post review");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KwikMart | Item</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
          rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="item-page.css">
<link rel="stylesheet" href="navigation.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="footer.css" />

</head>
<body>
    <nav class="navbar-header">
      <span class="open-slide">
        <p href="#" class="hamburger-icon-qr" onclick="openSlideMenu()">
          <i class="fa fa-bars"></i>
        </p>
      </span>
      <ul>
        <img
          src="../../assets/images/logo1.png"
          class="logo-header"
          alt="logocolored"
        />
      </ul>
    </nav>
    <div id="side-menu" class="side-nav">
      <div class="btn-close" onclick="closeSlideMenu()">&times;</div>
      <a href="#" class="menu-icon"> <i class="fas fa-home icons"></i>Home </a>
      <a
        href="file:///C:/xampp/htdocs/KwikMart/KwikMart/Pages/Categories/Categories.html"
        class="menu-icon"
      >
        <i class="fas fa-th-list icons"></i>Categories
      </a>
      <a href="#" class="menu-icon">
        <i class="fas fa-heart icons"></i>Favourites
      </a>
      <a href="#" class="menu-icon">
        <i class="fas fa-shopping-cart icons"></i>Cart
      </a>
      <a href="#" class="menu-icon">
        <i class="fa fa-percent icons"></i>Promotions
      </a>
      <a href="#" class="menu-icon">
        <i class="fas fa-gamepad icons"></i>Games
      </a>
      <a href="#" class="menu-icon">
        <i class="fa fa-address-card icons"></i>About Us
      </a>
      <a href="#" class="menu-icon">
        <i class="fa fa-qrcode icons"></i>Scan Me
      </a>
      <a href="#" class="menu-icon">
        <i class="fa fa-user icons"></i>Account
      </a>
      <a href="#" class="menu-icon">
        <i class="fa fa-power-off icons"></i>Sign out
      </a>
    </div>
<div class="container py-5">
    <section class="mb-5">
        <!--product card-->
        <div class="p-5 shadow card position-relative product-card mb-4">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>Weetabix - Original, 400g</h6>
                    <div class="star-rating">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_border</span>
                        <span class="material-icons">star_border</span>
                    </div>
                    <div class="text-muted">Rs 420.00</div>
                </div>
                <div>
                    <span class="material-icons text-primary">favorite</span>
                    <!--                <span class="material-icons">favorite_border</span>-->
                </div>
            </div>
            <div class="text-center">
                <img src="../../assets/images/AR-201109907_1-removebg-preview.png" width="176">
            </div>
            <div class="position-absolute rounded-pill bg-primary py-2 px-3 text-white font-weight-bold stock-badge">
                Out of stock
            </div>
        </div>
        <!--quantity selector-->
        <div class="text-center">
            <h6 class="mb-3 text-muted">Select Quantity</h6>
            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="quantity-selector-container">
                        <span class="material-icons add">remove</span>
                        <span class="quantity-label w-100 number_span"></span>
                        <span class="material-icons remove">add</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="quantity-label w-100"><h4 style="color:grey;">Rs <span class="price_heading"></span>.00</h4></span>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-block bg-primary rounded-pill d-flex justify-content-center align-items-center px-4">
                    <span>ADD TO CART</span>
                    <span class="material-icons-outlined pl-3">shopping_cart</span>
                </button>
            </div>
        </div>
    </section>
    <!--product details-->
    <section class="mb-5">
        <h4 class="text-muted mb-4">Product Details</h4>
        <table class="table">
            <tbody class="text-muted">
            <tr>
                <th scope="row" class="border-top-0">Item Description</th>
                <td class="border-top-0">A cereal is any grass cultivated (grown) for the edible components of its grain (botanically, a type of fruit called a caryopsis), composed of the endosperm, germ, and bran.
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-muted">Ingredients</th>
                <td>Wheat flor, Sugar, Oil</td>
            </tr>
            <tr>
                <th scope="row" class="text-muted">Product Code</th>
                <td>WB400G</td>
            </tr>
            <tr>
                <th scope="row" class="text-muted">Expiry Date</th>
                <td>11 / 10 / 2021</td>
            </tr>
            <tr>
                <th scope="row" class="text-muted">Manufactured Date</th>
                <td>11 / 10 / 2022</td>
            </tr>
            </tbody>
        </table>
    </section>

    <!--Reviews-->
    <section class="mb-5">
        <h3 class="text-primary mb-3">Reviews</h3>

<?php
$query=mysqli_query($conn,"SELECT * FROM review");
if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query)){
        $review=$row["review"];
        $rating=$row["rating"];
?>
        <div class="border d-flex justify-content-between align-items-center position-relative p-4 shadow rounded mb-3" style="gap: 2rem">
            <img src="../../assets/images/default_image.png" width="80" class="flex-shrink-0 img-fluid" alt="...">
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mt-0">Guest User</h6>
                    <div class="star-rating">
<?php

                for($i=0;$i<5;$i++){
                    if($i<$rating){

?>
                        <span class="material-icons">star</span>
<?php
        }
        else{
?>

                        <span class="material-icons">star_border</span>

<?php
        }
    }
?>
                    </div>
                </div>
                <p class=""><?php echo $review?></p>
                <div class="float-right text-primary d-flex justify-content-between align-items-center" style="gap: 1rem; cursor: pointer">
                    <span class="material-icons-outlined">reply</span>
                    Reply
                </div>
            </div>
        </div>
<?php
    }
}


?>
    </section>

    <section class="mb-5">
        <h3 class="text-primary mb-3">Write a Review</h3>
        <form action="" class="bg-white p-4 rounded custom-form" method="POST">
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1" name="rating">
                    <option>Choose Rating</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="5" id="exampleFormControl2" placeholder="Write a comment" name="review"></textarea>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn bg-primary rounded-pill px-4" name="submit" type="submit">Submit Review</button>
            </div>
        </form>
    </section>
</div>
<footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
              <img
                src="../../assets/images/logo-light.png"
                class="logo-footer"
                alt="light-logo"
              />
              <p class="content">
                Our pioneer venture into modern trade in 1983 was a unique
                innovation of our company's longstanding trading legacy. We
                continued to challenge the norm by revolutionizing what was
                traditionally an affluent affair by offering products of a
                higher value for the lowest prices.
              </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 segment-two">
              <p class="topic-content">Links</p>
              <ul>
                <p class="link" href="#">Home</p>
                <p class="link" href="#">Scan Me</p>
                <p class="link" href="#">Reviews</p>
                <p class="link" href="#">Categories</p>
                <p class="link" href="#">About us</p>
                <p class="link" href="#">Help</p>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 segment-three">
              <p class="topic-content">Follow Us</p>
              <p class="content">
                Questions or Feedbacks? We'd love to hear from you. Please
                follow us on our social media profiles in order to keep updated
              </p>
              <div class="icons" href="#"><i class="fa fa-facebook"></i></div>
              <div class="icons" href="#"><i class="fa fa-twitter"></i></div>
              <div class="icons" href="#"><i class="fa fa-linkedin"></i></div>
              <div class="icons" href="#"><i class="fa fa-pinterest"></i></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 segment-four">
              <p class="topic-content">Our Newsletters</p>
              <p class="content">
                Questions or Feedbacks? We'd love to hear from you. Please
                follow us on our social media profiles in order to keep updated
              </p>
              <form action="" class="form-area">
                <span class="email-field"></span>
                <span class="submit-button">Subscribe</span>
              </form>
            </div>
          </div>
        </div>
      </div>
      <p class="footer-bottom-text">
        Copy right 2022 by KwikMart Grocery Store | All rights reserved
      </p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script>
    function openSlideMenu() {
    document.getElementById("side-menu").style.width = "300px";
    }

    function closeSlideMenu() {
    document.getElementById("side-menu").style.width = "0px";
    }

    $(document).ready(function(){
        i=1;
        $('.number_span').text(i);
        $('.price_heading').text(i*420);


        $('.remove').click(function(){
            i++;
            $('.number_span').text(i);
            $('.price_heading').text(i*420);
        });

        $('.add').click(function(){
            i--;
            $('.number_span').text(i);
            $('.price_heading').text(i*420);

        });
    })
</script>
        
</body>
</html>