<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=”description” content="菊澤拓海のポートフォリオサイトです。転職活動の為、制作物、スキル、簡単なプロフィールを掲載しています。">
	<title>takumikikuzawa's portfoliosite</title>
	<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Noto+Sans+JP&family=Noto+Serif+JP:wght@500&display=swap"
		rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
		integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
	<script type="text/javascript" src="js/raindrops.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>

	<!--　ヘッダー　-->
	<header class="header">

		<figure>
			<img src="images/mainvisual.jpg" alt="メインビジュアル（海の写真）" class="canvas-img">
		</figure>
		<canvas id="sineCanvas"></canvas>

		<p class="header-logo"><a href="index.php">TAKUMI KIKUZAWA</a></p>

		<div class="ham">
			<div class="ham__btn">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav class="ham-nav">
				<div class="ham-nav-list">
					<ul>
						<li><a href="#work">WORK</a></li>
						<li><a href="#skill">SKILL</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div>
			</nav>
			<div class="ham__bg"></div>
		</div>

		<nav>
			<ul class="nav">
				<li class="nav__list"><a href="#work">WORK</a></li>
				<li class="nav__list"><a href="#skill">SKILL</a></li>
				<li class="nav__list"><a href="#about">ABOUT</a></li>
				<li class="nav__list"><a href="#contact">CONTACT</a></li>
			</ul>
		</nav>

		<svg class="mask-main" viewbox="0 0 709.33 63.82" id="move-main">
			<defs>
				<mask id="clipMask-main">
					<path class="cls-5" d="M5.5,11.11s6.1,3.46,24.56,0" />
					<path class="cls-5" d="M16.54,15.23s-9.89,23.41-8.41,30.16" />
					<path class="cls-4" d="M27.12,46.44s6.49-26.21,22.33-34.54-5.18,9.65-1.86,34.54" />
					<path class="cls-4" d="M29.3,29.08s8.38-4.23,20.15,0" />
					<path class="cls-3" d="M73.23,9.69s-6.45,23.04-11.87,34.84" />
					<path class="cls-3" d="M92.98,10.91s-20.3,11.87-19.21,17.91,4.84,15.2,8.38,17.49" />
					<path class="cls-3" d="M107.18,9.08s-19.34,35.52,0,37.18c19.34,1.66,16.56-49.35,17.62-37.62" />
					<path class="cls-5"
						d="M126.6,46.04S147.22-2.6,148.17,10.78s-8.76,44.15-3.24,31.97S168.9-1.02,167,10.78s-6.09,30.73-3.04,35.25" />
					<path class="cls-5" d="M188.61,10.76s-12.18,22.42-10.08,32.71" />
					<path class="cls-3" d="M215.48,10.52s-6.45,23.04-11.87,34.84" />
					<path class="cls-3" d="M235.22,10.24s-20.3,11.87-19.21,17.91,4.84,15.2,8.38,17.49" />
					<path class="cls-5" d="M248.91,11.59s-12.18,22.42-10.08,32.71" />
					<path class="cls-3" d="M263.88,9.69s-6.45,23.04-11.87,34.84" />
					<path class="cls-3" d="M283.62,10.24s-20.3,11.87-19.21,17.91,4.84,15.2,8.38,17.49" />
					<path class="cls-3" d="M297.61,9.61s-19.34,35.52,0,37.18c19.34,1.66,16.56-49.35,17.62-37.62" />
					<path class="cls-5"
						d="M326.43,12.19s27.05-1.6,24.59,.49-46.35,38.23-35.04,35.96,22.99-5.1,26.06-3.75" />
					<path class="cls-4" d="M352.26,46.41s6.49-26.21,22.33-34.54-5.18,9.65-1.86,34.54" />
					<path class="cls-4" d="M354.45,30.18s8.38-4.23,20.15,0" />
					<path class="cls-5"
						d="M395.23,9.13s-4.43,40.87,0,35.65S416.26,.82,414.04,9.13s-4.92,43.51-.37,36.11,17.98-37.75,19.55-36.11" />
					<path class="cls-4" d="M432.01,46.27s6.49-26.21,22.33-34.54-5.18,9.65-1.86,34.54" />
					<path class="cls-4" d="M434.2,29.24s8.38-4.23,20.15,0" />
					<path class="cls-5" d="M476.09,5.5s-1.23,9.22-2.95,10.08" />
					<path class="cls-2"
						d="M514.04,28.31s1.55-4.23,0-4.34-4.23-4.57-5.72-2.34-3.51,9.79-1.35,13.03-3.53,13.5-7.29,12.56-5-1.75-3.51-3.1,.22-8.98,14.96-8.81" />
					<path class="cls-4"
						d="M550.44,20.06s-18.5,41.58-13.91,39.69,3.51-21.42,10.8-27.27,10.93-11.21,12.15-8.85-2.94,19.47-10.64,21.19" />
					<path class="cls-4"
						d="M577.42,23.42s-11.27,6.04-10.92,11.63,.44,10.74,3.64,9.68,14.91-9.14,12.25-19.08" />
					<path class="cls-4"
						d="M594.9,22.23s-9.94,24.43-7.46,21.67,3.55-9.6,7.46-12.88,8.34-8.39,8.17-5.97-1.04,5.93,.62,5.97" />
					<path class="cls-4" d="M609.67,23.32s5.65,1.44,13.53,0" />
					<path class="cls-4"
						d="M621.73,15.54s-13.14,21.92-10.12,25.65,1.84,3.22,4.08,3.78,5.77-1.56,4.7-2.45" />
					<path class="cls-3" d="M627.03,23.93s6.82-1.04,12.63-.32" />
					<path class="cls-5" d="M647.68,10.63s-.36-4.68-4.08-2.73-18.55,39.23-18.02,47.58" />
					<path class="cls-4"
						d="M654.22,24.04s-11.27,6.04-10.92,11.63,.44,10.74,3.64,9.68,14.91-9.14,12.25-19.08" />
					<path class="cls-3" d="M680.79,6.49s-17.76,26.15-15.28,38.15" />
					<path class="cls-3" d="M682.61,26.42s-6.89,8.27-4.96,15.44" />
					<path class="cls-3" d="M688.94,13.2s-2.05,2.38-1.5,4.73" />
					<path class="cls-4"
						d="M699.97,24.04s-11.27,6.04-10.92,11.63,.44,10.74,3.64,9.68,14.91-9.14,12.25-19.08" />
				</mask>
			</defs>
			<image xlink:href="svg/base-main.svg" width="100%" height="100%" mask="url(#clipMask-main)"> </image>
		</svg>
		<hr class="border-anim">

		<svg class="mask-sub" viewbox="0 0 74.67 21.67" id="move-sub">
			<defs>
				<mask id="clipMask-sub">
					<path class="cls-22"
						d="M2.39,3.37S.71,15.23,1.77,14.74,8.96,2.23,8.53,3.37s.09,13.18,.61,11.72S13.99,3.32,15.05,3.29" />
					<path class="cls-33"
						d="M15.94,11.94s4.17-1.74,4.03-2.59,.1-2.51-.8-2.2-4.32,3.21-4.12,4.1,.61,3.35,1.51,3.15,3.37-1,3.24-1.49" />
					<path class="cls-22"
						d="M27.34,1.42s-6.83,12.73-5.24,11.35,4.93-6.78,5.65-6.01-.67,7.44-3.34,7.65" />
					<path class="cls-22" d="M37.29,7.34s-5.87,7.53-2.39,7.4,6.71-9.42,3.06-13.32" />
					<path class="cls-33"
						d="M42.47,11.94s4.17-1.74,4.03-2.59,.1-2.51-.8-2.2-4.32,3.21-4.12,4.1,.61,3.35,1.51,3.15,3.37-1,3.24-1.49" />
					<path class="cls-33"
						d="M52.98,9.22s.62-1.25,.36-1.4-1.18-1.89-1.64-1.12-1.33,1.69-1.18,2.52,.27,3.88-.02,4.25-1.42,2.42-1.93,2.32-1.96-.45-1.39-1.12,1.8-3.74,4.68-2.88" />
					<path class="cls-22" d="M58.24,3.88c.08,.41,.5,.56-.61,1.28" />
					<path class="cls-22" d="M56.37,8.4s-2.83,4.32-1.95,5.4" />
					<path class="cls-22"
						d="M63.96,6.86s-4.67,2.41-4.93,3.87-1.54,3.68-.26,3.16,6.47-5.12,5.19-4.02-4.08,9.36-5.58,9.72-2.12,1.28-3.71,0" />
					<path class="cls-22"
						d="M68.48,7.53s-3.95,7.1-2.72,6.27,8.42-7.66,7.39-5.4-2.88,5.35-2,5.5,1.59,.31,1.8,0" />
				</mask>
			</defs>
			<image xlink:href="svg/base-sub.svg" width="100%" height="100%" mask="url(#clipMask-sub)"> </image>
		</svg>

		<a href="#work">
			<div class="scrolldown"><span>Scroll</span></div>
		</a>

	</header>

	<!--　work　-->
	<section id="work" class="inner">
		<h2 class="work__heading-lv2">
			<div class="fadeout bubble"><span>W</span><span>O</span><span>R</span><span>K</span></div>
		</h2>
		<div class="work__img-inner">
			<figure class="work__img fadeout1">
				<a href="#dayservice" class="modal">
					<img src="images/dayservice-home.png" alt="架空の介護ホームページ" class="work__img--sub">
				</a>
				<figcaption class="work__cap">
					架空の介護HP<br>
					デイサービス
				</figcaption>
			</figure>
			<figure class="work__img fadeout2">
				<a href="#ayurveda" class="modal">
					<img src="images/ayuweda-home.png" alt="架空の個人事業ホームページ" class="work__img--sub">
				</a>
				<figcaption class="work__cap">
					架空の個人事業HP<br>
					AYURVEDA
				</figcaption>
			</figure>
		</div>
		<div class="work__img-inner">
			<figure class="work__img fadeout1">
				<a href="#hairwithcafe" class="modal">
					<img src="images/hairwithcafe-home.png" alt="架空の美容室ホームページ" class="work__img--sub">
				</a>
				<figcaption class="work__cap">
					架空の美容室HP<br>
					Hair with cafe
				</figcaption>
			</figure>
			<figure class="work__img fadeout2">
				<a href="#portfolio" class="modal">
					<img src="images/portfolio-home.png" alt="ポートフォリオサイト" class="work__img--sub">
				</a>
				<figcaption class="work__cap">
					TAKUMI KIKUZAWA's<br>
					Portfolio
				</figcaption>
			</figure>
		</div>

		<div id="dayservice" class="modaal hide-area">
			<h2 class="modaal__heading-lv2">架空の介護HP<br>デイサービス</h2>
			<figure class="modaal__img">
				<img src="images/dayservice.png" alt="架空の介護ホームページのトップページデザインカンプ">
			</figure>
			<p class="modaal__content">
				デイサービスセンターの架空のホームページ。姉が実際にデイサービスセンターの職員として務めているので、利用者の方やそのご家族の方がホームページに何を求めて見られるか、話を参考にしながら作成した。
			</p>
			<div class="modaal__btn">
				<a href="https://takumikikuzawa.sakura.ne.jp/dayservice/" target="_blank" class="btn btn__modaal">サイトリンク</a>
				<a href="https://github.com/takumikikuzawa/dayservice" target="_blank"
					class="btn btn__modaal">ソースコード</a>
			</div>
			<h3 class="modaal__heading-lv3">ターゲット</h3>
			<p class="modaal__text">高齢の利用者の方、そのご家族</p>
			<h3 class="modaal__heading-lv3">制作目的</h3>
			<p class="modaal__text">認知度の向上、利用者の集客</p>
			<h3 class="modaal__heading-lv3">制作期間</h3>
			<p class="modaal__text">1ヶ月（1作目）</p>
			<h3 class="modaal__heading-lv3">デザイン・コーディングについて</h3>
			<p class="modaal__text">
				施設の認知度の向上の為、施設の事が伝わりやすいように業務内容と利用の流れをトップページの始めに配置し、利用者の方がどういう職員に介護をしてもらうのか気になる所だと考え、職員が入った画像をトップページ内に選定。利用者の集客の為、どのページでもスクロールすると予約フォームのリンクがフェードインするように導線を考え、コーディングした。
			</p>
		</div>
		<div id="ayurveda" class="hide-area">
			<h2 class="modaal__heading-lv2">架空の個人事業HP<br>AYURVEDA</h2>
			<figure class="modaal__img">
				<img src="images/ayuveda.png" alt="架空の個人事業ホームページのトップページデザインカンプ">
			</figure>
			<p class="modaal__content">
				インド大陸の伝統医学であるアーユルヴェーダの啓蒙に努める母親の個人事業を参考に作成した架空のホームページ。実際に行っている業務内容や発信したい事柄をヒヤリングし、それをもとに作成した。
			</p>
			<div class="modaal__btn">
				<a href="https://takumikikuzawa.sakura.ne.jp/ayurveda/" target="_blank" class="btn btn__modaal">サイトリンク</a>
				<a href="https://github.com/takumikikuzawa/ayurveda" target="_blank" class="btn btn__modaal">ソースコード</a>
			</div>
			<h3 class="modaal__heading-lv3">ターゲット</h3>
			<p class="modaal__text">30代～50代の女性。</p>
			<h3 class="modaal__heading-lv3">制作目的</h3>
			<p class="modaal__text">業務内容の認知、各種講座の申し込み、記事の発信。</p>
			<h3 class="modaal__heading-lv3">制作期間</h3>
			<p class="modaal__text">3週間。（2作目）</p>
			<h3 class="modaal__heading-lv3">デザイン・コーディングについて</h3>
			<p class="modaal__text">
				アーユルヴェーダを詳しく知らない事を想定して始めに簡単に説明を入れ、30~50代の女性をターゲットにしているので全体的に落ち着いた色合いに。一番伝えたい業務の部分を強調して配色し、内容を簡単に説明したリンクのボタンを配置。問い合わせフォームより講座の申し込みを頂き、コラムのページにて記事を投稿できることを想定して作成。
			</p>
		</div>
		<div id="hairwithcafe" class="hide-area">
			<h2 class="modaal__heading-lv2">架空の美容室HP<br>Hair with cafe</h2>
			<figure class="modaal__img">
				<img src="images/hairwithcafe.png" alt="架空の美容室ホームページのトップページデザインカンプ">
			</figure>
			<p class="modaal__content">
				母親の友人の美容室に通っていたので、その美容室をイメージして作成した。ヘアサロンとカフェの併設やメニュー、料金などは元となる美容室を参考に作成している。
			</p>
			<div class="modaal__btn">
				<a href="https://takumikikuzawa.sakura.ne.jp/hairwithcafe/" target="_blank" class="btn btn__modaal">サイトリンク</a>
				<a href="https://github.com/takumikikuzawa/hairwithcafe" target="_blank"
					class="btn btn__modaal">ソースコード</a>
			</div>
			<h3 class="modaal__heading-lv3">ターゲット</h3>
			<p class="modaal__text">20~40代女性。</p>
			<h3 class="modaal__heading-lv3">制作目的</h3>
			<p class="modaal__text">ホームページを見て直接来店してもらうこと。</p>
			<h3 class="modaal__heading-lv3">制作期間</h3>
			<p class="modaal__text">2週間。（3作目）</p>
			<h3 class="modaal__heading-lv3">デザイン・コーディングについて</h3>
			<p class="modaal__text">
				ヘアサロンとカフェをどちらも利用していただいた方、ヘアサロンでは新規の方および常連の方にも料金サービスができる事を伝えるために画像リンク下に配置。美容室を選ぶ際のホームページのポイントとして店内の雰囲気を伝えることだと考え、店内写真を多めに掲載した。
			</p>
		</div>
		<div id="portfolio" class="hide-area">
			<h2 class="modaal__heading-lv2">TAKUMI KIKUZAWA's<br>portfolio</h2>
			<figure class="modaal__img">
				<img src="images/portfolio.png" alt="ポートフォリオサイトのトップページデザインカンプ">
			</figure>
			<p class="modaal__content">
				自身のポートフォリオサイト。趣味であるサーフィンと自分の名前にも入っている海をイメージし、そのイメージに合ったコンセプトでメインビジュアルの画像の選定、サイト全体のデザインを作成した。転職活動の為、制作物、スキル、簡単なプロフィールを掲載している。
			</p>
			<div class="modaal__btn">
				<a href="https://takumikikuzawa.sakura.ne.jp/portfolio/" target="_blank" class="btn btn__modaal">サイトリンク</a>
				<a href="https://github.com/takumikikuzawa/portfolio" target="_blank" class="btn btn__modaal">ソースコード</a>
			</div>
			<h3 class="modaal__heading-lv3">ターゲット</h3>
			<p class="modaal__text">採用担当者の方。</p>
			<h3 class="modaal__heading-lv3">制作目的</h3>
			<p class="modaal__text">これまでの制作を通して、自分が学んできたデザイン・コーディングの目的やプロセスを伝える。</p>
			<h3 class="modaal__heading-lv3">制作期間</h3>
			<p class="modaal__text">2週間。（4作目）</p>
			<h3 class="modaal__heading-lv3">デザイン・コーディングについて</h3>
			<p class="modaal__text">
				採用担当者の方に向けたホームページのため、極力ページ移動を無くし1ページで全ての情報が得られるようにしている。デザインカンプ通り、どのデバイス、ブラウザで見た時でも表示崩れのないよう意識し、コーダーとして必要であるcss、javascriptを用いた動き、アニメーションを多めに取り入れている。海をコンセプトとしたデザインとして背景をグラデーションにし、波や泡をイメージしたアニメーション、色は白、青系で統一。あしらいとして魚と潜水艦のイラストをcssアニメーションで動かしている。
			</p>
		</div>

	</section>

	<!--　skill　-->
	<section id="skill" class="inner">
		<h2 class="skill__heading-lv2">
			<div class="fadeout bubble"><span>S</span><span>K</span><span>I</span><span>L</span><span>L</span></div>
		</h2>
		<figure class="fish">
			<img src="images/fish.png" alt="魚のイラスト">
		</figure>
		<div class="skill__inner">
			<div class="skill__wrap fadeout6">
				<h3 class="skill__heading-lv3">
					コーディング
				</h3>
				<figure class="skill__img">
					<img src="images/pc.png" alt="パソコンのイラスト">
				</figure>
				<p class="skill__cap">
					HTML,CSSを用いてデザインを忠実に再現できるように努力し、BEM設計を用いてわかりやすいコーディングを意識しています。JavaScriptやjQueryを用いて動きをつけることも可能です。
				</p>
				<p class="skill__sub-cap">HTML,CSS,SASS,<br> JavaScript(jQuery)</p>
			</div>
			<div class="skill__wrap fadeout5">
				<h3 class="skill__heading-lv3">
					レスポンシブ対応
				</h3>
				<figure class="skill__img">
					<img src="images/sp.png" alt="携帯のイラスト">
				</figure>
				<p class="skill__cap">
					Sassのmixinを用いてメディアクエリ管理することによって効率的にレスポンシブ化を進めます。スマートフォンやタブレットの画面サイズでも表示崩れの無いように丁寧に対応させて頂きます。
				</p>
			</div>
			<div class="skill__wrap fadeout4">
				<h3 class="skill__heading-lv3">
					デザインツール
				</h3>
				<figure class="skill__img">
					<img src="images/design.png" alt="パレットのイラスト">
				</figure>
				<p class="skill__cap">
					Adobeソフトを使ったデザインカンプの作成、写真の補正やロゴ作成は学習済みです。画像の書き出しや、各種値の取得などコーディングの実務にて必要な操作方法は一通り理解しています。
				</p>
				<p class="skill__sub-cap">Photoshop,XD,<br>
					illustrator</p>
			</div>
		</div>
	</section>

	<!--　about　-->
	<section id="about" class="inner">
		<h2 class="about__heading-lv2">
			<div class="fadeout bubble"><span>A</span><span>B</span><span>O</span><span>U</span><span>T</span></div>
		</h2>
		<div class="about__inner">
			<figure class="fadeout1">
				<img src="images/profile.jpg" alt="プロフィール画像" class="about__img">
			</figure>
			<div class="about__wrap">
				<p class="about__name fadeout2">TAKUMI KIKUZAWA</p>
				<p class="about__text fadeout2">
					平成9年10月10日生まれ。兵庫県出身。<br>
					サーフィンとスノーボードが好きです。<br>
					前職では建材問屋の営業として2年間勤務しておりました。<br>
					退職後の2022年4月から本格的にwebコーダーを志望して学習を始め、6月からwebデザイン開発課の職業訓練校に通っています。お客さまの目的を達成する為のより良い提案ができるように日々コーディング、デザインのスキルを習得し続けます。
				</p>
			</div>
		</div>
	</section>

	<!--　contact　-->
	<section id="contact" class="inner">
		<h2 class="contact__heading-lv2">
			<div class="fadeout bubble">
				<span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span>
			</div>
		</h2>
		<figure class="submarine">
			<img src="images/submarine.png" alt="潜水艦のイラスト">
		</figure>
		<div class="contact fadeout4">
			<p class="contact__text">
				お忙しい中ポートフォリオサイトをご覧頂きありがとうございます。<br>
				ご連絡は下記をご利用下さい。</p>
			<div class="contact__inner">
				<form class="contact-input" action="complete.php#contact" method="post">
					<label for="name">お名前</label><span class="block">
						<input type="text" id="name" name="name" required></span>
					<label for="email">メールアドレス</label>
					<input type="email" id="email" name="email" required>
					<label for="massage">お問い合わせ内容</label>
					<textarea name="contact" id="massage" rows="5" required></textarea>
					<div class="btn-contact">
						<input type="submit" name="submit" value="送信" class="btn">
					</div>
				</form>
			</div>
		</div>

	</section>

	<!--　フッター　-->
	<footer class=" footer">
		<p class="footer__logo"><a href="index.html">TAKUMI KIKUZAWA</a></p>
		<p class="footer__copyright">Ⓒ2022 Takumi Kikuzaw's portfolio </p>
	</footer>


	<script>
		var stroke;
		stroke = new Vivus('move-main', {
			type: 'scenario-sync',
			duration: 6,
			forceRender: false,
			animTimingFunction: Vivus.EASE,
			start: 'manual',
		});
		$(".mask-main").hide();
		$(".mask-main").fadeIn(0000, function () {
			stroke.play();
		});
	</script>

	<script>
		var stroke2;
		stroke2 = new Vivus('move-sub', {
			type: 'scenario-sync',
			duration: 8,
			forceRender: false,
			animTimingFunction: Vivus.EASE,
			start: 'manual',
		});
		$(".mask-sub").hide();
		$(".mask-sub").fadeIn(4500, function () {
			stroke2.play();
		});
	</script>

	<script>
		(function () {
			var unit = 100,
				canvas, context, canvas2, context2,
				height, width, xAxis, yAxis,
				draw;
			function init() {
				canvas = document.getElementById("sineCanvas");
				canvas.width = document.documentElement.clientWidth;
				canvas.height = 500;
				context = canvas.getContext("2d");
				height = canvas.height;
				width = canvas.width;
				xAxis = Math.floor(height / 2);
				yAxis = 0;
				draw();
			}
			function draw() {
				context.clearRect(0, 0, width, height);
				drawWave('#43c0e4', 0.6, 3, 0);
				drawWave('#1d82b6', 0.4, 2, 350);
				drawWave('#E7E5FF', 1, 1.6, 100);
				draw.seconds = draw.seconds + .01;
				draw.t = draw.seconds * Math.PI;
				setTimeout(draw, 35);
			};
			draw.seconds = 0;
			draw.t = 0;
			function drawWave(color, alpha, zoom, delay) {
				context.fillStyle = color;
				context.globalAlpha = alpha;
				context.beginPath();
				drawSine(draw.t / 0.5, zoom, delay);
				context.lineTo(width + 10, height);
				context.lineTo(0, height);
				context.closePath()
				context.fill();
			}
			function drawSine(t, zoom, delay) {
				var x = t;
				var y = Math.sin(x) / zoom;
				context.moveTo(yAxis, unit * y + xAxis);
				for (i = yAxis; i <= width + 10; i += 10) {
					x = t + (-yAxis + i) / unit / zoom;
					y = Math.sin(x - delay) / 3;
					context.lineTo(i, unit * y + xAxis);
				}
			}
			init();
		})();
	</script>

	<script>
		jQuery('.footer').raindrops({
			color: 'rgb(211, 214, 255,0.6)',
			canvasHeight: 150
		});
	</script>

	<script>
		$(".ham__btn").click(function () {
			$(this).toggleClass('active');
			$(".ham-nav").toggleClass('panelactive');
			$(".ham__bg").toggleClass('circleactive');
		});

		$(".ham-nav a").click(function () {
			$(".ham__btn").removeClass('active');
			$(".ham-nav").removeClass('panelactive');
			$(".ham__bg").removeClass('circleactive');
		});
	</script>

	<script>
		$(".modal").modaal({
			overlay_close: true,
			before_open: function () {
				$('html').css('overflow-y', 'hidden');
			},
			after_close: function () {
				$('html').css('overflow-y', 'scroll');
			}
		});
	</script>

</body>

</html>
