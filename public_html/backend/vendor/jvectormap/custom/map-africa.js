// Africa
$(function(){
	$('#mapAfrica').vectorMap({
		map: 'africa_mill',
		backgroundColor: 'transparent',
		scaleColors: ['#FF7E39'],
		zoomOnScroll:false,
		zoomMin: 1,
		hoverColor: true,
		series: {
			regions: [{
				values: gdpData,
				scale: ['#e02539'],
				normalizeFunction: 'polynomial'
			}]
		},
	});
});
