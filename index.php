<?php
include('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
        form{
            text-align: center;
            width: 500px;
            margin: 100px auto;
            padding: 10px;
            border: 1px solid gray;
            box-shadow: 1px 1px 10px 5px gray;
        }
        input{
            display: block;
            width: 80%;
            margin: 20px auto;
            padding: 5px 10px;
            border: none;
            border-bottom: 1px solid gray ;
        }
        button{
            border: none;
            background-color: green;
            color: white;
            padding: 10px 25px;
            min-width: 100px;
        }
        a{
            text-decoration: none;
            color: blue;
            margin: 10px;
            display: block;
        }
        .button{
            /* padding-right: 10px; */
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

    </style>
    <script src="./index.js" defer ></script>
</head>
<?php 
    print_r(getError())
?>
<body>
    <form action="./register.php" method="POST">
        <div>
            <input type="text" name="fullname" placeholder="Full Name">
        </div>
        <div>
            <input type="email" name = "email" placeholder="Email">
        </div>
        <div class="button">
            <input type="password" name = "password" placeholder="Password">
            <span class="material-icons visibility">
                visibility_off
            </span>

        </div>
        <div class="button">
            <input type="password" name="retypePassword" placeholder="Confirm Password">
            <span class="material-icons visibility">
                visibility_off
            </span>
        </div>
        <div class="button-container">
            <button type="submit">Register</button>
            <button type="reset">Clear</button>
        </div>
        <a href="./login.html">Login here!</a>
    </form>

</body>
</html>