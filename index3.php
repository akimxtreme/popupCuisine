<!DOCTYPE html>
<html>
<head>
	<title>Popup 3 Jquery</title>
	<!-- popup estilos -->
	<style type="text/css">
	 #cover { position:fixed; top:0; left:0; background:rgba(0,0,0,0.6); z-index:9998; width:100%; height:100%; /*display:none; */	} 
	 #popup { background-size: 100%; cursor:pointer; height:500px; width:700px; top: 50%; left: 50%; margin-top: -250px; /* Half the height */ margin-left: -350px; /* Half the width */ position:fixed; z-index:9999; /*display:none; */ background: url(http://www.lacuisineusa.com/v/vspfiles/templates/Taste/images/template/banner-popup-LCA2.jpg) no-repeat; border:5px solid #cccccc; border-radius:10px; transition: opacity 200ms; } 
	 	@media only screen and (max-width: 750px) { #popup { background-size: 100%; height:350px; width:500px; margin-left: -250px; } }
		@media only screen and (max-width: 520px) {	#popup { background-size: 100%; height:270px; width:380px; margin-left: -200px; } }
		@media only screen and (max-width: 390px) {	#popup { background-size: 100%; height:200px; width:290px; margin-left: -150px; } }

	 .cancel { display:block; position:absolute; top:3px; right:2px; background:rgb(245,245,245); color:black; height:30px; width:35px; font-size:30px; text-decoration:none; text-align:center; font-weight:bold; }
	 .cancel:hover { color: #E52822;transition: all 0.5s ease-out;}	
	 </style>
</head>
<body>
	<!-- popup -->
	<div id="popup"><span id="popupSpan" style="height:500px; width:700px; float:left;"></span> <a href="#" class="cancel" id="cancelPopup" onclick="javascript:popupHidden()">&times;</a></div> <div id="cover" > </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">	 
		$(document).ready(function(){
    		$("#cancelPopup").click(function(){
        		$("#popup").hide();
        		$("#cover").hide();
    		});
		});	
		$(document).ready(function(){
    		$("#popupSpan").click(function(){
        		$(location).attr('href', 'https://www.lacuisineusa.com/SearchResults.asp?Cat=1890')
    		});
		});	 	
	 	var URLactual = $(location).attr('href'); var urlEva = ["http://www.lacuisineusa.com/Default.asp", "http://www.lacuisineusa.com/", "https://www.lacuisineusa.com/Default.asp", "https://www.lacuisineusa.com/","http://www.webmetropoli.com.ve/popupCuisine/index3.php"]; 	 	
		if (URLactual !=urlEva[0]) {//alert(urlEva[0]);
			if (URLactual !=urlEva[1]) {//alert(urlEva[1]);
				if(URLactual !=urlEva[2]){//alert(urlEva[2]);
					if(URLactual !=urlEva[4]){//alert(urlEva[3]);
						$("#popup").hide();
        				$("#cover").hide();
					} // 4
				} // 3
			} // 2  
		} // 1
	</script>
</body>
</html>
 
 