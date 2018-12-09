
<?php 
//	print_r($arrayMesDados);

?>
<div class="col-md-8">
<canvas id="myChart"></canvas>
</div>


<script type="text/javascript">
	var ctx = document.getElementById("myChart").getContext("2d");
	<?php 
	echo '
	var chart = new Chart(ctx, {
    	// The type of chart we want to create
	    type: "bar",

	    // The data for our dataset
	    data: {
	        labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outobro", "Novembro", "Dezembro"],
	        datasets: [
	        	{
		            label: ["Despesa"],
		            backgroundColor: "rgb(255, 99, 132)",
		            borderColor: "rgb(255, 99, 132)",
		            data: ' . json_encode($arrayMesDados). '
	        	}
	        ]
	    },

	    // Configuration options go here
	    options: {}
	});
	';
	?>
	
</script>
