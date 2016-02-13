<?PHP
error_reporting(E_ERROR|E_WARNING);
define ("adsterraBAK", "http://maxcorpmedia.com/codes/cpmterra.html");
define ("adsterraBAK", "http://www.highcpms.com/ads?key=182c68f6bda9bf518f6f5d1bb8bccc44");
define ("matomyBAK", "http://s.rev2pub.com/player.html?a=12589115&context=c27541042&size=300x250&rt=popunder&ci=10");
define ("bit2", "//ads.bcsyndication.com/get.php?s=1694");
define ("bit3", "///adbit.co/adspace.php?a=JTW024MW0C42Q");
//--------In usage --------//
define ("avazu", "<SCRIPT SRC=\"http://rtb-ads.avazu.net/ttj?id=4184172&size=300x250\" TYPE=\"text/javascript\"></SCRIPT>");
define ("matomyp300", "http://creative.xtendmedia.com/matomy/popurl.html?a=12589115&msize=480x320&mc=c27541042&size=300x250&c=c27541042&context=0");
define ("adsterra", "http://premierleaguehd.com/adsterra.html");
define ("adsterraDIR", "http://maxcorpmedia.info/codes/adsterra.html");
define ("adc", "http://premierleaguehd.com/adc.html");
define ("bit", "//ad.a-ads.com/44720?size=300x250");
define ("bit728", "http://maetech.co/ads.html");
define ("matomy", "http://maxcorpmedia.com/codes/mato.html");
define ("adorika", "http://maxcorpmedia.info/codes/ado.html");
define ("wigetmedia", "http://popup.maxcorpmedia.com/?placement=400568&redirect&cookie=1&fz=20");
define ("wig", "http://maxcorpmedia.info/codes/wig.html");
define ("adsrev", "http://ads.adsrevenue.com/cpxcenter/dpop.php?nid=1521&pid=45937&sid=52194&zone=69878&durl=&subid=&opt1=&opt2="); 
define ("amung", "http://maxcorpmedia.com/codes/amungp.php?c=".$_SERVER['HTTP_CF_IPCOUNTRY']."&section=".$_GET['section']."");
define ("adamoads", "http://ads.adamoads.com/redirectads.php?id=2247");
define ("amon300", "http://cdn.displayincloud.com/displayincloud/tags/xdirect/xdirect.html?p=51441195&serverdomain=displayincloud&size=300x250&cb=[CACHEBUSTER]&ct=html&ap=1305");
define ("wafra", "//creative.ad131m.com/ad131m/scripts/direct/direct.html?a=52622198&serverdomain=s.ad131m.com&context=c53521088&size=800x600&rt=popunder&ci=10");
define ("wafra300", "http://waframedia.com/banner/26250");
define ("yep", "http://cdn.adservhere.com/yepdigital/scripts/direct/direct.html?a=55252460&serverdomain=ads.adservhere.com&context=&size=800x440&rt=popunder&ci=10&cb=[CACHEBUSTER]");
//-------------Retrieve variables----------//
define ("section", $_GET['section']);
define ("pais", $_SERVER['HTTP_CF_IPCOUNTRY']);
define ("ip", $_SERVER['HTTP_CF_CONNECTING_IP']);
$st = plug;
$frame = base64_encode($st);
//----------------counts ips//
//fopen("../counter/".ip.".txt", "w+");
/*fwrite($fp, pais);
fclose($fp);*/
//----------------counts ips//  
$value = ip;
$fecha = "mxc_4";
$expire=time()+60*60*24;
//------------------------------------------------------------------------------------------//
function frame($width,$height,$src) {
echo "<iframe width='".$width."' height='".$height."' src='".$src."' frameborder='0' scrolling='no' sandbox='allow-scripts'></iframe>\n";
}
if(isset($_SERVER['HTTP_USER_AGENT'])){
$agent = $_SERVER['HTTP_USER_AGENT'];
}
if(strlen(strstr($agent,"Firefox")) > 0 ){ 
$browser=='firefox';
}
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>ADS - ".$_SERVER['HTTP_CF_IPCOUNTRY']."</title>
<!--<SCRIPT SRC=\"http://creative.xtendmedia.com/matomy/cf/ply/ply.js?pubid=12589115&mid=c41911002&wid=c12686076&popup=1&popunder=1&size=320x480&pop_times=1&pop_frequency=3600&mm_delay=0&mm_back_delay=300&numOfTimes=2&duration=1&period=24hour&close=1\" TYPE=\"text/javascript\"></SCRIPT>
--></head>
<body onload=\"loadFrame()\">\n";
if ($_COOKIE[$fecha]==false) { 
echo "<script>
window.open('http://popup.maxcorpmedia.com/?placement=400508&redirect&cookie=1&fz=20');
</script>
";
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


}
echo "</div>\n";
if (pais!=="XX"){
echo "<div style='display:none' >\n";
if ($browser=='firefox') {
frame (300,250,amung);
/*frame (300,250,matomy);
frame (300,250,matomy);*/
/*frame (300,250,adorika);
frame (300,250,adorika);*/
frame (300,250,adsterra);
//frame (300,250,adsterraDIR);
/*frame (300,250,adsrev);
frame (300,250,adsrev);*/
frame (300,250,bit);
frame (300,250,bit728);
//frame (300,250,wafra);
frame (300,250,wigetmedia);
if ($_COOKIE[$fecha]==false) { 
}
}
//----EL RESTO ES CHROME---//
else {
frame (300,250,amung);
/*frame (300,250,adc);
frame (300,250,adc);
frame (300,250,adc);
frame (300,250,adc);
frame (300,250,adc);
frame (300,250,adc);*/
/*frame (300,250,matomy);
frame (300,250,matomy);*/
//frame (300,250,adsterraDIR);
frame (300,250,adsterra);
//frame (300,250,yep);
/*frame (300,250,adsrev);
frame (300,250,adsrev);
frame (300,250,adsrev);*/
frame (300,250,bit);
frame (300,250,bit728);
//frame (300,250,wafra);
frame (300,250,wigetmedia);
frame (300,250,wigetmedia);
frame (300,250,wigetmedia);
if ($_COOKIE[$fecha]==false) { 
//frame (300,250,adorika);
//frame (300,250,wigetmedia);
//frame (300,250,wig);
frame (300,250,adsrev);
}
}
echo "</div>\n";
}
echo "<div style='position:absolute; top:320px; left:0px; z-index:1'  >\n";
//echo nplex;
echo "</div>\n";
echo "</body>
</html>\n";
