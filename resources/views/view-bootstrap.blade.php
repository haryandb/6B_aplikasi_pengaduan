<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contoh Grid Bootstrap</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <style>
        .box {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 20px;
            border: 1px solid #fff;
        }
    </style>
</head>

<body class="container">

    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 ">
            <div class="box">col-md-6 col-lg-3 </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 ">
            <div class="box">col-md-6 col-lg-3 </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 ">
            <div class="box">col-4 col-lg-3</div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 ">
            <div class="box">col-4 col-lg-3</div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 ">
            <div class="box">col-4 col-lg-3</div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 ">
            <div class="box">col-4 col-lg-3</div>
        </div>
    </div>

</body>

</html>
