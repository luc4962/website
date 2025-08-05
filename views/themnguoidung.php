<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/insert_product.css">
<body>
    <header>
        <div class="container">
            <a href="index.php?action=quantri">Quay lại trang quản trị</a>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="menu">menu</div>
                <div class="main-content">
                    <h1>Thêm người dùng</h1>
                    <form action="" method="post">
                        <div class="group-control">
                            <div class="label1">Tên người dùng</div>
                            <div>
                                <input type="text" name="tnd" placeholder="nhập tên " class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">lever</div>
                            <div>
                                <input type="number" name="lv" min="0" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Mật khẩu</div>
                            <div>
                                <input type="password" name="mk" min="0" class="form-control">
                            </div>
                        </div>
                    
                        <div class="group-control">
                            <button type="submit" name="nutthem" class="btn-control">Thêm mới</button>
                        </div>
                    </form>
                </div>
            </div>
            
            
            
        </div>
    </div>
    <footer></footer>
</body>
</html>