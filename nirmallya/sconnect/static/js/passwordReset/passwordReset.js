/**
 * @author: Nirmallya Kundu <nxkundu@gmail.com>
 * @page: Password Reset JS
 * @description: This JS handles the resetting the password of the User Account
 **/

$(document).ready(function() {

    $('input').attr('autocomplete','off');
    
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

    $("#reset-email").val(email);

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