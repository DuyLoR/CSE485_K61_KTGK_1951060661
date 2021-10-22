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
        <h3 class="text-center mb-4">Điền thông tin</h3>
        <form action="process-add.php" method="get">
            <div class="mb-3 row">
                <label for="exam_title" class="col-sm-2 col-form-label">Tên bài thi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="exam_title">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exam_datetime" class="col-sm-2 col-form-label">Ngày thi</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="exam_datetime">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="duration" class="col-sm-2 col-form-label">Thời gian làm bài</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="duration">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="total_question" class="col-sm-2 col-form-label">Số câu hỏi</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="total_question">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="marks_per_right_answer" class="col-sm-2 col-form-label">Điểm cho mỗi câu trả lời
                    đúng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="marks_per_right_answer">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="created_on" class="col-sm-2 col-form-label">Ngày tạo bài thi</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="created_on">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" value="pending">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exam_code" class="col-sm-2 col-form-label">Mã truy cập</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="exam_code">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exam_title" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info" name="btnsubmit">Thêm</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>