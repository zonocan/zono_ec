<?php
require_once(ROOT_PATH . 'Controllers/UsersController.php');
$user = new UsersController();
$users_id = $user->Get_reviw();


//var_dump($params_goal);
//var_dump($params);
 ?>

<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>オブジェクト指向 - 選手一覧</title>
  <link rel="stylesheet" type="text/css" href="../css/order.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

<body>
 <div id="post_cover">
   <div id="post_inner">
     <div id="will_post_photo">
       <img src="../upload/<?= $users_id['review_photo'] ?>">
     </div>
     <div id="will_post_contents">
       <div class="contributer_info">
         <label>
           <supan class="page_btn">
             <a href="my_page.php">
               <div class="contributer_photo">
                 <img src="../profeal/<?=$users_id['profeal_photo'] ?>">
               </div>
             </a>
           </supan>
           <input type="button" name="post_img" id="go_to_page">
         </label>
         <h1 class="user_name"><?= $users_id['user_name'] ?></h1>
       </div>
        <div id="comment_cover">
          <div class="contribute" rows="20"></div>
        </div>
     </div>
   </div>
 </div>
  <div class="button"><button onclick="location.href='./order_complete.php'">購　入</button></div>
    <div class="button"><button>戻 る</button></div>
</body>
