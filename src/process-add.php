<?php

if(isset($_GET['btnsubmit'])){
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
$sql = "INSERT INTO `exams`(`exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code`) 
VALUES ('$exam_title', '$exam_datetime', '$duration', '$total_question', '$marks_per_right_answer', '$created_on', '$status', '$exam_code')";
$result = mysqli_query($conn,$sql);
if($result>0){
    header("location:index.php");
}else{
    echo 'Lỗi';
}
?>