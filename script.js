
/*function get_query(){
	    var url = location.href;
	    var nr = url.substring(url.indexOf('?')).split('=');
	    if(isNaN(nr[1]))
	    	nr[1] = 0;
	    //console.log(nr[0]);
	    return nr[1];
}*/

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


function get_query(){
	    var url = window.location.search.substring(1);
	    var nr = url.split('&');

	    return nr;
}

function make_buttons(){
	var SubString = get_query();
	console.log(SubString);
	var chapter = 1;
	var page = 1;
	var max = antall;
	console.log('max: '+max);
	for(var i=0; i < SubString.length; i++){
		var VarPair = SubString[i].split('=');
		if(VarPair[0] == 'chapter')
			chapter = VarPair[1];
		if(VarPair[0] == 'page')
			page = VarPair[1];
	}
	console.log('chapter: '+chapter);
	console.log('page: '+page);
	var back = page - 1;
	var forward = ++page;

	$("section").append("<nav id='secNav'><ul id='ulSec'></ul></nav>");
	if(back > 0)
	{
		$("#ulSec").append("<li><a href='index.php?chapter="+chapter+"&page="+back+"'><span class='hideInCss'>Previous page</span><div id='arrowL'></div></a></li>");
	}
	if(forward > 1 && forward <= max)
	{
		$("#ulSec").append("<li><a href='index.php?chapter="+chapter+"&page="+forward+"'><span class='hideInCss'>Next page</span><div id='arrowR'></div></a></li>");
	}
}


function button()
			{
				hide=document.getElementsByClassName("hide");

				$( ".hide" ).toggle(600)
			}
function chButton()
			{
				hide=document.getElementsByClassName("chHide");

				$( ".chHide" ).toggle(600)
			}