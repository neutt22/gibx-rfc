$(window).load(function(){

	// $('.slider')._TMS({
	// 	preset:'diagonalFade',
	// 	easing:'easeOutQuad',
	// 	duration:800,
	// 	pagination:true,
	// 	slideshow:6000
	// })
	// $("#testimonials").jCarouselLite({
	// 	btnNext: ".down",
	// 	btnPrev: ".up",
	// 	visible: 1,
	// 	speed: 600,
	// 	vertical: true,
 //        circular: true,
	// 	easing: 'easeOutCirc'
	// });

	loadCars();

	// car select onChange event handler
	$("select#cars").bind('change', function(e){
		var optionSelected = $(this).find("option:selected");
		var carBrand   = optionSelected.text();
		// console.log(carBrand);

		// clear previous selected items
		clearYears();
		clearModels();

		// fire years ajax
		loadYears(carBrand);
	});

	// year select onChange event handler
	$("select#years").bind('change', function(e){
		var brand = $("#cars option:selected").text();
		console.log("BRAND: " + brand);
		var optionSelected = $(this).find("option:selected");
		var year   = optionSelected.text();
		// console.log(year);

		// clear model items
		clearModels();

		// fire years ajax
		loadModels(brand, year);
	});

	$("button#compare").click(function(){
		console.log("to be continued...");
		alert("car comparison to be continued...");
	});

});

function clearYears(){
	$('#years')
		.empty()
		.append('<option>Choose year</option>')
		.find('option:first')
		.attr("selected","selected");
}

function clearModels(){
	$('#models')
		.empty()
		.append('<option>Choose model</option>')
		.find('option:first')
		.attr("selected","selected");
}

// load cars API
function loadCars(){
	$.ajax({
	    url: '/cars',
	    type: 'GET',
	    data: { 
	    	// q: 'foo',
	    },
	    contentType: 'application/json; charset=utf-8',
	    success: function (response) {
	    	var json = $.parseJSON(response);
	    	var cars = [];

	    	// remove duplicates
	    	$.each(json, function(key, value){

	    		if($.inArray(value.brand, cars) === -1){
	    			cars.push(value.brand);
	    			// console.log("car: " + value.brand);
	    		}
	    	});

	    	// add items to select tag
	    	$.each(cars, function(key, value){
	    		$("#cars")
	    			.append($("<option></option>")
	    			.attr("value", value)
	    			.text(value));
	    	});

	    },
	    error: function () {
	    	alert('failed fetching car list');
	    }
	}); 
}

// load years API
function loadYears(brand){
	$.ajax({
	    url: '/years',
	    type: 'GET',
	    data: { 
	    	brand: brand,

	    },
	    contentType: 'application/json; charset=utf-8',
	    success: function (response) {
	    	var json = $.parseJSON(response);
	    	var cars = [];

	    	// remove duplicates
	    	$.each(json, function(key, value){

	    		if($.inArray(value.year, cars) === -1){
	    			cars.push(value.year);
	    			// console.log("year: " + value.year);
	    		}
	    	});

	    	// add items to select tag
	    	$.each(cars, function(key, value){
	    		$("#years")
	    			.append($("<option></option>")
	    			.attr("value", value)
	    			.text(value));
	    	});

	    },
	    error: function () {
	    	alert('failed fetching year list');
	    }
	}); 
}

// load models API
function loadModels(brand, year){
	$.ajax({
	    url: '/models',
	    type: 'GET',
	    data: { 
	    	brand: brand,
	    	year: year,
	    },
	    contentType: 'application/json; charset=utf-8',
	    success: function (response) {
	    	var json = $.parseJSON(response);
	    	var cars = [];

	    	// remove duplicates
	    	$.each(json, function(key, value){

	    		if($.inArray(value.model, cars) === -1){
	    			cars.push(value.model);
	    			// console.log("model: " + value.model);
	    		}
	    	});

	    	// add items to select tag
	    	$.each(cars, function(key, value){
	    		$("#models")
	    			.append($("<option></option>")
	    			.attr("value", value)
	    			.text(value));
	    	});

	    },
	    error: function () {
	    	alert('failed fetching year list');
	    }
	}); 
}

