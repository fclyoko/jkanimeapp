<html>
<head>
<title>jkanime HTML5 player</title>
<style type="text/css">
	body {
		background-color: black;
	}
	#jwreproductor {
		float: none;
		margin: 0 auto;
		text-align: center;
	}
	.inputtitle {
		color: #fff;
		font-size: 50px;
		padding: 20px;
		text-align: center;
	}
	.inputurl {
		margin: 0 auto;
		float: none;
		text-align: center;
	}
	.inputurl input {
		padding: 20px;
		width: 800;
    	height: 50;
	}
	.jwplayermode {
		margin: 0 auto;
		float: none;
		text-align: center;
		padding-top: 40px;
	}
	.jwplayermode button {
		width: 400px;
		height: 100px;
		font-size: 40px;
	}
	.html5mode {
		margin: 0 auto;
		float: none;
		text-align: center;
		padding-top: 40px;
	}
	.html5mode button {
		width: 400px;
		height: 100px;
		font-size: 40px;
	}
	.html5player {
		float: none;
		margin: 0 auto;
		text-align: center;
	}
	.inputurl input {
		font-size: 30px;
	}
</style>
</head>
<body>
<div class="container" id="container">
	<div class="url">
		<div class="inputtitle">
			<span>URL del episodio en jkanime:</span>
		</div>
		<div class="inputurl">
			<input type="text" id="jkanimeurl" name="jkanimeurl">
		</div>
		
	</div>
	<div class="jwplayermode">
		<button id="bjwplayer">JW Player</button>
	</div>
	<div class="html5mode">
		<button id="bhtml5">HTML5</button>
	</div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="jwplayer/jwplayer.js"></script>
<script src="assets/scripts.js"></script>
<script>jwplayer.key="83PjOu+8mTz9mC0etbwQrfkcz4n2OZQSVAWs1A==";</script>
</body>
</html>

