<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/3.2.0/svg.min.js"
        integrity="sha512-EmfT33UCuNEdtd9zuhgQClh7gidfPpkp93WO8GEfAP3cLD++UM1AG9jsTUitCI9DH5nF72XaFePME92r767dHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
</head>


<body class="page-home">
    <div id="app">
        <header class="header--read">
            <nav class="navbar navbar--read navbar-light navbar-expand">
                <div class="container px-3">
                    <a class="navbar-brand mr-4" href="/">
                        <img src="./asset/images/logo.png" alt height="48">
                    </a>
                    <ul class="list-unstyled mb-0 mr-auto d-flex justify-content-center">
                        <li class="nav-item mr-4">
                            <a class="nav-link d-flex align-items-center" href="javascript:void(0)">
                                <i class="fa-solid fa-bars fz-13 mr-2">

                                </i>
                                Danh sách
                            </a>
                        </li>
                    </ul>
                    <div class="header__search-form ml-auto w-25" method="post">
                        <input type="text" class="form-control border-primary" name="q" placeholder="Tìm kiếm">
                        <button class="btn bg-transparent text-primary shadow-none" @click="searchKeyword()">
                            <i class="fa-solid fa-magnifying-glass float-left">

                            </i>
                        </button>
                    </div>
                    <?php
                    // Kiểm tra xem có tham số 'isUser' được gửi qua URL không
                    if (isset($_GET['isUser']) && $_GET['isUser'] === 'true') {
                        echo "
                            <ul id=\"info-user\" class=\"navbar-nav navbar-nav--auth ml-auto\" style=\"z-index: 9999;\">
                                <li class=\"nav-item mr-4\">
                                <a href=\"https://pub.truyen.onl/books/create\" target=\"_blank\"
                                        class=\"nav-link d-flex align-items-center\">
                                        <i class=\"fa-solid fa-circle-arrow-up fz-13 mr-2\">
                                        </i>Đăng truyện </a>
                                        </li>
                                <li class=\"dropdown py-3\">
                                <a href=\"javascript:void(0)\" role=\"button\" id=\"dropdown-notification\"
                                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"
                                        class=\"d-block text-body px-3 py-2\">
                                        <i class=\"fa-solid fa-bell \">
                                        </i>
                                        <span class=\"counter badge badge-primary rounded-circle\">6</span>
                                        </a>
                                    <div aria-labelledby=\"dropdown-notification\"
                                        class=\"dropdown-menu dropdown-menu-right dropdown-menu--notification pb-0 rounded-0\">
                                        <ul class=\"list-unstyled mb-2 nh-list px-4\">
                                        <!---->
                                            <li>
                                            <a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Hướng dẫn sửa
                                                    lỗi bị đứng ở 99% khi nghe audio trên Android</a>
                                                    </li>
                                            <li>
                                            <a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Hướng dẫn sửa
                                                    lỗi bị đứng ở 99% khi nghe audio trên Android</a>
                                                    </li>
                                            <li>
                                            <a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Hướng dẫn sửa
                                                    lỗi bị đứng ở 99% khi nghe audio trên Android</a>
                                                    </li>
                                            <li>
                                            <a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Nhân dịp năm
                                                    mới, thân chúc chư vị đạo hữu một năm mới An Khang, Thịnh Vượng</a>
                                                    </li>
                                            <li>
                                            <a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Nhân dịp năm
                                                    mới, thân chúc chư vị đạo hữu một năm mới An Khang, Thịnh Vượng</a>
                                                    </li>
                                        </ul>
                                        <div class=\"bg-light border-top\">
                                        <a href=\"javascript:void(0)\"
                                                class=\"d-block text-primary py-2 pl-4\">Xem tất cả</a>
                                                </div>
                                    </div>
                                </li>
                                <li class=\"dropdown py-3\">
                                    <a role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                        aria-expanded=\"false\" class=\"d-flex align-items-center text-body px-3 py-2\"
                                        style=\"cursor: pointer;\" id=\"dropdown-user\">
                                        <div class=\"nh-avatar nh-avatar--24 mr-2\">
                                        <img src=\"./user/none.svg\" lazy=\"loaded\">
                                        </div> Thái Dương
                                    </a>
                                    <div aria-labelledby=\"dropdown-profile\"
                                        class=\"dropdown-menu dropdown-menu-right dropdown-menu--profile px-4 rounded-0\">
                                        <div class=\"media mb-4\">
                                            <div class=\"nh-avatar nh-avatar--45 mr-3\">
                                                <img src=\"./user/none.svg\"lazy=\"loading\">
                                                </div>
                                            <div class=\"media-body\" style=\"margin: auto;\">
                                                <div class=\"font-weight-semibold mb-1\">Thái Dương</div>
                                            </div>
                                        </div>
                                        <ul class=\"list-unstyled m-0\">
                                            <li class=\"mt-2\">
                                            <a href=\"/tai-khoan\" class=\"d-block py-2\"> Hồ sơ </a>
                                            </li>
                                            <li class=\"mt-2\">
                                            <a href=\"/tai-khoan/tu-truyen\" class=\"d-block py-2\"> Tủ truyện </a>
                                            </li>
                                            <li class=\"mt-2\">
                                            <a href=\"/tai-khoan/cai-dat\" class=\"d-block py-2\"> Cài đặt </a>
                                            </li>
                                            <!---->
                                            <!---->
                                            <li class=\"dropdown-divider\">
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0)\" class=\"d-block py-2\"> Thoát </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <script>
                                var logoutLink = document.querySelector('#info-user .dropdown-menu--profile li:last-child a');
                                if (logoutLink) {
                                    logoutLink.onclick = function(e) {
                                        e.preventDefault();
                                        window.location.href = 'http://localhost/index.php?isUser=false';
                                    };
                                }

                                document.addEventListener('click', function(event) {
                                    var dropdownNotification = document.querySelector('#info-user #dropdown-notification');
                                    var dropdownMenuNotification = document.querySelector('#info-user .dropdown-menu--notification');
                                    var dropdownUser = document.querySelector('#info-user #dropdown-user'); // Thêm dropdownUser
                                
                                    if (!dropdownNotification || !dropdownMenuNotification || !dropdownUser) return;
                                
                                    var isClickInsideNotification = dropdownNotification.contains(event.target);
                                    var isClickInsideUser = dropdownUser.contains(event.target); // Kiểm tra xem click có xảy ra trong dropdownUser hay không
                                
                                    if (!isClickInsideNotification) {
                                        dropdownNotification.parentNode.classList.remove('show');
                                        dropdownMenuNotification.classList.remove('show');
                                    }
                                
                                    if (!isClickInsideUser) { // Nếu click không xảy ra trong dropdownUser
                                        dropdownUser.classList.remove('show'); // Ẩn dropdownUser
                                        var dropdownMenuProfile = document.querySelector('#info-user .dropdown-menu--profile');
                                        if (dropdownMenuProfile) {
                                            dropdownMenuProfile.classList.remove('show');
                                        }
                                    }
                                });
                                
                                var dropdownNotification = document.querySelector('#info-user #dropdown-notification');
                                if (dropdownNotification) {
                                    dropdownNotification.onclick = function(e) {
                                        e.preventDefault();
                                        this.parentNode.classList.toggle('show');
                                        var dropdownMenuNotification = document.querySelector('#info-user .dropdown-menu--notification');
                                        if (dropdownMenuNotification) {
                                            dropdownMenuNotification.classList.toggle('show');
                                        }
                                    };
                                }
                                
                                var dropdownUser = document.querySelector('#info-user #dropdown-user');
                                if (dropdownUser) {
                                    dropdownUser.onclick = function(e) {
                                        e.preventDefault();
                                        this.classList.toggle('show');
                                        var dropdownMenuProfile = document.querySelector('#info-user .dropdown-menu--profile');
                                        if (dropdownMenuProfile) {
                                            dropdownMenuProfile.classList.toggle('show');
                                        }
                                    };
                                }                            
                            </script>
                        ";
                    } else {
                        echo '
                        <ul class="list-unstyled mb-0 ml-auto d-flex justify-content-center" id="notUser">
                            <li class="mr-4">
                                <a class="d-flex align-items-center px-3 py-2" href="/" target="_blank">
                                    <i class="fa-solid fa-circle-arrow-up fz-13 mr-2">
                                    </i>
                                    Đăng truyện
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $loginUrl; ?>" id="login" class="d-block px-3 py-2">Đăng nhập </a>
                            </li>
                            <li>
                                <a href="./web/register.php" id="register" class="d-block px-3 py-2">Đăng ký </a>
                            </li>
                        </ul>
                        <script src="./asset/js/navbar.js">
                        </script>
                        <script>
                            document.getElementById(\'login\').addEventListener(\'click\', function(event) {
                                event.preventDefault();
                                var currentLocation = window.location.href; // Lấy URL hiện tại
                                var loginUrl = "./web/login.php?currentLocation=" + encodeURIComponent(currentLocation); // Bao gồm location hiện tại trong URL
                                window.location.href = loginUrl; // Chuyển hướng đến trang login với URL được tạo
                            });
                    
                        </script>
                        ';

                    }
                    ?>
                </div>
            </nav>
        </header>
        <main class="main pb-4">
            <div class="container" style="border: 1px solid #666;box-shadow: 5px 5px 5px #666;">
                <div class="page-content rounded-2">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="media">
                                <div class="mr-4 text-center">
                                    <div class="nh-thumb nh-thumb--210 shadow">
                                        <img src="https://static.cdnno.com/poster/cay-tai-tan-the-them-diem-thang-cap/300.jpg?1698374435"
                                            alt="Cày Tại Tận Thế Thêm Điểm Thăng Cấp">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex justify-content-start mb-3">
                                        <h1 class="h3 mr-2">
                                            <a href="https://metruyencv.com/truyen/cay-tai-tan-the-them-diem-thang-cap">Cày
                                                Tại Tận Thế Thêm Điểm Thăng Cấp</a>
                                        </h1>
                                        <a href="javascript:void(0)" v-on:click="reportBook(119832)" data-toggle="modal"
                                            class="text-tertiary fz-13 mt-1">
                                        </a>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li
                                            class="d-inline-block border border-secondary px-3 py-1 text-secondary rounded-3 mr-2 mb-2">
                                            <a href="https://metruyencv.com/tac-gia/382" class="text-secondary">Tân
                                                Phong </a>
                                        </li>
                                        <li
                                            class="d-inline-block border border-danger px-3 py-1 text-danger rounded-3 mr-2 mb-2">
                                            Đang ra
                                        </li>
                                        <li
                                            class="d-inline-block border border-primary px-3 py-1 text-primary rounded-3 mr-2 mb-2">
                                            <a href="https://metruyencv.com/truyen?genre=3" class="text-primary">
                                                Huyền Huyễn</a>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex mb-4">
                                        <li class="mr-5">
                                            <div class="font-weight-semibold h4 mb-1">322</div>
                                            <div class>Chương</div>
                                        </li>
                                        <li class="mr-5">
                                            <div class="font-weight-semibold h4 mb-1">21</div>
                                            <div class>Chương/tuần</div>
                                        </li>
                                        <li class="mr-5">
                                            <div class="font-weight-semibold h4 mb-1">323.1K</div>
                                            <div class>Lượt đọc</div>
                                        </li>
                                        <li class="mr-5">
                                            <div class="font-weight-semibold h4 mb-1" id="bookmarkedValue">947</div>
                                            <div class>Cất giữ</div>
                                        </li>
                                    </ul>
                                    <div class="d-flex align-items-center mb-4">
                                        <span class="nh-rating">
                                            <i class="nh-icon fa-solid fa-star" style="color: rgb(255, 235, 175);">
                                            </i>
                                            <i class="nh-icon fa-solid fa-star" style="color: rgb(255, 235, 175);">
                                            </i>
                                            <i class="nh-icon fa-solid fa-star" style="color: rgb(255, 235, 175);">
                                            </i>
                                            <i class="nh-icon fa-solid fa-star" style="color: rgb(255, 235, 175);">
                                            </i>
                                            <i class="nh-icon fa-solid fa-star" style="color: rgb(255, 235, 175);">
                                            </i>
                                            <span class="active" style="width: 100%">
                                                <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                </i>
                                                <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                </i>
                                                <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                </i>
                                                <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                </i>
                                                <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                </i>
                                            </span>
                                        </span>
                                        <span class="d-inline-block ml-2">
                                            <span class="font-weight-semibold">5</span>/5
                                        </span>
                                        <span class="d-inline-block text-secondary ml-1">(13 đánh giá)</span>
                                    </div>
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li class="mr-3 w-150" id="reading-book">
                                            <a style="color: #fff"
                                                class="cursor-pointer btn btn-primary btn-md btn-block btn-shadow font-weight-semibold d-flex align-items-center justify-content-center"
                                                v-if="!isUserReadBookBefore"
                                                href="https://metruyencv.com/truyen/cay-tai-tan-the-them-diem-thang-cap/chuong-1">
                                                <i class="fa-solid fa-glasses fa-sm mr-2">

                                                </i>
                                                Đọc truyện
                                            </a>
                                            <a style="color: #fff"
                                                class="cursor-pointer btn btn-danger btn-md btn-block btn-shadow font-weight-semibold d-flex align-items-center justify-content-center"
                                                v-else v-on:click="continueRead">
                                                <i class="fa-solid fa-glasses fa-sm mr-2">

                                                </i>
                                                Đọc tiếp
                                            </a>
                                        </li>
                                        <li id="bookmark" class="mr-3 w-150">
                                            <span data-v-20fe2610="">
                                                <a data-v-20fe2610="" href="javascript:void(0);"
                                                    class="btn btn-outline-secondary btn-md btn-block font-weight-semibold d-flex align-items-center justify-content-center">
                                                    <i class="fa-regular fa-bookmark fa-sm mr-2">

                                                    </i>
                                                    Đánh dấu
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content rounded-2">
                    <div class="nav nav-tabs nh-nav-tabs mb-4" id="js-nh-tab" role="tablist">
                        <a class="nav-item nav-link px-0 py-3 mr-4 active" id="nav-tab-intro"
                            href="javascript:void(0)">Giới thiệu</span>
                        </a>
                        <a class="nav-item nav-link px-0 py-3 mr-4" id="nav-tab-review" href="javascript:void(0)">
                            <span class="h4 m-0">Đánh giá</span>
                            <span class="counter rounded-3 px-2 py-1 ml-1">13</span>
                        </a>
                        <a class="nav-item nav-link px-0 py-3 mr-4" id="nav-tab-chap" href="javascript:void(0)">
                            <span class="h4 m-0">D.s chương</span>
                            <span class="counter rounded-3 px-2 py-1 ml-1">322</span>
                        </a>
                    </div>
                    <div class="tab-content nh-tab-content" id="js-nh-tabContent">
                        <div class="tab-pane fade active show" id="nav-intro">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-4">
                                        <div class="content">
                                            <p>
                                                Ta xuyên qua.<br>
                                                <br>
                                                Xuyên qua đến thú tai bộc phát mười năm sau thế giới xa lạ bên
                                                trong.<br>
                                                <br>
                                                Trật tự sụp đổ, nhân loại kéo dài hơi tàn.<br>
                                                <br>
                                                Người người đều nói dị thú đáng sợ nhất, nhưng theo Lâm Phàm, người sống
                                                sót còn sống càng thêm đáng sợ.<br>
                                                <br>
                                                Lâm Phàm: Ta không phục, cho ta lá gan, cho ta thêm điểm, ta muốn rèn
                                                đúc văn minh thế giới.<br>
                                                <br>
                                                Hắn muốn trở thành đám nhân loại kia trong lòng ánh sáng, để bọn hắn
                                                nhìn thấy ánh nắng, liền sẽ nhớ tới hắn Lâm Phàm.<br>
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                    <table class="table border-bottom mb-4 mt-5">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <ul class="list-unstyled m-0">
                                                        <li class="media">
                                                            <div class="media-body">
                                                                <a
                                                                    href="https://metruyencv.com/truyen/cay-tai-tan-the-them-diem-thang-cap/chuong-322">Chương
                                                                    138:</a>
                                                            </div>
                                                            <div class="pl-3">15 giờ trước</div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul class="list-unstyled m-0">
                                                        <li class="media">
                                                            <div class="media-body">
                                                                <a
                                                                    href="https://metruyencv.com/truyen/cay-tai-tan-the-them-diem-thang-cap/chuong-322">Chương
                                                                    138:</a>
                                                            </div>
                                                            <div class="pl-3">15 giờ trước</div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul class="list-unstyled m-0">
                                                        <li class="media">
                                                            <div class="media-body">
                                                                <a
                                                                    href="https://metruyencv.com/truyen/cay-tai-tan-the-them-diem-thang-cap/chuong-322">
                                                                    Chương138:</a>
                                                            </div>
                                                            <div class="pl-3">15 giờ trước</div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="mt-5">

                                    </div>
                                </div>
                                <div data-v-3807dc18="" class="col-4">

                                    <section data-v-3807dc18="" id="bookAuthor" class="nh-section">
                                        <div data-v-3807dc18="" class="d-flex py-1 border-bottom mb-2">
                                            <h2 data-v-3807dc18="" class="h4 m-0 py-2">
                                                Cùng tác giả
                                            </h2>
                                            <a data-v-3807dc18="" href="/tac-gia/382" class="mt-2 ml-auto text-primary">
                                                Xem tất cả
                                            </a>
                                        </div>
                                        <ul data-v-3807dc18="" class="list-unstyled m-0">
                                            <li data-v-3807dc18="" class="media align-items-center py-2 mb-1"><a
                                                    data-v-3807dc18=""
                                                    href="dien-roi-ta-la-giao-hoa-mu-mu-bang-nhat-dai-ca"
                                                    class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-3807dc18=""
                                                        alt="Điên Rồi! Ta Là Giáo Hoa Mụ Mụ Bảng Nhất Đại Ca?"
                                                        width="32"
                                                        data-src="https://static.cdnno.com/poster/dien-roi-ta-la-giao-hoa-mu-mu-bang-nhat-dai-ca/150.jpg?1700902021"
                                                        src="https://static.cdnno.com/poster/dien-roi-ta-la-giao-hoa-mu-mu-bang-nhat-dai-ca/150.jpg?1700902021"
                                                        lazy="loaded"></a>
                                                <div data-v-3807dc18="" class="media-body">
                                                    <h2 data-v-3807dc18="" class="fz-body mb-1"><a data-v-3807dc18=""
                                                            href="dien-roi-ta-la-giao-hoa-mu-mu-bang-nhat-dai-ca">
                                                            Điên Rồi! Ta Là Giáo Hoa Mụ Mụ Bảng Nhất Đại Ca?
                                                        </a></h2>
                                                    <div data-v-3807dc18=""
                                                        class="text-secondary d-flex align-items-center small"><i
                                                            data-v-3807dc18=""
                                                            class="nh-icon fa-solid fa-book mr-2"></i>
                                                        Đô Thị
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-review">
                            <div class="row">
                                <div class="col-8">
                                    <div class="bg-yellow-white review-form rounded-2 mb-3">
                                        <div class="p-3 text-primary">
                                            <div class="row align-items-center py-2">
                                                <div class="col-3 font-weight-semibold">
                                                    Tính cách nhân vật
                                                </div>
                                                <div class="col-8">
                                                    <input type="range" id="js-rangeslider-0" min="0" max="5" step="0.5"
                                                        class="js-range-slider" value="0">
                                                </div>
                                                <div id="js-value-1" class="col-1 h5 mb-0 text-center">
                                                    0
                                                </div>
                                            </div>
                                            <div class="row align-items-center py-2">
                                                <div class="col-3 font-weight-semibold">
                                                    Nội dung cốt truyện
                                                </div>
                                                <div class="col-8">
                                                    <input type="range" id="js-rangeslider-1" min="0" max="5" step="0.5"
                                                        class="js-range-slider" value="0">
                                                </div>
                                                <div id="js-value-2" class="col-1 h5 mb-0 text-center">
                                                    0
                                                </div>
                                            </div>
                                            <div class="row align-items-center py-2">
                                                <div class="col-3 font-weight-semibold">
                                                    Bố cục thế giới
                                                </div>
                                                <div class="col-8">
                                                    <input type="range" id="js-rangeslider-2" min="0" value="0" max="5"
                                                        step="0.5" class="js-range-slider" value="0">
                                                </div>
                                                <div id="js-value-3" class="col-1 h5 mb-0 text-center">
                                                    0
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-input-block">
                                            <textarea class="form-control rounded-2 border-0 p-3"
                                                style="height: 100px !important;" spellcheck="false"
                                                placeholder="Đánh giá của bạn về truyện này"></textarea>
                                            <button type="submit"
                                                class="btn btn-submit bg-primary p-0 rounded-circle d-flex align-items-center justify-content-center text-white">
                                                <i class="nh-icon fa-regular fa-paper-plane">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="rating-box bg-yellow-white text-primary rounded-3 p-3">
                                        <div class="d-flex align-items-center py-2">
                                            <div class="h5 m-0">Đã có 11 đánh giá</div>
                                            <div class="d-flex align-items-center ml-auto">
                                                <span class="nh-rating">
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <span class="active" style="width: 100%;">
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                    </span>
                                                </span>
                                                <span class="d-inline-block h5 mb-0 ml-3">4.92</span>
                                            </div>
                                        </div>
                                        <div class="divider">

                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <div>Tính cách nhân vật</div>
                                            <div class="d-flex align-items-center ml-auto">
                                                <span class="nh-rating">
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <span class="active" style="width: 100%;">
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                    </span>
                                                </span>
                                                <span class="d-inline-block mb-0 ml-3">5.00</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <div>Nội dung cốt truyện</div>
                                            <div class="d-flex align-items-center ml-auto">
                                                <span class="nh-rating">
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <span class="active" style="width: 100%;">
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                    </span>
                                                </span>
                                                <span class="d-inline-block mb-0 ml-3">4.95</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <div>Bố cục thế giới</div>
                                            <div class="d-flex align-items-center ml-auto">
                                                <span class="nh-rating">
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <span class="active" style="width: 100%;">
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                    </span>
                                                </span>
                                                <span class="d-inline-block mb-0 ml-3">4.82</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <div>Chất lượng bản dịch</div>
                                            <div class="d-flex align-items-center ml-auto">
                                                <span class="nh-rating">
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <i class="nh-icon fa-solid fa-star"
                                                        style="color: rgb(255, 235, 175);">
                                                    </i>
                                                    <span class="active" style="width: 100%;">
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                        <i class="nh-icon fa-solid fa-star" style="color: #ffd505;">
                                                        </i>
                                                    </span>
                                                </span>
                                                <span class="d-inline-block mb-0 ml-3">5.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-chap">
                            <div id="chapter-list">
                                <div data-v-abaf3886="">
                                    <div data-v-abaf3886="" class="d-flex align-items-center mb-3">
                                        <h4 data-v-abaf3886="">
                                            Danh sách chương
                                        </h4>
                                        <button data-v-abaf3886="" class="btn btn-white ml-auto px-3">
                                            <i class="nh-icon fa-solid fa-arrow-down-short-wide h4 m-0 float-left"></i>
                                            <i class="nh-icon fa-solid fa-arrow-down-wide-short h4 m-0 float-left"></i>
                                        </button>
                                    </div>
                                    <div data-v-abaf3886="" class="nh-section mb-4">
                                        <div data-v-abaf3886="" class="row mt-2">
                                            <div data-v-abaf3886="" class="col-4 border-bottom-dashed">
                                                <a data-v-abaf3886=""
                                                    href="phan-phai-bat-dau-dao-khoet-nu-chinh-linh-dong/chuong-1"
                                                    class="media py-2 mb-1">
                                                    <div data-v-abaf3886=""
                                                        href="phan-phai-bat-dau-dao-khoet-nu-chinh-linh-dong/chuong-1"
                                                        class="media-body">
                                                        <div data-v-abaf3886="" class="text-overflow-1-lines">
                                                            Chương 1: Thiên Hồ bắt đầu, nhưng là phản phái
                                                            <small data-v-abaf3886="" class="text-muted">(14 ngày trước)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div data-v-abaf3886="" class="col-4 border-bottom-dashed">
                                                <a data-v-abaf3886=""
                                                    href="phan-phai-bat-dau-dao-khoet-nu-chinh-linh-dong/chuong-2"
                                                    class="media py-2 mb-1">
                                                    <div data-v-abaf3886=""
                                                        href="phan-phai-bat-dau-dao-khoet-nu-chinh-linh-dong/chuong-2"
                                                        class="media-body">
                                                        <div data-v-abaf3886="" class="text-overflow-1-lines">
                                                            Chương 2: Người có thể đi, ánh mắt lưu lại <small
                                                                data-v-abaf3886="" class="text-muted">(14 ngày
                                                                trước)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div data-v-abaf3886="" class="col-4 border-bottom-dashed">
                                                <a data-v-abaf3886=""
                                                    href="phan-phai-bat-dau-dao-khoet-nu-chinh-linh-dong/chuong-3"
                                                    class="media py-2 mb-1">
                                                    <div data-v-abaf3886=""
                                                        href="phan-phai-bat-dau-dao-khoet-nu-chinh-linh-dong/chuong-3"
                                                        class="media-body">
                                                        <div data-v-abaf3886="" class="text-overflow-1-lines">
                                                            Chương 3: Thiên Huyễn Linh Đồng, tất không tiết ra ngoài
                                                            <small data-v-abaf3886="" class="text-muted">(14 ngày
                                                                trước)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <div id="footer">
            <hr class="my-0">
            <footer class="footer text-center py-4">
                <div class="container">
                    <a href="/" class="d-inline-block py-1 my-2">
                        <img src="./asset/images/logo.png" alt="logo" width="64" height="64">
                    </a>
                    <div class="w-75 m-auto">Mê Truyện Chữ là nền tảng mở trực tuyến, miễn phí đọc truyện chữ được
                        convert hoặc dịch kỹ lưỡng, do các converter và dịch giả đóng góp, rất nhiều truyện hay và nổi
                        bật được cập nhật nhanh nhất với đủ các thể loại tiên hiệp, kiếm hiệp, huyền ảo ... </div>
                    <div class="footer-app mt-4" id="app-download">
                        <div class="d-flex align-items-center justify-content-center py-1">
                            <a href="/" class="mr-3">
                                <img src="./asset/images/app-store.png" alt height="34">
                            </a>
                            <a href="/" class>
                                <img src="./asset/images/google-play.png" alt height="34">
                            </a>
                        </div>
                    </div>
                    <ul class="list-unstyled mt-4 mb-0 d-flex justify-content-center">
                        <li>
                            <a href="/" target="_blank" class="d-inline-block px-3 py-2">Điều khoản dịch vụ</a>
                        </li>
                        <li>
                            <a href="/" target="_blank" class="d-inline-block px-3 py-2">Chính sách bảo mật</a>
                        </li>
                        <li>
                            <a href="/" target="_blank" class="d-inline-block px-3 py-2">Về bản quyền</a>
                        </li>
                        <li>
                            <a href="/" target="_blank" class="d-inline-block px-3 py-2">Hướng dẫn sử dụng</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
</body>
<script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    const tabElements = $$("#js-nh-tab a");
    const tabContentElements = $$("#js-nh-tabContent div.tab-pane");

    Array.from(tabElements).forEach((tab, index) => {
        let content = tabContentElements[index]
        tab.onclick = (e) => {
            $("#js-nh-tab a.active").classList.remove("active");
            $("#js-nh-tabContent div.active").classList.remove("active", "show");
            if (tab.classList && content.classList) {
                tab.classList.add("active");
                content.classList.add("active", "show");
            }
        }

    })
</script>
<script>
    function rangeValue(rangeslider, value) {
        const rangeSlider = document.getElementById(rangeslider)
        const valueDisplay = document.getElementById(value)
        console.log("sdfaf")
        rangeSlider.addEventListener('input', function () {
            valueDisplay.textContent = this.value; // Cập nhật giá trị hiển thị
        })
    }
    rangeValue("js-rangeslider-0", "js-value-1")
    rangeValue("js-rangeslider-1", "js-value-2")
    rangeValue("js-rangeslider-2", "js-value-3")
</script>

</html>