<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Page Title - SB Admin</title>
<link href="{{asset('backend/css/styles.css')}}" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
<div id="layoutAuthentication_content">
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Registration</h3>
                    </div>
                    <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(Session::has('message'))
                    <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                    {{ Session::get('message') }}
                    </div>
                    @endif

                        <form action="{{ route('aregister')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label class="small mb-1" for="name">Name</label>
                                <input class="form-control py-4" name="name" id="name" type="text" placeholder="Enter Your Name" value="{{old('name')}}" />
                            </div>
                                <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" value="{{old('email')}}" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputphone">Phone Number</label>
                                <input class="form-control py-4" id="inputphone" name="phone_number" type="text" placeholder="Enter phone number" value="{{old('phone_number')}}" />
                            </div>

                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                            <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                            </div>
                            <div class="form-group"><label class="small mb-1" for="inputPassword">Confarm Password</label>
                            <input class="form-control py-4" name="password_confirmation" id="inputPassword" type="password" placeholder="Enter password" />
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="password.html">Forgot Password?</a>
                        
                            <input type="submit" class="btn btn-primary" value="Register" name="btn" />
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small"><a href="{{url('/admin/login')}}">Need an account? Sign up!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<div id="layoutAuthentication_footer">
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2019</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
