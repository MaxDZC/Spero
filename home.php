<html>
	<head>
		<?php include("include/externals.php");?>
		<style>
			.mydiv{
				position: relative;
				top: 40%;
				transform: translateY(-50%);
			}
		</style>
	</head>
	<body class="pale">	
		<?php include("include/navbar.php");?>
		<div class="container centerscreen">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
					<div class="col-xs-4 col-sm-4">
					 	<div class="panel panelTrack">
					 		<div class="panel-heading text-center">
					 			<img class="title margins" src="img/bird.png" ><br>
					 			<h4 class="word">STEM</h4>
					 		</div>
					 	</div>
					</div>
					<div class="col-xs-4 col-sm-4">
					 	<div class="panel panelTrack">
					 		<div class="panel-heading text-center">
					 			<img class="title margins" src="img/bird.png" ><br>
					 			<h4 class="word">ABM</h4>
					 		</div>
					 	</div>
					</div>
					<div class="col-xs-4 col-sm-4">
					 	<div class="panel panelTrack">
					 		<div class="panel-heading text-center">
					 			<img class="title margins" src="img/bird.png" ><br>
					 			<h4 class="word">HUMSS</h4>
					 		</div>
					 	</div>
					</div>
				</div>
			</div>
			<div id="careerscourses">
				<div class="row" id="careersrow">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">
						<div class="col-xs-4 col-sm-4">
						 	<div class="panel panelCareers">
						 		<div class="panel-heading text-center">
						 			<img class="title margins" src="img/bird.png" ><br>
						 			<h4>Career Name</h4>
						 		</div>
						 	</div>
						</div>
						<div class="col-xs-4 col-sm-4">
						 	<div class="panel panelCareers">
						 		<div class="panel-heading text-center">
						 			<img class="title margins" src="img/bird.png" ><br>
						 			<h4>Career Name</h4>
						 		</div>
						 	</div>
						</div>
						<div class="col-xs-4 col-sm-4">
						 	<div class="panel panelCareers">
						 		<div class="panel-heading text-center">
						 			<img class="title margins" src="img/bird.png" ><br>
						 			<h4>Career Name</h4>
						 		</div>
						 	</div>
						</div>
					</div>
				</div>
				<div id="delayrow">
					<div class="row" id="coursesrow">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<div class="col-xs-4 col-sm-4">
							 	<div class="panel panelCourses">
							 		<div class="panel-heading">
							 			<h4>Possible Courses</h4>
							 			<hr/>
								 		aaa<br>
								 		aaa<br>
								 		aaa<br>
							 		</div>
							 	</div>
							</div>
							<div class="col-xs-4 col-sm-4">
							 	<div class="panel panelCourses">
							 		<div class="panel-heading">
							 			<h4>Possible Courses</h4>
							 			<hr/>
								 		aaa<br>
								 		aaa<br>
								 		aaa<br>
							 		</div>
							 	</div>
							</div>
							<div class="col-xs-4 col-sm-4">
							 	<div class="panel panelCourses">
							 		<div class="panel-heading">
							 			<h4>Possible Courses</h4>
							 			<hr/>
								 		aaa<br>
								 		aaa<br>
								 		aaa<br>
							 		</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("include/footer.php");?>
	</body>
</html>

<script>
	$(document).ready(function(){
		$( ".panel-body" ).hide();
		$( "#careersrow" ).hide();
		$( "#coursesrow" ).hide();
		$( "#careerscourses" ).hide();
		$( "#delayrow" ).hide();
		
		checkColor();

		$( ".panelTrack" ).click(function() {
			classHold = $(this).find("h4").html().toLowerCase()+"Class";
			$('.panelCareers').each(function(){
		        var panelHeading = $(this).find(".panel-heading");
		        panelHeading.removeClass();
		        panelHeading.addClass("panel-heading text-center "+classHold);
		        panelHeading.css("opacity","0.9");
		    });
			$('.panelCourses').each(function(){
		        var panelHeading = $(this).find(".panel-heading");
		        panelHeading.removeClass();
		        panelHeading.addClass("panel-heading text-center "+classHold);
		        panelHeading.css("opacity","0.8");
		    });


			$( "#careerscourses" ).slideToggle( "slow", function() {
				$( "#careersrow" ).slideToggle( "slow", function() {
					$( ".panelCareers" ).slideDown( "slow", function() {});
					$( "#delayrow" ).slideUp( "slow", function() {
						$( "#coursesrow" ).slideUp( "slow", function() {});
					});
				});
			});
			$('.panelTrack').not(this).each(function(){
		        $(this).slideToggle();
		    });
		});

		$( ".panelCareers" ).click(function() {
			$( "#delayrow" ).slideToggle( "slow", function() {
				$( "#coursesrow" ).slideToggle( "slow", function() {});
			});
			$(".panelCareers").not(this).each(function(){
		        $(this).slideToggle();
		    });
		});
	});

	function checkColor(){
		$('.panelTrack').each(function(){
	        $(this).find(".panel-heading").addClass($(this).find("h4").html().toLowerCase()+"Class");
	    });
	}
</script>