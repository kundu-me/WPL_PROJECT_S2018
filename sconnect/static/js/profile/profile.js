	jQuery(document).ready(function () {

		$('.striped tr:even').addClass('alt');
		
		document.getElementById('get_resume').onclick = function() {
			document.getElementById('my_resume').click();
		};

		$(".fa-wrench").hide();
		$("#toggle").click(function(){
			$(".fa-wrench").toggle(1000, function(){
				//alert("Toggled");
			})
		});

		var deg = document.getElementById("degree_dropdown");
		deg.classList.add("form-control");
		deg.classList.add("selectpicker");

		var maj = document.getElementById("major_dropdown");
		maj.classList.add("form-control");
		maj.classList.add("selectpicker");
		
		

		jQuery("#update").click(function(event) {
			event.preventDefault();
			var degree_val = jQuery("#degree_dropdown option:selected").text();
			var major_val = jQuery("#major_dropdown option:selected").text();
			var dob_month_val = jQuery("#month option:selected").val();
			var dob_day_val = jQuery("#day option:selected").val();
			var dob_year_val = jQuery("#year option:selected").val();
			console.log(degree_val);
			console.log(major_val);
			console.log(dob_month_val);
			console.log(dob_day_val);
			console.log(dob_year_val);
			$.ajax({
				type:'POST',
				url:'edit.php',
				data:{degree: degree_val, major: major_val, dob_month: dob_month_val, 
					dob_day: dob_day_val, dob_year: dob_year_val},
				success:function(result){
					console.log(result);
					var objResult = JSON.parse(result);
					console.log(objResult);
					// alert('Update successful');
				},
				error: function(jqxhr, status, exception) {
					alert('Exception:', exception);
				}
			})
		}) 

		document.getElementById("degree_hide").onclick = function() {
			document.getElementById('settings_lightbox').style.display='block';
			document.getElementById('fade').style.display='block';
		}

		$(".fa-wrench").hover(function() {
			$("toogle_info_div").hide();
			$("toggle_info_div").show();
		});


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

	function startRead(evt) {
		var file = document.getElementById('my_resume').files[0];
		if(file) {
			//alert("Name: " + file.name + "\n" + "Last Modified Date: " + file.lastModifiedDate);

		}
	}

	function startReadFromDrag(evt) {
		var file = evt.dataTransfer.files;
		if(file) {
			var fileAttr = "Name: " + file.name + "\n" +
			"Last modified date: " + file.lastModifiedDate;
			$('#dragDiv').text(fileAttr);
			alert(fileAttr);
		}
		evt.stopPropagation();
		evt.preventDefault();
	}

	var droppingDiv = document.getElementById("dragDiv");
	//droppingDiv.addEventListener('dragOver', domagic, false);
	//droppingDiv.addEventListener('drop', startReadFromDrag, false);