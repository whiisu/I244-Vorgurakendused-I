window.addEventListener ('load', function();{
	var parlid = document.querySelectorAll("div.bead, div.left");
	var i;
	for (i = 0; i < parlid.length; i++){
		var cssFloat = parlid[i];
		cssFloat.onclick = function(){
		if (this.style.sccFloat == "right"){
			this.style.cssFloat = "left";
		} else {
			this.style.sccFloat = "right";
		}
	}
	}
});