<?php
session_start();
require_once 'models/model.php';
class controller{
    public $model;
    public function __construct(){
        $this->model=new model();
    }
    public function dieuhuong(){
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {

                case 'dangnhap':
                    include_once 'views/login.php';
                    if (isset($_POST['btn_dn'])) {
                        $ten=$_POST['tdn'];
                        $matkhau=$_POST['mk'];
                        $check=$this->model->check_login($ten,$matkhau);
                        $data_login=$this->model->get_user_login($ten,$matkhau);
                        if ($check==1) {
                            $_SESSION['tendn']=$ten;
                            $_SESSION['quyennd']=$data_login[0]['lv_user'];
                            header('Location:index.php');
                        }else {
                            echo "Đăng nhập thất bại";
                        }
                    }
                    break;
                    
                case 'quantri':
                    $data=$this->model->get_product();
                    include_once 'views/dashboard.php';
                    break;
                case 'themsanpham':
                    $data_typeproduct=$this->model->get_typeproduct();
                    include_once 'views/insert_product.php';
                    if (isset($_POST['nutthem'])) {
                        $tsp=$_POST['tsp'];
                        $sl=$_POST['sl'];
                        $ha='img/'.$_POST['ha'];
                        $gsp=$_POST['gsp'];
                        $mt=$_POST['mt'];
                        $lsp=$_POST['lsp'];
                        $this->model->insert_product($tsp,$sl,$ha,$gsp,$mt,$lsp);
                        header('Location:index.php?action=quantri');
                    }
                    break;
                case 'quantridanhmuc':
                    $data_typeproduct=$this->model->get_typeproduct();
                    include_once 'views/quanlydanhmuc.php';
                    break;
                
                    
                case 'themdanhmucsp':
                    include_once 'views/themdanhmucsp.php';
                    if (isset($_POST['nutthem'])) {
                        $tsp=$_POST['tsp'];
                        $this->model->themdanhmucsp_typeproduct($tsp);
                        header('Location:index.php?action=quantridanhmuc');
                    }
                    break;

                 case'quanlynguoidung':
                    $data_user=$this->model->get_user();
                    include_once 'views/quanlynguoidung.php';
                    break;

                case'themnguoidung':
                    include_once 'views/themnguoidung.php';
                    if(isset($_POST['nutthem'])){
                        $ten=$_POST['tnd'];
                        $lv=$_POST['lv'];
                        $mk=$_POST['mk'];
                        $this->model->add_user($ten,$lv,$mk);
                        header('Location:index.php?action=quanlynguoidung');
                    }
                    break;
                case 'suasanpham':
                    $data_typeproduct=$this->model->get_typeproduct();
                    $id_sua=$_GET['id_sp'];
                    $data_product_id=$this->model->get_product_id($id_sua);
                    include_once 'views/update_product.php';
                    if (isset($_POST['nutsua'])) {
                        $tsp=$_POST['tsp'];
                        $sl=$_POST['sl'];
                        if($_POST['ha']==''){
                            $ha=$data_product_id[0]['img_product'];
                        }else{
                            $ha='img/'.$_POST['ha'];
                        }
                        $gsp=$_POST['gsp'];
                        $mt=$_POST['mt'];
                        $lsp=$_POST['lsp'];
                        $this->model->update_product($tsp,$sl,$ha,$gsp,$mt,$lsp,$id_sua);
                        header('Location:index.php?action=quantri');
                    }
                    break;

                case 'dangxuat':
                    session_destroy();
                    header('Location:index.php');
                    break;
                default:
                    # code...
                    break;
                }
                        }else {
            $data=$this->model->get_product();
            include_once 'views/home.php';
        }
    }
}




        
    


?>