
<html>
<head>
	<title>Ajax Poll</title>
	<style type="text/css">
	
		.success{
			color: #4cae4c;
		}

		.error{
			color: #d43f3a;
		}
		
	</style>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
 <h1>Ajax Poll</h1>
 <p>Do you like ice cream?</p>
 <form id="poll">
 	<div>
 		<input type="radio" value="yes" id="vote-yes" name="vote">
 		<label for="vote-yes">Yes</label>
 	</div>
 	<div>
 		<input type="radio" value="no" id="vote-no" name="vote">
 		<label for="vote-no">No</label>
 	</div>
 	<input type="submit" value="Submit your vote">
 </form>
 	<span id="message"></span>

 	<div id="barchart" style="width: 900px; height:500px;"></div>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="js/poll.js"></script>
 	<script src="js/barChart.js"></script>
</body>
</html>