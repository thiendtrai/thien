<?php
require 'db/connect.php';
if(isset($_POST['dangky'])){
    
$id = $_POST['id'];
$matkhau = $_POST['matkhau'];
if(!empty($id) && !empty($matkhau)){
echo "<pre>";
print_r($_POST);

$sql = "INSERT INTO `nguoidung`(`id`, `matkhau`) VALUES ('$id', '$matkhau') ";
if($conn->query($sql)===true){
    echo "Them du lieu thanh cong";
}else{
    echo "lỗi {$sql}".$conn->error;
}

}else
{
    echo "Bạn cần nhập đầy đủ thông tin";
}
}


?>
<a href="index.php"> Tro lai</a>