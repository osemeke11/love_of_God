<html>
<head>
    <title>The Love of God Ministry</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" type="text/css" href="<?= resource_asset('css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= resource_asset('css/font-awesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= resource_asset('css/admin.css'); ?>" />
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .error-box{
            border-bottom: 3px solid red
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        #response{
            display: none;
            color: #ffffff;
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php require resource_partial('forms/login'); ?>
    </div>

<!--    <script src="--><?//= resource_asset('js/axios.min.js'); ?><!--"></script>-->
<!--    <script src="--><?//= resource_asset('js/form.js'); ?><!--"></script>-->
</body>
</html>