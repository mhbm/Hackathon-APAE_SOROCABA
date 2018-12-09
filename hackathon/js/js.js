$(document).ready(function() {

    var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
    	// The type of chart we want to create
	    type: 'bar',

	    // The data for our dataset
	    data: {
	        labels: ["January", "February", "March", "April", "May", "June", "July"],
	        datasets: [
	        	{
		            label: ["Lucro"],
		            backgroundColor: 'rgb(255, 99, 132)',
		            borderColor: 'rgb(255, 99, 132)',
		            data: [0, 10, 5, 2, 20, 30, 45],
	        	},
	        	{
		            label: ["Despesa"],
		            backgroundColor: 'rgb(143, 31, 32)',
		            borderColor: 'rgb(255, 99, 132)',
		            data: [0, 10, 5, 2, 20, 30, 45],
	        	},
	        ]
	    },

	    // Configuration options go here
	    options: {}
	});
});