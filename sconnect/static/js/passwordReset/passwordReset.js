/**
 * @author: Nirmallya Kundu <nxkundu@gmail.com>
 * @page: Password Reset JS
 * @description: This JS handles the resetting the password of the User Account
 **/

$(document).ready(function() {

    $('input').attr('autocomplete','off');

    $("#reset-password").keypress(function() {
        
        var passwordStrength = checkStrength($("#reset-password").val());
        $("#reset-error-msg").text("Your Password is " + passwordStrength);
    });
    
});

function validateSubmitResetPasswordOTPForm() {
    var isValidateResetPasswordOTPForm = validateResetPasswordOTPForm();
    if(isValidateResetPasswordOTPForm) {
        ajaxCallToResetPasswordOTPForm();
    }
}

function validateResetPasswordOTPForm() {
    
    if($("#otp-email").val() == "") {
        
        $("#otp-email").focus();
        $("#reset-error-msg").text("Please Enter your email");
        return false;
    }

    var email = $("#otp-email").val();
    var isValidEmail = validateEmail(email); 
    if(isValidEmail == false) {
        
        $("#otp-email").focus();
        $("#reset-error-msg").text("Please Enter your valid email");
        return false;
    }

    $("#reset-error-msg").text("");
    return true;
}

function ajaxCallToResetPasswordOTPForm() {

    $("#otp-button").attr("disabled", "true");

    $.ajax({
      type: "POST",
      url: "../data/passwordReset/passwordResetGenerateOTP.php",
      data: $("#otp-form").serialize(),
      success: function(result) {

        console.log(result);

        var objResult = JSON.parse(result);
        $("#reset-error-msg").text(objResult['message']);
         $("#otp-button").removeAttr("disabled");
        
        if(objResult['success'] == "true") {
            $("#send-otp-span").text("Re-Send OTP in Email");
            $("#reset-form").removeClass("display-none");
        }
        else if(objResult['success'] == "false") {
            $("#send-otp-span").text("Send OTP in Email");
            if(!$("#reset-form").hasClass("display-none")){
                $("#reset-form").addClass("display-none");
            }
        }
      }
    });
}

function validateSubmitResetPasswordForm() {
    var isValidateResetPasswordForm = validateResetPasswordForm();
    if(isValidateResetPasswordForm) {
        ajaxCallToResetPasswordForm();
    }
}

function validateResetPasswordForm() {
    
    if($("#otp-email").val() == "") {
        
        $("#otp-email").focus();
        $("#reset-error-msg").text("Please Enter your email");
        return false;
    }
    if($("#reset-otp").val() == "") {
        
        $("#reset-otp").focus();
        $("#reset-error-msg").text("Please Enter the OTP received in email");
        return false;
    }
    if($("#reset-password").val() == "") {
        
        $("#reset-password").focus();
        $("#reset-error-msg").text("Please Enter your password");
        return false;
    }

    var email = $("#otp-email").val();
    var isValidEmail = validateEmail(email); 
    if(isValidEmail == false) {
        
        $("#otp-email").focus();
        $("#reset-error-msg").text("Please Enter your valid email");
        return false;
    }

    $("#reset-email").val(email);

    var passwordStrength = checkStrength($("#reset-password").val());
    if(passwordStrength == "Good" || passwordStrength == "Strong") {
        
        $("#reset-error-msg").text("Your Password is " + passwordStrength);
    }
    else {
        $("#reset-password").focus();
        $("#reset-error-msg").text("Your Password is " + passwordStrength);
        return false;
    }

    $("#reset-error-msg").text("");
    return true;
}

function ajaxCallToResetPasswordForm() {

    $("#otp-button").attr("disabled", "true");
    $("#reset-button").attr("disabled", "true");
    $("#reset-error-msg").text("Reset Password Progress...");

    $.ajax({
      type: "POST",
      url: "../data/passwordReset/passwordReset.php",
      data: $("#reset-form").serialize(),
      success: function(result) {

        console.log(result);
        
        var objResult = JSON.parse(result);
        $("#reset-error-msg").text(objResult['message']);
        $("#otp-button").removeAttr("disabled");
        $("#reset-button").removeAttr("disabled");

        if(objResult['redirect'] == "true") {
            var redirectURL = objResult['redirectURL'];
            $(location).attr("href", redirectURL);
        }
      }
    });
}

function validateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
};

function checkStrength(password) {
    
    var strength = 0
    if (password.length < 6) {
        return "Too Short";
    }
    
    if (password.length > 7) strength += 1
    
    // If password contains both lower and uppercase characters, increase strength value.
    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
    
    // If it has numbers and characters, increase strength value.
    if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
    
    // If it has one special character, increase strength value.
    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
    
    // If it has two special characters, increase strength value.
    if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
    
    // If value is less than 2
    if (strength < 2) {
        return "Weak";
    } 
    else if (strength == 2) {
        return "Good";
    } 
    else {
        return "Strong";
    }
}