<?PHP
error_reporting(E_ERROR|E_WARNING);
define ("counti", "http://maxcorpmedia.com/count3/count.php");
define ("bit", "//ad.a-ads.com/44720?size=300x250");
define ("bit728", "http://maetech.co/ads.html");
define ("wafra", "http://cdn.wafmedia2.com/wafra/tags/xdirect/xdirect.html?p=61741549&serverdomain=wafra&ct=html&ap=1303");
define ("mediahub", "http://www.xl415.com/apu.php?n=&zoneid=11497&cb=INSERT_RANDOM_NUMBER_HERE&popunder=1&direct=1");
define ("matomy", "//t.mdn2015x3.com/build/77c5bc/v1/script/");
define ("wigetmedia", "http://popup.maxcorpmedia.com/?placement=400507&redirect&cookie=1&fz=20");
define ("wig", "http://maxcorpmedia.info/codes/wig.html");
define ("nuevowig","http://popup.maxcorpmedia.com/?placement=400919&redirect&cookie=1&fz=20");
define ("yepdigital", "http://cdn.adservhere.com/yepdigital/tags/xdirect/xdirect.html?p=70157756&serverdomain=yepdigital&ct=html&ap=1304");
define ("yepdigital2", "http://cdn.adservhere.com/yepdigital/scripts/direct/direct.html?a=62761169&ci=17&serverdomain=ads.adservhere.com&context=c61693193&size=0x0&rt=lp");
define ("amung", "http://maetech.co/amung.php?c=".$_SERVER['HTTP_CF_IPCOUNTRY']."&section=".$_GET['section']."");
define ("section", $_GET['section']);
define ("pais", $_SERVER['HTTP_CF_IPCOUNTRY']);
define ("ip", $_SERVER['HTTP_CF_CONNECTING_IP']);
$value = ip;
$fecha = "mxc_2";
$expire=time()+60*60*24;
//------------------------------------------------------------------------------------------//
function frame($width,$height,$src) {
print "<iframe width='".$width."' height='".$height."' src='".$src."' frameborder='0' scrolling='no' sandbox='allow-scripts'></iframe>\n";
}
if(isset($_SERVER['HTTP_USER_AGENT'])){
   $agent = $_SERVER['HTTP_USER_AGENT'];
}
if(strlen(strstr($agent,"Firefox")) > 0 ){ 
   $browser = 'firefox';
}
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>ADS - ".$_SERVER['HTTP_CF_IPCOUNTRY']."</title>
</head>
<body>\n";

if ($_COOKIE[$fecha]==false) {
		echo "<script>
		window.open('http://popup.maxcorpmedia.com/?placement=400919&redirect&cookie=1&fz=20');
              </script>";
	    setcookie($fecha,$value,$expire);
}
echo "<div style='position:absolute; top:0px; left:0px; z-index:1'  >\n";
if (section==728){
	echo etoro728;
}
else if (section==160){
	echo etoro160;
}
else {
//echo adsterra300;
}
echo "</div>\n";
if (pais!=="XX"){
echo "<div style='display:none' >\n";
if ($browser=='firefox') {
//frame (300,250,counti);
frame (300,250,amung);
frame (300,250,wafra);
frame (300,250,wafra);
frame (300,250,wafra);
frame (300,250,mediahub);
frame (300,250,mediahub);
frame (300,250,bit);
frame (300,250,bit728);
frame (300,250,nuevowig);
frame (300,250,nuevowig);
frame (300,250,nuevowig);
frame (300,250,yepdigital);
frame (300,250,yepdigital);
frame (300,250,matomy);
frame (300,250,matomy);
frame (300,250,matomy);
if (pais=="US") {
frame (300,250,yepdigital2);
frame (300,250,yepdigital2);
}
}
//----EL RESTO ES CHROME---//
else {
//frame (300,250,counti);
frame (300,250,amung);
frame (300,250,wafra);
frame (300,250,wafra);
frame (300,250,wafra);
frame (300,250,mediahub);
frame (300,250,mediahub);
frame (300,250,bit);
frame (300,250,bit728);
frame (300,250,nuevowig);
frame (300,250,nuevowig);
frame (300,250,nuevowig);
frame (300,250,yepdigital);
frame (300,250,yepdigital);
frame (300,250,matomy);
frame (300,250,matomy);
frame (300,250,matomy);
if (pais=="US") {
frame (300,250,yepdigital2);
frame (300,250,yepdigital2);
}
if ($_COOKIE[$fecha]==false) {
//frame (300,250,adcash);
//frame (300,250,newwig);
//frame (300,250,adorika);
}
}
echo "</div>\n";
}
echo "</body>
</html>\n";
?>