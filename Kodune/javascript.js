
//document.addEventListener('DOMContentLoaded', ...	


window.addEventListener('load', function(){
	
	var h1 = document. getElementById('pealkiri');
	alert(h1.innerHTML); 
});

var numberMuutuja = 123;  //t�pseim arvutus t�isnumbreil 0 - 10 astmel 15 skaalas
var teineMuutuja = 10e100; // Infinity
var komaMuutuja = 0,0003 // probleemsed arvutused
//0x123311 16-s�steemis, 01234 8-s�steemi nr

var tekstiMuutuja = "tekst";
var tekstiMuutuja2 = 'te \n kst'; //poolituskoht, \t - tab, \x00 - heksnumber baidi n�itamiseks, \u0020 unicode number 

var booleanMuutuja = true; //v�i false

var undefinedMuutuja = undefined; //muutuja olemas, kuid v��rtus puudub
// NaN on nagu number, aga vastuseks on not a number, hoiduda

var nullMuutuja = null;

var massiiviMuutuja = [];
var massiivMuutuja2 = [1, "tekst", [3], function(){}, false];
massiiviMuutuja[0] == 1;

//ArrayBuffer

var meetod = function(a){
	return this.omadus + a;

var objektMuutuja = {
	omadus: 123,
	meetod: meetod // v�tab juba defineeritud meetodi
	meetod2: function(a){
		return this.omadus + a;
	meetod3: omadus .toString(2), omadus .toUpperCase;
	}
};
var objekt2 = {
	omadus: 6,
	meetod: objektMuutuja.meetod	
}
alert(objektMuutuja.meetod(5));

/*
if ( omadus == 123 ) {
	return true;
}else{
	return false;
}
*/

// == != > >= < <= !
// and &&, tagastatakse vasakpoolne true v�i parempoole false
// or ||, vasakpoolne false v��rtus
// falsy: false, null, undefined, 0, ''
//truthy: '0', ...





