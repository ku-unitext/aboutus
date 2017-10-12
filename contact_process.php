<?php
if(!isset($_POST["n"])||!isset($_POST["m"])||!isset($_POST["sub"])||!isset($_POST["explain"])){
	echo json_encode(array("type"=>"warning","text"=>"未記入の項目があります。"));
	exit();
}
$sub=$_POST["sub"];
if($sub!=="s"&&$sub!=="t"&&$sub!=="u"&&$sub!=="r"&&$sub!=="o"){
	echo json_encode(array("type"=>"error","text"=>"不正な入力があります。"));
	exit();
}
//bot or not?
require "../../admin/api/reCAPTCHA.php";
if(getBotOrNot()){
	echo json_encode(array("type"=>"error","text"=>"不正なアクセスです。"));
	exit();
}
//success
require_once "../../admin/mail/mail.php";
$text="お問い合わせフォームからメールが送信されました。\r\n";
$text.="差出人:".$_POST["n"]."\r\n";
$text.="メールアドレス:".$_POST["m"]."\r\n";
$text.="用件:";
if($sub==="s"){
	$text.="サービス全般について\r\n";
}elseif($sub==="t"){
	$text.="トラブル\r\n";
}elseif($sub==="u"){
	$text.="UNITEXTの活動について\r\n";
}elseif($sub==="r"){
	$text.="要望\r\n";
}else{
	$text.="その他\r\n";
}
$text.="内容:".$_POST["explain"];
send_mail("******通知を送るメールアドレス********","お問い合わせの通知",$text);
require "../../admin/api/slack.php";
sendSlack("************ここにチャンネル名************",$text);
echo json_encode(array("type"=>"success","text"=>"お問い合わせが完了しました。"));
exit();
?>