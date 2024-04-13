function plus(x,p,v)
{
	
	a= parseInt(document.getElementById(x).value);
	a += 1;
	console.log(v)
	document.getElementById(x).value = a;
	c = parseInt(document.getElementById(v).innerHTML);
    
    // document.getElementById(x).value = c + 1;
    document.getElementById(p).innerHTML =  c * (a)+"(VNĐ)";
}

function sub(x,p,v)
{
	a= parseInt(document.getElementById(x).value);
	if(a>1)
		a-=1;
	document.getElementById(x).value = a;
	c = parseInt(document.getElementById(v).innerHTML);
    
    // document.getElementById(x).value = c + 1;
    document.getElementById(p).innerHTML =  c * (a)+"(VNĐ)";
}

var i= 1;
var N = 5;
function next()
{
	if(i<N)
		i += 1;
	else
		i = 1;
	document.getElementById("img").setAttribute("src",i+".jpg");
}
function back()
{
	if(i>1)
		i -= 1;
	else
		i = N;
	document.getElementById("img").setAttribute("src",i+".jpg");
}

function autoplay()
{
	setInterval(next, 5000);
}

// function inc(x,p){
//     a = parseInt(document.getElementById(x).value);
    
//     document.getElementById(x).value = a + 1;
//     document.getElementById(p).value =  products[i].price * (a+1)+"đ";
// }

// function dec(x,p){
//     a = parseInt(document.getElementById(x).value);
//     if(a>1)
// 	{
//     document.getElementById(x).value = a - 1;
//     document.getElementById(p).value = products[i].price * (a-1) +"đ";
// 	}
// }