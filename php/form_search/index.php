<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Xử lý form GET</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets_search/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets_search/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets_search/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="/">
                <i class="fa fa-play-circle"></i> <span class="light">FORM</span> GET METHOD
            </a>
        </div>
    </div>
    <!-- /.container -->
</nav>
<?php
$users = array(
    [
        "name" => "john",
        "age" => 20,
        "avatar" => "assets_search/img/avatar/1.jpg"
    ],
    [
        "name" => "mary",
        "age" => 24,
        "avatar" => "assets_search/img/avatar/2.jpg"
    ],
    [
        "name" => "lynda",
        "age" => 15,
        "avatar" => "assets_search/img/avatar/3.jpg"
    ],
    [
        "name" => "scott",
        "age" => 18,
        "avatar" => "assets_search/img/avatar/4.jpg"
    ],
    [
        "name" => "lina",
        "age" => 21,
        "avatar" => "assets_search/img/avatar/5.jpg"
    ],
    [
        "name" => "michael",
        "age" => 17,
        "avatar" => "assets_search/img/avatar/6.jpg"
    ]
);
?>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="" method="get">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control input-lg" name="query"
                                       placeholder="Search user on this page..." required>

                                <div class="input-group-addon"><i class="fa fa-search fa-2x"></i></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php if (!empty($_GET)) : ?>
                <?php
//                    var_dump($_GET);
                $query = $_GET["query"];
                $result = [];
                for ($i = 0; $i < count($users); $i++) {
                    if (strstr($users[$i]["name"], $query)) array_push($result, $users[$i]);
                }
//                var_dump($result, count($result));
                echo '<div class="row">
                        <h2>Found ' . count($result) . ' results</h2>';
                if (count($result) > 0) {
                    echo '<div class="col-md-8 col-md-offset-2 search-result">
                                <div class="row">';
                    foreach ($result as $r) {
                        echo '<div class="col-md-6 col-sm-6 result-box">
                                        <img src="' . $r["avatar"] . '" class="img img-responsive img-thumbnail avatar">
                                        <h4 class="user-name">' . $r["name"] . '</h4>
                                        <span class="user-age">' . $r["age"] . ' years old</span>
                                    </div>';
                    }
                    echo '</div></div>';
                }
                echo '</div>';
                ?>
            <?php endif ?>
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
