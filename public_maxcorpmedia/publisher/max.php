<?PHP
error_reporting(E_ERROR|E_WARNING);
define ("matomy300", "<SCRIPT SRC='http://ib.adnxs.com/ttj?id=2647341' TYPE='text/javascript'></SCRIPT>");
define ("adsterra", "http://maxcorpmedia.com/codes/cpmterra.html");
define ("adc", "http://www.maetech.co/codes/adc.html");
define ("adnubo", "<SCRIPT SRC=\"http://ib.adnxs.com/ttj?id=3272064&size=300x250&cb=${CACHEBUSTER}&referrer=${REFERER_URL}&pubclick=${CLICK_URL}\" TYPE=\"text/javascript\"></SCRIPT>");
define ("matomy", "http://maetech.co/codes/mato.html");
define ("matomyp300", "http://creative.rev2pub.com/matomy/scripts/direct/direct.html?a=12589115&serverdomain=s.rev2pub.com&context=c41891003&size=300x250&rt=popunder&ci=10");
define ("rev", "http://clkrev.com/adServe/banners?tid=DINODL&action=r");
define ("adorika", "http://maetech.co/codes/ado.html");
define ("adsrev", "http://ads.adsrevenue.com/cpxcenter/dpop.php?nid=1521&pid=52372&sid=54219&zone=72380&durl=&subid=&opt1=&opt2=");
define ("adsrev24", "http://maxcorpmedia.com/codes/adsrev.html");
define ("wiget", "http://www.maxcorpmedia.com/codes/wig.html");
define ("plug", "");
define ("cpx", "<script type=text/javascript>
username=\"mdiaz00147\"
</script>
<script type=text/javascript src=\"http://adspserving.com/ads.js\"></script>\n");
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
		echo "<!--<script>
		window.open('http://www.maxcorpmedia.com/codes/ado.html');
              </script>-->";
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
frame (300,250,matomyp300);	
frame (300,250,matomyp300);	
echo adnubo;
echo adnubo;
echo matomy300;
echo matomy300;

}
echo "</div>\n";
if (pais!=="IN"){
echo "<div style='display:none' >\n";
if ($browser=='firefox') {
frame (300,250,amung);
frame (300,250,matomy);
frame (300,250,adorika);
frame (300,250,adorika);
frame (300,250,adorika);
frame (300,250,adorika);
frame (300,250,adorika);
frame (300,250,adsterra);
frame (300,250,adsterra);
frame (300,250,adsterra);
frame (300,250,adsterra);
frame (300,250,adsterra);
//frame (300,250,wiget);
frame (300,250,plug);
frame (300,250,plug);
frame (300,250,plug);
frame (300,250,plug);
frame (300,250,plug);
frame (300,250,adsrev);
frame (300,250,adsrev);
frame (300,250,adsrev);
frame (300,250,adsrev);
frame (300,250,adsrev);
frame (300,250,rev);
}
//----EL RESTO ES CHROME---//
else {
frame (300,250,amung);
frame (300,250,matomy);
frame (300,250,adc);
frame (300,250,adc);
frame (300,250,adc);
frame (300,250,adc);
frame (300,250,adc);
frame (300,250,adc);
frame (300,250,adorika);
frame (300,250,adorika);
frame (300,250,adorika);
frame (300,250,adorika);
frame (300,250,adorika);
frame (300,250,adsterra);
frame (300,250,adsterra);
frame (300,250,adsterra);
frame (300,250,adsterra);
frame (300,250,adsterra);
frame (300,250,wiget);
frame (300,250,plug);
frame (300,250,plug);
frame (300,250,plug);
frame (300,250,plug);
frame (300,250,plug);
frame (300,250,adsrev);
frame (300,250,adsrev);
frame (300,250,adsrev);
frame (300,250,adsrev);
frame (300,250,adsrev);
frame (300,250,rev);
}
echo "</div>\n";
}
echo "</body>
</html>\n";
?>
