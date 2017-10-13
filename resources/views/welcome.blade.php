<!doctype html>
<html>
<head>
    <title>Agil</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <style>
        body {
            background: url('images.jpg') no-repeat fixed center center;
            background-size: cover;
            font-family: Montserrat;
        }

        .logo {
            width: 140px;
            height: 136px;
            background: url('logoo.jpg') no-repeat;
            margin: 30px auto;
        }

        .login-block {
            width: 320px;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            border-top: 5px solid #FFE436;
            margin: 0 auto;
        }

        .login-block h1 {
            text-align: center;
            color: #000;
            font-size: 18px;
            text-transform: uppercase;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .login-block input {
            width: 100%;
            height: 42px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 14px;
            font-family: Montserrat;
            padding: 0 20px 0 50px;
            outline: none;
        }

        .login-block input#username {
            background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
            background-size: 16px 80px;
        }

        .login-block input#username:focus {
            background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
            background-size: 16px 80px;
        }

        .login-block input#password {
            background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
            background-size: 16px 80px;
        }

        .login-block input#password:focus {
            background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
            background-size: 16px 80px;
        }

        .login-block input:active, .login-block input:focus {
            border: 1px solid #ff656c;
        }

        .login-block button {
            width: 100%;
            height: 40px;
            background: #FFE436;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #FEF86C;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            font-family: Montserrat;
            outline: none;
            cursor: pointer;
        }

        .login-block button:hover {
            background: #ff7b81;
        }

    </style>
</head>
<body>
<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form action="welcome_action" method="post" name="f">
        {{csrf_field()}}
        <input type="text" value="" placeholder="Username" id="username" name="username"  />
        @if($errors->has('username'))<p>{{$errors->first('username')}}</p>@endif
        <input type="password" value="" placeholder="Password" id="password" name="password" />
        @if($errors->has('password'))<p>{{$errors->first('password')}}</p>@endif
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>