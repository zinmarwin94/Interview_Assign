<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
   

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
      <ul class="nav navbar-nav navbar-right">
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/login')}}">Login</a></li>
            <li><a href="{{url('/register')}}">Register</a></li>
             
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<main class="cd-main-content">
    <div class="container login_container">
        <div class="col-sm-8 col-sm-offset-2 login_cont">

                <h3 class="login-h3">Login</h3>
            <hr class="hor-line">

            <form method="post">
                {{ csrf_field() }}
                @foreach($errors->all() as $error )
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                    </label>
                </div>
                <p><a href="{{url('register')}}">Create a new account?</a></p>
                <br>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>


</body>
</html>
