<?php

if(isset($_GET['btnsubmit'])){
    $id = $_GET['id'];
    $exam_title = $_GET['exam_title'];
    $exam_datetime = $_GET['exam_datetime'];
    $duration = $_GET['duration'];
    $total_question = $_GET['total_question'];
    $marks_per_right_answer = $_GET['marks_per_right_answer'];
    $created_on = $_GET['created_on'];
    $status = $_GET['status'];
    $exam_code = $_GET['exam_code'];
}
// csdl
$conn = mysqli_connect('localhost', 'root', '', 'de06');
if(!$conn){
    die("Lỗi kết nối");
}
$sql = "UPDATE `exams` SET `exam_title`='$exam_title',`exam_datetime`='$exam_datetime',`duration`='$duration',`total_question`='$total_question',`marks_per_right_answer`='$marks_per_right_answer',`created_on`='$created_on',`status`='$status',`exam_code`='$exam_code' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);
if($result>0){
    header("location:index.php");
}else{
    echo 'Lỗi';
}
?>