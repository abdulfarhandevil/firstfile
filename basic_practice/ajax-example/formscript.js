function fetchCities(str){
	var req = new XMLHttpRequest();
	req.open("get","http://localhost/ajax-example/cities.php?state="+str,true);
	/*this open func is used to send request to the server
	onreadystatechange(means request banana process krna send krna) is a event attribute
	*/
	req.send();
	req.onreadystatechange = function(){
		if (req.readyState==4&&req.status==200) {
			document.getElementById("cities").innerHTML=req.responseText;
		}
	};
}
/*readystate is the member variable of XMLHttpRequest class & status is the method
readyState=0 not initialized
readyState=1 set
readyState=2 send
readyState=3 process then 
readyState=4 return(means response has arrived)
*/