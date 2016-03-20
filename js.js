window.addEventListener('load', function(){
	
	var h1 = document. getElementById('pealkiri');
	alert(h1.innerHTML); 
});
function suurus(el){
  el.removeAttribute("height"); // eemaldab suuruse
  el.removeAttribute("width");
  if (el.width>window.innerWidth || el.height>window.innerHeight){  // ainult liiga suure pildi korral
    if (window.innerWidth >= window.innerHeight){ // lai aken
      el.height=window.innerHeight*0.9; // 90% kõrgune
      if (el.width>window.innerWidth){ // kas element läheb ikka üle piiri?
        el.removeAttribute("height");
        el.width=window.innerWidth*0.9;
      }
    } else { // kitsas aken
      el.width=window.innerWidth*0.9;   // 90% laiune
      if (el.height>window.innerHeight){ // kas element läheb ikka üle piiri?
        el.removeAttribute("width");
        el.height=window.innerHeight*0.9;
      }
    }
  }
}
window.onresize=function() {
	suurpilt=document.getElementById("suurpilt");
	suurus(suurpilt);
}