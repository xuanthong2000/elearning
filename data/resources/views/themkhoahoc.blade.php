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
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="/home">TOEIC</a>
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
            <li><a class="dropdown-item" href="/login"
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
              <a class="nav-link" href="/home">
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
                  <a class="nav-link" href="/quanlykhoahoc"
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
                  <a class="nav-link" href="/quanlythunhap"
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
              <a class="nav-link" href="/quanlykhachhang">
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
          <div class="content" style="margin-top: 20px;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8">
                  <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Thêm khóa học</h4>
                            </div>
                            <div class="card-body">
                            <div class="row">
                            <form method="post" action="themkhoahoc/store">
                             @csrf
                          <!-- <div class="col-md-3 pl-1">
                            <div class="form-group">
                              <label>STT:</label>
                              <input
                                class="form-control text-box single-line"
                              />
                            </div>
                          </div> -->
                          <div class="col-md-9 pl-1">
                            <div class="form-group" >
                              <label>Tên khóa học</label>
                              <input
                                class="form-control text-box single-line" name="name" value=""
                              />
                            </div>
                          </div>

                          <!-- <div class="col-md-6 pl-1">
                            <div class="form-group" style="padding-top: 10px;">
                              <label>Đơn giá:</label>
                              <input
                                class="form-control text-box single-line"
                              />
                            </div>
                          </div> -->
                          
                          <div class="col-md-6 pl-1">
                            <div class="form-group" style="padding-top: 10px;">
                              <label>Ảnh bìa:</label>
                              <input class="form-control" type="file" name="image" value="" id="formFileMultiple" multiple>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="form-group" style="padding-top: 10px;">
                              <label>Mô tả khóa học:</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" name="description" value= "" rows="3"></textarea>
                            </div>
                          </div>
                          <div class="col-md-6 pl-1">
                            <div class="form-group" >
                              <label>Trạng thái:</label>
                              <input
                                class="form-control text-box single-line" name="status" value=""
                              />
                            </div>
                          </div>
                          <!-- <div class="col-md-6 pl-1">
                            <div class="form-group">
                              <label>Ngày cập nhật:</label>
                              <input
                                class="form-control"
                                type="date"
                                name="Ngaycapnhat"
                              />
                            </div>
                          </div> -->
                        
                          
                          <div class="col-md-4 pl-1">
                            <div class="form-group" style="padding-top: 20px;">
                              <button type="submit" class="btn btn-primary btn-sm" href="/quanlykhoahoc">Thêm mới</button>
                              <button type="submit" class="btn btn-secondary btn-sm"><a style="text-decoration: none; color:white;" href="/quanlykhoahoc">Hủy</a></button>
                              
                            </div>
                          </div>
                        </form>
                            </div>
                      </form>
                    </div>
                  </div>
                </div>
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
