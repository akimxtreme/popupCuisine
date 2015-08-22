<!DOCTYPE html>
<html>
<head>
	<title>Popup 2</title>
	<!-- popup estilos -->
	<style type="text/css">
	 #cover { position:fixed; top:0; left:0; background:rgba(0,0,0,0.6); z-index:9998; width:100%; height:100%; /*display:none; */	} 
	 #popup { cursor:pointer; height:500px; width:700px; top: 50%; left: 50%; margin-top: -250px; /* Half the height */ margin-left: -350px; /* Half the width */ position:fixed; z-index:9999; /*display:none; */ background: url(http://www.lacuisineusa.com/v/vspfiles/templates/Taste/images/template/banner-popup-LCA2.jpg) no-repeat; border:5px solid #cccccc; border-radius:10px; transition: opacity 200ms; } 
	 .cancel { display:block; position:absolute; top:3px; right:2px; background:rgb(245,245,245); color:black; height:30px; width:35px; font-size:30px; text-decoration:none; text-align:center; font-weight:bold; }
	 .cancel:hover { color: #E52822;transition: all 0.5s ease-out;}	
	 </style>
</head>
<body>
	<!-- popup -->
	<div id="popup"><span style="height:500px; width:700px; float:left;" onclick="location.href='https://www.lacuisineusa.com/SearchResults.asp?Cat=1890'"></span> <a href="#" class="cancel" id="cancelPopup" onclick="javascript:popupHidden()">&times;</a></div> <div id="cover" > </div>
	<!-- <img src="http://www.lacuisineusa.com/v/vspfiles/templates/Taste/images/template/banner-popup-LCA2.jpg" onclick="location.href='https://www.lacuisineusa.com/SearchResults.asp?Cat=1890'"> -->
	<script type="text/javascript">	 
	 	function popupHidden(){ var w = document.getElementById("cover"); w.remove(); var x = document.getElementById("popup"); x.remove(); }
	 	function popupOculto(){ var y = document.getElementById("popup"); y.style.display="none"; }
	 	$( "#cancelPopup" ).click(function() { popupHidden(); });
	 	//document.querySelector('.cancel').addEventListener("click", function() {	popupHidden(); })
	 	var URLactual = window.location.href; var urlEva = ["http://www.lacuisineusa.com/Default.asp", "http://www.lacuisineusa.com/", "https://www.lacuisineusa.com/Default.asp", "https://www.lacuisineusa.com/","http://127.0.0.1:8080/popupCuisine/index2.php"]; 
		if (URLactual !=urlEva[0]) {//alert(urlEva[0]);
			if (URLactual !=urlEva[1]) {//alert(urlEva[1]);
				if(URLactual !=urlEva[2]){//alert(urlEva[2]);
					if(URLactual !=urlEva[4]){//alert(urlEva[3]);
					popupHidden();
					} // 4
				} // 3
			} // 2  
		} // 1
	</script>
</body>
</html>
 
 