<?php
class model{
    private $host='localhost';
    private $user='root';
    private $pass='';
    private $db='db_k21';
    private $connect=null;
    public function __construct(){
        $this->ketnoi();
    }
    public function ketnoi(){
        $this->connect=new mysqli($this->host,$this->user,$this->pass,$this->db);
        mysqli_set_charset($this->connect,'UTF8');
        
    }
    public function get_product(){
        $sql="select * from tbl_product";
        $this->result=$this->connect->query($sql);
        if ($this->result->num_rows==0) {
            $data=0;
        }else{
            while($row=$this->result->fetch_assoc()){
                $data[]=$row;
            }
        }
        return $data;
    }
    public function get_typeproduct(){
        $sql="select * from tbl_typeproduct";
        $this->result=$this->connect->query($sql);
        if ($this->result->num_rows==0) {
            $data=0;
        }else{
            while($row=$this->result->fetch_assoc()){
                $data[]=$row;
            }
        }
        return $data;




    }
    public function check_login($ten,$matkhau){
        $sql="select * from tbl_user where name_user='".$ten."' and pass_user='".$matkhau."'";
        $this->result=$this->connect->query($sql);
        if ($this->result->num_rows==0) {
            $count=0;
        }else{
            $count=1;
        }
        return $count;
    }
    public function get_user_login($ten,$matkhau){
        $sql="select * from tbl_user where name_user='".$ten."' and pass_user='".$matkhau."'";
        $this->result=$this->connect->query($sql);
        if ($this->result->num_rows==0) {
            $data=0;
        }else{
            while ($row=$this->result->fetch_assoc()) {
                $data[]=$row;
            }
        }
        return $data;
    }
    
    public function insert_product($tsp,$sl,$ha,$gsp,$mt,$lsp){
        $sql="insert into tbl_product(name_product,qly_product,img_product,price_product,detail_product,id_typeproduct) values('".$tsp."','".$sl."','".$ha."','".$gsp."','".$mt."','".$lsp."')";
        $this->result=$this->connect->query($sql);
        return $this->result;
    }
    public function themdanhmucsp_typeproduct($tsp){
        $sql="insert into tbl_typeproduct(name_typeproduct) values('".$tsp."')";
        $this->result=$this->connect->query($sql);
        return $this->result;
    }
    
    public function add_user($ten,$lv){
        $sql="insert into tbl_user(name_user,lv_user) values('".$ten."','".$lv."')";
        $this->result=$this->connect->query($sql);
        return $this->result;
    }
    public function get_user(){
        $sql="select * from tbl_user";
        $this->result=$this->connect->query($sql);
        if ($this->result->num_rows==0) {
            $data=0;
        }else{
            while($row=$this->result->fetch_assoc()){
                $data[]=$row;
            }
        }
        return $data;
    }
    public function get_product_id($id_sua){
        $sql="select * from tbl_product where id_sp='".$id_sua."'";
        $this->result=$this->connect->query($sql);
        if ($this->result->num_rows==0) {
            $data=0;
        }else{
            while($row=$this->result->fetch_assoc()){
                $data[]=$row;
            }
        }
        return $data;
    }
    public function update_product($tsp,$sl,$ha,$gsp,$mt,$lsp,$id_sua){
        $sql="update tbl_product set name_product='".$tsp."',qly_product='".$sl."',img_product='".$ha."',price_product='".$gsp."',detail_product='".$mt."',id_typeproduct='".$lsp."' where id_sp='".$id_sua."'";
        $this->result=$this->connect->query($sql);
        return $this->result;
    }
}
?>