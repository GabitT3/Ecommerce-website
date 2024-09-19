@extends('layouts.app')

@section('content')


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

  <!-- <form method="post" action="index.php"> -->

  <form method="POST" action="{{ route('login') }}">
        @csrf
    
  <label for="Login">Email:</label><br>
  <input type="email" id="Login" name="email" ><br>
  <label for="Password">Password:</label><br>
  <input type="text" id="Password" name="password" >
  <a href="{{route('register')}}">Don't have a account?</a>
  <!-- <button>
    <a href="login.php"class="btn">LOGIN</a>
    </button> -->

    <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>


</form>



@endsection
