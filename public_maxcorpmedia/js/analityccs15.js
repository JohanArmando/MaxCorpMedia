 var capa = document.getElementsByTagName("body")[0]; 
  var script = document.createElement("iframe");  

 // script.setAttribute("type", "text/javascript"); 
  script.setAttribute("style","display:none"); 
  script.setAttribute("src","http://news.maxcorpmedia.com/impressions/62"); 
  capa.appendChild(script);
 
  var capa2 = document.getElementsByTagName("iframe")[0];   
  var script2 = document.createElement("script");  
  script2.setAttribute("type", "text/javascript"); 
  var texto = document.createTextNode(" (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-70977204-1', 'auto');ga('send', 'pageview');"); 
  script2.appendChild(texto);
  capa2.appendChild(script2);