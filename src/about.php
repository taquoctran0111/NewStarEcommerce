<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="../assets/style.css" />
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
              <li><a href="../index.php">Trang chủ</a></li>
              <li><a href="product.php">Sản phẩm</a></li>
              <li><a href="about.php">Giới thiệu</a></li>
              <li><a href="#">Liên hệ</a></li>
              <li><a href="#">Tài khoản</a></li>
            </ul>
          </nav>
          <img src="../assets/images/cart.png" width="30px" height="30px" />
          <img src="../assets/images/menu.png" class="menu-icon" onclick="menutoggle()" />
        </div>
      </div>
    </div>
    <!-- testimonial -->
    <section id="feature">
      <div class="title-text">
        <p>NewStar</p>
        <h1>Giới thiệu</h1>
        <h2>Công ty cổ phần May Newstar</h2>
      </div>
      <div class="feature-box">
        <div class="features">
          <div class="quality">
            <h1>Giá trị cốt lõi</h1>
            <div class="feature-desc">
              <div class="feature-text">
                <div class="des-quality">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>Chất lượng hàng đầu</p>
                </div>
                <div class="des-quality">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>Dịch vụ hoàn hảo</p>
                </div>
                <div class="des-quality">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>Đối tác tin cậy</p>
                </div>
                <div class="des-quality">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>Môi trường làm việc lý tưởng</p>
                </div>
                <div class="des-quality">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>Phát triển bền vững</p>
                </div>
              </div>
            </div>
          </div>
          <div class="mission">
            <h1>Sứ mệnh Doanh nghiệp</h1>
            <div class="feature-desc">
              <div class="feature-text">
                <div class="descript">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>
                    Luôn lấy sự hài lòng của khách hàng, người tiêu dùng làm
                    trọng tâm trong mọi hoạt động.
                  </p>
                </div>
                <div class="descript">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>
                    Luôn đem đến những sản phẩm thời trang có mẫu mã đa dạng,
                    phong phú, đầy màu sắc và đáp ứng mọi phong cách của phái
                    nữ.
                  </p>
                </div>
                <div class="descript">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>
                    Luôn sáng tạo và cập nhật xu hướng thời trang mới nhất. Gìn
                    giữ nét văn hóa Việt và kết hợp hài hòa văn hóa nước ngoài.
                  </p>
                </div>
                <div class="descript">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>
                    Luôn quan tâm đến vấn đề sống còn, sự phát triển doanh
                    nghiệp, thường xuyên vun đắp giá trị công ty, thương hiệu,
                    giá trị khách hàng, lợi ích chính đáng của khách hàng.
                  </p>
                </div>
                <div class="descript">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <p>Luôn có ý thức bảo vệ môi trường.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="features-img">
          <img src="../assets/images/barber-man.jpg" alt="" />
        </div>
      </div>
    </section>
    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-4-manager">
            <img src="../assets/images/man.png" alt="" />
            <div class="info">
              <p>Chủ tịch hội đồng quản trị</p>
              <h3>Trần Kiên Giang</h3>
            </div>
          </div>
          <div class="col-4-manager">
            <img src="../assets/images/man.png" alt="" />
            <div class="info">
              <p>Phó Chủ tịch hội đồng quản trị</p>
              <h3>Nguyễn Thái Tuấn</h3>
            </div>
          </div>
          <div class="col-4-manager">
            <img src="../assets/images/man.png" alt="" />
            <div class="info">
              <p>Phó Chủ tịch hội đồng quản trị</p>
              <h3>Lại Mạnh Cường</h3>
            </div>
          </div>
          <div class="col-4-manager">
            <img src="../assets/images/woman.png" alt="" style="height: 263px" />
            <div class="info">
              <p>Phó Chủ tịch hội đồng quản trị</p>
              <h3>Nguyễn Ngọc Ánh</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- brands -->

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
            <h1>NewStar</h1>
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
        <p class="copyright">Copyright 2021 - Easy TaQuocTran</p>
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
