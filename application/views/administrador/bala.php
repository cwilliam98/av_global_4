<?php
include 'index_admin_tpl.php'; 
?>

<!DOCTYPE html>
<html>

<body>

	<div id="contenedor_grafico" class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-12">
				<canvas id="myChart"></canvas>
			</div>
		</div>
	</div>
	

	<script>

		var	pametro1 = [];
		var	pametro2 = [];
		$(document).ready(function(){

			$.post("<?php echo base_url();?>administrador/admin/dadosAdmin",
		function(data){

			var obj = JSON.parse(data);

			//Eliminamos y creamos la etiqueta canvas
			$('#myChart').remove();
			$('#contenedor_grafico').append("<canvas id='myChart'></canvas>");
			var ctx = $("#myChart");
			var myChart = new Chart(ctx, {
			    type: 'bar',
			    data: {
			    	labels: Object.keys(obj), //paramMeses,//horizontal
			    	datasets: [
			        	{
				            label: "Quantidade",
				            fill: true,
				            lineTension: 0.1,
				            backgroundColor: "rgba(75,192,192,0.4)",
				            borderColor: "rgba(75,192,192,1)",
				            borderCapStyle: 'butt',
				            borderDash: [],
				            borderDashOffset: 0.1,
				            borderJoinStyle: 'miter',
				            pointBorderColor: "rgba(75,192,192,1)",
				            pointBackgroundColor: "#fff",
				            pointBorderWidth: 5,
				            pointHoverRadius: 2,
				            pointHoverBackgroundColor: "rgba(75,192,192,1)",
				            pointHoverBorderColor: "rgba(220,220,220,1)",
				            pointHoverBorderWidth: 2,
				            pointRadius: 1,
				            pointHitRadius: 2,
				            data: Object.values(obj), //paramValores,//vertical
				            spanGaps: false,
				        }
			    	]
				},
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero:true
			                }
			            }]
			        }
			    }
			});
		});
		});

	</script>

</body>
</html>