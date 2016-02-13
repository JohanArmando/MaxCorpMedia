<div style="position:absolute; top:0px; left:0px" >
<?PHP
define ("ch", $_REQUEST['ch']);
switch (ch) {
	default: $channel=include ("channels/ch1.html");
	break;
	case 2: $channel=include ("channels/ch2.html");
	break;
	case 3: $channel=include ("channels/ch3.html");
	break;
	case 4: $channel=include ("channels/ch4.html");
	break;
	case 5: $channel=include ("channels/ch5.html");
	break;
	case 6: $channel=include ("channels/bt1.html");
	break;
	case 7: $channel=include ("channels/bt2.html");
	break;
	case 8: $channel=include ("channels/sky1.html");
	break;
	case 9: $channel=include ("channels/sky2.html");
	break;
	case 10: $channel=include ("channels/sky3.html");
	break;
	case 1: $channel=include ("channels/sky4.html");
	break;
}
print $channel;
?>
</div>
<div style="position:absolute; left:680; top:0px" >
<script id="sid0020000062222347641">(function() {function async_load(){s.id="cid0020000062222347641";s.src=(window.location.href.indexOf('file:///') > -1 ? 'http:' : '') + '//st.chatango.com/js/gz/emb.js';s.style.cssText="width:250px;height:400px;";s.async=true;s.text='{"handle":"p2p-sports","arch":"js","styles":{"b":100,"c":"000000","d":"000000","k":"FFFFFF","l":"FFFFFF","m":"FFFFFF","r":100}}';var ss = document.getElementsByTagName('script');for (var i=0, l=ss.length; i < l; i++){if (ss[i].id=='sid0020000062222347641'){ss[i].id +='_';ss[i].parentNode.insertBefore(s, ss[i]);break;}}}var s=document.createElement('script');if (s.async==undefined){if (window.addEventListener) {addEventListener('load',async_load,false);}else if (window.attachEvent) {attachEvent('onload',async_load);}}else {async_load();}})();</script>
</div>