<?php
/*
Googleのrecaptchaを使ってbotかどうかを判定します。botあるいはエラー時はtrue
//html side
<head>タグの中に<script src='https://www.google.com/recaptcha/api.js'></script>を埋め込む
</form>の前に<div class="g-recaptcha" data-callback="clearcall" data-sitekey="6LeOHjQUAAAAAHlfDEp4zBD6lOlIbhc3fd3OFnpG"></div>を埋め込む
post["g-recaptcha-response"]は、
$('#g-recaptcha-response').val()
で取得できる。
// php side
下の関数を呼び出す、
*/
function getBotOrNot(){
	if(!isset($_POST["g-recaptcha-response"])){
		return TRUE;
	}
	$recaptcha = htmlspecialchars($_POST["g-recaptcha-response"],ENT_QUOTES,'UTF-8');
	if(isset($recaptcha)){
		$captcha = $recaptcha;
	}else{
		return TRUE;
	}
	$secretKey = "*****Googleから取得したシークレットトークンを入力。************";
	$resp = @file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}");
	$resp_result = json_decode($resp,true);
	if(intval($resp_result["success"]) !== 1) {
	//認証失敗
		return TRUE;
	}
	return FALSE;
}

?>