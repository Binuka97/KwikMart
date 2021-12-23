<?php
    //index.php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="comments.css" /> 
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </head>
  <body>
    <div>
      <div>POI AREA</div>
      <div class="form-area">
        <div class="section-title mb-3">Display Comments</div>
      </div>
      <div class="form-area">
        <div class="section-title mb-3">Write a Review</div>
        <form method="POST" id="comment_form">
          <div class="form-group">
            <input  type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <textarea
              name = "comment_content"
              id = "comment_content"
              placeholder="Write a Comment"
              class="form-control"
              rows="5"
            ></textarea>
          </div>
          <div>
            <input class="ui-button ui-widget ui-corner-all" type="submit" name="submit" id="submit" value="Submit">
          </div>
        </form>
      </div>
      <span id="comment_message"></span>
      <div id="display_comment"></div>
    </div>
  </body>
</html>

<script>
  $(document).ready(function(){
    //to submit the form data
    $('#comment_form').on('submit',function(event){
      //this method stop submitting form data to server
      event.preventDefault();
      //convert form data to URL encoded string
      var form_data = $(this).serialize();
      //ajax request
      $.ajax({
        url:"AddComment.php",
        method:"POST",
        //which data we want to send to the server
        data: form_data,
        dataType:"JSON",
        //success callback function
        success:function(data)
        {
          if(data.error != ''){
            $('#comment_form')[0].reset();
            $('#comment_message').html(data.error);
          }
        }
      })
    });
  });
</script>