// JavaScript Document
$(document).ready(function () {

  var selectedProducts = JSON.parse(localStorage.getItem("selected"));
  if (selectedProducts != null) {
    localStorage.removeItem("selected");
  }

  const fav_products = [
    {
      id: 'item-1',
      name: "Carrot - 1 Kg",
      img: "../../assets/images/apples.png",
      price: "Rs.68.00"
    },
    {
      id: 'item-1',
      name: "Carrot - 1 Kg",
      img: "../../assets/images/apples.png",
      price: "Rs.68.00"
    }
  ]

  localStorage.setItem("favouriteItems", JSON.stringify(fav_products));
  let favv = JSON.parse(localStorage.getItem("favouriteItems"))
  console.log("FAVVVVVV", favv.name)
  console.log("object", fav_products)
  
  displayFavourites();

  $(".favourite-product-quantity .favourite-product-increase-button").click(function () {
    var text = $(this).parent().parent().parent().find('.count', '.favourite-product-quantity')
    text.val(parseInt(text.val()) + 1);
  });

  $(".favourite-product-quantity .favourite-product-decrease-button").click(function () {
    var text = $(this).parent().parent().parent().find('.count', '.favourite-product-quantity')
    if (parseInt(text.val()) > 1) {
      text.val(parseInt(text.val()) - 1);
    }
  });

  $(".select-all").click(function () {
    if (this.checked) {
      $(':checkbox').each(function () {
        this.checked = true;
      });
      addAllselectedProducts();
      $(".share-favourites").css('opacity', '1');
      $(".share-favourites").css('background-color', '#21826e');
      $(".share-favourites").css('pointer-events', 'all');
    } else {
      $(':checkbox').each(function () {
        this.checked = false;
      });
      removeAllselectedProducts();
      $(".share-favourites").css('background-color', '#21826e');
      $(".share-favourites").css('opacity', '0.5');
      $(".share-favourites").css('pointer-events', 'none');
    }
  });

  $(".check-image #productCheckBox").click(function () {

    var productId = $(this).attr("name");
    var selectedProducts = JSON.parse(localStorage.getItem("selected"));

    if (this.checked) {
      if (selectedProducts == null) {
        selectedProducts = [];
        selectedProducts.push(productId);
      } else {
        if (!selectedProducts.includes(productId)) {
          selectedProducts.push(productId);
        }
      }
      localStorage.setItem("selected", JSON.stringify(selectedProducts));
      console.log($(this).attr("name"));
    } else {
      if (document.getElementById("select-all").checked) {
        document.getElementById("select-all").checked = false;
      }
      if (selectedProducts != null) {
        var index = selectedProducts.indexOf(productId);
        selectedProducts.splice(index, 1);
        localStorage.setItem("selected", JSON.stringify(selectedProducts));
      }
    }

    if (selectedProducts.length > 0) {
      $(".share-favourites").css('opacity', '1');
      $(".share-favourites").css('background-color', '#21826e');
      $(".share-favourites").css('pointer-events', 'all');
    } else {
      $(".share-favourites").css('background-color', '#21826e');
      $(".share-favourites").css('opacity', '0.5');
      $(".share-favourites").css('pointer-events', 'none');
    }
  });

  $(".share-favourites").click(function () {
    document.getElementById("myModal").style.display = 'block';
  });

  $("#share-btn").click(function () {
    if ($("#email").val() == "") {
      document.getElementById("error-text").style.display = 'block';
    } else {
      document.getElementById("myModal").style.display = 'none';
      console.log($("#email").val());
      localStorage.setItem("email", $("#email").val());
      sendEmail();
    }
  });

  $("#close-btn").click(function () {
    document.getElementById("myModal").style.display = 'none';
  });


});

