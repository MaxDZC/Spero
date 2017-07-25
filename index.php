<html>
	<head>
		<?php include("include/externals.php");?>
	</head>
	<body class="pale">	
		<div class="fullscreen">
			<div class="container">
				<div class="row vertical-center">
					<div class="col-xs-6 col-xs-offset-3">
						<img class="logo" src="img/spero.png">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row vertical-center">
				<div class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" align="center">
					<div class="col-sm-12">
						<img class="title" src="img/speroword.png">
					</div>
					<div class="col-sm-4 hidden-xs">
						<img class="login" src="img/bird.png" >
					</div>
					<div class="col-sm-6 col-sm-offset-2 col-xs-12">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username">
							<br>
							<input type="password" class="form-control" placeholder="Password">
							<br>
							<button class="btn form-control" onclick="fadeOut(1)">Login</button>
							<br><br><br><br><br><br>
							<a href="#">Sign Up?</a>
						</div>
					</div>
				</div>
			</div>
			<?php include("include/footer.php");?>
		</div>
		
	</body>
</html>

<script>
	window.setTimeout(function(){
		$(".fullscreen").fadeOut(2000,function(){ 
		});	
	},2000);

	function fadeOut(x){
		$(".fullscreen").fadeIn(2000,function(){
			window.setTimeout(function(){
				switch(x){
					case 1: window.location = "home.php";break;
				}	
			},500);
		});
	}
</script>