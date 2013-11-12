
function get_query(){
	    var url = location.href;
	    var nr = url.substring(url.indexOf('?')).split('=');
	    if(isNaN(nr[1]))
	    	nr[1] = 0;
	    //console.log(nr[0]);
	    return nr[1];
}

jQuery(function(){
var trigger_keys = [37,39];
var left = 0;
var right = 1;
$(document).keydown(function(e){
    if(e.keyCode === trigger_keys[left]){
        $("#arrowL").click();
	}
    if(e.keyCode === trigger_keys[right]){
        $("#arrowR").click();
    }
});
});


$(document).ready(function(){
	var tall = get_query();
	var max = 10;
	//console.log(tall);
	var back = tall - 1;
	var forward = ++tall;
	//console.log(tall);

	$("section").append("<nav id='secNav'><ul id='ulSec'></ul></nav>");
	if(back > 0)
	{
		$("#ulSec").append("<li><a href='index.php?page="+back+"'><span class='hideInCss'>Previous page</span><div id='arrowL'></div></a></li>");
	}
	if(forward > 1 && forward < max)
	{
		$("#ulSec").append("<li><a href='index.php?page="+forward+"'><span class='hideInCss'>Next page</span><div id='arrowR'></div></a></li>");
	}
});
$("#knapp").click(function()
			{
				hide=document.getElementsByClassName("hide");

				$( ".hide" ).toggle(600)
			});
