<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Login - Assort Properties LTD</title>

    <link href="https://assortpropertiesltd.com/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">

                            <div class="col-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 uppercase">Assort Properties LTD</h1>
                                    </div>
                                    <form class="user" method="post" action="{{ route('authenticate') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email"
                                                value="{{ old('email') }}" />
                                            @error('email')
                                                <p class="text-danger px-3">
                                                    Invalid Email Address
                                                </p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                            @error('password')
                                                <p class="text-danger px-3">
                                                    Credencials error
                                                </p>
                                            @enderror
                                        </div>

                                        <input type="submit" name="signin" value="Login"
                                            class="btn btn-primary btn-user btn-block">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>
