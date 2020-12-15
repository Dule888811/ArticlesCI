$(document).ready(function () {
	var photos;
	var divImages;
	divImages = $('#divImages');
	photos =  $('#photos');
	photos.click().click(function (event)
	{
		event.preventDefault();
		divImages.append(' <div class="form-input-items">' +
			'<label for="item_image[]">item image</label>' +
			'<input type="file"  name="item_image[]">' +
			'</div>');
	});
});



