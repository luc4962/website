<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link src="css/home.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/DiscoverYOU.svg" alt="abc">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <?php
                    if (isset($_SESSION['tendn'])) {
                        if ($_SESSION['quyennd']==1) {
                ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=quantri">Trang quản trị</a>
                            </li> 
                <?php            
                        }
                ?>
                       <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $_SESSION['tendn'];?></a>
                        </li> 
                       <li class="nav-item">
                            <a class="nav-link" href="index.php?action=dangxuat">Đăng xuất</a>
                        </li> 
                <?php        
                    }else {
                ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=dangnhap">Đăng nhập</a>
                        </li>
                <?php 
                    }
                ?>
                
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="row">
                        <?php
                            foreach($data as $value){
                        ?>
                                <div class="col-sm-4 text-center">
                                    <img src="<?=$value['img_product'];?>" alt="">
                                    <div class="mt-3"><?php echo $value['name_product']; ?></div>
                                    <div class="mt-3"><?php echo $value['price_product']; ?></div>
                                    <div class="mt-3">
                                        <input type="button" value="Mua hàng" class="btn btn-success">
                                    </div>
                                </div>
                        <?php
                            }
                        ?>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
