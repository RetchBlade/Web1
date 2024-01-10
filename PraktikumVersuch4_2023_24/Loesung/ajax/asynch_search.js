document.getElementById("start_search").onclick = searchProducts;

function getXMLHttpRequest() {	
	var httpReq = null;
	if (window.XMLHttpRequest) {
		httpReq= new XMLHttpRequest();
	} else if (typeof ActiveXObject != "undefined") {
		httpReq= new ActiveXObject("Microsoft.XMLHTTP");
	}
	return httpReq;
}

function searchProducts(){
	var req = getXMLHttpRequest();
	req.onreadystatechange = function () {
		if (req.readyState == 4 && req.status === 200) { 	// Die Antwort des Servers liegt vor
			var productsTable = document.getElementById("product-content");
			productsTable.innerHTML = "";
			var products = JSON.parse(req.responseText).products;
			for (var i = 0; i < products.length; i++){
				var product = products[i];
				productsTable.innerHTML += "<tr><td>" + product.product_id + "</td><td>" + product.short_name +
				 "</td><td>" + product.manufacturer + "</td><td>" +  product.unit_price + "</td><td>" +
				  product.vat_rate_percent + "</td></tr>";
			}
		}
	};
	req.open("POST", "ajax/asynch_search.php", true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	req.send("criteria=" + document.getElementById("criteria").value);	
}