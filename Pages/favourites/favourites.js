// JavaScript Document
$(document).ready(function () {

    // var selectedProducts = JSON.parse(localStorage.getItem("selected"));
    // if (selectedProducts != null) {
    //   localStorage.removeItem("selected");
    // }
    displayFavourites();
  
    // var favouriteProducts = [];
    // favouriteProducts.push("product1");
    // favouriteProducts.push("product3");
    // favouriteProducts.push("product5");
  
    // localStorage.setItem("favourites", JSON.stringify(favouriteProducts));
  
  
    // $(".favourite-product-quantity .favourite-product-increase-button").click(function () {
    //   var text = $(this).parent().parent().parent().find('.count', '.favourite-product-quantity')
    //   text.val(parseInt(text.val()) + 1);
    // });
  
    // $(".favourite-product-quantity .favourite-product-decrease-button").click(function () {
    //   var text = $(this).parent().parent().parent().find('.count', '.favourite-product-quantity')
    //   if (parseInt(text.val()) > 1) {
    //     text.val(parseInt(text.val()) - 1);
    //   }
    // });
  
    // $(".select-all").click(function () {
    //   if (this.checked) {
    //     $(':checkbox').each(function () {
    //       this.checked = true;
    //     });
    //     addAllselectedProducts();
    //     $(".share-favourites").css('background-color', '#4caf50');
    //     $(".share-favourites").css('pointer-events', 'all');
    //   } else {
    //     $(':checkbox').each(function () {
    //       this.checked = false;
    //     });
    //     removeAllselectedProducts();
    //     $(".share-favourites").css('background-color', '#D4D4D4');
    //     $(".share-favourites").css('pointer-events', 'none');
    //   }
    // });
  
    // $(".favourite-product-details #productCheckBox").click(function () {
  
    //   var productId = $(this).attr("name");
    //   var selectedProducts = JSON.parse(localStorage.getItem("selected"));
  
    //   if (this.checked) {
    //     if (selectedProducts == null) {
    //       selectedProducts = [];
    //       selectedProducts.push(productId);
    //     } else {
    //       if (!selectedProducts.includes(productId)) {
    //         selectedProducts.push(productId);
    //       }
    //     }
    //     localStorage.setItem("selected", JSON.stringify(selectedProducts));
    //     console.log($(this).attr("name"));
    //   } else {
    //     if (document.getElementById("select-all").checked) {
    //       document.getElementById("select-all").checked = false;
    //     }
    //     if (selectedProducts != null) {
    //       var index = selectedProducts.indexOf(productId);
    //       selectedProducts.splice(index, 1);
    //       localStorage.setItem("selected", JSON.stringify(selectedProducts));
    //     }
    //   }
  
    //   if (selectedProducts.length > 0) {
    //     $(".share-favourites").css('background-color', '#4caf50');
    //     $(".share-favourites").css('pointer-events', 'all');
    //   } else {
    //     $(".share-favourites").css('background-color', '#D4D4D4');
    //     $(".share-favourites").css('pointer-events', 'none');
    //   }
    // });
  
    // $(".share-favourites").click(function () {
    //   document.getElementById("myModal").style.display = 'block';
    // });
  
    // $("#share-btn").click(function () {
    //   if ($("#email").val() == "") {
    //     document.getElementById("error-text").style.display = 'block';
    //   } else {
    //     document.getElementById("myModal").style.display = 'none';
    //     console.log($("#email").val());
    //     localStorage.setItem("email", $("#email").val());
    //     // sendEmail();
    //   }
    // });
  
    // $("#close-btn").click(function () {
    //   document.getElementById("myModal").style.display = 'none';
    // });
  
  
  });

  function displayFavourites() {
      console.log("INSIDE PRODUCTS")
    var output = '';
        output += '<li><div class="favourite-product">';
        output += '<div class="favourite-product-images"> <img class="favourite-product-image" src="' + "img" + '"> </div>';
        // output += '<div class="favourite-product-details"><label class="favourite-product-checkbox"><input type="checkbox" name="' + "id" + '" id="productCheckBox" data-role="none"><span class="checkmark"></span></label>';
        output += '<p class="favourite-product-name">' + "name" + '</p>';
        output += '<p class="favourite-product-detail">' + "details" + '</p>';
        output += '<p class="favourite-product-price">' + "price" + '</p>';
        // output += '<img class="favourite-icon-fill" src="../images/heartFill.png" style="margin-left: 120px;"></div></div></div></li>';
    document.getElementById("favourite-products").innerHTML = output;
  }
  
//   function displayFavourites() {
//     var products = JSON.parse(data);
//     console.log("prod",products);
//     var favouriteProducts = JSON.parse(localStorage.getItem("favourites"));
//     console.log(favouriteProducts);
  
//     var output = '';
//     if (favouriteProducts != null) {
//       for (var i = 0; i < products.length; i++) {
//         for (j = 0; j < favouriteProducts.length; j++) {
  
