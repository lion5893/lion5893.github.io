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
        <div class="col-sm-10 col-sm-offset-1">
                    <?php
                    $username = "";
                    $pass = "";
                    $fullname = "";
                    $email  = "";
                    $gender = "";
                    $date = "";
                    $phone = "";
                    function clean_input($input){
                        $input  = trim($input);
                        $input = stripslashes($input); // \
                        $input = htmlspecialchars($input);
                        return $input;
                    }
                    ?>
                    <?php
                    //kiểm tra các giá trị nhập vào
                    function isName($input) {
                        return preg_match('/^[a-zA-Z ]{1,}$/', $input);
                    }
                    function isUser($input){
                        return preg_match('/^[a-zA-z0-9\_\.]{6,15}$/', $input);
                    }
                    function isPass($input){
                        return preg_match('/^[a-zA-z0-9\_\@\-]{1,}$/', $input);
                    }
                    function isPhone($input){
                        return preg_match('/^\(\+84\)[0-9]{8,16}$/', $input);
                    }
                    // in ra kết quả
                    if (!empty($_POST)){
                        $success = true;
                        if(!isset($_POST["username"]) || $_POST["username"] === "") {
                            echo "<h3>Username is required</h3>";
                            $success = false;
                        } else {
                            $username = clean_input($_POST["username"]);
                        }
                        if(!isset($_POST["pass"]) || $_POST["pass"] === "") {
                            echo "<h3>Pass is required</h3>";
                            $success = false;
                        } else {
                            $pass = clean_input($_POST["pass"]);
                        }
                        if(!isset($_POST["fullname"]) || $_POST["fullname"] === "") {
                            echo "<h3>Fullname is required</h3>";
                            $success = false;
                        } else {
                            $fullname = clean_input($_POST["fullname"]);
                        }

                        if(!isset($_POST["email"]) || $_POST["email"] === "") {
                            echo "<h3>Email is required</h3>";
                            $success = false;
                        } else {
                            $email = clean_input($_POST["email"]);
                        }
                        if(!isset($_POST["gender"]) || $_POST["gender"] === "") {
                            echo "<h3>Gender is required</h3>";
                            $success = false;
                        } else {
                            $gender = clean_input($_POST["gender"]);
                        }
                        if(!isset($_POST["phone"]) || $_POST["phone"] === "") {
                            echo "<h3>Phone is required</h3>";
                            $success = false;
                        } else {
                            $phone = clean_input($_POST["phone"]);
                        }
                        if($success) {
                            $username = $_POST["username"];
                            $pass = $_POST["pass"];
                            $fullname = $_POST["fullname"];
                            $email = $_POST["email"];
                            $gender = $_POST["gender"];
                            $date = $_POST["date"];
                            $phone = $_POST["phone"];

                            if (!isUser($username)){
                                echo "Username chỉ dùng các ký tự chữ cái a-z, A-Z, các chữ số 0-9, ký tự _, ký tự . </br>";
                            }elseif(!isPass($pass)){
                                echo "Password: chỉ dùng các ký tự chữ cái a-z, A-Z, các chữ số 0-9, ký tự _, ký tự @, ký tự - </br>";
                            }if(!isName($fullname)){
                                echo "Tên chỉ được sử dụng các ký tự chữ cái a-z, A-Z và dấu cách </br>";
                            }elseif (!isPhone($phone)){
                                echo "Mobile phone yêu cầu định dạng:  (+84) ******** </br>";
                            }else {
                                echo "<h3>Xin chào $fullname, đây là thông tin của bạn: </h3><br>";
                                echo "<b> Tên đăng nhập: </b>:  $username <br>";
                                echo "<b> Họ tên: </b>: $fullname <br>";
                                echo "<b> Email: </b>: $email <br>";
                                echo "<b> Giới tính: </b>: $gender <br>";
                                echo "<b> Ngày sinh: </b>: $date <br>";
                                echo "<b> Số điện thoại: </b>: $phone <br>";
                            }
                        }


                    }

                    ?>

        </div>
        <div class="col-md-10 col-md-offset-1 ">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form action="" method="post" class="form-horizontal" id="form-reg">
                        <!--username-->
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Tên đăng nhập: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="username" name="username"  placeholder="Tên đăng nhập" value="<?php echo $username; ?>">
                                <span class="error"></span>
                            </div>
                        </div>
                        <!--Password-->
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Mật khẩu:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="pass" name="pass"  placeholder="Mật khẩu" value="<?php echo $pass ?>">
                                <span class="error"></span>
                            </div>
                        </div>
                        <!--Họ tên-->
                        <div class="form-group">
                            <label for="fullname" class="col-sm-3 control-label">Họ tên: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên" value="<?php echo $fullname ?>">
                            </div>
                        </div>
                        <!--Email-->
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email: </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email ?>" >
                            </div>
                        </div>
                        <!--Giới tính-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Giới tính: </label>
                            <div class="col-sm-8">
                                <label class="radio-inline"><input type="radio" name="gender" value="nam" <?php if($gender === "nam") echo "checked" ?> >Nam</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="nữ" <?php if($gender === "nữ") echo "checked" ?>>Nữ</label>
                            </div>
                        </div>
                        <!--Ngày sinh-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ngày sinh: </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="date" name="date" >
                            </div>
                        </div>
                        <!-- Số điện thoại-->
                        <div class="form-group">
                            <label for="phone" class="col-sm-3 control-label">Số điện thoại: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" value="<?php echo $phone ?>">
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