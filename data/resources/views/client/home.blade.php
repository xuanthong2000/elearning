<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>

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
              <li><a href="/login">Đăng nhập</a></li>
              <li><a href="/login">Đăng xuất</a></li>
              <li></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home">
      <div class="image">
        <img src="images/home-img.png" alt="" />
      </div>

      <div class="content">
        <h3>Khoá học dẫn đến thành công</h3>
        <p>
          <span style="color: #fa1d86; font-weight: bold">E-learning</span> nơi
          chia sẻ các khoá học chất lượng và nó hoàn toàn
          <span style="color: #fa1d86">miễn phí</span>
        </p>
        <a href="#" class="btn">Bắt đầu học nào!</a>
      </div>
    </section>

    <!-- home section ends -->

    <!-- categories section starts  -->

    <section class="course-2">
      <div class="box">
        <div class="image">
          <img src="images/main-course-1.png" alt="" />
        </div>
        <div class="content">
          <span>PHP</span>
          <a href="/course-3"><h3>PHP using Laravel Framework</h3></a>
          <p>Laravel là một framework nổi tiếng của ngôn ngữ PHP</p>
          <a href="/course-3" class="btn">Xem thêm</a>
          <div class="icons">
            <a href="#"> <i class="fas fa-book"></i> 12 modules </a>
            <a href="#"> <i class="fas fa-clock"></i> 6 hours </a>
          </div>
        </div>
      </div>
    </section>

    <!-- categories section ends -->

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
