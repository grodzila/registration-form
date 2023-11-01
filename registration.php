<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
*{box-sizing: border-box}
.container{
    padding: 16px;
}

input[type=text], input[type=password]{
width: 100px;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: whitesmoke;
}


input[type=text]:focus, input[type=password]{
background-color: #ddd;
outline: none;
}

.registerbtn{
    background-color: #00c3ff;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100px;
    opacity: 0.9;
}

.Registerbtn:hover{
    opacity: 1;
}

a{
    color: dodgerblue;
}
.signin{
    background-color: blue;
    text-align: center;
}
body{
    background-color: seagreen;
   
}
</style>


    <form action="register.php" method=POST id="register form">
    <div class="container">
        <h1>Register form</h1>
        <p>create an account</p>
        <label for="Firstname"><b>First name</b></label>
        <input type="text" placeholder="Enter first Name" name="firstname" id="first name"required>

        <label for="Lastname"><b>Last name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname"required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email"required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password"required>

        <button type="submit" class="Registerbtn">Register</button>
    </div>

    <div class="remember-forgot">
<label><input type ="checkbox">Remember me</label><br>
<a href="#">Forgot Password</a>
    </div>

<div class="container signin">
<p>Already have an Account? <a href="#">signin</a></p>
</div>
</form>


</body>
</html>