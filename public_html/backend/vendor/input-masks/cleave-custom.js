

var cleave = new Cleave('#date-formatting', {
	date: true,
	delimiter: '/',
	datePattern: ['Y', 'm', 'd']
});

var cleave = new Cleave('#input-credit-card', {
    creditCard: true,
    onCreditCardTypeChanged: function (type) {
        console.log(type)
        var card = $('#creditCardType').find('.'+type);

        if(card.length) {
            card.addClass('highlight');
            card.siblings().removeClass('highlight');
        } else {
            $('#creditCardType .credit-card').removeClass('highlight');
        }
    }
});
