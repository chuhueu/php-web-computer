$(".owl-carousel").owlCarousel({
  loop: true,
  dotsEach: true,
  margin: 10,
  items: 1,
  lazyLoad: true,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
});

$(document).ready(function () {
  // Send product details in the server
  $(".addItem").click(function (e) {
    e.preventDefault();
    let $form = $(this).closest(".form-submit");
    let p_id = $form.find(".p-id").val();
    let p_title = $form.find(".p-title").val();
    let p_description = $form.find(".p-description").val();
    let p_image = $form.find(".pimg").val();
    let p_price = $form.find(".price").val();
    let p_code = $form.find(".p-code").val();
    $.ajax({
      url: "action.php",
      method: "post",
      data: {
        //A data to be sent to the server. It can be JSON object, string or array.
        p_id: p_id,
        p_title: p_title,
        p_description: p_description,
        p_image: p_image,
        p_price: p_price,
        p_code: p_code,
      },
      success: function (response) {
        //A callback function to be executed when Ajax request succeeds.
        alert(response);
        load_item_cart();
      },
    });
  });
  load_item_cart();
  function load_item_cart() {
    $.ajax({
      url: "action.php",
      method: "get",
      data: {
        cartItem: "cart_item",
      },
      success: function (response) {
        $("#cart-count").html(response);
      },
    });
  }
});
//Quantity for cart
$(document).ready(function () {
    $(".itemQty").on('change', function(){
        let $el = $(this).closest('tr');
        let cartID = $el.find('.cartID').val();
        let price = $el.find('.price').val();
        let qty = $el.find('.itemQty').val();
        let total_price =(price * qty).toFixed(2);
        location.reload(true);
        qty = parseInt(qty);
        if(qty > 0){
          $.ajax({
            url: 'action.php',
            method: 'post',
            cache: false,
            data: {
                qty: qty,
                cartID: cartID,
                price: price,
                total_price: total_price,
            },
            success: function(response){
              console.log(response);
            }
        })
        }

    })
});
