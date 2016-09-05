$(document).ready(function(){

	google.charts.load('current', {'packages':['corechart', 'bar']});

	$('#poll').submit(function(event){

		event.preventDefault();

		var voteValue = $('[name=vote]:checked').val();

		if(voteValue == undefined) return;
	// Set up ajax
	$.ajax({
		type: 'get',
		datatype: "json",
		url: 'api/barChart.php',
		success:function(dataFromServer){
			console.log(dataFromServer);
			
			google.charts.setOnLoadCallback(drawChart);

			function drawChart(){

				var data = new google.visualization.arrayToDataTable([
						['vote','number of votes', { role: 'style'}],
						['yes', parseFloat(dataFromServer['totalYes']), '#4cae4c'],
						['no', parseFloat(dataFromServer['totalNo']), '#d43f3a'],
						]);
						

				var options = {
					'title': 'Do you like icecream?',
					'width':900,
					'height':500,
					'legend': 'none',
							hAxis: {format: '#'},
							animation: {
								duration: 1000,
								easing: 'out',
								startup: true
							}
				};

				var chart = new google.visualization.BarChart(document.getElementById('barchart'));

				chart.draw(data, options);
			}
		},
		error:function(){
			console.log('Cannot connect to server..')
		}
	});

	});
});