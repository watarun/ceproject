<div class="row" style="width: 960px; height: 500px; background: black;">

<div id="playground"> 
	<div id="welcomeScreen" style="width: 960px; height: 250px; position: absolute; z-index: 100;"> 
		<div style="position: absolute; top: 120px; width: 960px; color: white;"> 
			<span style="font-size:300%;">STAGE 1</span>
			<div id="loadingBar" style="position: relative; left: 100px; height: 15px; width: 0px; background: red;"></div><br /> 
			<center><a style="cursor: pointer;" id="startbutton">click here to show the demo</a></center> 
		</div>
	</div>
</div>
<div id="ansButton" style="position: absolute; top: 300px; width: 960px; display:none"> 
	<center>
	<button id="ans1" style="width:30%">1</button><button id="ans2" style="width:30%">2</button><button id="ans3" style="width:30%">3</button>
	</center>
</div>

</div>
<script type="text/javascript">
<!--
// Global constants:
var PLAYGROUND_WIDTH    = 960;
var PLAYGROUND_HEIGHT    = 500;
var REFRESH_RATE        = 15;
var STAGE = 1;

// Gloabl animation holder
var playerAnimation = new Array();

// Game object:
function Player(node) {
	this.node = node;
	this.update= function(speed){
		var pos = parseInt(this.node.css("top"));
		if(pos < (PLAYGROUND_HEIGHT - 228)){
			this.node.css("top",""+(pos + speed)+"px");
		} else if ($("#ansButton").css("display") == "none"){
			$("#ansButton").fadeIn("slow");
		}
	}

	this.moveLeft = function(){
		var nextpos = parseInt(this.node.css("left"))-10;
		if(nextpos > 0){
			this.node.css("left", ""+nextpos+"px");
		}
	}

	this.moveRight = function(){
		var nextpos = parseInt(this.node.css("left"))+10;
		if(nextpos < PLAYGROUND_WIDTH - 128){
			this.node.css("left", ""+nextpos+"px");
		}
	}

	return true;
}

// 
// the main declaration:
// 

$(function(){
    // Animations declaration:
    // Player space shipannimations:
    playerAnimation["star"]    = new $.gameQuery.Animation({
		imageURL: "<?php echo $html->url('/img/apple-logo.png') ?>"});

    playerAnimation["star2"]    = new $.gameQuery.Animation({
        imageURL: "<?php echo $html->url('/img/candy-apple-blue-3.png') ?>", numberOfFrame: 2, delta: 128, rate: 100, type: $.gameQuery.ANIMATION_HORIZONTAL});

    // Initialize the game:
    $("#playground").playground({height: PLAYGROUND_HEIGHT,
                                 width: PLAYGROUND_WIDTH,
                                 keyTracker: true});

    // Initialize the background
    $.playground().addGroup("actors", {width: PLAYGROUND_WIDTH,
                                       height: PLAYGROUND_HEIGHT});

	$("#actors").addSprite("player1",{animation: playerAnimation["star2"],posx:PLAYGROUND_WIDTH/3,posy:0,width:128,height:128})
	$("#player1")[0].player = new Player($("#player1"));
	$("#actors").addSprite("player2",{animation: playerAnimation["star2"],posx:PLAYGROUND_WIDTH/3*2,posy:0,width:128,height:128})
	$("#player2")[0].player = new Player($("#player2"));

	// this sets the id of the loading bar:
    $().setLoadBar("loadingBar", 400);

    //initialize the start button
    $("#startbutton").click(function(){
        $.playground().startGame(function(){
            $("#welcomeScreen").fadeTo(1000,0,function(){$(this).remove();});
        });
    });

	$("#ans2").click(function(){
		alert("Yes!");
		STAGE = 2;
        $("#ansButton").fadeOut("slow");
		$("#player1").remove();
		$("#player2").remove();
		$("#actors").addSprite("player1",{animation: playerAnimation["star"],posx:PLAYGROUND_WIDTH/4,posy:0,width:128,height:128})
		$("#player1")[0].player = new Player($("#player1"));
		$("#actors").addSprite("player2",{animation: playerAnimation["star"],posx:PLAYGROUND_WIDTH/4*2,posy:0,width:128,height:128})
		$("#player2")[0].player = new Player($("#player2"));
		$("#actors").addSprite("player3",{animation: playerAnimation["star"],posx:PLAYGROUND_WIDTH/4*3,posy:0,width:128,height:128})
		$("#player3")[0].player = new Player($("#player3"));
	});

	$.playground().registerCallback(function(){
	if (STAGE == 1) {
		$("#player1")[0].player.update(2);
		$("#player2")[0].player.update(3);
	} else if (STAGE == 2) {
		$("#player1")[0].player.update(3);
		$("#player2")[0].player.update(2);
		$("#player3")[0].player.update(3);
	}
	}, REFRESH_RATE);

	//this is where the keybinding occurs
    $(document).keydown(function(e){
		switch(e.keyCode){
		case 65: //this is left! (a)
			$("#player1")[0].player.moveLeft();
			break;

		case 68: //this is Right! (d)
			$("#player1")[0].player.moveRight();
			break;
		}
	});

    //this is where the keybinding occurs
    $(document).keyup(function(e){
        switch(e.keyCode){
            case 65: //this is left! (a)
                //$("#playerBooster").setAnimation(playerAnimation["boost"]);
                break;
        }
    });
});

-->
</script>