function displayFavourites() {
  console.log("INSIDE")
  // var products = JSON.parse(productss);
  // console.log("object", productss)
  var favouriteProducts = JSON.parse(localStorage.getItem("favourites"));
  let fav_items = JSON.parse(localStorage.getItem("favouriteItems"))
  console.log(fav_items);

  var output = '';
  if (fav_items != null) {
    fav_items.forEach((item) => {
      output += '<div class="cart-item">';
      output += '<div class="check-image">';
      output += '<input type="checkbox" name="' + item.id + '" id="productCheckBox" data-role="none"><img src="'+item.img +'" class="img" /></div>';
      output += '<div class="item-info">';
      output += '<div class="progress-container">';
      output += '<span class="progress-text">' + item.name + ' </span></div>';
      output += '<p style="color: #A1A1A1;">' + item.price + '</p>';
      output += '<span class="quantity-btn"> ADD TO <img src="../../assets/icons/cart1.png" id="cart-img"></span></div></div>';
        })

        document.getElementById("favourite-products").innerHTML = output;
          
  }
  
}

function addAllselectedProducts() {
  var favouriteProducts = JSON.parse(localStorage.getItem("favourites"));
  var selectedProducts = JSON.parse(localStorage.getItem("selected"));
  if (selectedProducts == null) {
    selectedProducts = [];
    for (var k = 0; k < favouriteProducts.length; k++) {
      selectedProducts.push(favouriteProducts[k]);
    }
    localStorage.setItem("selected", JSON.stringify(selectedProducts));
  } else {
    for (var n = 0; n < favouriteProducts.length; n++) {
      if (!selectedProducts.includes(favouriteProducts[n])) {
        selectedProducts.push(favouriteProducts[n]);
      }
    }
    localStorage.setItem("selected", JSON.stringify(selectedProducts));
  }
}

function removeAllselectedProducts() {
  var selectedProducts = JSON.parse(localStorage.getItem("selected"));
  selectedProducts = [];
  localStorage.setItem("selected", JSON.stringify(selectedProducts));
}

function showSuccessToast() {
  var x = document.getElementById("success-toast");
  x.className = "show";
  setTimeout(function () {
    x.className = x.className.replace("show", "");
  }, 3000);
}

function showErrorToast() {
  var x = document.getElementById("error-toast");
  x.className = "show";
  setTimeout(function () {
    x.className = x.className.replace("show", "");
  }, 3000);
}

function sendEmail() {
  var emailBody = getEmailBody();
  var templateParams = {
    content: emailBody,
    email: localStorage.getItem("email")
  };

  emailjs.send('service_3q50ful', 'template_gdvol4w', templateParams, 'user_uOok8WDddCFtXaYtxYn5D')
    .then(function (response) {
      console.log('SUCCESS!', response.status, response.text);
      showSuccessToast();
    }, function (error) {
      console.log('FAILED...', error);
      showErrorToast();
    });
}

// function getEmailBody() {
//   var products = JSON.parse(data);
//   console.log(products);
//   var selectedProducts = JSON.parse(localStorage.getItem("selected"));
//   console.log(selectedProducts);
//   var output = ``;
//   if (selectedProducts != null) {
//     for (var i = 0; i < products.length; i++) {
//       for (j = 0; j < selectedProducts.length; j++) {

//         if (products[i].id == favouriteProducts[j]) {
//           output += '<li><div class="favourite-product">';
//           output += '<div class="favourite-product-images"> <img class="favourite-product-image" src="' + item.image + '"> </div>';
//           output += '<div class="favourite-product-details"><label class="favourite-product-checkbox"><input type="checkbox" name="' + item.id + '" id="productCheckBox" data-role="none"><span class="checkmark"></span></label>';
//           output += '<p class="favourite-product-name">' + item.name + '</p>';
//           // output += '<p class="favourite-product-detail">' + products[i].details + '</p>';
//           output += '<p class="favourite-product-price">' + item.price + '</p>';
//           output += '<img class="favourite-icon-fill" src="../images/heartFill.png" style="margin-left: 120px;"></div></div></div></li>';
//         }
//       }
//     }
//   }
//   // var emailBody = getEmailTemplate();
//   emailBody = emailBody.replace(`@products-list`, output);
//   return emailBody;
// }
