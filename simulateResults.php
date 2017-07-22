<html>
	<head>
		<?php include("include/externals.php");?>
	</head>
	<body class="pale">	
		<?php include("include/navbar.php");?>
		<div class="container">
			<div class="row vertical">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3">
					<div class="form-group">
						<label>Profit</label>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:88%">
						 		<span class="sr-only">70% Complete</span>
							</div>
						</div>
						<br>
						<label>Lifespan</label>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:64%">
						 		<span class="sr-only">70% Complete</span>
							</div>
						</div>
						<br>
						<label>Ratings</label>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:81%">
						 		<span class="sr-only">70% Complete</span>
							</div>
						</div>
						<h3><label>Price: </label> 93,000php</h3>
						<br>
						<a href="home.php"><button class="btn form-control">Back</button></a>
						<br>
						<br>
						<a href="home.php"><button class="btn form-control" onclick="bought()">Buy Estate</button></a>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function postData() {
			    $.ajax({
			        type: "POST",
			        url: "/smerf/nn.py",
			        success: callbackFunc
			    });
			}

			function callbackFunc(response) {
			    // do something with the response
			    console.log(response);
			}

			function bought(){
				c = confirm("Confirm Transaction?");
				if(c){
					alert("ESTATE BOUGHT");
				}
			}

			postData();
		</script>
	</body>
</html>