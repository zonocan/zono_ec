<!DOCTYPE html>
<!-- saved from url=(0049)http://curriculum.linew.co.jp/index.html#cafe_exp -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Lesson Sample Site</title>
<link rel="stylesheet" type="text/css" href="./Lesson Sample Site_files/style.css">
<link rel="stylesheet" type="text/css" href="./Lesson Sample Site_files/sp.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="app">
    <div class="alert"><a href="http://curriculum.linew.co.jp/index.html#">新型コロナウイルスに対する取り組みの最新情報をご案内</a></div>
    <header>
        <h1 class="concept">あなたの<br>好きな空間を作る。</h1>
        <nav class="motion">
            <div class="logo"><a href="http://curriculum.linew.co.jp/index.html"><img src="./Lesson Sample Site_files/logo.png" alt="Cafe"></a></div>
            <div class="g_nav">
                <div class="menu _click">はじめに</div>
                <div class="menu _click">体験</div>
                <div class="menu"><a href="http://curriculum.linew.co.jp/contact.html">お問い合わせ</a></div>
            </div>
            <div class="sign">
                <!-- <div class='signup'>登録</div> -->
                <div class="signin _click">サインイン</div>
                <div class="sp _click"><img src="./Lesson Sample Site_files/menu.png" alt="スマホメニュー"></div>
                <!--v-if-start--><!--v-if-end-->
            </div>
        </nav>
    </header>
    <open-modal style="display: none;"><div id="overlay">
		<div id="signin_box">
			<h2>ログイン</h2>
			<form action="http://curriculum.linew.co.jp/index.html" method="post">
			<dl>
				<dd><input type="text" name="name" placeholder="メールアドレス"></dd>
				<dd><input type="password" name="pass" placeholder="パスワード"></dd>
				<dd><button type="submit">送　信</button></dd>
			</dl>
			<dl class="sns">
				<dd><button name="twitter"><img src="./Lesson Sample Site_files/twitter.png"></button></dd>
				<dd><button name="facebook"><img src="./Lesson Sample Site_files/fb.png"></button></dd>
				<dd><button name="google"><img src="./Lesson Sample Site_files/google.png"></button></dd>
				<dd><button name="apple"><img src="./Lesson Sample Site_files/apple.png"></button></dd>
			</dl>
			</form>
		</div>
	</div></open-modal><!--v-component-->

    <section>
        <div class="cafe_intro" id="cafe_intro">
            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./Lesson Sample Site_files/cafe1.jpg" alt="東京 カフェ"></div>
                    <div class="access">
                        <p class="area">東京</p>
                        <p class="distance">車で15分</p>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./Lesson Sample Site_files/cafe2.jpg" alt="神奈川 カフェ"></div>
                    <div class="access">
                        <p class="area">神奈川</p>
                        <p class="distance">車で30分</p>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./Lesson Sample Site_files/cafe3.jpg" alt="愛知 カフェ"></div>
                    <div class="access">
                        <p class="area">愛知</p>
                        <p class="distance">車で1時間</p>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./Lesson Sample Site_files/cafe4.jpg" alt="京都 カフェ"></div>
                    <div class="access">
                        <p class="area">京都</p>
                        <p class="distance">車で40分</p>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./Lesson Sample Site_files/cafe5.jpg" alt="岡山 カフェ"></div>
                    <div class="access">
                        <p class="area">岡山</p>
                        <p class="distance">車で1.5時間</p>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./Lesson Sample Site_files/cafe6.jpg" alt="鹿児島 カフェ"></div>
                    <div class="access">
                        <p class="area">鹿児島</p>
                        <p class="distance">車で50分</p>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./Lesson Sample Site_files/cafe7.jpg" alt="沖縄 カフェ"></div>
                    <div class="access">
                        <p class="area">沖縄</p>
                        <p class="distance">車で2時間</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <main>
        <section class="bg_white">
            <h2>好きなロケーションを選ぼう</h2>
            <div class="cafe_local">
                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/intro1.jpg" alt="クラシック"></div>
                        <div class="text">クラシック</div>
                    </div>
                </div>

                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/intro2.jpg" alt="バー"></div>
                        <div class="text">バー</div>
                    </div>
                </div>

                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/intro3.jpg" alt="キャンプs"></div>
                        <div class="text">キャンプ</div>
                    </div>
                </div>

                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/intro4.jpg" alt="リゾート"></div>
                        <div class="text">リゾート</div>
                    </div>
                </div>
            </div>

            <div class="goto">
                <div class="goto_text">
                    <h3>Go To Eats</h3>
                    <p>キャンペーンを利用して、全国で食事しよう。<br>
                    いつもと違う景色に囲まれてカラダもココロもリフレッシュ。
                    </p>
                </div>
                <img src="./Lesson Sample Site_files/goto.jpg" style="width:100%;border-radius:16px;">
            </div>
        </section>

        <section class="bg_black" id="cafe_exp">
            <h2>カフェ作りを体験しよう</h2>
            <p>お店のエキスパートが案内するユニークな体験（直接対面型またはオンライン）。</p>
            <div class="cafe_exp">
                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/exp1.jpg" alt="ジョブ"></div>
                        <div class="text">ジョブ体験</div>
                        <p>カフェカウンターを体験しよう。</p>
                    </div>
                </div>

                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/exp2.jpg" alt="レシピ"></div>
                        <div class="text">レシピ体験</div>
                        <p>美味しいレシピを考えてみよう。</p>
                    </div>
                </div>

                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/exp3.jpg" alt="プロモーション"></div>
                        <div class="text">プロモーション体験</div>
                        <p>お店の宣伝を手伝ってみよう。</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg_white">
            <h2>全国のホストに仲間入りしよう</h2>
            <div class="cafe_host">
                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/host1.jpg" alt="ビジネス"></div>
                        <div class="text">ビジネス</div>
                    </div>
                </div>

                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/host2.jpg" alt="コミュニティ"></div>
                        <div class="text">コミュニティ</div>
                    </div>
                </div>

                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./Lesson Sample Site_files/host3.jpg" alt="食べ歩き"></div>
                        <div class="text">食べ歩き</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="outer">
            <div class="nav_area">
                <div class="inner">
                    <h2>企業情報</h2>
                    <ul>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">ご利用方法</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">ニュースルーム</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">株主・投資家のみなさまへ</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">採用情報</a></li>
                    </ul>
                </div>
                <div class="inner">
                    <h2>コミュニティ</h2>
                    <ul>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">ダイバーシティ</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">アクセシビリティ対応</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">お友達を招待</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">XXXXXXXXXXXXXXX</a></li>
                    </ul>
                </div>
                <div class="inner">
                    <h2>ホスト</h2>
                    <ul>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">XXXXXXXXXXXXXXX</a></li>
                    </ul>
                </div>
                <div class="inner">
                    <h2>サポート</h2>
                    <ul>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">新型コロナウイルスに対する取り組み</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">ヘルプセンター</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">キャンセルオプション</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">コミュニティサポート</a></li>
                        <li><a href="http://curriculum.linew.co.jp/index.html#">信頼＆安全</a></li>
                    </ul>
                </div>
            </div>

            <div class="reserved">
                <p>このサイトの素材は全て著作権フリーのものを使用しています。</p>
                <div class="menu">
                    <span class="_click">プライバシーポリシー</span>
                    <span class="_click">利用規約</span>
                    <span class="_click">サイトマップ</span>
                    <span class="_click">企業情報</span>
                </div>
                <p>© 2021- LiNew, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!--v-if-start--><div class="jump">Jump To Top</div><!--v-if-end-->

    <script src="./Lesson Sample Site_files/vue.min.js.ダウンロード"></script>
    <script type="text/javascript" src="./Lesson Sample Site_files/script.js.ダウンロード"></script>
    <script type="text/javascript" src="./Lesson Sample Site_files/jquery-3.5.1.min.js.ダウンロード"></script>

</body></html>
