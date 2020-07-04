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

	// https://github.com/InteractionDesignFoundation/add-event-to-calendar-docs/blob/master/services/google.md

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

				/*
				Exemplo

				{
					title: 'Long Event',
					start: '2016-12-07',
					end: '2016-12-10',
					url: ' https://calendar.google.com/calendar/r/eventedit?
								text=Exemplo
								&dates=20201231T193000Z/20201231T223000Z
								&details=Exemplo+Exemplo
					'
				},
				*/

				{
					title: 'Inscrição ENEM',
					start: '2020-07-03',
					end: '2020-12-31',
					url: 'https://calendar.google.com/calendar/r/eventedit?text=Inscrição+ENEM&dates=20200703T193000Z/20201231T223000Z&details=Hoje+começam+as+inscrições+para+o+ENEM'
				},
				{					
					title: 'Inscrição FUVEST',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição UNICAMP',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição UNESP',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição UNIFESP',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição UFABC',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição UFSCAR',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição IFSP',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição UNIVESP',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição ITA',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição FATEC',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição FAMEMA',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição FAMERP',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição USCS',
					start: ' ',
					end: ' ',
					url: ' '
				},
				{
					title: 'Inscrição UNITAU',
					start: ' ',
					end: ' ',
					url: ' '
				}

			]
		});
		
	});