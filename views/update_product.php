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
                    <h1>Sửa sản phẩm</h1>
                    <form action="" method="post">
                        <div class="group-control">
                            <div class="label1">Tên sản phẩm</div>
                            <div>
                                <input type="text" name="tsp" value="<?php echo $data_product_id[0] ['name_product'];?>" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Số lượng</div>
                            <div>
                                <input type="number" value="<?php echo $data_product_id[0] ['qly_product'];?>" name="sl" min="0" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Hình ảnh</div>
                            <div>
                                <input type="file" name="ha" class="form-control">
                            </div>
                            <div>
                                <img src="<?=$data_product_id[0]['img_product'];?>" alt="">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Giá sản phẩm</div>
                            <div>
                                <input type="number" value="<?php echo $data_product_id[0] ['price_product'];?>" name="gsp" min="0" step="1000" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Mô tả</div>
                            <div>
                                <input type="text" name="mt" value="<?php echo $data_product_id[0] ['detail_product'];?>" class="form-control">
                            </div>
                        </div>
                        <div class="group-control">
                            <div class="label1">Loại sản phẩm</div>
                            <div>
                                <select name="lsp" id="" class="form-control">
                                    <?php
                                        foreach ($data_typeproduct as $value) {
                                            if($value['id_typeproduct'] == $data_product_id[0] ['id_typeproduct']) {
                                    ?>
                                                <option value="<?=$value['id_typeproduct']; ?>" selected> <?php echo $value['name_typeproduct'];?> </option>
                                    <?php
                                            }
                                    ?>
                                            <option value="<?=$value['id_typeproduct']; ?>"> <?php echo $value['name_typeproduct'];?></option>   
                                    <?php        
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="group-control">
                            <button type="submit" name="nutsua" class="btn-control">Thêm mới</button>
                        </div>
                    </form>
                </div>
            </div>
            
            
            
        </div>
    </div>
    <footer></footer>
</body>
</html>