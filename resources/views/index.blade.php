
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Qasir</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="#"> <h4>LOGIN</h4></a>

                                <form class="mt-5 mb-5 login-input" method="POST" action="/loginproses">
                                    @csrf
                                    <div class="form-group">
                                        <input type="nama" class="form-control" placeholder="Nama" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/plugins/common/common.min.js"></script>
    <script src="./assets/js/custom.min.js"></script>
    <script src="./assets/js/settings.js"></script>
    <script src="./assets/js/gleek.js"></script>
    <script src="./assets/js/styleSwitcher.js"></script>
</body>
</html>





