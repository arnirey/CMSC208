@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login</h1>  
 <form class="form-horizontal" role="form" method="POST" action="/login">
          {{ csrf_field() }} <!- laravel built in protection>
<div class="form-group">
    <label for="email" class="col-md-4 control-label">Email</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                    </div>
</div>

<div class="form-group">
    <label for="password" class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" required>

                                    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" > Remember Me
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-8 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Login
        </button>

        <a class="btn btn-link" href="http://localhost:8080/password/reset">
            Forgot Your Password?
        </a>
    </div>
</div>
</form>
</body>
</html>
@endsection