//           if (products[i].id == favouriteProducts[j]) {
//             output += '<li><div class="favourite-product">';
//             output += '<div class="favourite-product-images"> <img class="favourite-product-image" src="' + products[i].image + '"> </div>';
//             output += '<div class="favourite-product-details"><label class="favourite-product-checkbox"><input type="checkbox" name="' + products[i].id + '" id="productCheckBox" data-role="none"><span class="checkmark"></span></label>';
//             output += '<p class="favourite-product-name">' + products[i].name + '</p>';
//             output += '<p class="favourite-product-detail">' + products[i].details + '</p>';
//             output += '<p class="favourite-product-price">' + products[i].price + '</p>';
//             output += '<img class="favourite-icon-fill" src="../images/heartFill.png" style="margin-left: 120px;"></div></div></div></li>';
//           }
//         }
//       }
//     }
//     document.getElementById("favourite-products").innerHTML = output;
//   }
  
//   function addAllselectedProducts() {
//     var favouriteProducts = JSON.parse(localStorage.getItem("favourites"));
//     var selectedProducts = JSON.parse(localStorage.getItem("selected"));
//     if (selectedProducts == null) {
//       selectedProducts = [];
//       for (var k = 0; k < favouriteProducts.length; k++) {
//         selectedProducts.push(favouriteProducts[k]);
//       }
//       localStorage.setItem("selected", JSON.stringify(selectedProducts));
//     } else {
//       for (var n = 0; n < favouriteProducts.length; n++) {
//         if (!selectedProducts.includes(favouriteProducts[n])) {
//           selectedProducts.push(favouriteProducts[n]);
//         }
//       }
//       localStorage.setItem("selected", JSON.stringify(selectedProducts));
//     }
//   }
  
//   function removeAllselectedProducts() {
//     var selectedProducts = JSON.parse(localStorage.getItem("selected"));
//     selectedProducts = [];
//     localStorage.setItem("selected", JSON.stringify(selectedProducts));
//   }
  
//   function showSuccessToast() {
//     var x = document.getElementById("success-toast");
//     x.className = "show";
//     setTimeout(function () {
//       x.className = x.className.replace("show", "");
//     }, 3000);
//   }
  
//   function showErrorToast() {
//     var x = document.getElementById("error-toast");
//     x.className = "show";
//     setTimeout(function () {
//       x.className = x.className.replace("show", "");
//     }, 3000);
//   }
  
//   function sendEmail() {
//     var emailBody = getEmailBody();
//     var templateParams = {
//       content: emailBody,
//       email: localStorage.getItem("email")
//     };
  
//     emailjs.send('service_8h5txmh', 'template_m4uanv6', templateParams, 'user_xVKaCP8VQbdWnbIDxs7HC')
//       .then(function (response) {
//         console.log('SUCCESS!', response.status, response.text);
//         showSuccessToast();
//       }, function (error) {
//         console.log('FAILED...', error);
//         showErrorToast();
//       });
//   }
  
//   function getEmailBody() {
//     var products = JSON.parse(data);
//     console.log(products);
//     var selectedProducts = JSON.parse(localStorage.getItem("selected"));
//     console.log(selectedProducts);
//     var output = ``;
//     if (selectedProducts != null) {
//       for (var i = 0; i < products.length; i++) {
//         for (j = 0; j < selectedProducts.length; j++) {
  
//           if (products[i].id == selectedProducts[j]) {
//             output += `<tr style="border-collapse:collapse"><td align="left" style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px"><!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:270px" valign="top"><![endif]--><table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"><tr style="border-collapse:collapse"><td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:270px"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"><tr style="border-collapse:collapse">`;
//             output += `<td align="center" style="padding:0;Margin:0;font-size:0"><img src="` + products[i].url + `" alt="` + products[i].name + `" class="adapt-img" title="` + products[i].name + `" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="165" height="132"></td></tr></table></td></tr></table>`;
//             output += `<!--[if mso]></td><td style="width:20px"></td><td style="width:270px" valign="top"><![endif]--><table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right"><tr style="border-collapse:collapse"><td align="left" style="padding:0;Margin:0;width:270px"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"><tr style="border-collapse:collapse">`;
//             output += `<td align="left" style="padding:0;Margin:0"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'source sans pro', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333"><strong>` + products[i].name + `</strong></h3></td></tr>`;
//             output += `<tr style="border-collapse:collapse"><td align="center" height="18" style="padding:0;Margin:0"></td></tr>`;
//             output += `<tr style="border-collapse:collapse"><td align="left" style="padding:0;Margin:0"><h4 style="Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'lucida sans unicode', 'lucida grande', sans-serif;color:#8CC63F"><b>` + products[i].price + `</b></h4></td></tr></table></td></tr></table><!--[if mso]></td></tr></table><![endif]--></td></tr>`;
//           console.log(products[i].url);
//           }
//         }
//       }
//     }
//     var emailBody = getEmailTemplate();
//     emailBody = emailBody.replace(`@products-list`, output);
//     return emailBody;
//   }