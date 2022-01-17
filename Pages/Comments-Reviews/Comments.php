<?php
//Comments.php
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="comments.css"/>
    <link rel="stylesheet" href="../Navigation/navigation.css"/>
    <link rel="stylesheet" href="../Navigation/bottomNav.css"/>
    <link rel="stylesheet" href="style.css"/>
    <!--Jquery-->
    <link
      rel="stylesheet"
      href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"
    />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
 </head>
 <body>
 <div data-role="header" data-position="fixed">
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
        <a href="#" class="menu-icon">
          <i class="fas fa-home icons"></i>Home
        </a>
        <a href="../Categories/Categories.html" class="menu-icon">
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
        <a href="../QR/AR-Main-Page.html" class="menu-icon">
          <i class="fa fa-qrcode icons"></i>Scan Me
        </a>
        <a href="#" class="menu-icon">
          <i class="fa fa-user icons"></i>Account
        </a>
        <a href="#" class="menu-icon">
          <i class="fa fa-power-off icons"></i>Sign out
        </a>
      </div>

      <script>
        function openSlideMenu() {
          document.getElementById("side-menu").style.width = "300px";
        }

        function closeSlideMenu() {
          document.getElementById("side-menu").style.width = "0px";
        }
      </script>
    </div>
    <div>
    <div class="mb-5 mt-5 product-area">
        <!--product card-->
        <div class="p-5 shadow card position-relative product-card mb-4">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>Weetabix - Original, 400g</h6>
                    <div class="star-rating">
                        <span class="material-icons"><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span class="material-icons"><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span class="material-icons"><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span class="material-icons"><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span class="material-icons"><i class="fa fa-star" aria-hidden="true"></i></span>
                    </div>
                    <div class="text-muted">Rs 420.00</div>
                </div>
                <div>
                    <span class="material-icons text-primary"><i class="fa fa-heart heart-color" aria-hidden="true"></i></span>
                  
                </div>
            </div>
            <div class="text-center">
                <img src="../../assets/images/AR-201109907_1-removebg-preview.png" width="176">
            </div>
            <div class="position-absolute rounded-pill bg-primary py-2 px-3 text-white font-weight-bold stock-badge outstock">
                Out of stock
            </div>
        </div>
        <!--quantity selector-->
        <div class="text-center">
            <h6 class="mb-3 text-muted">Select Quantity</h6>
            <div class="mb-3">
                <div class="quantity-selector-container">
                    <span class="material-icons add">add</span>
                    <span class="quantity-label w-100">001</span>
                    <span class="material-icons remove">remove</span>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-block bg-primary rounded-pill d-flex justify-content-center align-items-center px-4 addcart">
                    <span>ADD TO CART</span>
                </button>
            </div>
        </div>
      </div>

    <!--product details-->
    <section class="mb-5 details-area">
        <h4 class="text-muted mb-4">Product Details</h4>
        <table class="table">
            <tbody class="text-muted">
            <tr>
                <th scope="row" class="border-top-0">Item Description</th>
                <td class="border-top-0">For some easy breakfast ideas it makes a brilliant base: top it off with your favourite fruit for a delicious breakfast

And here's what's inside…
100% wholegrain, High in fibre, Low in sugar, salt and fat, Fortified with Thiamin (B1), Riboflavin (B2), Niacin, Folic Acid and iron, 136 kcal per two biscuit serving, 362kcal/100g
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-muted">Ingredients</th>
                <td>Wholegrain Wheat (95%), Malted Barley Extract, Sugar, Salt, Niacin, Iron, Riboflavin (B2), Thiamin (B1), Folic Acid</td>
            </tr>
            <tr>
                <th scope="row" class="text-muted">Product Code</th>
                <td>WB400G</td>
            </tr>
            <tr>
                <th scope="row" class="text-muted">Expiry Date</th>
                <td>11 / 10 / 2022</td>
            </tr>
            <tr>
                <th scope="row" class="text-muted">Manufactured Date</th>
                <td>11 / 10 / 2022</td>
            </tr>
            </tbody>
        </table>
    </section>
      <div class="form-area">
        <div class="section-title mb-2">Reviews</div>
      </div>
      <div class="form-area">
        <span id="comment_message"></span>
        <br />
        <div id="display_comment"></div>
      </div>
      <div class="form-area mb-3">
        <div class="section-title-form">Write a Comment</div>
      </div>
      <div class="form-area">
        <form method="POST" id="comment_form">
          <div class="form-group">
            <input type="text" name="comment_name" id="comment_name" class="form-control-Name" placeholder="Enter Name" />
          </div>
          <div class="form-group">
            <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Your Comment" rows="8"></textarea>
          </div>
          <div class="form-group ">
            <input type="hidden" name="comment_id" id="comment_id" value="0" />
              <input type="submit" name="submit" id="submit" class="submitbtn " value="Add a comment"/>
          </div>
        </form>
      </div>
  </div>
 </body>
 <div data-role="footer" data-position="fixed" class="footer-conatiner">
    <nav class="nav">
      <a href="#" class="nav__link">
        <img
          src="../../assets/icons/home.png"
          class="nav-icons-home"
          alt="home"
        />
      </a>
      <a href="#" class="nav__link nav__link--active">
        <img
          src="../../assets/icons/favourite.png"
          class="nav-icons-fav"
          alt="favourite"
        />
      </a>
      <a href="#" class="nav__link">
        <img
          src="../../assets/icons/cart.png"
          class="nav-icons-cart"
          alt="cart"
        />
      </a>
      <a href="#" class="nav__link">
        <img
          src="../../assets/icons/user.png"
          class="nav-icons-user"
          alt="user"
        />
      </a>
    </nav>
  </div>
 
</html>
<script>
$(document).ready(function(){
 //to submit the form data
 $('#comment_form').on('submit', function(event){
//this method stop submitting form data to server
  event.preventDefault();
  //convert form data to URL encoded string
  var form_data = $(this).serialize();
  //ajax request
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   //which data we want to send to the server
   data:form_data,
   dataType:"JSON",
   //success callback function
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });

});
</script>
