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
                    <h1>Thêm sản phẩm</h1>
                    <form action="" method="post">
                        <div class="group-control">
                            <div class="label1">Tên sản phẩm</div>
                            <div>
                                <input type="text" name="tsp" placeholder="Tên sản phẩm" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Số lượng</div>
                            <div>
                                <input type="number" name="sl" min="0" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Hình ảnh</div>
                            <div>
                                <input type="file" name="ha" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Giá sản phẩm</div>
                            <div>
                                <input type="number" name="gsp" min="0" step="1000" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Mô tả</div>
                            <div>
                                <input type="text" name="mt" placeholder="Mô tả" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Loại sản phẩm</div>
                            <div>
                                <select name="lsp" id="" class="form-control">
                                    <?php
                                        foreach ($data_typeproduct as $value) {
                                    ?>
                                            <option value="<?=$value['id_typeproduct']; ?>"><?php echo $value['name_typeproduct'];?></option>   
                                    <?php        
                                        }
                                    ?>
                                </select>
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