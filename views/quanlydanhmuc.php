<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="navbar">
        <a href="index.php">Quay lại trang chủ</a>
    </div>
    <div class="content">
        <div class="container">
            <div class="row1">
                <div class="row11">
                    <div class="menu">
                        <ul>
                            <li><a href="index.php?action=quantri">Quản lý sản phẩm</a></li>
                            <li><a href="index.php?action=quantridanhmuc">Quản lý danh mục sản phẩm</a></li>
                            <li><a href="#">Quản lý người dùng</a></li>
                        </ul>
                    </div>
                    <div>
                        <a href="index.php?action=themdanhmucsp">Thêm danh mục sản phẩm</a>
                    </div>
                </div>
                <div class="list-product">
                    <table>
                        <head>
                            <tr>
                                <th>STT</th>
                                <th>Tên danh mục sản phẩm</th>
                                <th>Thao tác</th>
                            </tr>
                        </head>
                        <tbody>
                            <?php
                                $stt=1;
                                foreach($data_typeproduct as $value){
                            ?>
                                <tr>
                                    <td><?php echo $stt++; ?></td>
                                    <td><?php echo $value['name_typeproduct']; ?></td>
                                    <td>
                                        <a href="">Sửa</a> / <a href="">Xoá</a>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>