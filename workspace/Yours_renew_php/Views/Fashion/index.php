<?php
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();

$params = $user->index();


//var_dump($params_goal);
//var_dump($params);
 ?>
 <?php
 include 'header.php';
 ?>
 <head>
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 </head>
 <body>
 <div class="post_contents">
   <div class="post_cover">
     <section class="post_user_profeal">
       <a href="page_index.html" class="post_profeal_img">
         <img src="../profeal_img/profeal.JPG">
       </a>
       <div class="post_user_name">
         <p class="tag">@</p>
         <p class="user_name">zonocan</p>
       </div>
       <a href="" id="humberger_menue">
         <img src="../ui_img/humberger.png">
       </a>
     </section>
     <section class="post_item_name">
       <p class="tag_i">#</p>
       <p class="item_name">Denimu</p>
     </section>
     <div id="post_item_image">
       <img src="../item_img/denim.JPG">
     </div>
     <section class="price_functions">
       <div class="post_item_price">
         <p class="tag_p">¥</p>
         <p class="item_price">20,000</p>
       </div>
       <div class="post_ui_btns">
         <a class="post_ui_btn" id="like_btn">
           <img id="like_btn_img">
         </a>
         <ul class="figire" id="like_figire">1</ul>
         <a class="post_ui_btn" id="purchase_brn">
           <img id="purchase_btn_img">
         </a>
         <ul class="figire" id="purchase_figire">1</ul>
         <a href="" class="post_ui_btn">
           <img src="../ui_img/post_DM_btn.png">
         </a>
         <ul class="figire">1</ul>
         <a href="" class="post_ui_btn">
           <img src="../ui_img/post_reply_btn.png">
         </a>
         <ul class="figire">1</ul>
       </div>
     </section>
     <table class="post_detail_cover">
       <td>aaaaaaaaaaaaaaaaaaaa</td>
     </table>
     <button id="display_btn">
       <span id="display_btn_inner">...詳しく読む</span>
     </button>
   </div>
 </div>

 <?php
 include "footer.php";
 ?>
 <script>
   //いいねボタンの実装

   $(function() {

     const like_imgs = ['post_like.png', 'function_like_btn.png'];
     let like_btn_index = 0;

     //初期画像の表示
     $('#like_btn_img').attr('src', '../ui_img/' + like_imgs[like_btn_index]);



     //いいねボタンの画像の切り替え
     $('#like_btn').on('click', function() {

       //最後の画像判定
       if (like_btn_index == like_imgs.length - 1) {
         like_btn_index = 0;
       } else {
         like_btn_index++;
       }

       //画像の切り替え
       $('#like_btn_img').attr('src', '../ui_img/' + like_imgs[like_btn_index]);

       //いいね数の表示.非表示
       $(this).next().slideToggle();
       $(this).toggleClass("active");
     });


   });

   //購入ボタンの実装

   $(function() {

     const purchase_imgs = ['post_purchase_brn.png', 'function_purchase_btn.png'];
     let purchase_btn_index = 0;

     //初期画像の表示
     $('#purchase_btn_img').attr('src', 'ui_img/' + purchase_imgs[purchase_btn_index]);



     //購入ボタンの画像の切り替え
     $('#purchase_brn').on('click', function() {

       //最後の画像判定
       if (purchase_btn_index == purchase_imgs.length - 1) {
         purchase_btn_index = 0;
       } else {
         purchase_btn_index++;
       }

       //画像の切り替え
       $('#purchase_btn_img').attr('src', '../ui_img/' + purchase_imgs[purchase_btn_index]);

       //購入者数の表示.非表示
       $(this).next().slideToggle();
       $(this).toggleClass("active");
     });


   });

   //投稿内容の表示

   $(function() {

     $('#display_btn').on('click', function() {

       $('.post_detail_cover').toggle('fast', alertFunc);

     });

     function alertFunc() {

       if ($(this).css('display') == 'none') {

         $("#display_btn_inner").text("...詳しく読む");

       } else {

         $("#display_btn_inner").text("閉じる ▲");

       }
     };
   });
 </script>

 </body>
 </html>
