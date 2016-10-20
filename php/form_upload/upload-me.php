<?php
    // Trả về phần mở rộng của file upload
    function getFileExtension ($fileName){
        return pathinfo($fileName)["extension"];
    }

/**
 * @param $file // Lấy giá trị của file khi người dùng upload: $_FILES["img"] //img là name trong input, giống $_GET["name"]
 * @param $path // Đường dẫn đến thư mục trên server muốn lưu file: './upload'
 * @param $allowType // Các định dạng file cho phép: array('jpg', 'png')
 * @param $maxSize // Dung lượng tối đa file được phép upload(B): 3MB -> 3000000B
 */
    function uploadFile($file, $path, $allowType, $maxSize){
        $fileName = $file['name']; // Lưu giá trị phần name của file
        $ext = getFileExtension($fileName); // Lưu giá trị phần mở rộng của file
        $fileSize = $file['size']; // Lưu kích thước của file
        $tmpFile = $file['tmp_name']; // Vi tri tạm thời của file khi đưa lên

        $result = [
            "error" => [], // lưu các lỗi khi upload file
            "path" => "" // lưu đường dẫn tới file nếu upload thành công lên server
        ];
        //kiểm tra size file
        if ($fileSize > $maxSize){
            $result["error"][] = [
                'msg' => 'File vượt quá' . ($maxSize / 1000000) . 'MB'
            ];
        }
        //kiểm tra phần mở rộng của file
        // Hàm in_array kiểm tra 1 giá trị có nằm trên 1 mảng hay không
        if(!in_array($ext, $allowType)){
            $result["error"][] = [
                'msg' => 'Loại tập tin không được phép'
            ];
        }
        //Kiểm tra có lỗi hay không
        if(count($result["error"]) == 0){
            $fileName = time() . '_' . $fileName; //hiển thị time upload để phân biệt các file có tên trùng nhau
            $path = $path . '/' .$fileName; // Đường dẫn tới thư mục chứa file
            //Di chuyển file từ vị trí tạm đến vị trí mà ta mong muốn
            if(move_uploaded_file($tmpFile, $path)) {
                $result["path"] = $path; //Nếu di chuyển thành công thì đưa $path vào result
            }
        }
        return $result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload file trong PHP</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets_upload/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets_upload/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets_upload/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand page-scroll" href="/">
                <i class="fa fa-play-circle"></i> <span class="light">UPLOAD</span> FILE
            </a>
        </div>
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php
//                        echo '<pre class = "text-left">';
//                        print_r($_FILES);
//                        echo '</pre>';
                    $folder_to_upload = './upload';
                    $allowType = ['jpg', 'png', 'jpeg'];
                    $maxSize  = 3000000;
                    // Lưu lại kết quả của hàm upload file
                    $upload_result = uploadFile($_FILES["img"], $folder_to_upload, $allowType, $maxSize);
                    //in ra ngoài màn hình:
                    if(count($upload_result["error"]) > 0) {
                        $error = "";
                        foreach($upload_result["error"] as $err) $error .= $err["msg"] . ". ";

                        echo '<div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> ' . $error . '
                            </div>';
                    } else {
                        echo '<div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Success!</strong> File path: <pre>' . $upload_result["path"] . '</pre>
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Copyright &copy; Techmaster 2015</p>
    </div>
</footer>

</body>

</html>

