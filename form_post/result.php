<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                	<div class="panel-heading">
                	   Đăng ký thành công
                	</div>
                    <div class="panel-body">
                        <?php
                        if (!empty($_POST)){
                            $username = $_POST["username"];
                            $pass = $_POST["pass"];
                            $fullname = $_POST["fullname"];
                            $email = $_POST["email"];
                            $gender = $_POST["gender"];
                            $date = $_POST["date"];
                            echo "<h3>Xin chào $fullname, đây là thông tin của bạn: </h3><br>";
                            echo "<b> Tên đăng nhập: </b>:  $username <br>" ;
                            echo "<b> Họ tên: </b>: $fullname <br>";
                            echo "<b> Email: </b>: $email <br>";
                            echo "<b> Giới tính: </b>: $gender <br>";
                            echo "<b> Ngày sinh: </b>: $date <br>";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>