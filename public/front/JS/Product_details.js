function next(x)
{
	document.getElementById("slide").setAttribute("src", x+".webp");
}
function plus(x){
    a = parseInt(document.getElementById(x).value);
    document.getElementById(x).value = a + 1;
}
function sub(x){
    a = parseInt(document.getElementById(x).value);
    if(a > 1) a -= 1;
    document.getElementById(x).value = a;
}
