<html>
<head>
<script type="text/javascript">
   function load(){
   	if (window.XMLHttpRequest) {
       xmlhttp=new XMLHttpRequest();
   	} else {
   		xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
   		
   	}
    xmlhttp.onreadystatechange=function(){
    	if (xmlhttp.readyState==4&&xmlhttp.status==200) {
          document.getElementById('x').innerHTML=xmlhttp.responseText;
    	}
    }
    xmlhttp.open('GET','index.php?search1='+document.search.search1.value,true);
    xmlhttp.send();
   }


</script>

</head>
<body>
<form id='search' name='search'> 
ENTER NAME:
<input type='text' name='search1' onkeyup="load();">  
</form>
<div id="x"></div>
</body>
</html>	