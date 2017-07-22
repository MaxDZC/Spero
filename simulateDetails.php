<html>
	<head>
		<?php include("include/externals.php");?>
	</head>
	<body class="pale">	
		<?php include("include/navbar.php");?>
		<div class="container">
			<div class="row vertical">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3">
					<form action="simulateResults.php">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control">
							<br>
							<label>Nature of Business</label>
							<select name = 'type' class="form-control">
								<option>Please Select</option>
				                <option>Fast Food</option>
				                <option>Company</option>
							</select>
							<br>
							<label>Opening Time - Closing Time</label>
							<div class="input-group">
								<input type="time" name = 'open' class="form-control">	
								<span class="input-group-addon">-</span>
								<input type="time" name = 'close' class="form-control">	
							</div>
							<br>
							<label>Description</label>
							<textarea class="form-control" name = 'desc' rows="10">
								
							</textarea>
							<br>
							<input name = 'activity' value = "<?php echo $_POST['activity']; ?>" hidden>
				            <input name = 'traffic' value = "<?php echo $_POST['traffic']; ?>" hidden>
				            <input name = 'avePopulation' value = "<?php echo $_POST['avePopulation'];?>" hidden>
				            <input name = 'est1' value = 'jolibee' value = "<?php echo "'" + $_POST['est1']; ?>" hidden>
				            <input name = 'est2' value = 'chowking' value = "<?php echo $_POST['est2']; ?>" hidden >
							<button type="submit" class="btn">S I M U L A T E</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>