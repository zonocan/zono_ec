<?php
include 'header.php';
?>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <script>
  document.addEventListener('DOMContentLoaded', (event) => {
    let element = $('.main_nav');
    let hum = $('.hum');
    let nav = $('#nav');
    element.addClass('move_main_nav');
    hum.addClass('hum_fix');
    nav.addClass('nav_menu');
});

  $(function(){
    var pagetop = $('.movetop');
    var hum = $('.hum');
    var hum_fix="hum_fix";
    var delite = 'delite';
    var main_nav = $('.main_nav');
    var move_main = 'move_main_nav';
    var fix_main_nav ='fix_main_nav';
    var nav_menu = $('#nav');
    var nav_menu_position = 'nav_menu';
    // ボタン非表示
    pagetop.hide();

    // 100px スクロールしたらボタン表示
    $(window).scroll(function () {
       if ($(this).scrollTop() > 50) {
         pagetop.fadeIn();
         main_nav.removeClass(move_main);
         main_nav.addClass(fix_main_nav);
         hum.removeClass(hum_fix);
         nav_menu.removeClass(nav_menu_position);
       } else {
         pagetop.fadeOut();
         main_nav.removeClass(fix_main_nav);
         main_nav.addClass(move_main);
         hum.addClass(hum_fix);
         nav_menu.addClass(nav_menu_position);
       }
     });
      pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
      return false;
    });
  });
  </script>


<main>
  <div class="announce">
    <a href = "#">新型コロナウイルスに対する取り組みの最新情報をご案内</a>
</div>
  <div class='background'>
    <img src ="cafe/img/eyecatch.jpg">
    <p>あなたの<br>好きな空間を作る</p>
  </div>
  <section class ="first_section">
    <div class= "access">
      <div class ="access_photo">
        <img src = "cafe/img/cafe1.jpg">
        <p>東京<br>車で15分</p>
      </div>
      <div class ="access_photo">
        <img src = "cafe/img/cafe2.jpg">
        <p>神奈川<br>車で30分</p>
      </div>
      <div class ="access_photo">
        <img src = "cafe/img/cafe3.jpg">
        <p>愛知<br>車で1時間</p>
      </div>
      <div class ="access_photo">
        <img src = "cafe/img/cafe4.jpg">
        <p>京都<br>車で40分</p>
      </div>
      <div class ="access_photo">
        <img src = "cafe/img/cafe5.jpg">
        <p>岡山<br>車で1.5時間</p>
      </div>
      <div class ="access_photo">
        <img src = "cafe/img/cafe6.jpg">
        <p>鹿児島<br>車で50分</p>
      </div>
      <div class ="access_photo">
        <img src = "cafe/img/cafe7.jpg">
        <p>沖縄<br>車で2時間</p>
      </div>
    </div>

    <p id = "section_title">好きなロケーションを選ぼう</p>
    <div class="location_class">
    <div class ="location">
      <img src = "cafe/img/intro1.jpg">
      <p>クラシック</p>
    </div>
    <div class ="location">
      <img src = "cafe/img/intro2.jpg">
      <p>バー</p>
    </div>
    <div class ="location">
      <img src = "cafe/img/intro3.jpg">
      <p>キャンプ</p>
    </div>
    <div class ="location">
      <img src = "cafe/img/intro4.jpg">
      <p>リゾート</p>
    </div>
  </div>

    <div class="goto">
      <div class ="white_box">
      <h1>Go To Eats</h1>
      <p>キャンペーンを利用して、全国で食事しよう。<br>いつもと違う景色に囲まれてカラダもココロもリフレッシュ。</p>
      </div>
      <img src ="cafe/img/goto.jpg">
    </div>
  </section>

  <section>
    <div class = "make_cafe">
      <div class ="make_cafe_title">
      <h1>カフェ作りを体験しよう</h1>
      <p>お店のエキスパートが案内するユニークな体験(直接対面型またはオンライン)。</p>
    </div>
      <div class="exp_title">
      <div class ="exp">
        <img src ="cafe/img/exp1.jpg">
        <h1>ジョブ体験</h1>
        <p>カフェカウンターを体験しよう。</p>
      </div>
      <div class ="exp">
        <img src ="cafe/img/exp2.jpg">
        <h1>レシピ体験</h1>
        <p>美味しいレシピを考えてみよう。</p>
      </div>
      <div class ="exp">
        <img src = "cafe/img/exp3.jpg">
        <h1>プロモーション体験</h1>
        <p>お店の宣伝を手伝ってみよう。</p>
      </div>
    </div>
    </div>
  </section>

  <section class = "host_block">
    <p id ="section_title">全国のホストに仲間入りしよう</p>
    <div class ="hosts">
    <div class = "host">
      <img src = "cafe/img/host1.jpg">
      <p>ビジネス</p>
    </div>
    <div class ="host">
      <img src ="cafe/img/host2.jpg">
      <p>コミュニティ</p>
    </div>
    <div class ="host">
      <img src ="cafe/img/host3.jpg">
      <p>食べ歩き</p>
    </div>
  </div>
  </section>

<?php
include "footer.php";
?>

<div class = "movetop">
  <a href="#">Jump To Top</a>
</div>
</body>
</html>
