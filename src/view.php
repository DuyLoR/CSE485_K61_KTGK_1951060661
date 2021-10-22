<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE485_K61_KTGK_1951060661</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid bg-warning p-1 mb-4">
        <h3>Vùng quản trị</h3>
    </div>
    <div class="container">
        <h3 class="text-center mb-4">Bảng thống kê chi tiết</h3>
        <table class="table table-dark table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">Mã bài thi</th>
                    <th scope="col">Tên bài thi</th>
                    <th scope="col">Ngày thi</th>
                    <th scope="col">Thời gian làm bài</th>
                    <th scope="col">Số câu hỏi</th>
                    <th scope="col">Điểm cho mỗi câu trả lời đúng</th>
                    <th scope="col">Ngày tạo bài thi</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Mã truy cập bài thi</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kết nối database
                $conn = mysqli_connect('localhost', 'root', '', 'de06');
                if(!$conn){
                    die("Lỗi kết nối");
                }
                $sql = "SELECT * FROM `exams`";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['exam_title']; ?></td>
                    <td><?php echo $row['exam_datetime']; ?></td>
                    <td><?php echo $row['duration']; ?></td>
                    <td><?php echo $row['total_question']; ?></td>
                    <td><?php echo $row['marks_per_right_answer']; ?></td>
                    <td><?php echo $row['created_on']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['exam_code']; ?></td>
                    <td>
                        <div class="row">
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn col-md-6 text-white btn-info">Sửa</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn col-md-6 text-white btn-info">Xóa</a>
                        </div>
                    </td>
                </tr>
                <?php
                }
            }
                ?>
        </table>
        <div class="row"><a href="add.php" class="btn col-md-2 text-white btn-info">Thêm</a></div>
    </div>
</body>

</html>