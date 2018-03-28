/**
 * @author: Nirmallya Kundu <nxkundu@gmail.com>
 * @page: Home Page JS
 * @description: This JS handles the (login, signup) of the main page
 **/

var slideIndex = 1;

$(document).ready(function() {

    $('input').attr('autocomplete','off');
    
    showSlides(slideIndex);

    setInterval(function() {
        showSlides(slideIndex += 1);
    }, 2000);
});

function validateSubmitLoginForm() {
    var isValidateLoginForm = validateLoginForm();
    if(isValidateLoginForm) {
        ajaxCallToLoginForm();
    }
}

function validateSubmitSignupForm() {
    var isValidateSignupForm = validateSignupForm();
    if(isValidateSignupForm) {
        ajaxCallToSignup();
    }
}

function validateLoginForm() {
    
    if($("#login-email").val() == "") {
        
        $("#login-email").focus();
        $("#login-error-msg").text("Please Enter your email and password to login");
        return false;
    }
    else if($("#login-password").val() == "") {
        
        $("#login-password").focus();
        $("#login-error-msg").text("Please Enter your password to login");
        return false;
    } 

    var email = $("#login-email").val();
    var isValidEmail = validateEmail(email); 
    if(isValidEmail == false) {
        
        $("#login-email").focus();
        $("#login-error-msg").text("Please Enter your valid email");
        return false;
    }

    $("#login-error-msg").text("");
    return true;
}
function ajaxCallToLoginForm() {

    $("#login-button").attr("disabled", "true");
    $.ajax({
      type: "POST",
      url: "data/homepage/login.php",
      data: $("#login-form").serialize(),
      success: function(result) {

        console.log(result);

        $("#login-button").removeAttr("disabled");
        var objResult = JSON.parse(result);
        $("#login-error-msg").text(objResult['message']);
        if(objResult['redirect'] == "true") {
            var redirectURL = objResult['redirectURL'];
            $(location).attr("href", redirectURL);
        }
      }
    });
}

function validateSignupForm() {

    if($("#signup-email-id").val() == "") {
        
        $("#signup-email-id").focus();
        $("#signup-error-msg").text("Please Enter your email id");
        return false;
    }
    else if($("#signup-email-domain").val() == "") {
        
        $("#signup-email-domain").focus();
        $("#signup-error-msg").text("Please Enter your email domain");
        return false;
    } 
    else if($("#signup-fname").val() == "") {
        
        $("#signup-fname").focus();
        $("#signup-error-msg").text("Please Enter your First Name");
        return false;
    } 
    else if($("#signup-lname").val() == "") {
        
        $("#signup-lname").focus();
        $("#signup-error-msg").text("Please Enter your Last Name");
        return false;
    } 
    else if($("#signup-password").val() == "") {
        
        $("#signup-password").focus();
        $("#signup-error-msg").text("Please Enter a Password");
        return false;
    } 

    if($("input[name=signup-position]:checked").val() == "faculty") {
        if($("#signup-document").val() == "") {

            $("#signup-error-msg").text("Please Upload a document to verify");
            return false;
        }
    }

    var userEmail =  "" + $("#signup-email-id").val() + "@" + $("#signup-email-domain").val() + ".edu";
    var isValidEmail = validateEmail(userEmail); 
    if(isValidEmail == false) {
        
        $("#signup-email-id").focus();
        $("#signup-error-msg").text("Please Enter your email as id@domain.edu");
        return false;
    }

    $("#signup-error-msg").html("&nbsp;");
    return true;
}
function ajaxCallToSignup() {

    $("#signup-button").attr("disabled", "true");

    $.ajax({
      type: "POST",
      url: "data/homepage/signup.php",
      data: $("#signup-form").serialize(),
      success: function(result) {

        console.log(result);

        var objResult = JSON.parse(result);
        $("#signup-error-msg").text(objResult['message']);
        if(objResult['redirect'] == "true") {
            var redirectURL = objResult['redirectURL'];
            $(location).attr("href", redirectURL);
        }

        $("#signup-button").removeAttr("disabled");
      }
    });
}

function validateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
};

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}