<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Form </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        .container{
            margin-top:50px;
        }
        body{
            background-color: #f5f8fa;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 ">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form action="result.php" method="post" class="form-horizontal" id="form-reg">
                        <!--username-->
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Tên đăng nhập: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="username" name="username"  placeholder="Tên đăng nhập" required>
                                <span class="error"></span>
                            </div>
                        </div>
                        <!--Password-->
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Mật khẩu:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="pass" name="pass"  placeholder="Mật khẩu" required>
                                <span class="error"></span>
                            </div>
                        </div>
                        <!--Họ tên-->
                        <div class="form-group">
                            <label for="fullname" class="col-sm-3 control-label">Họ tên: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên" required>
                            </div>
                        </div>
                        <!--Email-->
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email: </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <!--Giới tính-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Giới tính: </label>
                            <div class="col-sm-8">
                                <label class="radio-inline"><input type="radio" name="gender" value="nam" required>Nam</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="nữ" required>Nữ</label>
                            </div>
                        </div>
                        <!--Ngày sinh-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ngày sinh: </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div>
                        <!--Địa chỉ-->
                        <div class="form-group">
                            <label for="add" class="col-sm-3 control-label">Địa chỉ: </label>
                            <div class="col-sm-8">
                                <textarea id="add" name="textarea" class="form-control" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                        <!--Submit-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
<script>
    //       $('#form-reg').validate({
    //           rules: {
    //               username: {
    //                   minlength: 6,
    //                   maxlength: 15
    //               }
    //           },
    //           messages:
    //           {
    //               username: {
    //                   minlength: "Tên ngắn vậy, chém gió à",
    //                   maxlength: "Tên dài vây, đừng có mà spam"
    //               }
    //           }
    //       });
    $(document).ready(function () {
        $('#form-reg').on('submit',function () {
            var flag = true;
            var username = $('#username').val().trim();
            if( username.length <6 || username.length >15 ){
                $('#username').next('span').text(' Tên từ 6 đến 15 ký tự');
                flag = false;
            }
            else{
                $('#username').next('span').text('');
            }
            return flag;
        })
    })

</script>
</body>
</html>