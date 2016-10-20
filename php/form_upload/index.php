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
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" class="form-control" name="img" required>
                        </div>
                        <button class="btn btn-primary " type="submit">Upload this file</button>
                    </form>
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
