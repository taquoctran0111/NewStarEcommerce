<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="assets/style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <h2 style="color: rgb(233, 120, 139)">NewStar</h2>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="index.php">Trang chủ</a></li>
              <li><a href="src/product.php">Sản phẩm</a></li>
              <li><a href="src/about.php">Giới thiệu</a></li>
              <li><a href="#">Liên hệ</a></li>
              <li><a href="#">Tài khoản</a></li>
            </ul>
          </nav>
          <img src="assets/images/cart.png" width="30px" height="30px" />
          <img src="assets/images/menu.png" class="menu-icon" onclick="menutoggle()" />
        </div>
        <div class="row">
          <div class="col-2">
            <h1>You wear we care!</h1>
            <p>
              Trong cuộc sống này nếu bạn không thể sở hữu một sản phẩm của
              Louis Vuiton hãy sở hữu một sản phẩm của Newstar!
            </p>
            <p style="margin-top: 10px">
              You only live once, but if you do it right, once is enough.
            </p>
            <a href="src/product.php" class="btn">Khám phá ngay &#8594;</a>
          </div>
          <div class="col-2">
            <img src="assets/images/home.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="small-container">
      <h2 class="title">Sản phẩm</h2>
      <div class="row">
        <div class="col-4">
          <img src="assets/images/img1.jpg" alt="" />
          <h4>Áo sơ mi</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>550.000 vnđ</p>
        </div>
        <div class="col-4">
          <img src="assets/images/img2.jpg" alt="" />
          <h4>Áo polo</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>500.000 vnđ</p>
        </div>
        <div class="col-4">
          <img src="assets/images/img3.jpg" alt="" />
          <h4>Áo cánh</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>500.000 vnđ</p>
        </div>
        <div class="col-4">
          <img src="assets/images/img4.jpg" alt="" />
          <h4>Váy liền</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>650.000 vnđ</p>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <img src="assets/images/img5.jpg" alt="" />
          <h4>Chân váy</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>600.000 vnđ</p>
        </div>
        <div class="col-4">
          <img src="assets/images/img6.jpg" alt="" />
          <h4>Quần jeans</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>750.000 vnđ</p>
        </div>
        <div class="col-4">
          <img src="assets/images/img7.jpg" alt="" />
          <h4>Quần baggy</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>750.000 vnđ</p>
        </div>
        <div class="col-4">
          <img src="assets/images/img8.jpg" alt="" />
          <h4>Quần kaki</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>700.000 vnđ</p>
        </div>
      </div>
    </div>
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="assets/images/logo-godrej.png" alt="" />
          </div>
          <div class="col-5">
            <img src="assets/images/logo-oppo.png" alt="" />
          </div>
          <div class="col-5">
            <img src="assets/images/logo-paypal.png" alt="" />
          </div>
          <div class="col-5">
            <img src="assets/images/logo-philips.png" alt="" />
          </div>
          <div class="col-5">
            <img src="assets/images/logo-coca-cola.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Liên hệ</h3>
            <p>Điện thoại: <a href="tel:0984.666.888">0984.666.888</a></p>
            <p>
              Email:
              <a href="mailto: cskh@newstar.com.vn">cskh@newstar.com.vn</a>
            </p>
            <p>
              Địa chỉ: Số 1 Lê Văn Hiến, Phường Đức Thắng, Quận Bắc Từ Liêm,
              Thành phố Hà Nội
            </p>
            <p>Mã số thuế: 0101.213.124.017</p>
          </div>
          <div class="footer-col-2">
            <img src="assets/images/logo-white.png" alt="" />
            <p>
              Our Purpose Is To Sustainably Make the Plesure and Benefits of
              Sports Accessible to the Many.
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2021 - TaQuocTran</p>
      </div>
    </div>
    <!-- js for toggle menu -->
    <script>
      var MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";
      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
