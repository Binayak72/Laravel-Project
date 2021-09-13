<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style type="text/css">

        /*body{*/
        /*    background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);*/
        /*}*/

        body{
            margin: 0;
            padding: 0;
            background: #1f3826;
            background-size: 175%;
            background-position: center;
            font-family: sans-serif;
        }

        .loginbox{
            width: 320px;
            height: 420px;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        .avatar{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }

        h1{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }

        .loginbox p{
            margin: 0;
            padding: 0;
            font-weight: bold;
            font-family: sans-serif;
        }

        .loginbox input{
            width: 100%;
            margin-bottom: 20px;
        }

        .loginbox input[type="text"], input[type="password"], input[type="tel"], input[type="email"], input[type="date"]
        {
            border: none;
            border-bottom: 2px solid #008000;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .loginbox input[type="submit"]
        {
            border: none;
            outline: none;
            height: 30px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 50px;
        }
        .loginbox input[type="submit"]:hover
        {
            cursor: pointer;
            background: #008000;
            color: #000;
        }


    </style>

</head>
<body>

<div class="loginbox">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWBVrXPtBsgQ4Sp9nO27hsaSmWSFeEZX5ID3ZJE1CraXxUP72wEKNDZbWyEvYGef2iJEo&usqp=CAU" class="avatar">
    <h1>Register Here</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <p>Name</p>
        <input type="text" name="name">
        <p>Address</p>
        <input type="text" name="address">
        <p>Contact</p>
        <input type="tel" name="phone">
        <p>Gmail</p>
        <input type="email" name="email">
        <p>Profile Picture</p>
        <input type="file" name="profile">
        <input type="submit" name="" value="Register">
    </form>

</div>


</body>
</html>
