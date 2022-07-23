<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="/assets/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/assets/login/css/style.css">

    <title>Login Admin</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="/assets/login/images/bgmadina.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3><strong>Layanan Kesehatan Admin</strong></h3>
                            </div>
                            <form action="{{ route('login.post') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    {{-- <label for="username">Username</label> --}}
                                    <input type="username" name="username" class="form-control"
                                        @error('username') is-invalid @enderror id="username" autofocus required
                                        value="{{ old('username') }}" placeholder="Username">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group last mb-4">
                                    <input type="password" name="password" class="form-control" id="password"
                                        autofocus  placeholder="Password">
                                    {{-- <label for="password">Password</label> --}}
                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>
                                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
