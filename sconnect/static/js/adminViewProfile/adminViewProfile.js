	jQuery(document).ready(function () {

		$('#get_image').hide();
		$('#upload_image').hide();
		$('#image_browse_div').click(function() {
			$('#get_image').toggle(1000,function(){})
			$('#upload_image').toggle(1000, function(){})
		});

		$('#get_resume').hide();
		$('#upload_resume').hide();
		$('#resume_browse_div').click(function() {
			$('#get_resume').toggle(1000,function(){})
			$('#upload_resume').toggle(1000, function(){})
		});

		$('.striped tr:even').addClass('alt');
		
		document.getElementById('get_resume').onclick = function() {
			document.getElementById('my_resume').click();
		};

		document.getElementById('get_image').onclick = function() {
			document.getElementById('my_image').click();
		};


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
				url:'../profile/edit.php',
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



		$('#upload_resume').on('click', function() {
			var file_data = $('#my_resume').prop('files')[0];
			var form_data = new FormData();
			form_data.append('resume', file_data);
			//alert(form_data);
			$.ajax({
				url: '../profile/resume_upload.php',
				dataType: 'text',
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				type: 'post',
				success: function(php_script_response) {
					alert(php_script_response);
				}
			});
		});

		$('#upload_image').on('click', function() {
			var file_data = $('#my_image').prop('files')[0];
			var form_data = new FormData();
			form_data.append('dp', file_data);
			//alert(form_data);
			$.ajax({
				url: '../profile/image_upload.php',
				dataType: 'text',
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				type: 'post',
				success: function(result) {
					console.log(result);
				}
			});
		});

		$('#delete_profile').on('click', function() {
			var user_hash_delete = $('#viewed_user_hash').val();
			$.ajax({
				url: '../data/adminViewProfile/delete_user.php',
				type: 'post',
				data: { user_hash: user_hash_delete},
				success: function(result) {
					alert(result);
					location.href = "../feed/";
				},
				error: function() {
					alert("Delete failed.");
				}
			});
		});


	});



	function startRead(evt) {
		var file = document.getElementById('my_resume').files[0];
		if(file) {
			//alert("Name: " + file.name + "\n" + "Last Modified Date: " + file.lastModifiedDate);

		}
	}

	// function open_window() {
	// 	window.open("../facultyAddClass/index.php");
	// }

	// function open_course_box() {
	// 	document.getElementById('lightbox').style.display='block';
	// 	// document.getElementById('profile_card').style.display='block';
	// 	// document.getElementById('profile_main').style.display='block';
	// 	// jQuery('#profile_card').addClass('black_overlay');
	// 	// jQuery('#profile_main').addClass('black_overlay');
	// }