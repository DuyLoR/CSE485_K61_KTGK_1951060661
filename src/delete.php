<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', 'de06');
if(!$conn){
    die("Lỗi kết nối");
}
$sql= "DELETE FROM `exams` WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if($result > 0){
    header("location: index.php");
}
else{
    echo "lỗi";
}
?>