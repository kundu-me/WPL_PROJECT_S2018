<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Home Page (sconnect.xyz)
    @description: This is the main home page
-->
<?php include('header.php'); ?>

<div class="row marketing left-right-com-div" style="margin-top: 15px;">
<div class="row header">
   <div class="col-sm-12 col-md-12 col-lg-6" style="text-align: center;">
      <span class="sconnect-header">About SConnect</span>
      <div class="sconnect-signup-div">
         <div class="slideshow-container">
            <div class="mySlides fade">
               <div class="numbertext"></div>
               <img  class="img-responsive about-sconnect-img" src="static/img/about-sconnect-1.jpg" alt="about sconnect">
               <div class="text">SConnect</div>
            </div>

            <div class="mySlides fade">
               <div class="numbertext"></div>
               <img  class="img-responsive about-sconnect-img" src="static/img/about-sconnect-2.jpg" alt="about sconnect">
               <div class="text">SConnect</div>
            </div>

            <div class="mySlides fade">
               <div class="numbertext"></div>
               <img  class="img-responsive about-sconnect-img" src="static/img/about-sconnect-3.jpg" alt="about sconnect">
               <div class="text">SConnect</div>
            </div>

            <div class="mySlides fade">
               <div class="numbertext"></div>
               <img  class="img-responsive about-sconnect-img" src="static/img/about-sconnect-4.jpg" alt="about sconnect">
               <div class="text">SConnect</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

         </div>

         <div style="text-align:center">
           <span class="dot" onclick="currentSlide(1)"></span> 
           <span class="dot" onclick="currentSlide(2)"></span> 
           <span class="dot" onclick="currentSlide(3)"></span> 
           <span class="dot" onclick="currentSlide(4)"></span> 
         </div>

         <p class="sconnect-detail-p">
            SConnect - Student Connect, is a new initiative by the 4 students of University of Texas at Dallas along with the advisor Dr. Timothy McMahan, to present to the students at any level with an educational social media which has lot of capabilities to meet the present and future requirements.
         </p>
      </div>
   </div>
   <div class="col-sm-12 col-md-12 col-lg-6" style="text-align: center;">
      <span class="sconnect-header">New Here! &nbsp; Sign up in Seconds!</span>
      <div class="sconnect-signup-div">
         <form id="signup-form" name="signup-form" method="post" action="javascript:validateSubmitSignupForm()" enctype="multipart/form-data">
            <table class="table-responsive signup-table">
               <tbody>
                  <tr>
                     <td class="signup-label-td"><span class="signup-label">University Email</span></td>
                     <td class="signup-input-td">
                        <input class="input-signup-email input-sm" type="text" name="signup-email-id" id="signup-email-id" placeholder="id">
                        <span class="signup-label">@</span>
                        <!-- <input class="input-signup-email input-sm" type="text" name="signup-email-domain" id="signup-email-domain" placeholder="domain"> -->
                        <select class="input-signup-email input-sm" type="text" name="signup-email-domain" id="signup-email-domain">
                           <option value="">domain</option>
                           <option value="utdallas">utdallas</option>
                           <option value="uta">uta</option>
                           <option value="tamu">tamu</option>
                        </select>
                        <span class="signup-label">.edu</span>
                     </td>
                  </tr>
                  <tr>
                     <td class="signup-label-td"><span class="signup-label">First Name</span></td>
                     <td class="signup-input-td"><input class="input-signup input-sm" type="text" name="signup-fname" id="signup-fname"></td>
                  </tr>
                  <tr>
                     <td class="signup-label-td"><span class="signup-label">Last Name</span></td>
                     <td class="signup-input-td"><input class="input-signup input-sm" type="text" name="signup-lname" id="signup-lname"></td>
                  </tr>
                  <tr>
                     <td class="signup-label-td"><span class="signup-label">Password</span></td>
                     <td class="signup-input-td"><input class="input-signup input-sm" type="password" name="signup-password" id="signup-password"></td>
                  </tr>
                  <tr>
                     <td class="signup-label-td"><span class="signup-label">Position</span></td>
                     <td class="signup-input-td" style="text-align:left; padding-left:40px;">
                        <div class="radio signup-radio-div">
                           <input class="input-signup-radio" type="radio" name="signup-position" value="student" id="signup-position-student" checked="true"> 
                           <span class="signup-label">Student</span>
                           &nbsp; &nbsp; &nbsp; &nbsp; 
                           <input class="input-signup-radio" type="radio" name="signup-position" value="faculty" id="signup-position-faculty"> 
                           <span class="signup-label">Faculty</span>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td class="signup-label-td"><span class="signup-label">University Document</span></td>
                     <td class="signup-input-td">
                        <input class="signup-file-choose" type="file" name="signup-document" id="signup-document">
                     </td>
                  </tr>
                  <tr>
                     <td class="signup-error-msg-td" colspan="2">
                        <span class="login-error-msg-span" id="signup-error-msg">&nbsp;</span>
                     </td>
                  </tr>
                  <tr>
                     <td class="signup-submit-td" colspan="2">
                        <button class="btn btn-lg btn-signup-submit" id="signup-button">Create Account</button>
                     </td>
                  </tr>
                  <tr>
                     <td class="signup-icons-td" colspan="2">
                        <img class="img-responsive signup-icons-img" src="static/img/sconnect-img-connect.jpg" alt="sconnect-logo" title="Connect with Students and Faculties">
                        <img class="img-responsive signup-icons-img" src="static/img/sconnect-img-knowledge.jpg" alt="sconnect-logo" title="Knowledge Transfer">
                        <img class="img-responsive signup-icons-img" src="static/img/sconnect-img-course.jpg" alt="sconnect-logo" title="Course Updates">
                        <img class="img-responsive signup-icons-img" src="static/img/sconnect-img-attendance.jpg" alt="sconnect-logo" title="Class Attendance">
                        <img class="img-responsive signup-icons-img" src="static/img/sconnect-img-post.jpg" alt="sconnect-logo" title="Web based Post">
                        <img class="img-responsive signup-icons-img" src="static/img/sconnect-img-msg.jpg" alt="sconnect-logo" title="Chat with Students and Faculties">
                     </td>
                  </tr>
               </tbody>
            </table>
         </form>
      </div>
   </div>
</div>
<?php include('footer.php'); ?>