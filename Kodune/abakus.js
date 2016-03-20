window.onload = function(){
	var parlid = document.getElementsByClassName(".bead, .left");
	for (i = 0; i < parlid.length; i++){
		parlid[i].onclick = moveParl();
	}
	function moveParl(move){
		if (move.target.style.sccFloat == "right"){
			move.target.style.cssFloat = "left";
		} else {
			move.target.style.sccFloat = "right";
		}
	}
}