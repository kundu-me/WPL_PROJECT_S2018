$(document).ready(function() {
	$('.striped tr:even').addClass('alt');
});

function addToTable(course_name, course_code, course_session)
{
var table=document.getElementById("courses");
var row=table.insertRow(0);
var cell1=row.insertCell(0);
var cell2=row.insertCell(1);
var cell3=row.insertCell(2);
cell1.innerHTML=course_name;
cell2.innerHTML=course_code;
cell3.innerHTML=course_session;
}