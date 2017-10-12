<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style>
	body{margin:0;}.clearfloat{content:'.';display:block;clear:both;height:0;visibility:hidden;}header{width:100%;height:50px;top:0;background:#000;opacity:0.8;position:fixed;z-index:10;display:none;}#header-homebtn{display:block;float:left;width:100px;height:50px;position:relative;margin-left:30px;}#header-homeimg{height:30px;width:100px;top:0;bottom:0;position:absolute;margin:auto;}#header-menu-swic{width:25px;position:absolute;height:25px;top:0;bottom:0;right:20px;margin:auto;}#header-menu-bx{width:30vw;float:right;clear:both;background:#000;display:none;}.header-menu{line-height:10vh;text-align:center;width:100%;}.header-m-a{display:block;color:#FFF;text-decoration:none;transition:.3s;}.header-m-a:hover{color:#000;background:#FFF;text-decoration:none;}#topimg-ctt{width:100%;height:66vh;background-image:url(img/smallsize5-min.jpg);background-size:100% 100%;background-repeat:no-repeat;position:relative;background-attachment:fixed;}#topsubimg-ctt{width:100%;height:45vh;background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed;position:relative;}#topimg-log{position:absolute;width:15vw;top:10vh;left:15vw;}#topimg-ctcp{position:absolute;top:44vh;left:9vw;z-index:10;width:27vw;}#topsub-txt{position:absolute;top:0;left:15vw;bottom:0;color:#FFF;height:45px;font-size:45px;text-shadow:3px 6px 8px #333;margin:auto;}.dtl-whl{width:100%;padding:6vh 0;}.dtl-whl-bggrey{background-color:#e8ecf8;}.dtl-whl-greyimg{background-size:cover;background-attachment:fixed;color:#FFF;}.dtl-lr-ctt_r{float:right;}.dtl-lr-img{width:80%;display:block;margin:0 auto;}.dtl-imgttl{width:80%;display:block;margin:0 auto;}.dtl-exp{width:100%;display:block;margin:0 auto;}.dtl-lkbtn{display:block;color:#FFF;background-color:#333;border:2px solid #333;transition:all .3s;margin:2vh auto 0;padding:15px 30px;}.dtl-lkbtn:hover{background-color:#fff;color:#59b1eb;transition:all .3s;border-color:#59b1eb;}.dtl-thr{width:90%;display:table;table-layout:fixed;margin:0 auto;}.dtl-thr-img{width:50%;}.dtl-thr-ctt>.dtl-exp{width:80%;}footer{width:100%;padding:30px 0;}.footer_a{color:#b3aeb5;text-decoration:none;padding:5px 0;}.footer_a:hover{color:#848186;}.footer_log{display:block;width:150px;margin:0 auto;}.footer_p{color:#b3aeb5;text-align:center;margin-top:0;}.dtl-lr,.dtl-one-ctt{width:80%;margin:0 auto;}.dtl-h1,.dtl-thr-ctt,.dtl-one-p,.footer-a-c{text-align:center;}@media screen and (min-width:801px){#header-menu-sw{display:none;}#header-menu-bx{width:600px;float:right;clear:none;display:block;}.header-menu{display:table-cell;line-height:50px;text-align:center;width:120px;}.dtl-lr-ctt{float:left;width:50%;}.dtl-thr-ctt{display:table-cell;}}@media screen and (max-width:500px){#topimg-ctt{height:30vh;}#topimg-log{width:30vw;top:2vh;left:8vw;}#topimg-ctcp{top:21vh;left:3vw;z-index:10;width:53vw;}}
	#dtl-bgimg_mem{background-image:url(img/PAK86-min.jpg);}#dtl-bgimg_cmpy{background-image:url(img/office2-min.jpg);}.tbl-ctt-r{display:table;width:100%;border-bottom:1px dotted #CCC;margin:0 auto;padding:10px 0;}footer{background:#f2f2f2;}@media screen and (min-width:501px){.tbl-ctt-r{width:80%;}.dbl-ctt-smry{display:table-cell;width:20%;}.dbl-ctt-ctt{display:table-cell;}}
	</style>
</head>
<?php include "header.php";?>
<div id="topimg-ctt">
	<img id="topimg-log" src="img/UNITEXTshiro.png">
	<img id="topimg-ctcp" src="img/ctv.png">
</div>
<div class="dtl-whl">
	<div class="dtl-lr">
		<div class="dtl-lr-ctt">
			<img class="dtl-lr-img"src="img/service.png">
		</div>
		<div class="dtl-lr-ctt dtl-lr-ctt_rlt">
			<div class=" dtl-lr-ctt_pa">
				<h1 class="dtl-h1">Service</h1>
				<p class="dtl-exp">UNITEXTは、京都大学の学生団体である一般社団法人UNITEXTが運営を行っている京大生のためのフリマサイトです。手渡しによる売買によって、いらない本をより高く、欲しい本をより安く購入することができる場を提供しています。</p>
				<button class="dtl-lkbtn" onClick="location.href='service'">Read more</button>
			</div>
		</div>
		<div class="clearfloat"></div>
	</div>
</div>
<div class="dtl-whl dtl-whl-greyimg" id="dtl-bgimg_mem">
	<div class="dtl-lr">
		<div class="dtl-lr-ctt dtl-lr-ctt_r">
			<img class="dtl-lr-img" src="img/ourteam2.png">
		</div>
		<div class="dtl-lr-ctt dtl-lr-ctt_r dtl-lr-ctt_rlt">
			<div class=" dtl-lr-ctt_pa">
				<h1 class="dtl-h1">Member</h1>
				<p class="dtl-exp">UNITEXTには文系理系を問わず、様々な学部の学生が所属しています。それぞれの学生が大学で培った知識を生かして、UNITEXTの運営を行っています。</p>
				<button class="dtl-lkbtn" onclick="location.href='members'">Read more</button>
			</div>
		</div>

		<div class="clearfloat"></div>
	</div>
</div>
<div class="dtl-whl">
	<div class="dtl-lr">
		<div class="dtl-lr-ctt">
			<img class="dtl-lr-img" src="img/hands.png">
		</div>
		<div class="dtl-lr-ctt dtl-lr-ctt_rlt">
			<div class=" dtl-lr-ctt_pa">
				<h1 class="dtl-h1">Join us!</h1>
				<p class="dtl-exp">UNITEXTは、一緒にサイトの企画・運営をおこなってくれる学生を募集しています。あなたもUNITEXTに参加してベンチャーの世界に踏み出しませんか。</p>
				<button class="dtl-lkbtn" onclick="location.href='joinus'">Read more</button>
			</div>
		</div>
		<div class="clearfloat"></div>
	</div>
</div>
<div class="dtl-whl">
</div>
<div class="dtl-whl dtl-whl-greyimg" id="dtl-bgimg_cmpy">
	<div class="dtl-one-ctt">
		<h1 class="dtl-h1">運営団体</h1>
		<div class="tbl-ctt-r">
			<div class="dbl-ctt-smry">名称</div>
			<div class="dbl-ctt-ctt">一般社団法人ユニテキスト</div>
		</div>
		<div class="tbl-ctt-r">
			<div class="dbl-ctt-smry">活動理念</div>
			<div class="dbl-ctt-ctt">様々な学問を専攻する学生に学生同士または社会との交流の場の提供を通じて、学生の学習しやすい環境を築き、学生の学力及び意識の向上を促し、社会全体の利益の増進に寄与することを目的とする</div>
		</div>
		<div class="tbl-ctt-r">
			<div class="dbl-ctt-smry">設立</div>
			<div class="dbl-ctt-ctt">2015年9月1日(2017年02月15日 法人登記)</div>
		</div>
		<div class="tbl-ctt-r">
			<div class="dbl-ctt-smry">代表理事</div>
			<div class="dbl-ctt-ctt">佐々岡哲哉</div>
		</div>
		<div class="tbl-ctt-r">
			<div class="dbl-ctt-smry">所在地</div>
			<div class="dbl-ctt-ctt">京都市左京区田中東高原町48番地2</div>
		</div>
		<div class="tbl-ctt-r">
			<div class="dbl-ctt-smry">事業内容</div>
			<div class="dbl-ctt-ctt">（１）インターネットを利用した各種情報提供サービス<br>
				（２）イベントの企画、制作及びセミナー、後援会、交流会等の企画、運営<br>
				（３）教科書、一般書籍、学習教材、その他学生の生活に関するものの回収、売買、レンタル及びあっせん業<br>
				（４）会員団体の設立、運営を支援する事業<br>
				（５）前各号の目的を達成するために必要な事業</div>
			</div>
		</div>
	</div>
</div>
<div class="dtl-whl">
	<div class="dtl-one-ctt">
		<h1 class="dtl-h1">お問い合わせ</h1>
		<p class="dtl-one-p">UNITEXTに関するご質問など、お気軽にお問い合わせください。</p>
		<button class="dtl-lkbtn"onclick="location.href='contact'">Contact Us</button>
	</div>
</div>
<?php include "footer.php";?>