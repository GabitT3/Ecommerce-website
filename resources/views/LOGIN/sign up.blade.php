<?php
if ( $_SERVER["REQUEST_METHOD"]=="POST"){
if (isset($_POST["name"])){
  $name=$_POST["Name"];
  $surname=$_POST["Sur_name"];
  $address=$_POST["Address"];
  $tel=$_POST["Tel"];
  $password=$_POST["Password"];
$stmt=$pdo->prepare("INSERT INTO USER(Name,Sur_name,Matricule,Tel,Login,Password)VALUES(:Name,:Sur_name,:Matricule,:Tel,:Login,:Password)");
$stmt->bindParam(':Name', $name);
$stmt->bindParam(':Sur_name', $surname);
$stmt->bindParam(':Address', $address);
$stmt->bindParam(':Tel', $tel);
$stmt->bindParam(':Password', $password);
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
  body {

background: gray;

display: flex;

justify-content: center;

align-items: center;

height: 110vh;

flex-direction: column;

}

*{

font-family:"Kaushan script",cursive ;

box-sizing: padding-box;

}

form {

width: 380px;
height: 480px;
position: relative;
border: 3px solid rgb(177, 142, 142);

padding: 15px;

background: rgb(85, 54, 54);

border-radius: 20px;

}



input {

display: block;

border: 2px solid #ccc;

width: 80%;

padding: 5px;

margin: 10px auto;

border-radius: 5px;

}

label {

color: #888;

font-size: 18px;

padding: 10px;

}

button {

float: right;

background: rgb(30, 17);

padding: 10px 15px;

color: #fff;

border-radius: 5px;

margin-right: 10px;

border: none;

}

/* button:hover{

opacity: .10;

} */

.error {

background: #F2DEDE;

color: #0c0101;

padding: 10px;

width: 95%;

border-radius: 5px;

margin: 20px auto;

}

/* h1 {

text-align: center;

color: rgb(134, 3, 3);

} */

a {

float: right;

background: rgb(183, 225, 233);

padding: 8px 10px;

color: #fff;

border-radius: 10px;

margin-right: 10px;

border: none;

text-decoration: none;

}


</style>
</head>
<body>
  
  <p>Enter Your Login Credentials</p>

  <form method="post" action="loginHandler.php">
  <label for="Name">Name:</label>
  <input type="Name"id="Name"name="Name">
  <label for="Name">Surname:</label>
  <input type="Name"id="Surname"name="Surname">
  <label for="Name">Address:</label>
  <input type="text"id="Address"name="Address">
  <label for="Tel">Tel:</label>
  <input type="number" id="Tel" name="Tel" >
  <label for="Password">Password:</label>
  <input type="text" id="Password" name="Password" >
  
  <button>
    <a href="#">INSERT</a>
    </button>
</form>

</body>
</html>