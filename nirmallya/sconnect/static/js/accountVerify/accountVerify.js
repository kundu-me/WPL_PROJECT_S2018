/**
 * @author: Nirmallya Kundu <nxkundu@gmail.com>
 * @page: Account Verify JS
 * @description: This JS handles the verification of the new User Account
 **/

$(document).ready(function() {

    $('input').attr('autocomplete','off');
    
});

function validateSubmitVerifyForm() {
    var isValidateVerifyForm = validateVerifyForm();
    if(isValidateVerifyForm) {
        ajaxCallToVerifyForm();
    }
}

function validateVerifyForm() {
    
    if($("#verify-email").val() == "") {
        
        $("#verify-email").focus();
        $("#verify-error-msg").text("Please Enter your email");
        return false;
    }
    else if($("#verify-password").val() == "") {
        
        $("#verify-password").focus();
        $("#verify-error-msg").text("Please Enter your password to login");
        return false;
    } 
    else if($("#verify-OTP").val() == "") {
        
        $("#verify-password").focus();
        $("#verify-error-msg").text("Please Enter your OTP (One Time Password) received in email");
        return false;
    } 

    var email = $("#verify-email").val();
    var isValidEmail = validateEmail(email); 
    if(isValidEmail == false) {
        
        $("#verify-email").focus();
        $("#verify-error-msg").text("Please Enter your valid email");
        return false;
    }

    $("#verify-error-msg").text("");
    return true;
}
function ajaxCallToVerifyForm() {

    $("#verify-button").attr("disabled", "true");
    $.ajax({
      type: "POST",
      url: "../data/accountVerify/accountVerify.php",
      data: $("#verify-form").serialize(),
      success: function(result) {

        var objResult = JSON.parse(result);
        $("#verify-error-msg").text(objResult['message']);
        if(objResult['redirect'] == "true") {
            var redirectURL = objResult['redirectURL'];
            $(location).attr("href", redirectURL);
        }

        $("#verify-button").removeAttr("disabled");
      }
    });
}



function validateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
};