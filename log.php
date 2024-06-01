<?php 
include("path.php"); 
include("app/controllers/users.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/c642bd8984.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>

<?php 
include("app/include/header.php"); 
?>

<!-- Форма регистрации -->
<div class="container reg_form">
   <form class="row justify-content-center" method="post" action="log.php">
      <h2>Авторизация</h2>
      <div class="mb-3 col-12 col-md-4 err">
         <p><?=$errMsg?></p>
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-12 col-md-4">
         <label for="formGroupExampleInput" class="form-label">Ваша почта</label>
         <input name="email" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-12 col-md-4">
         <label for="exampleInputPassword1" class="form-label">Пароль</label>
         <input name="password" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-12 col-md-4">
      <button type="submit" class="btn btn-secondary" name="button-log">Вход</button>
         <a href="aut.html">Зарегистрироваться</a>
      </div>
   </form>
</div>

<!-- Окончание формы регистрации -->

<?php 
include("app/include/footer.php"); 
?>