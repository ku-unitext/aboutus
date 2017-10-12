<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style>
	body{margin:0;}.clearfloat{content:'.';display:block;clear:both;height:0;visibility:hidden;}header{width:100%;height:50px;top:0;background:#000;opacity:0.8;position:fixed;z-index:10;display:none;}#header-homebtn{display:block;float:left;width:100px;height:50px;position:relative;margin-left:30px;}#header-homeimg{height:30px;width:100px;top:0;bottom:0;position:absolute;margin:auto;}#header-menu-swic{width:25px;position:absolute;height:25px;top:0;bottom:0;right:20px;margin:auto;}#header-menu-bx{width:30vw;float:right;clear:both;background:#000;display:none;}.header-menu{line-height:10vh;text-align:center;width:100%;}.header-m-a{display:block;color:#FFF;text-decoration:none;transition:.3s;}.header-m-a:hover{color:#000;background:#FFF;text-decoration:none;}#topimg-ctt{width:100%;height:66vh;background-image:url(img/smallsize5-min.jpg);background-size:100% 100%;background-repeat:no-repeat;position:relative;background-attachment:fixed;}#topsubimg-ctt{width:100%;height:45vh;background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed;position:relative;}#topimg-log{position:absolute;width:15vw;top:10vh;left:15vw;}#topimg-ctcp{position:absolute;top:44vh;left:9vw;z-index:10;width:27vw;}#topsub-txt{position:absolute;top:0;left:15vw;bottom:0;color:#FFF;height:45px;font-size:45px;text-shadow:3px 6px 8px #333;margin:auto;}.dtl-whl{width:100%;padding:6vh 0;}.dtl-whl-bggrey{background-color:#e8ecf8;}.dtl-whl-greyimg{background-size:cover;background-attachment:fixed;color:#FFF;}.dtl-lr-ctt_r{float:right;}.dtl-lr-img{width:80%;display:block;margin:0 auto;}.dtl-imgttl{width:80%;display:block;margin:0 auto;}.dtl-exp{width:100%;display:block;margin:0 auto;}.dtl-lkbtn{display:block;color:#FFF;background-color:#333;border:2px solid #333;transition:all .3s;margin:2vh auto 0;padding:15px 30px;}.dtl-lkbtn:hover{background-color:#fff;color:#59b1eb;transition:all .3s;border-color:#59b1eb;}.dtl-thr{width:90%;display:table;table-layout:fixed;margin:0 auto;}.dtl-thr-img{width:50%;}.dtl-thr-ctt>.dtl-exp{width:80%;}footer{width:100%;padding:30px 0;}.footer_a{color:#b3aeb5;text-decoration:none;padding:5px 0;}.footer_a:hover{color:#848186;}.footer_log{display:block;width:150px;margin:0 auto;}.footer_p{color:#b3aeb5;text-align:center;margin-top:0;}.dtl-lr,.dtl-one-ctt{width:80%;margin:0 auto;}.dtl-h1,.dtl-thr-ctt,.dtl-one-p,.footer-a-c{text-align:center;}@media screen and (min-width:801px){#header-menu-sw{display:none;}#header-menu-bx{width:600px;float:right;clear:none;display:block;}.header-menu{display:table-cell;line-height:50px;text-align:center;width:120px;}.dtl-lr-ctt{float:left;width:50%;}.dtl-thr-ctt{display:table-cell;}}@media screen and (max-width:500px){#topimg-ctt{height:30vh;}#topimg-log{width:30vw;top:2vh;left:8vw;}#topimg-ctcp{top:21vh;left:3vw;z-index:10;width:53vw;}}
	@media screen and (max-width:550px){div#content{padding-top:9vh;}}div#form-content{width:80vw;background-color:#FFF;margin:5vh auto;padding:5%;}.form-item{margin-top:4vh;margin-bottom:4vh;width:90%;}.form-cat{clear:left;border-bottom:1px solid grey;width:90%;margin-top:40px;margin-bottom:40px;}label.item-label{clear:left;float:left;width:80%;}.form-item-ip,.form-item-ta{width:100%;height:30px;background:#fafafa;box-shadow:inset 0 1px 1px rgba(0,0,0,0.1);border:1px solid #ddd;color:#888;}.form-item-ta{height:140px;resize:none;}img.preview{clear:left;width:auto;height:200px;}#whole-overwrap{position:fixed;width:100vw;height:100vh;background-color:#000;opacity:0.8;top:0;left:0;z-index:2;}#wrap-content{position:fixed;background-color:#FFF;z-index:3;width:70vw;height:50vh;top:20vh;left:15vw;}#modal-pic{max-width:100%;width:40vw;height:40vh;}#whole-close{float:right;font-size:25px;}.form-sbmbtn{background:#000;opacity:0.9;color:#FFF;border:#000 2px solid;transition:.3s;font-size:px;border-radius:15px;padding:15px 30px;}.form-sbmbtn:hover{background:#FFF;color:#000;}@media screen and (min-width:551px){div#form-content{margin-top:50px;margin-bottom:50px;width:65%;padding:5%;}.form-item{margin-top:20px;margin-bottom:20px;}label.item-label{width:35%;}.form-item-t,textarea{width:50%;}}@media screen and (max-width:900px){.form-item-ip,.form-item-ta{width:80%;float:left;clear:left;}input[type="file"]{clear:left;}label.item-label{width:70%;}}
	body{background-color:#f5f5f5;margin:0;}header{display:block;}#form-content{margin-top:80px;}
	</style>
</head>
<?php include "header.php";?>
<div id="form-content">
	<h1>お問い合わせ</h1>
	<div class="form-content">
		<form id="contact-form" action="contact_process.php" method="post">
			<div class="form-item">
				<label class="item-label">お名前</label>
				<input class="form-item-ip"type="text" name="n"  onfocus="viewport_cor();" required>
				<div class="clearfloat"></div>
			</div>
			<div class="form-item">
				<label class="item-label">メールアドレス</label>
				<input class="form-item-ip"type="email" name="m"  onfocus="viewport_cor();" required>
				<div class="clearfloat"></div>
			</div>
			<div class="form-cat">お問い合わせ内容</div>
			<div class="form-item form-item-explain">
				<label class="item-label">ご用件</label>
				<select class="form-item-ip"name="sub" required>	
					<option	value="s">サービス全般に関するお問い合わせ。</option>		
					<option value="t">トラブルに関するお問い合わせ。</option>
					<option value="u">UNITEXTの活動に関するお問い合わせ</option>
					<option value="r">ご要望</option>
					<option value="o">その他</option>
				</select>
				<div class="clearfloat"></div>
			</div>
			<div class="form-item form-item-explain">
				<label class="item-label">お問い合わせ内容</label>
				<textarea class="form-item-ta"name="explain" maxlength="1000" rows="10"  onfocus="viewport_cor();" required></textarea>
				<div class="clearfloat"></div>
			</div>
			<div class="g-recaptcha" data-callback="clearcall" data-sitekey="6LeOHjQUAAAAAHlfDEp4zBD6lOlIbhc3fd3OFnpG"></div>
			<button id="contact-btn" class="form-sbmbtn">送信</button>
		</form>
	</div>
</div>
<?php $header_show=1;include "footer.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.min.js"></script>
<script type="text/javascript">
function clearcall(e){""!==e&&$("#contact-btn").removeAttr("disabled")}var cb=function(){var e=document.createElement("link");e.rel="stylesheet",e.href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.min.css";var t=document.getElementsByTagName("head")[0];t.parentNode.insertBefore(e,t)},raf=requestAnimationFrame||mozRequestAnimationFrame||webkitRequestAnimationFrame||msRequestAnimationFrame;raf?raf(cb):window.addEventListener("load",cb),jQuery(function(e){e("#contact-form").on("submit",function(){swal({title:"処理中...",showConfirmButton:!1,allowOutsideClick:!1,onOpen:function(){swal.showLoading()}}),e("#contact-btn").prop("disabled",!0);var t=e("#contact-form").serializeArray();return e.ajax({url:"contact_process.php",type:"POST",data:{n:t[0].value,m:t[1].value,sub:t[2].value,explain:t[3].value,'g-recaptcha-response':e('#g-recaptcha-response').val()},dataType:"json"}).then(function(t){e("#contact-form")[0].reset(),swal(t),e("#contact-btn").prop("disabled",!1)},function(){swal({type:"error",text:"通信に失敗しました。"}),e("#contact-btn").prop("disabled",!1)}),!1})});
</script>