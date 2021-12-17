// $(document).ready(function(){

// $('#example1').calendar({
//  type: 'date'
// });

// $('#example2').calendar({
//  type: 'date'
// });

// $('#example3').calendar({
//  type: 'date'
// });

// $('#example4').calendar({
//  type: 'date'
// });

// $('#example5').calendar({
//  type: 'date'
// });

// $('#example6').calendar({
//  type: 'date'
// });


// $('#datepicker').datepicker(

// {
// dateFormat: 'dd-mm-yy',

// minDate: 0,

// beforeShow: function() {

// $(this).datepicker('option', $('#datepicker').val());

// }

// });


// });



//   olddd 

$(document).ready(function(){	

	$('#datepicker').datepicker(

		{ 
			dateFormat: 'dd/mm/yy',
			//minDate: "-1M -200Y",
			maxDate: 0,
			changeMonth: true,
      		changeYear: true,
      		yearRange: '1900:new Date().getFullYear()',

			beforeShow: function() {

				$(this).datepicker('option', $('#datepicker').val());

		}

	});
	
	$('#datepicker1').datepicker(

		{ 
			dateFormat: 'dd/mm/yy',

			maxDate: 0,
			changeMonth: true,
      		changeYear: true,
      		yearRange: '1900:new Date().getFullYear()',

			beforeShow: function() {

				$(this).datepicker('option', $('#datepicker').val());

		}

	});	
	
	$('#datepicker2').datepicker(

		{ 
			dateFormat: 'dd/mm/yy',

			maxDate: 0,
			changeMonth: true,
      		changeYear: true,
      		yearRange: '1900:new Date().getFullYear()',

			beforeShow: function() {

				$(this).datepicker('option', $('#datepicker').val());

		}

	});

	$('#datepicker3').datepicker(

		{ 
			dateFormat: 'dd/mm/yy',

			maxDate: 0,
			changeMonth: true,
      		changeYear: true,
      		yearRange: '1900:new Date().getFullYear()',

			beforeShow: function() {

				$(this).datepicker('option', $('#datepicker').val());

		}

	});	

	$('#datepicker4').datepicker(

		{ 
			dateFormat: 'dd/mm/yy',

			maxDate: 0,
			changeMonth: true,
      		changeYear: true,
      		yearRange: '1900:new Date().getFullYear()',

			beforeShow: function() {

				$(this).datepicker('option', $('#datepicker').val());

		}

	});

	$('#datepicker5').datepicker(

		{ 
			dateFormat: 'dd/mm/yy',

			maxDate: 0,
			changeMonth: true,
      		changeYear: true,
      		yearRange: '1900:new Date().getFullYear()',

			beforeShow: function() {

				$(this).datepicker('option', $('#datepicker').val());

		}

	});

});
