$(document).ready(function() {
	var mealsQuantity = parseInt($('#mealsQuantity').val());
	$('#mealsQuantity').val(mealsQuantity);
	$('#valueGRU').val(mealsQuantity * 3);
	$('#valueGRUSpan').html(parseFloat(mealsQuantity * 3).toFixed(2));


	$('#mealsQuantity').change(function(e){ 
		var mealsQuantity = parseInt($('#mealsQuantity').val());
		if(mealsQuantity > 0) {
			$('#valueGRU').val(mealsQuantity * 3);
			$('#valueGRUSpan').html(parseFloat(mealsQuantity * 3).toFixed(2));
		}
		else {
			$('#mealsQuantity').val(1)
		}
		e.preventDefault();
	});

	$('#mealsQuantity').bind('keyup', function(e){ 
		var mealsQuantity = parseInt($('#mealsQuantity').val());
		if(mealsQuantity > 0) {
			$('#valueGRU').val(mealsQuantity * 3);
			$('#valueGRUSpan').html(parseFloat(mealsQuantity * 3).toFixed(2));
		}
		else {
			$('#mealsQuantity').val(1)
		}
		
	});

});