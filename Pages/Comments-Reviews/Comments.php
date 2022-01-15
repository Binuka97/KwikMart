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
        <div href="#" class="menu-icon">
          <i class="fas fa-home icons"></i>Home
        </div>
        <div href="#" class="menu-icon">
          <i class="fas fa-th-list icons"></i>Categories
        </div>
        <div href="#" class="menu-icon">
          <i class="fas fa-heart icons"></i>Favourites
        </div>
        <div href="#" class="menu-icon">
          <i class="fas fa-shopping-cart icons"></i>Cart
        </div>
        <div href="#" class="menu-icon">
          <i class="fa fa-percent icons"></i>Promotions
        </div>
        <div href="#" class="menu-icon">
          <i class="fas fa-gamepad icons"></i>Games
        </div>
        <div href="#" class="menu-icon">
          <i class="fa fa-address-card icons"></i>About Us
        </div>
        <div href="#" class="menu-icon">
          <i class="fa fa-qrcode icons"></i>Scan Me
        </div>
        <div href="#" class="menu-icon">
          <i class="fa fa-user icons"></i>Account
        </div>
        <div href="#" class="menu-icon">
          <i class="fa fa-power-off icons"></i>Sign out
        </div>
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
      <div>POI AREA</div>
      <div class="form-area">
        <div class="section-title mb-3">Reviews</div>
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
