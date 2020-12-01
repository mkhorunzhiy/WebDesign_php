<?php
// Start the session
session_start();
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">

<div class="container">
<p> Регистрация </p>
   <form action="signup.php" method="post" enctype="multipart/form-data">
   <div class="input-field">
          <input placeholder="Введите имя" id="first_name" type="text" name="first_name" >
          <label for="first_name" class="active">Имя</label>
        </div>
    <div class="input-field">
          <input placeholder="Введите фамилию" id="last_name" type="text" name="last_name" >
          <label for="last_name" class="active">Фамилия</label>
        </div>
    <div class="input-field">
          <input placeholder="Введите логин" id="login" type="text" name="login" >
          <label for="login" class="active">Логин</label>
        </div>
    <div class="input-field">
          <input placeholder="Введите пароль" id="password" type="password" name="password">
          <label for="password" class="active">Пароль</label>
        </div>
	<p> Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
  </p>
       <input type="submit" name="submit" class="btn">
   </form>
</div>

</body>
</html>