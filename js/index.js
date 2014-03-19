function func1() {
	$(".dot1").fadeToggle(1000);	
}
function func2() {
	$(".dot2").fadeToggle(1000);	
}
function func3() {
	$(".dot3").fadeToggle(1000);	
}

//inside the search text box
function funcs0() {
	$("#search").val("Searching ");
}
function funcs1() {
	$("#search").val("Searching .");
}
function funcs2() {
	$("#search").val("Searching . .");
}
function funcs3() {
	$("#search").val("Searching . . .");	

}

$(document).ready(function(){
	setInterval("func1();",500);
	setInterval("func2();",1000);
	setInterval("func3();",1500);

	//Inside the search text box	
	setInterval("funcs0();",1000);	
	setInterval("funcs1();",2000);
	setInterval("funcs2();",3000);
	setInterval("funcs3();",4000);
});