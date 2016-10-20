<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> BT | Ajax </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
                <div class="panel-heading"><b>Register</b></div>
                <div class="panel-body">
                    <form action="" method="post" class="form-horizontal" id="form-reg">
                        <!--username-->
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Tên đăng nhập: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="username" name="username"  placeholder="Tên đăng nhập" >
                                <span class="error"></span>
                            </div>
                        </div>
                        <!--Password-->
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Mật khẩu:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="pass" name="pass"  placeholder="Mật khẩu">
                                <span class="error"></span>
                            </div>
                        </div>
                        <!--Email-->
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email: </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
                            </div>
                        </div>
                        <!-- Thành phố -->
                        <div class="form-group">
                            <label for="city" class="col-sm-3 control-label">Thành Phố: </label>
                            <div class="col-sm-8">
                                <select class="js-data-example-ajax form-control">
                                    <option  value="3620194" selected="selected">select2/select2</option>
                                </select>
                            </div>
                        </div>
                        <!--Submit-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-primary" id="button">Gel all City</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $(".js-data-example-ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;

                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });

    });
</script>
</body>
</html>