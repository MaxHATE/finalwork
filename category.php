<?php 
   include("path.php"); 
   include ("app/controllers/topics.php");
   $posts = selectAll('posts',['id_topic' =>$_GET['id']]);
   $topTopic = selectTopTopicsFromPostsOnIndex('posts');
   $category = selectOne ('topics' , ['id' => $_GET['id']]);
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

   <!-- Основной блок -->

   <div class="container">
      <div class="content row">

         <!-- Основной контент -->

         <div class="main-content col-md-9 col-12">
            <h2>Статьи с раздела <?=$category['name']; ?></h2>
            <?php foreach ($posts as $post): ?>
            <div class="post row">
               <div class="img col-12 col-md-4">
                  <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title'] ?>" class="img-thumbnail">
               </div>
               <div class="post_text col-12 col-md-8">
                  <h3>
                     <a href="<?= BASE_URL . "single.php?post=" . $post['id']; ?>"><?=substr($post['title'], 0, 120) . '...' ?></a>
                  </h3>
                  <i class="far fa-user"> <?=$post['username'] ?></i>
                  <i class="far fa-calendar"> <?=$post['created_date'] ?></i>
                  <p class="preview-text">
                     <?=substr($post['content'], 0, 150) . '...' ?>
                  </p>
               </div>
            </div>
            <?php endforeach; ?>
         </div>

         <!-- Контент sidebar -->

         <div class="sidebar col-md-3 col-12">
            <div class="section search">
               <h3>Поиск</h3>
               <form action="search.php" method="post">
                  <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово">
               </form>
            </div>
            <div class="section topics">
               <h3>Категории</h3>
               <ul>
                  <?php foreach ($topics as $key => $topic): ?>
                     <li>
                        <a href="<?=BASE_URL . "category.php?id=" . $topic['id'];?>"><?=$topic['name'];?></a>
                     </li>
                  <?php endforeach; ?>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <!-- Окончание основного блока -->

<?php 
include("app/include/footer.php"); 
?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>