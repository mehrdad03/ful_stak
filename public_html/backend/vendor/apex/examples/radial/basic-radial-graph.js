var options = {
	chart: {
		height: 320,
		type: 'radialBar',
	},
	plotOptions: {
		radialBar: {
			dataLabels: {
				name: {
					fontSize: '22px',
				},
				value: {
					fontSize: '16px',
				},
				total: {
					show: true,
					label: 'Sales',
					formatter: function (w) {
						// By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
						return '2500'
					}
				}
			}
		}
	},
	series: [90, 80, 70, 60, 50],
	labels: ['iMac', 'Macbook', 'iPad', 'iPhone', 'Others'],
	colors: ['#e02539', '#3c3c3c', '#585858', '#a2a2a2', '#dcdcdc'],
}

var chart = new ApexCharts(
	document.querySelector("#basic-radial-graph"),
	options
);
chart.render();
