jQuery(document).ready(function() {

	var dob_setting = $('input[name=dob_view]:checked', '#settings_form').val();
	var degree_setting = $('input[name=degree_view]:checked', '#settings_form').val();
	var major_setting = $('input[name=major_view]:checked', '#settings_form').val();
	var courses_setting = $('input[name=courses_view]:checked', '#settings_form').val();

	$('#settings_form input').on('change', function() {
		dob_setting = $('input[name=dob_view]:checked', '#settings_form').val();
		degree_setting = $('input[name=degree_view]:checked', '#settings_form').val();
		major_setting = $('input[name=major_view]:checked', '#settings_form').val();
		courses_setting = $('input[name=courses_view]:checked', '#settings_form').val();		
	});

	jQuery("#save_settings").click(function(ev) {
		ev.preventDefault();
		alert("Working");
		console.log(dob_setting);
		$ajax({
			type: 'POST',
			url: 'settings_submit.php',
			data: {degree_view: degree_setting, major_view: major_setting, courses_view: courses_setting
				, dob_view: dob_setting},
				success:function(result){
					console.log(result);
					var objResult = JSON.parse(result);
					console.log(objResult);
				}
				error: function(jqxhr, status, exception) {
					alert('Error occurred.', exception);
				}
		})
	})


})