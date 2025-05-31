<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Goldsmith &#8211; Modern WooCommerce Theme</title>
  <link rel="shortcut icon" href="./public/img/logo/123.png" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./public/css/output.css">
  <link rel="stylesheet" href="./public/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <?php include './view/inc/_header.php' ?>

  <div class="max-w-[1540px] m-auto text-[15px] pb-[5rem]">
    <div class="my_body">
      <div class="navbar_pay">
        <div class="logo_bamanpay">
          <img src=".\public\img\logo\123.png" alt="">
          <h2>AMAN</h2>
        </div>
        <div class="pay">
          <h2>Checkout</h2>
        </div>
        <img src="./public/img/ship/7.png" alt="">
      </div>
      <div class="flex border-[#c9c9c9] text-[#414141] border-b-[2px] py-[0.5rem] pt-[3rem]">
        <div class="w-[30%]">Item</div>
        <div class="w-[70%] flex">
          <span class="w-[20%] flex justify-center">Shipped from</span>
          <span class="w-[20%] flex justify-center">Attributes</span>
          <span class="w-[20%] flex justify-center">Quantity</span>
          <span class="w-[20%] flex justify-center">Price</span>
          <span class="w-[20%] flex justify-center">Total</span>
        </div>
      </div>
      <div class="product_cart">
        <?php if (isset($_SESSION['cart'])) { ?>
          <?php foreach ($_SESSION['cart'] as $orderItems) { ?>
            <div class="my_cart flex border-indigo-[#f5f5f5] text-[#929292] border-b-2 py-[1.5rem]">
              <div class="w-[30%] flex gap-[8px]">
                <img src="<?php echo $orderItems["productImage"] ?>" alt="" class="w-[110px]">
                <span class="text-[15px] flex flex-col justify-center items-start">
                  <div class="text-black text-[18px] font-[500]">
                    <?php echo $orderItems['productName']; ?>
                  </div>
                  <div class="leading-[40px] text-[#000000] truncate overflow-hidden w-[250px]">
                    <?php echo $orderItems['productDesciption']; ?>
                  </div>
                </span>
              </div>
              <div class="w-[70%] flex items-center">
                <span class="w-[20%] flex justify-center items-center">Vietnamese</span>
                <span class="w-[20%] flex justify-center items-center">material:<div class="text-black">&nbsp
                    ...</div></span>
                <span class="gap-[10px] w-[20%] flex justify-center items-center"><span class="flex items-center justify-center">X
                    <?php echo $orderItems['quantity'] ?>
                  </span></span>
                <span class="w-[20%] flex flex-col justify-center items-center">
                  <div class="text-black">
                    <?php echo number_format($orderItems['productPrice'], 0, ',', '.'); ?> vnđ
                  </div>
                </span>
                <span class="w-[20%] flex justify-center items-center text-black">
                  <span class="productTotal">
                    <?php echo number_format($orderItems['productPrice'] * $orderItems['quantity'], 0, ',', '.'); ?> vnđ
                  </span>
                </span>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
        <div class="container_sanPham flex items-center justify-center">
          <button class="addDeliveryInformation">Add delivery information</button>
        </div>
        <span class="absolute text-[red]"><?php echo $informationError['error'] ?></span>


        <div class="flex justify-end">
          <div class="w-[250px]">
            <div class="w-[100%] flex justify-between">Subtotal: <span class="text-black font-[450]"><span
                  class="subtotal"></span> đ</div>
            <div class="w-[100%] flex justify-between leading-[40px]">Est, shipping: <span
                class="text-black font-[450]"><span class="shippingTotal"></span> đ</div>
            <div class="w-[100%] flex justify-between ">Total: <span
                class="text-[20px] font-[500] text-[#000000]"><span class="total"></span> đ</div>
          </div>
        </div>
        <form action="checkout.php" method="post" class="buy_now mt-[20px] p-0">
          <input type="submit" name="btnCheckout" value="Continue to checkout" class="btn bg-black hover:opacity-[0.8]">


          <!-- checkout -->
          <div class="container_row">
            <div class="row relative">
              <div class="absolute rounded-full flex items-center justify-end px-[3.5rem] top-6 text-[25px] cursor-pointer">
                <i class='bx bx-x close'></i>
              </div>
              <div class="col-100">
                <div class="container">
                  <form action="checkout.php" method="post">
                    <div class="row">
                      <div class="col-50">
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe" value="<?php echo $informationError['firstname'] ?>" />
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com" value="<?php echo $informationError['email'] ?>" />
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="<?php echo $informationError['address'] ?>" />
                        <label for="city"><i class="fa fa-institution"></i> Phone</label>
                        <input type="text" id="city" name="phone" placeholder="" value="<?php echo $informationError['phone'] ?>" />
                        <label for="payment_method">Payment Method</label>
                        <select name="payment_method" class="form-control" id="payment_method">
                          <option value="cod">Cash on Delivery</option>
                          <option value="online">Online</option>
                        </select>
                      </div>
                    </div>
                    <label class="flex justify-between gap-5">
                      <div> <input type="checkbox" checked="checked" name="sameadr" />
                        Shipping address same as billing</div>
                      <div class="add_now cursor-pointer bg-black hover:opacity-[0.8]">Add</div>
                    </label>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- checkout -->

      </div>

    </div>
  </div>


  <!-- footer -->
  <?php include './view/inc/_footer.php' ?>
  <!-- footer -->
  <script src="./public/js/product_detail.js"></script>
  <script>
    //hàm ẩn và hiện bảng thông tin nhận hàng
    function onOffInformation() {
      var button = document.querySelector(".addDeliveryInformation")
      var close = document.querySelector(".container_row .close")
      var add = document.querySelector(".container_row .add_now")

      button.addEventListener('click', function() {
        document.querySelector(".container_row").style.opacity = "1";
        document.querySelector(".container_row").style.pointerEvents = "auto";
      })
      close.addEventListener('click', function() {
        document.querySelector(".container_row").style.opacity = "0";
        document.querySelector(".container_row").style.pointerEvents = "none";
      })
      add.addEventListener('click', function() {
        document.querySelector(".container_row").style.opacity = "0";
        document.querySelector(".container_row").style.pointerEvents = "none";
      })
    }
    onOffInformation();

    var menu = document.querySelector(".container_menu");
    var myBody = document.querySelector(".my_body");

    window.addEventListener("scroll", function() {
      // Kiểm tra vị trí cuộn
      var scrollPosition = window.scrollY || document.documentElement.scrollTop;

      // Thêm hoặc xoá class tùy thuộc vào vị trí cuộn
      if (scrollPosition > 0) {
        menu.style.transform = "translateY(-48px)";
        menu.style.position = "fixed";
        myBody.style.paddingTop = "5rem";
      } else {
        menu.style.transform = "translateY(0px)";
      }
    });
  </script>
</body>

</html>