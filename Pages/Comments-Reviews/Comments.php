<?php
//Comments.php
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="comments.css"/>
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
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
    <div class="form-area mb-5">
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
    <div class="form-group">
        <input type="hidden" name="comment_id" id="comment_id" value="0" />
        <input type="submit" name="submit" id="submit" class="submitbtn mb-5" value="Add a comment"/>
    </div>
   </form>
  </div>
  </div>
 </body>
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
