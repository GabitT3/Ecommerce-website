<!-- <!DOCTYPE html>
<html>
<head>
  <style>
    /* Add some styling for the page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      text-align: center;
    }

    /* Style the logo */
    .logo {
      width: 50%;
      margin: 0 auto;
      margin-top: 20px;
    }

    /* Style the form */
    .login-form {
      width: 300px;
      margin: 0 auto;
      margin-top: 50px;
      background-color: white;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      text-align: left;
    }

    /* Style the input fields */
    .login-form input[type="email"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    /* Style the submit button */
    .login-form input[type="submit"] {
      width: 100%;
      background-color: #4caf50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    /* Style the error message
    .error {
      color: red;
      margin-top: 10px;
      text-align: center;
    } */
  </style>
</head>
<body>
  <!-- Add a logo -->
  <!-- <img class="logo" src="logo.png" alt="Logo"> -->

  <!-- Add the login form -->
  <!-- <form class="login-form" action="index.php" method="post">
    <label for="email">Email</label>
    <input type="email" id="email" name="email">
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="Login">
  </form> -->

  <!-- Add an error message (optional) -->
  <!-- <div class="error">
    Invalid email or password.
  </div> -->
<!-- </body>
</html> --> <!-- <?php

session_start();


?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
  body {

background: #91a716;

display: flex;

justify-content: center;

align-items: center;

height: 100vh;

flex-direction: column;

}

*{

font-family: cursive;

box-sizing: padding-box;

}

form {

width: 300px;

border: 3px solid rgb(177, 142, 142);

padding: 20px;

background: rgb(85, 54, 54);

border-radius: 20px;

}

h2 {

text-align: center;

margin-bottom: 40px;

}

input {

display: block;

border: 2px solid #ccc;

width:95%;

padding: 10px;

margin: 10px auto;

border-radius: 5px;

}

label {

color: #888;

font-size: 18px;

padding: 10px;

}

button {

float: center;

background: rgb(35, 174, 202);

padding: 10px 15px;

color: #fff;

border-radius: 5px;

margin-right: 10px;

border: none;

}

button:hover{

opacity: .10;

}

.error {

background: #F2DEDE;

color: #0c0101;

padding: 10px;

width: 95%;

border-radius: 5px;

margin: 20px auto;

}

h1 {

text-align: center;

color: rgb(134, 3, 3);

}

a {

float: right;

background: rgb(183, 225, 233);

padding: 10px 15px;

color: #fff;

border-radius: 10px;

margin-right: 10px;

border: none;

text-decoration: none;

}

a:hover{

opacity: .7;

}
</style>
</head>
<body>
  
  <p>Enter Your Login Credentials</p>

  <form method="post" action="index.php">
  <label for="Login">Login:</label><br>
  <input type="text" id="Login" name="Login" ><br>
  <label for="Password">Password:</label><br>
  <input type="text" id="Password" name="Password" >
  <a href="sign up.php">Don't have a account?</a>
  <button>
    <a href="login.php"class="btn">LOGIN</a>
    </button>


</form>

</body>
</html>