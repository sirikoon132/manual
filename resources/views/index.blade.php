<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <h2>Login Page</h2>
<body>
    {{Form::open(['route' => ['check', 'method' => 'post']])}}
    <p>
        <div>username</div> 
        <input type="text" name="user" placeholder="Username">       
    </p>
    <p>
        <div>Password</div>
        <input type="password" name="pass" placeholder="Password">
    </p>
    <input type="submit" class="btn brn-primary" value="Submit">
    {{Form::close()}}
    <p>
        Do not have ID?
        <button>
            <a href="/signup" style="text-decoration:none color:black;">Signup</a>
        </button>
    </p>
</body>
</html>