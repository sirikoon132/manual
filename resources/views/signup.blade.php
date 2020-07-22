<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h2>Sing Up Page</h2>
<p>Insert username and password</p>
<body>
    {{Form::open(['route' => ['add', 'method' => 'post']])}}
    <p>
        <div>Username</div>
        <input type="text" name="user" placeholder="Username">
    </p>
    <p>
        <div>Password</div>
        <input type="password" name="pass" placeholder="Password">
    </p>
    <input type="submit" class="btn btn-primary" value="Submit">
    {{Form::close()}}
    <button>
        <a href="/index" style="text-decoration:none; color:black;">Back</a>
    </button>
</body>
</html>