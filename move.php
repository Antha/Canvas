<!DOCTYPE html>
<html>
<head>
  <title>Move</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <style type="text/css">
  	#gamepad{
  		text-align: center;
  	}
  </style>
  <script type="text/javascript">
    window.onload = function(){
    	var canvas = document.getElementById("c");
    	canvas.addEventListener('keydown',moveit,true);
    	ctx = canvas.getContext('2d');
    	ctx.fillRect(100,100,30,30);
    	var x = 100;
    	var y = 100;

    	$("#UP").click(function(){
    		ctx.clearRect(0,0,canvas.width,canvas.height);
    		y = y - 10;
    		ctx.fillRect(x,y,30,30);
    	});

    	$("#DOWN").click(function(){
    		ctx.clearRect(0,0,canvas.width,canvas.height);
    		y = y + 10;
    		ctx.fillRect(x,y,30,30);
    	});

    	$("#LEFT").click(function(){
    		ctx.clearRect(0,0,canvas.width,canvas.height);
    		x = x - 10;
    		ctx.fillRect(x,y,30,30);
    	});

    	$("#RIGHT").click(function(){
    		ctx.clearRect(0,0,canvas.width,canvas.height);
    		x = x + 10;
    		ctx.fillRect(x,y,30,30);
    	});


    	function moveit(e){
    		if(e.keyCode == 38){
    			ctx.clearRect(0,0,canvas.width,canvas.height);
    			y = y - 10;
    			ctx.fillRect(x,y,30,30);
    		}

    		if(e.keyCode == 40){
    			ctx.clearRect(0,0,canvas.width,canvas.height);
    			y = y + 10;
    			ctx.fillRect(x,y,30,30);
    		}

    		if(e.keyCode == 37){
    			ctx.clearRect(0,0,canvas.width,canvas.height);
    			x = x - 10;
    			ctx.fillRect(x,y,30,30);
    		}

    		if(e.keyCode == 39){
    			ctx.clearRect(0,0,canvas.width,canvas.height);
    			x = x + 10;
    			ctx.fillRect(x,y,30,30);
    		}
    	}
    }	
  </script>
</head>

<body>
  <div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <canvas width="500" height="400" id='c' tabindex="3">
	      </canvas>
	    </div>
	  </div>

	  <div class="row">
	    <div class="col-md-12" id='gamepad'>
	      <strong>
	      *)You can use both keyboard and the button below
	      </strong><br/>
	      <button id='UP'>UP</button><br/>
	      <button id='LEFT'>LEFT</button><button id='RIGHT'>RIGHT</button><br/>
	      <button id='DOWN'>DOWN</button>
	    </div>
	  </div>
  </div>
</body>
</html>