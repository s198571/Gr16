
var TAU=2*Math.PI;

var vector={ang:TAU, speed:4};

var v;

var myVar;

var count=0;

jQuery(function(){
var trigger_keys = [83, 84, 65, 82, 32, 87, 65, 82, 83];
var t_index = 0;
$(document).keydown(function(e){
    if(e.keyCode === trigger_keys[t_index++]){
        if(t_index === trigger_keys.length){
            start();
            flytt();
        }
    }else{
        t_index = 0;
    }
});
});

function start(){
	$("section").append("<div id='easter'>"+"<img src='./pictures/falcon.gif' alt='Image of Falcon' width='350px'"+"</div>");//.gif hentet fra: "http://newbiedm.com/2010/08/23/the-importance-of-a-ship-in-your-star-wars-game/"
	$(easter).offset({left:$("body").width()/2 - 200,top:$("body").height()/2 -100});

	lagVector();



}

function lagVector()
{
	vec=Object.create(vector);
	vec.ang=Math.random()*TAU;
	vec.speed=Math.random()*vec.speed;
	$(easter).data("vector",vec);

	v=vec;
}

function flytt(){

	myVar=setInterval(move,5);

}

function move(){
	count++;
    //console.log("count");

	if(count%300 == 0)
	{
		myStopFunction();
		lagVector();
		flytt();
	}

	flue=$("#easter");

    var offs=flue.offset();
  	var vector=flue.data("vector");

	offs.top+=v.speed*Math.sin(v.ang);
	offs.left+=v.speed*Math.cos(v.ang);

  	var bredde=$("body").width();
    var hoyde=$("body").height();

    if(offs.left < 0)
	{
		lagVector();
		offs.left=0;
	}
	if(offs.left > (bredde-350))
	{
		lagVector();
		offs.left=(bredde-350);
	}
	if(offs.top < 0)
	{
		lagVector();
		offs.top=0;
	}
	if(offs.top > (hoyde-300))
	{
		lagVector();
		offs.top=(hoyde-300);
	}

    flue.offset(offs);
}

function myStopFunction()
{
clearInterval(myVar);
}