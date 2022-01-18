// JavaScript Document
$(document).ready(function () {

  var selectedProducts = JSON.parse(localStorage.getItem("selected"));
  if (selectedProducts != null) {
    localStorage.removeItem("selected");
  }

  // const fav_products = [
  //   {
  //     id: 'item-1',
  //     name: "Onion - 1Kg",
  //     img: "../../assets/images/onions.png",
  //     price: "Rs.120.00"
  //   },
  //   {
  //     id: 'item-1',
  //     name: "Carrot - 1kg",
  //     img: "../../assets/images/carrot.png",
  //     price: "Rs.160.00"
  //   }
  // ]

  // localStorage.setItem("favouriteItems", JSON.stringify(fav_products));
  // let favv = JSON.parse(localStorage.getItem("favouriteItems"))
  // console.log("FAVVVVVV", favv.name)
  // console.log("object", fav_products)
  
  displayFavourites();

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

  $("#deleteFav").click(function () {
    localStorage.removeItem("favouriteItems")
  });

});

function displayFavourites() {
  console.log("INSIDE")
  let fav_items = JSON.parse(localStorage.getItem("favouriteItems"))
  console.log(fav_items);

  var favCard = '';
  if (fav_items != null) {
    fav_items.forEach((item) => {
      favCard += '<div class="cart-item">';
      favCard += '<div class="check-image">';
      favCard += '<input type="checkbox" name="' + item.id + '" id="productCheckBox" data-role="none"><img src="'+item.img +'" class="img" /></div>';
      favCard += '<div class="item-info">';
      favCard += '<div class="progress-container">';
      favCard += '<span class="progress-text">' + item.name + ' </span></div>';
      favCard += '<p class="price-txt" style="color: #A1A1A1;">' + item.price + '</p></div>';
      favCard += '<span class="quantity-btn"> ADD TO <img src="../../assets/icons/cart1.png" id="cart-img"></span></div>';
        })

        document.getElementById("favourite-products").innerHTML = favCard;
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

