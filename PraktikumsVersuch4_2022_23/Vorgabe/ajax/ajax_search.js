
function getXMLHttpRequest() {	
	var httpReq = null;
	if (window.XMLHttpRequest) {
		httpReq= new XMLHttpRequest();
	} else if (typeof ActiveXObject != "undefined") {
		httpReq= new ActiveXObject("Microsoft.XMLHTTP");
	}
	return httpReq;
}
