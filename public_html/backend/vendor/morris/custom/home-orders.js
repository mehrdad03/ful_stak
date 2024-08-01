// Morris Donut
Morris.Donut({
	element: 'donutOrders',
	data: [
		{value: 15, label: 'New'},
		{value: 10, label: 'Delivered'},
		{value: 7, label: 'Pending'},
	],
	backgroundColor: '#ffffff',
	labelColor: '#13202b',
	lineWidth: '10px',
	colors:['#e02539', '#3c3c3c', '#585858', '#a2a2a2', '#dcdcdc'],
	resize: true,
	hideHover: "auto",
	formatter: function (x) { return x}
});
