$(document).ready(function() {
		

//https://www.w3resource.com/javascript-exercises/javascript-basic-exercise-3.php

	var todaydate = new Date();

	var dd = todaydate.getDate();
	var mm = todaydate.getMonth()+1; 
	var yyyy = todaydate.getFullYear();

	if(dd<10) {
		dd='0'+dd;
	} 	
	if(mm<10) {
		mm='0'+mm;
	}

	todaydate = mm+'-'+dd+'-'+yyyy;


		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next,today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: todaydate,
			navLinks: true, // can click day/week names to navigate views
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2016-12-01'
				},
				{
					title: 'Long Event',
					start: '2016-12-07',
					end: '2016-12-10'
				},
				{
					title: 'Repeating Event',
					start: '2016-12-09T16:00:00'
				},
				{
					title: 'Repeating Event',
					start: '2016-12-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-12-11',
					end: '2016-12-13'
				},
				{
					title: 'Meeting',
					start: '2016-12-12T10:30:00',
					end: '2016-12-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-12-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-12-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-12-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-12-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-12-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'https://google.com/',
					start: '2016-12-28'
				}
			]
		});
		
	});