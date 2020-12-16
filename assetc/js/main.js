$(document).ready(function () {
	var photos;
	var divImages;
	divImages = $('#divImages');
	photos =  $('#photos');
	photo = $('#1');
	photo.click().click(function (event)
	{
		event.preventDefault();
		photo.parent().remove();
	});
	photos.click().click(function (event)
	{
		event.preventDefault();
		divImages.append(' <div class="form-input-items">' +
			'<label for="item_image[]">item image</label>' +
			'<input type="file"  name="item_image[]">' +
			'</div>');
	});
	$('.fa fa-trash image').click(function(event) {
		event.preventDefault();
		var id = $(event.target)[0].id;
		var numchk = new RegExp("^[0-9]*$");
			if( numchk.test( id) )
			{
				$(event.target)[0].parentNode.remove();
			}


	});



});






