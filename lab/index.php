<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_storage";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ cơ sở dữ liệu
$sql = "SELECT * FROM ebook WHERE book_id < 6";
$sql2 = "SELECT * FROM abook";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);


/*$categories = [
    'Sách điện tử' => [],
    'Sách nói' => []
];*/

// Tổ chức dữ liệu theo loại sản phẩm giả định
/*while ($row = $result->fetch_assoc()) {
    $category = (strpos($row['book_title'], 'Sách điện tử') !== false) ? 'Sách điện tử' : 'Sách nói';
    $categories[$category][] = $row;
}*/

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-black">
    <nav class="navbar navbar-expand-lg bg-dark-overlay w-100 ">
        <div class="container-fluid">
            <img class="img-fluid" style="margin-left: 37px" src="image/logo.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item  ">
                        <a class=" nav-link link-light link-underline-opacity-0" href="">Sách điện
                            tử</a>
                    </li>
                    <li class="nav-item ">
                        <a class=" nav-link link-light link-underline-opacity-0 " href="#">Sách nói</a>
                    </li>
                    <li class="nav-item ">
                        <a class=" nav-link link-light link-underline-opacity-0 " href="#">Sách giấy</a>
                    </li>
                    <li class="nav-item ">
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

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/s1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/s2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/s3.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="product">
        <h2 class="title" style="color: aliceblue;">Sách điện tử</h2>
        <div class="d-flex bg-dark-overlay flex-wrap ">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-2 mb-3" style="margin-left: 48px;">
                        <div class="card bg-dark text-white position-relative">
                            <a href="ebook.php?book_id=<?php echo htmlspecialchars($row['book_id']); ?>">
                                <img class="img-fluid rounded-4" src="<?php echo htmlspecialchars($row['book_img']); ?>"
                                    alt="<?php echo htmlspecialchars($row['book_title']); ?>">
                            </a>
                            <div class="c-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['book_title']); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Không có sách nào để hiển thị.</p>
            <?php endif; ?>
        </div>
    </div>




    <div class="container mt-4">
        <hr />
        <!-- Footer -->
        <footer class="py-3 my-4 border-top text-white">
            <div class="row">
                <div class="col text-center">
                    <p class="mb-0">Copyright &copy; <a href="index.php">Packt Publishing</a> 2014</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/bootstrap.js"></script>
    <script>

    </script>

</html>