
//document.addEventListener('DOMContentLoaded', ...	


window.addEventListener('load', function(){
	
	var h1 = document. getElementById('pealkiri');
	alert(h1.innerHTML); 
});

var numberMuutuja = 123;  //täpseim arvutus täisnumbreil 0 - 10 astmel 15 skaalas
var teineMuutuja = 10e100; // Infinity
var komaMuutuja = 0,0003 // probleemsed arvutused
//0x123311 16-süsteemis, 01234 8-süsteemi nr

var tekstiMuutuja = "tekst";
var tekstiMuutuja2 = 'te \n kst'; //poolituskoht, \t - tab, \x00 - heksnumber baidi näitamiseks, \u0020 unicode number 

var booleanMuutuja = true; //või false

var undefinedMuutuja = undefined; //muutuja olemas, kuid väärtus puudub
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
	meetod: meetod // võtab juba defineeritud meetodi
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
// and &&, tagastatakse vasakpoolne true või parempoole false
// or ||, vasakpoolne false väärtus
// falsy: false, null, undefined, 0, ''
//truthy: '0', ...





