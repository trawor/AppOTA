<?php
if(!isset($_REQUEST['app'])){die("http://weibo.com/trawor");}

//get app info
$file=dirname(__FILE__) . "/apps/{$_REQUEST['app']}/info.json";
$info=json_decode(file_get_contents($file),true);

$name=$info['name'];
$version=$info['version'];
$appID=$info['id'];

$icon=$info['icon'];
if(is_null($icon))$icon='icon.png';

$ipa=$info['ipa'];
if(is_null($ipa))$icon='app.ipa';



$urlPrefix='http://'.$_SERVER['HTTP_HOST'].'/apps/'.$_REQUEST['app'].'/';
$ipaURL=$urlPrefix.$ipa;
$imgURL=$urlPrefix.$icon;

$infoURL=urlencode("http://{$_SERVER['HTTP_HOST']}/plist.php?app={$_REQUEST['app']}");
?>