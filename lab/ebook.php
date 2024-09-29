<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_storage";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_GET['book_id'])) {
    $book_id = intval($_GET['book_id']); // Chuyển đổi sang số nguyên để bảo mật
    $query = "SELECT * FROM ebook WHERE book_id = $book_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $book = $result->fetch_assoc();
    } else {
        echo "Không tìm thấy sách.";
        exit;
    }
} else {
    echo "ID sách không được cung cấp.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body class="bg-black ">

    <nav class="navbar navbar-expand-lg bg-dark-overlay w-100 ">
        <div class="container-fluid">
            <a href="index.php"><img class="img-fluid" style="margin-left: 37px" src="image/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class=" nav-link link-light link-underline-opacity-0" href="#">Sách điện
                            tử</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link link-light link-underline-opacity-0 " href="#">Sách nói</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link link-light link-underline-opacity-0 " href="#">Sách giấy</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link link-light link-underline-opacity-0 " href="#">Fanpage</a>
                    </li>
                </ul>
                <div class="d-flex gap-3">
                    <form class="d-flex" role="search">
                        <input class="form-control border-input  me-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success search-icon " type="submit"><i
                                class="bi bi-search text-white"></i></button>
                    </form>
                    <a class="btn btn-outline-success text-white" href="#"><i class="bi bi-flower3"
                            class="nav-link"></i>Gói
                        cước</a>

                    <!-- Log in, Register -->
                    <div class="d-flex gap-1">
                        <!-- Login -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success text-white" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1">
                            Đăng nhập
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Đăng nhập</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="login.php" method="POST">
                                            <div class="mb-3">
                                                <label for="inputNumber" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" id="inputNumber"
                                                    aria-describedby="emailHelp"
                                                    placeholder=" Tên đăng nhập hoặc số điện thoại">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword"
                                                    aria-describedby="passwordHelp" name="password"
                                                    placeholder="Mật khẩu phải có ít nhất 4 ký tự">
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkBox">
                                                    <label for="checkBox" class="form-check-label">Ghi nhớ đăng
                                                        nhập</label>
                                                </div>
                                                <div class="mb-3 ">
                                                    <a href="#" class="text-decoration-none">Quên mật khẩu?</a>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success w-100">Đăng nhập</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="" class="btn btn-primary w-100"><i
                                                class="bi bi-facebook mx-2"></i>Facebook</a>
                                        <a href="" class="btn btn-secondary w-100"><i
                                                class="bi bi-google mx-2"></i>Google</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Register -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success text-white" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Đăng ký
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Đăng ký</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="register.php" method="post">
                                            <div class="mb-3">
                                                <label for="inputNumber" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="" id="inputNumber"
                                                    aria-describedby="numberHelp"
                                                    placeholder="Tên đăng nhập hoặc số điện thoại" required>

                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Mật khẩu phải có ít nhất 4 ký tự" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputConfirmPassword1" class="form-label">Confirm
                                                    Password</label>
                                                <input type="password" class="form-control"
                                                    id="exampleInputConfirmPassword1" placeholder="Nhập lại mật khẩu"
                                                    required>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkBox">
                                                    <label for="checkBox" class="form-check-label">Ghi nhớ đăng
                                                        nhập</label>
                                                </div>
                                                <div class="mb-3 ">
                                                    <a href="#" class="text-decoration-none">Quên mật khẩu?</a>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success w-100">Đăng ký</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="https://www.facebook.com/?locale=vi_VN"
                                            class="btn btn-primary w-100"><i
                                                class="bi bi-facebook mx-2"></i>Facebook</a>
                                        <a href="" class="btn btn-secondary w-100"><i
                                                class="bi bi-google mx-2"></i>Google</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Log in, Register -->

                </div>
            </div>
        </div>
    </nav>
    <div class="container d-flex text-white">

        <div class="col-4">
            <img class="img-fluid rounded-4" src="<?php echo htmlspecialchars($book['book_img']); ?>"
                alt="<?php echo htmlspecialchars($book['book_title']); ?>"
                style="max-height: 100%; width: 349px; object-fit: cover;">
        </div>

        <div class=" col-8 d-grid">
            <div>
                <h1><?php echo htmlspecialchars($book['book_title']); ?></h1>
                <div class="d-flex mb-4">
                    <i class="bi bi-star-fill" style="color: gold;"></i>
                    <i class="bi bi-star-fill" style="color: gold;"></i>
                    <i class="bi bi-star-fill" style="color: gold;"></i>
                    <i class="bi bi-star-fill" style="color: gold;"></i>
                    <i class="bi bi-star-fill" style="color: gold;"></i>
                    <p class="mx-3">- 10 Đánh giá</p>
                </div>
                <div class="d-flex flex-wrap">
                    <p class="col-6"><strong>Tác giả: </strong> <?php echo htmlspecialchars($book['book_author']); ?>
                    </p>
                    <p class="col-6"><strong>Thể loại: </strong> <?php echo htmlspecialchars($book['category']); ?></p
                        class="col-6">
                    <p class="col-6"><strong>Nhà sản xuất: </strong> <?php echo htmlspecialchars($book['nxb']); ?></p
                        class="col-6">
                    <p class="col-6"><strong>Ngày đăng: </strong> <?php echo htmlspecialchars($book['book_update']); ?>
                    </p>
                </div>
            </div>
            <div>
                <button class="col-4 btn btn-outline-success text-white"><i class="bi bi-book mx-1"></i>Đọc
                    sách</button>
                <button class="col-4 btn btn-outline-success text-white"><i class="bi bi-play mx-1"></i>Nghe
                    sách</button>
                <butto class=" btn btn-secondary"><i class="bi bi-heart"></i></button>
            </div>

            <div>
                <p><strong>Miêu tả: </strong>
                    <?php
                    $description = htmlspecialchars($book['description']);
                    echo strlen($description) > 100 ? substr($description, 0, 400) . '...' : $description;
                    ?>
                </p>
            </div>

        </div>
        <!-- Giả sử bạn có cột description trong bảng books -->
    </div>
    <script src="ja/bootstrap.js"></script>
</body>

</html>