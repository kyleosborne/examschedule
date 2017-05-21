// Kyle Osborne  myexams.js JavaScript for decoding JSON
$(document).ready(function(){
	$("#form").submit(function(event){ // Gets information from form
    	event.preventDefault(); // Prevents JSON from printing
    	var input = $('#course').val(); 
    	$.getJSON('exams.php', [{name:'course', value:input}], function(data){
    		for (var i = 0; i < data.length; i++) {
    			$("#menu").append("<option value = " + data[i]['id'] + ">"+ data[i]["course"] + " " + data[i]["section"] + " " + data[i]["instructor"] + '</option>'); // Populates dropdown menu
    		}
    	});
	});

	$('#menu').change(function(event) {
		var selection = $('#menu').val(); //Gets value from selection in dropdown
    	$.getJSON('search.php', [{name:'id', value:selection}], function(info){
    		for (var x = 0; x < info.length; x++) {
    			$('table').append('<tr> <td>' + info[i]["course"] + "</td>" + '<td>' + info[i]['section']+ "</td>" + "<td>" + info[i]["instructor"] + "</td>" + + "<td>" + info[i]["date"] + "<td>" + info[i]["start"] + "</td>" + "<td>" + info[i]["end"] + "</td>" +"</td> </tr>"); //Populates table
    		}
    	});
    });
});
