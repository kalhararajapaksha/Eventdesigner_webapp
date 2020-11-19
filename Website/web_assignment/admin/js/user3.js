function pkgshow()
{
    var x = document.getElementById("pkglist");
    if(x.style.display!=="block")
    {
        x.style.display="block";
    }
    else
    {
        x.style.display="none";
    }
}

function chngtxt()
{
var btn = document.getElementById("contactme");
btn.value = 'contact'; // will just add a hidden value
btn.innerHTML = 'Thank You';
}

function showprice()
{
var btn = document.getElementById("price");
btn.value = ''; // will just add a hidden value
btn.innerHTML = '1,000,000. 00 LKR';
}

$(document).ready(function(){
	$("#mycarousel").carousel({
		interval : false
	});
});