
function get_query(){
	    var url = location.href;
	    var nr = url.substring(url.indexOf('?')).split('=');
	    if(isNaN(nr[1]))
	    	nr[1] = 0;
	    return nr[1];
}

$(document).ready(function(){
	var tall = get_query();
	console.log(tall);
	var back = tall - 1;
	var forward = ++tall;
	console.log(tall);
	if(back > 0)
	{
		$("section").append("<nav id='secNav'><ul><li><a href='index.php?page="+back+"'><span class='hideInCss'>Previous page</span><div id='arrowL'></div></a></li><li><a href='index.php?page="+forward+"'><span class='hideInCss'>Next page</span><div id='arrowR'></div></a></li></ul></nav>");
	}else
	{
		if(back < 0)
		{
			forward++;
		}
		$("section").append("<nav id='secNav'><ul><li><a href='index.php?page="+forward+"'><span class='hideInCss'>Next page</span><div id='arrowR'></div></a></li></ul></nav>");
	}

});

