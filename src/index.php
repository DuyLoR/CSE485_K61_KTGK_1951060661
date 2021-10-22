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
        <h3 class="text-center mb-4">Bảng thống kê</h3>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Mã bài thi</th>
                    <th scope="col">Tên bài thi</th>
                    <th scope="col">Ngày thi</th>
                    <th scope="col">Thời gian làm bài</th>
                    <th scope="col">Số câu hỏi</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Chi tiết</th>
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
                    <td><?php echo $row['status']; ?></td>
                    <td><a href="#">Chi tiết</a></td>
                </tr>
                <?php
                }
            }
                ?>
        </table>
    </div>
</body>

</html>