<?php
    echo "first php file"
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
        <form>
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Choose Rating</option>
              <option>one star</option>
              <option>two stars</option>
              <option>three stars</option>
              <option>four stars</option>
            </select>
          </div>
          <div class="form-group">
            <textarea
              placeholder="Your Comment"
              class="form-control"
              id="exampleFormControlTextarea1"
              rows="5"
            ></textarea>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>