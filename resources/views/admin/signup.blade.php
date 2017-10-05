<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<div class="span3">
    <h2>Sign Up</h2>
    <form action="store" method="POST">
    	{{ csrf_field() }}
    <label>Username</label>
    <input type="text" name="username" class="span3">
    <label>Password</label>
    <input type="password" name="password" class="span3">
    <button class="btn btn-primary pull-right">Sign UP</button>
    <div class="clearfix"></div>
    </form>
</div>
</body>
</html>
</body>
</html>