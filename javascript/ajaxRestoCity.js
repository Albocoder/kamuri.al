function getRestaurants(){
		if(window.XMLHttpRequest)
			xhttp = new XMLHttpRequest();
		else
			xhttp = new ActiveXObject('Microsoft.XMLHTTP');//for IE9 or below
		xhttp.onreadystatechange = function () {
			if(xhttp.readyState == 4 && xhttp.status == 200){
				document.getElementById('restaurantData').innerHTML = 					xhttp.responseText;
		}
	};
	xhttp.open('GET', 'searchRestos.inc.php?searchKey='+document.getElementById("cityPicker").value, true);
	xhttp.send();
}
