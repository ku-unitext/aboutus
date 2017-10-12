<?php
//slackにメッセージを送ります。
//個人へは"%40名前",チャンネルへは"%23チャンネル名"
//例 $to="%40tarou";<-@tarouに送られる
function sendSlack($to,$text){
	$apikey="***********slackで発行したtoken*****************";
	$text=urlencode($text);
	$url="https://slack.com/api/chat.postMessage?token=${apikey}&channel=${to}&username=agent&text=${text}";
	file_get_contents($url);
}

?>