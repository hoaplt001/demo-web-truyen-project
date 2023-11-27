<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/style.css">
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
                                <i class="fa-solid fa-bars fz-13 mr-2"></i>
                                Danh sách
                            </a>
                        </li>
                    </ul>
                    <div class="header__search-form ml-auto w-25" method="post">
                        <input type="text" class="form-control border-primary" name="q" placeholder="Tìm kiếm">
                        <button class="btn bg-transparent text-primary shadow-none" @click="searchKeyword()">
                            <i class="fa-solid fa-magnifying-glass float-left"></i>
                        </button>
                    </div>
                    <?php
                    // Kiểm tra xem có tham số 'isUser' được gửi qua URL không
                    if (isset($_GET['isUser']) && $_GET['isUser'] === 'true') {
                        echo "
                            <ul id=\"info-user\" class=\"navbar-nav navbar-nav--auth ml-auto\" style=\"z-index: 9999;\">
                                <li class=\"nav-item mr-4\"><a href=\"https://pub.truyen.onl/books/create\" target=\"_blank\"
                                        class=\"nav-link d-flex align-items-center\"><i class=\"fa-solid fa-circle-arrow-up fz-13 mr-2\">
                                        </i>Đăng truyện </a></li>
                                <li class=\"dropdown py-3\"><a href=\"javascript:void(0)\" role=\"button\" id=\"dropdown-notification\"
                                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"
                                        class=\"d-block text-body px-3 py-2\">
                                        <i class=\"fa-solid fa-bell \"></i>
                                        <span class=\"counter badge badge-primary rounded-circle\">6</span></a>
                                    <div aria-labelledby=\"dropdown-notification\"
                                        class=\"dropdown-menu dropdown-menu-right dropdown-menu--notification pb-0 rounded-0\">
                                        <ul class=\"list-unstyled mb-2 nh-list px-4\"><!---->
                                            <li><a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Hướng dẫn sửa
                                                    lỗi bị đứng ở 99% khi nghe audio trên Android</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Hướng dẫn sửa
                                                    lỗi bị đứng ở 99% khi nghe audio trên Android</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Hướng dẫn sửa
                                                    lỗi bị đứng ở 99% khi nghe audio trên Android</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Nhân dịp năm
                                                    mới, thân chúc chư vị đạo hữu một năm mới An Khang, Thịnh Vượng</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"d-block py-2 text-truncate\">Nhân dịp năm
                                                    mới, thân chúc chư vị đạo hữu một năm mới An Khang, Thịnh Vượng</a></li>
                                        </ul>
                                        <div class=\"bg-light border-top\"><a href=\"javascript:void(0)\"
                                                class=\"d-block text-primary py-2 pl-4\">Xem tất cả</a></div>
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
                                                <img src=\"./user/none.svg\"lazy=\"loading\"></div>
                                            <div class=\"media-body\" style=\"margin: auto;\">
                                                <div class=\"font-weight-semibold mb-1\">Thái Dương</div>
                                            </div>
                                        </div>
                                        <ul class=\"list-unstyled m-0\">
                                            <li class=\"mt-2\"><a href=\"/tai-khoan\" class=\"d-block py-2\"> Hồ sơ </a></li>
                                            <li class=\"mt-2\"><a href=\"/tai-khoan/tu-truyen\" class=\"d-block py-2\"> Tủ truyện </a>
                                            </li>
                                            <li class=\"mt-2\"><a href=\"/tai-khoan/cai-dat\" class=\"d-block py-2\"> Cài đặt </a>
                                            </li>
                                            <!----><!---->
                                            <li class=\"dropdown-divider\"></li>
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
                                    <i class="fa-solid fa-circle-arrow-up fz-13 mr-2"></i>
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
                        <script src="./asset/js/navbar.js"></script>
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
        <style>
            .main .container {
                border: 1px solid #666;
                box-shadow: 5px 5px 5px #666;
            }
        </style>
        <?php
        function vn_to_str($str)
        {

            $unicode = array(

                'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

                'd' => 'đ',

                'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

                'i' => 'í|ì|ỉ|ĩ|ị',

                'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

                'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

                'y' => 'ý|ỳ|ỷ|ỹ|ỵ',

                'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

                'D' => 'Đ',

                'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

                'I' => 'Í|Ì|Ỉ|Ĩ|Ị',

                'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

                'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

                'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

            );

            foreach ($unicode as $nonUnicode => $uni) {

                $str = preg_replace("/($uni)/i", $nonUnicode, $str);

            }
            $str = str_replace(' ', '_', $str);

            return $str;

        }
        function convertToSlug($string)
        {
            $string = vn_to_str($string);
            $string = mb_strtolower($string, 'UTF-8'); // Chuyển đổi sang chữ thường
            $string = preg_replace('/[^a-z0-9]+/', '-', $string); // Thay thế các ký tự không phải chữ cái hoặc số bằng dấu gạch ngang
            $string = trim($string, '-'); // Loại bỏ các dấu gạch ngang ở đầu và cuối chuỗi
            return $string;
        }
        session_start();

        function createTemporaryHTMLFile($path)
        {
            $tempFilePath = __DIR__ . $path; // Đường dẫn tệp tạm thời
            $folderPath = dirname($tempFilePath);
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true); // Tạo thư mục đệ quy
            }
            if (file_exists($tempFilePath)) {
                $_SESSION['tempFilePath'] = $tempFilePath; // Lưu đường dẫn vào session
                return $tempFilePath; // Trả về đường dẫn nếu tệp đã tồn tại
            }

            // Tạo tệp HTML tạm thời
            $content = "<!DOCTYPE html>
                <html lang=\"en\">
                <head>
                    <meta charset=\"UTF-8\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                    <title>Temporary File</title>
                </head>
                <body>
                    HAHAH
                </body>
                </html>";

            file_put_contents($tempFilePath, $content);

            $_SESSION['tempFilePath'] = $tempFilePath; // Lưu đường dẫn vào session
            return $tempFilePath; // Trả về đường dẫn tệp tạm thời mới được tạo
        }


        function compareTime($specifiedTime)
        {
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $currentDateTime = new DateTime(); // Thời gian hiện tại
            $specifiedDateTime = new DateTime($specifiedTime); // Thời điểm cụ thể
            // Tính toán khoảng thời gian giữa hai thời điểm
            $timeDifference = date_diff($currentDateTime, $specifiedDateTime);
            // Hiển thị đơn vị thời gian lớn nhất
            if ($timeDifference->y > 0) {
                return $timeDifference->y . " năm";
            } elseif ($timeDifference->m > 0) {
                return $timeDifference->m . " tháng";
            } elseif ($timeDifference->d > 0) {
                return $timeDifference->d . " ngày";
            } elseif ($timeDifference->h > 0) {
                return $timeDifference->h . " giờ";
            } elseif ($timeDifference->i > 0) {
                return $timeDifference->i . " phút";
            } elseif ($timeDifference->s > 0) {
                return $timeDifference->s . " giây";
            } else {
                return "Hiện tại";
            }
        }
        ?>
        <main class="main pb-4">
            <book-grid genre="-1" tag="-1" status="-1" props="-1" limit="20" sort_by="new_chap_at" page="1"
                keyword="-1">
            </book-grid>
            <div id="bookGrid" class="container">
                <!---->
                <div class="page-content rounded-2">
                    <div class="row">
                        <div class="col-3">
                            <aside>
                                <div class="py-2 border-bottom">
                                    <div class="font-weight-semibold mt-1 mb-2">Thể loại</div>
                                    <ul class="list-facet list-unstyled d-block flex-wrap m-0">
                                        <?php
                                        $servername = "localhost"; // Địa chỉ server MySQL
                                        $username = "root"; // Tên đăng nhập MySQL
                                        $password = ""; // Mật khẩu MySQL
                                        $dbname = "web_truyen"; // Tên cơ sở dữ liệu MySQL
                                        
                                        // Tạo kết nối đến cơ sở dữ liệu
                                        $conn = new mysqli($servername, $username, $password, $dbname);

                                        // Kiểm tra kết nối
                                        if ($conn->connect_error) {
                                            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                                        }
                                        $sql = "SELECT * FROM `theloai`";
                                        $result = $conn->query($sql);
                                        // Kiểm tra và xử lý kết quả trả về
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "
                                                    <li>
                                                        <a href=\"javascript:void(0)\" class=\"item rounded\">
                                                            <small>" . $row["tenTheLoai"] . "</small>
                                                        </a>
                                                    </li>
                                                    ";
                                            }
                                        } else {
                                            echo "Không có dữ liệu";
                                        }

                                        $conn->close(); // Đóng kết nối
                                        ?>
                                    </ul>
                                </div>
                        </div>
                        <div class="col-9">
                            <div class="d-flex align-items-center mb-3">
                                <ul class="list-unstyled m-0 d-flex flex-wrap">
                                    <li class="nh-dropdown dropdown">
                                        <a href="javascript:void(0)" role="button" id="js-genres" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="d-block dropdown-toggle pr-4 text-primary">
                                            <span class="ml-2 font-weight-semibold">Mới cập nhật</span>
                                        </a>
                                        <div aria-labelledby="js-genres" class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item active">
                                                Mới cập nhật
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Mới đăng
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nh-dropdown dropdown">
                                        <a role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" class="d-block dropdown-toggle pr-4">
                                            <span class="ml-2 font-weight-semibold">Lượt đọc</span>
                                        </a>
                                        <div aria-labelledby="js-depute" class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Lượt đọc [ngày]
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Lượt đọc [tuần]
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Lượt đọc [tháng]
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Lượtđọc [toàn]
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nh-dropdown dropdown">
                                        <a role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" class="d-block dropdown-toggle pr-4">
                                            <span class="ml-2 font-weight-semibold">Điểm đánh giá</span>
                                        </a>
                                        <div aria-labelledby="js-depute" class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item">Lượt đánh giá</a> <a
                                                href="javascript:void(0);" class="dropdown-item">Điểm đánh giá</a>
                                        </div>
                                    </li>
                                    <li class="nh-dropdown dropdown">
                                        <a href="javascript:void(0);" class="d-block pr-4 font-weight-semibold">
                                            Yêu thích
                                        </a>
                                    </li>
                                    <li class="nh-dropdown dropdown">
                                        <a href="javascript:void(0);" class="d-block pr-4 font-weight-semibold">
                                            Số chương
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="row mb-3">
                                <?php
                                $servername = "localhost"; // Địa chỉ server MySQL
                                $username = "root"; // Tên đăng nhập MySQL
                                $password = ""; // Mật khẩu MySQL
                                $dbname = "web_truyen"; // Tên cơ sở dữ liệu MySQL
                                
                                // Tạo kết nối đến cơ sở dữ liệu
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Kiểm tra kết nối
                                if ($conn->connect_error) {
                                    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                                }
                                $sql = "SELECT truyen.*,tenTheLoai, COUNT(chuongtruyen.idTruyen) AS SoChuong 
                                            FROM truyen 
                                            INNER JOIN truyen_theloai ON truyen.idTruyen = truyen_theloai.idTruyen 
                                            INNER JOIN theloai ON theloai.idTheLoai = truyen_theloai.idTheLoai 
                                            LEFT JOIN chuongtruyen ON truyen.idTruyen = chuongtruyen.idTruyen 
                                            GROUP BY truyen.idTruyen, tenTruyen, tacGia 
                                            ORDER BY chuongtruyen.ngayThem DESC
                                            LIMIT 10;";
                                $result = $conn->query($sql);

                                // Kiểm tra và xử lý kết quả trả về
                                if ($result->num_rows > 0) {
                                    // Lặp qua từng hàng dữ liệu
                                    $count = 1;
                                    while ($row = $result->fetch_assoc()) {

                                        echo "
                                        <div class=\"col-6\">
                                            <div class=\"media border-bottom py-4\">
                                                <a class=\"nh-thumb nh-thumb--72 shadow mr-3\" href=\"/truyen/" . convertToSlug($row["tenTruyen"]) . "/" . convertToSlug($row["tenTruyen"]) . ".php\">
                                                    <img src=\"" . $row["hinhAnh"] . "\" alt width=\"72\">
                                                </a>
                                                <div class=\"media-body\">
                                                    <h2 class=\"fz-body mb-2 \">
                                                        <a href=\"/truyen/" . convertToSlug($row["tenTruyen"]) . "/" . convertToSlug($row["tenTruyen"]) . ".php\" class=\"d-block\" name =\"value-$count\">" . $row["tenTruyen"] . "</a>
                                                    </h2>
                                                    <div class=\"text-secondary text-overflow-2-lines fz-14 mb-3\">
                                                        " . $row["tomTat"] . "
                                                    </div>
                                                    <div class=\"d-flex align-items-start\">
                                                        <div class=\"d-flex align-items-center mr-auto text-secondary\">
                                                        <div>
                                                        <div class=\"d-flex align-items-center fz-13 mr-4 mb-1\">
                                                        <span class=\"icon-wrapper mr-2\"><i class=\"nh-icon fa-regular fa-user mr-1\"></i>
                                                        </span> 
                                                        <span class=\"truncate-140\">
                                                            " . $row["tacGia"] . "
                                                        </span>
                                                    </div> 
                                                    <div class=\"d-flex align-items-center fz-13 mr-4\">
                                                        <span class=\"icon-wrapper mr-2\">
                                                            <i class=\"nh-icon fa-solid fa-bars fz-13 mr-2\"></i>
                                                        </span>
                                                        " . $row["SoChuong"] . " Chương
                                                    </div>
                                                </div>
                                                        </div>
                                                        <a href=\"/\">
                                                            <span
                                                                class=\"d-inline-block border border-primary small px-2 text-primary ml-auto truncate-100\">" . $row["tenTheLoai"] . "</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    ";
                                    }
                                } else {
                                    echo "Không có dữ liệu";
                                }

                                $conn->close(); // Đóng kết nối
                                ?>
                            </div>
                            <nav aria-label="Pagination" class="d-flex justify-content-end">
                                <ul data-v-82963a40="" class="pagination pagination-sm">
                                    <!---->
                                    <li data-v-82963a40="" class="disabled">
                                        <a data-v-82963a40="" tabindex="-1" class="page-link rounded">&lt;</a>
                                    </li>
                                    <li data-v-82963a40="" class="page-item active">
                                        <a data-v-82963a40="" tabindex="0" class="page-link rounded">1</a>
                                    </li>
                                    <li data-v-82963a40="" class="page-item">
                                        <a data-v-82963a40="" tabindex="0" class="page-link rounded">2</a>
                                    </li>
                                    <li data-v-82963a40="" class="page-item">
                                        <a data-v-82963a40="" tabindex="0" class="page-link rounded">3</a>
                                    </li>
                                    <li data-v-82963a40="" class="page-item disabled">
                                        <a data-v-82963a40="" tabindex="0" class="page-link rounded">…</a>
                                    </li>
                                    <li data-v-82963a40="" class="page-item">
                                        <a data-v-82963a40="" tabindex="0" class="page-link rounded">476</a>
                                    </li>
                                    <li data-v-82963a40="" class="page-item">
                                        <a data-v-82963a40="" tabindex="0" class="page-link rounded">477</a>
                                    </li>
                                    <li data-v-82963a40="" class="">
                                        <a data-v-82963a40="" tabindex="0" class="page-link rounded">&gt;</a>
                                    </li> <!---->
                                </ul>
                                <div class="input-jump-to ml-3">
                                    <input type="text" placeholder="Trang" aria-label="Trang"
                                        class="form-control form-control-sm float-left mr-2"> <button type="button"
                                        class="btn btn-outline-primary btn-sm">Go
                                    </button>
                                </div>
                            </nav>
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
                        <img src="https://metruyencv.com/assets/images/logo.png?61025" alt="logo" width="64"
                            height="64">
                    </a>
                    <div class="w-75 m-auto">Mê Truyện Chữ là nền tảng mở trực tuyến, miễn phí đọc truyện chữ được
                        convert hoặc dịch kỹ lưỡng, do các converter và dịch giả đóng góp, rất nhiều truyện hay và nổi
                        bật được cập nhật nhanh nhất với đủ các thể loại tiên hiệp, kiếm hiệp, huyền ảo ... </div>
                    <div class="footer-app mt-4" id="app-download">
                        <div class="d-flex align-items-center justify-content-center py-1">
                            <a href="#" class="mr-3">
                                <img src="https://metruyencv.com/assets/images/app-store.png?61025" alt height="34">
                            </a>
                            <a href="#" class>
                                <img src="https://metruyencv.com/assets/images/google-play.png?61025" alt height="34">
                            </a>
                        </div>
                    </div>
                    <ul class="list-unstyled mt-4 mb-0 d-flex justify-content-center">
                        <li>
                            <a href="https://metruyencv.com/thong-tin/dieu-khoan-dich-vu" target="_blank"
                                class="d-inline-block px-3 py-2">Điều khoản dịch vụ</a>
                        </li>
                        <li>
                            <a href="https://metruyencv.com/thong-tin/chinh-sach-bao-mat" target="_blank"
                                class="d-inline-block px-3 py-2">Chính sách bảo mật</a>
                        </li>
                        <li>
                            <a href="https://metruyencv.com/thong-tin/ve-ban-quyen" target="_blank"
                                class="d-inline-block px-3 py-2">Về bản quyền</a>
                        </li>
                        <li>
                            <a href="https://metruyencv.com/thong-tin/hoi-dap" target="_blank"
                                class="d-inline-block px-3 py-2">Hướng dẫn sử dụng</a>
                        </li>
                        <li>
                            <a href="https://vsave.app/" target="_blank" class="d-inline-block px-3 py-2">Tải video
                                tiktok không logo</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
</body>
<script>
    document.addEventListener('click', function (event) {
        var dropdownToggles = document.querySelectorAll(".dropdown-toggle");

        dropdownToggles.forEach((toggle) => {
            var parent = toggle.parentNode;
            var dropdownMenu = parent.querySelector(".dropdown-menu");

            var isClickInside = parent.contains(event.target);

            if (!isClickInside) {
                parent.classList.remove("show");
                dropdownMenu.classList.remove("show");
            }
        });
    });

    Array.from(document.querySelectorAll(".dropdown-toggle")).forEach((tab) => {
        tab.onclick = (e) => {
            e.currentTarget.parentNode.classList.toggle("show");
            e.currentTarget.parentNode.querySelector(".dropdown-menu").classList.toggle("show");
        };
    });
</script>

</html>