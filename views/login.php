<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="card">
        <div class="card-header">
            Đăng nhập
        </div>
        <div class="card-body">
            <form action="" method="post">
                <h5 class="card-title">Tên đăng nhập</h5>
                <p class="card-text">
                    <input type="text" placeholder="Tên đăng nhập" class="form-control" name="tdn">
                </p>
                <h5 class="card-title">Mật khẩu</h5>
                <p class="card-text">
                    <input type="password" placeholder="Mật khẩu" class="form-control" name="mk">
                </p>
                <p class="card-text">
                    <a href="index.php">Quay lại trang đăng nhập</a>
                </p>
                <input type="submit" value="Đăng nhập" class="btn btn-success" name="btn_dn">
            </form>
        </div>
    </div>
</body>
</html>