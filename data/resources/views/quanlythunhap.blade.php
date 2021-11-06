<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trang Chủ</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/datables-simple-demo.js"></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="home">TOEIC</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <form
        class="
          d-none d-md-inline-block
          form-inline
          ms-auto
          me-0 me-md-3
          my-2 my-md-0
        "
      >
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Search for..."
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
          />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
            <li><a class="dropdown-item" href="#!">Settings</a></li>
            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="login"
              >Đăng xuất</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <a class="nav-link" href="home">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Trang Chủ
              </a>
              <div class="sb-sidenav-menu-heading">Quản Lý</div>
              <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapseLayouts"
                aria-expanded="false"
                aria-controls="collapseLayouts"
              >
                <div class="sb-nav-link-icon">
                  <i class="fas fa-columns"></i>
                </div>
                Quản lý khóa học
                <div class="sb-sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              <div
                class="collapse"
                id="collapseLayouts"
                aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion"
              >
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="quanlykhoahoc"
                    >Quản lý khóa học</a
                  >
                </nav>
              </div>
              <div
                class="collapse"
                id="collapseLayouts"
                aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion"
              >
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="quanlythunhap"
                    >Quản lý thu nhâp</a
                  >
                </nav>
              </div>
              <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapsePages"
                aria-expanded="false"
                aria-controls="collapsePages"
              >
                <div class="sb-nav-link-icon">
                  <i class="fas fa-book-open"></i>
                </div>
                Pages
                <div class="sb-sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              <div
                class="collapse"
                id="collapsePages"
                aria-labelledby="headingTwo"
                data-bs-parent="#sidenavAccordion"
              >
                <nav
                  class="sb-sidenav-menu-nested nav accordion"
                  id="sidenavAccordionPages"
                >
                  <!-- <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false"
                    aria-controls="pagesCollapseAuth"
                  >
                    Authentication -->
                    <!-- <div class="sb-sidenav-collapse-arrow">
                      <i class="fas fa-angle-down"></i>
                    </div> -->
                  </a>
                  <div
                    class="collapse"
                    id="pagesCollapseAuth"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages"
                  >
                    <!-- <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="login.html">Login</a>
                      <a class="nav-link" href="register.html">Register</a>
                      <a class="nav-link" href="password.html"
                        >Forgot Password</a
                      >
                    </nav> -->
                  
                </nav>
              </div>
              <div class="sb-sidenav-menu-heading">Người dùng</div>
              <a class="nav-link" href="quanlykhachhang">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
               Quản Lý khách hàng
              </a>
            </div>
          </div>
          <div class="sb-sidenav-footer">
            
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Quản lý Thu nhập</h1>
            <ol class="breadcrumb mb-4"></ol>

            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Danh sách Thu nhập
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>STT</th>
                      
                      <th>Tên Khóa học</th>
                      <th>Số lượng</th>
                      <th>Đơn giá</th>
                      <th>Thành tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                      <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Toeic cơ bản</td>
                      <td>2</td>
                      <td>1,000,000 VND</td>
                       <td>2,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>14</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>15</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>16</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>17</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>18</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>19</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>20</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>21</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>22</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>23</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                    <tr>
                      <td>24</td>
                      <td>Toeic cơ bản</td>
                      <td>1</td>
                      <td>1,000,000 VND</td>
                       <td>1,000,000 VND</td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>
