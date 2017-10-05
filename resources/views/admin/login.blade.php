<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<div class="span3">
    <h2>Admin Login</h2>
    <form method="POST" action="login">
    	{{ csrf_field() }}
    <label>Username</label>
    <input type="text" name="username" class="span3">
     @if ($errors->has('email'))
	    <span class="help-block">
	        <strong>{{ $errors->first('email') }}</strong>
	    </span>
	@endif
    <label>Password</label>
    <input type="password" name="password" class="span3">
     @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    <button class="btn btn-primary pull-right">Log in</button>
    <div class="clearfix"></div>
    </form>
</div>
</body>
</html>