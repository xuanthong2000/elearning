a<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/stylesss.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <header class="header">
      <a href="/" class="logo">
        <i class="fas fa-graduation-cap"></i> E-learning
      </a>

      <div id="menu-btn" class="fas fa-bars"></div>

      <nav class="navbar">
        <ul>
          <li><a href="/">Trang chủ</a></li>
          <li><a href="/about">Về E-learning</a></li>
          <li><a href="/contact">Liên hệ</a></li>
          <li>
            <a href="#"><i class="fas fa-user"></i></a>
            <ul>
              <li><a href="#">Đăng nhập</a></li>
              <li><a href="#">Đăng xuất</a></li>
              <li></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <!-- header section ends -->
    <section class="heading">
      <h3>LIÊN HỆ</h3>
      <p><a href="/">Trang Chủ >></a> LIÊN HỆ</p>
    </section>

    <!-- contact -->

    <section class="contact">
      <div class="icons-container">
        <div class="icons">
          <i class="fas fa-phone"></i>
          <h3>Số điện thoại</h3>
          <p>+84 99 999 999</p>
          <p>+84 88 888 888</p>
        </div>

        <div class="icons">
          <i class="fas fa-envelope"></i>
          <h3>Email</h3>
          <p>elearning@gmail.com</p>
          <p>elearning-supporter@gmail.com</p>
        </div>

        <div class="icons">
          <i class="fas fa-map-marker-alt"></i>
          <h3>Địa chỉ</h3>
          <p>33 Xô Viết Nghệ Tĩnh - Đà Nẵng</p>
        </div>
      </div>

      <div class="row">
        <form action="">
          <h3>Đăng ký để xem nhiều khoá học hơn</h3>
          <input type="text" placeholder="Họ và tên" class="box" />
          <input type="number" placeholder="Số điện thoại" class="box" />
          <input type="email" placeholder="Email" class="box" />
          <textarea
            name=""
            placeholder="Bạn muốn nhắn nhủ e-learning điều gì"
            id=""
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" value="Gửi thôi nào!" class="btn" />
        </form>

        <iframe
          class="map"
          src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=đại học đông á&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </section>

    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Khám phá</h3>
          <a href="/"> <i class="fas fa-arrow-right"></i> Trang chủ </a>
          <a href="/about">
            <i class="fas fa-arrow-right"></i> Về E-learning
          </a>
          <a href="/contact">
            <i class="fas fa-arrow-right"></i> Liên hệ
          </a>
        </div>

        <div class="box">
          <h3>Khoá học</h3>
          <a href="#"> <i class="fas fa-arrow-right"></i> PHP </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> Front-end</a>
          <a href="#"> <i class="fas fa-arrow-right"></i> UI / UX design</a>
        </div>

        <div class="box">
          <h3>Theo dõi chúng tôi</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
          <a href="#"> <i class="fab fa-github"></i> Github </a>
          <a href="#"> <i class="far fa-envelope"></i> elearning@gmail.com </a>
        </div>
      </div>

      <div class="credit">
        Được thiết kế bởi <span>E-learning designer</span> | Sở hữu tất cả bản
        quyền!
      </div>
    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/scriptsss.js"></script>
  </body>
</html>
