<?php
$size=$_GET['size'];
$id=$_GET['p'];
$value = ip;
$fecha = "psik_1_".date("d");
$expire=time()+60*60*24;
define ("mediahub", "<iframe width='1' height='1' src='http://www.xmediaserve.com/apu.php?n=&zoneid=10709&cb=INSERT_RANDOM_NUMBER_HERE&popunder=1&direct=1' frameBorder='0' sandbox='allow-scripts'></iframe>");
define ("yepdigital", "<iframe width='1' height='1' src='http://cdn.adservhere.com/yepdigital/tags/xdirect/xdirect.html?p=70157756&serverdomain=yepdigital&ct=html&ap=1303' frameBorder='0' sandbox='allow-scripts'></iframe>");
define ("matomy", "<iframe width='1' height='1' src='//t.mdn2015x3.com/build/77c5bc/v1/script/' frameBorder='0' sandbox='allow-scripts'></iframe>");

switch($size) {
	default: 
		$array = array('a' => ima1, 'b' => ima2, 'c' => ima3, 'd' => ima4, 'e' => ima5);
		$key = array_rand($array);
		$value = $array[$key]; 
		$img='<img src="/publisher/banners/'.$value.'.jpg" width="300px" height="250px" >';
	break;
	case '728x90':
		$array = array('a' => ima6, 'b' => ima7, 'c' => ima8, 'd' => ima9, 'e' => ima10);
		$key = array_rand($array);
		$value = $array[$key]; 
		$img='<img src="/publisher/banners/'.$value.'.jpg" width="728px" height="90px" >';
	break;
}

?>
<div style="position:absolute; top:0px; left:0px;" >
<!--/*<a href="http://www.maxcorpmedia.com/publisher/pop.php?p=<?=$id?>" target="_blank" >*/
-->
<a href="http://www.xmediaserve.com/apu.php?n=&zoneid=10709&cb=INSERT_RANDOM_NUMBER_HERE&popunder=1&direct=1" target="_blank" >

<?=$img;?>
</a>
</div>
<div id="ads" style="display:none">
<iframe src="http://www.maxcorpmedia.com/publisher/pop.php?p=<?=$id?>" width="300" height="250" sandbox="allow-scripts"></iframe>
<iframe src="http://cdn.waframedia5.com/wafra/tags/xdirect/xdirect.html?p=70156138&serverdomain=wafra&ct=html&ap=1303" width="300" height="250"  sandbox="allow-scripts"></iframe>
<? if ($id==1) { echo "<iframe src='http://psikemedia.com/panel/functions/countimp/counter.php?id=3' width='300' height='250'  sandbox='allow-scripts'></iframe>"; } ?>
<? if ($id==2) { echo "<iframe src='http://psikemedia.com/panel/functions/countimp/counter.php?id=4' width='300' height='250'  sandbox='allow-scripts'></iframe>"; } ?>
<?php 
		if ($_COOKIE[$fecha]==false) {
			echo mediahub;
			echo yepdigital;
	   	setcookie($fecha,$value,$expire);
		}		
?>
</div>