<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Password Reset UI
    @description: This page enables the user to reset the password
-->

<?php include('../header_footer/header.php'); ?>
<script src="../static/js/passwordReset/passwordReset.js"></script>

<div class="row marketing left-right-com-div" style="margin-top: 15px;">
   <div class="row header">
      <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
         <span class="sconnect-header">Forgot Password! Password Reset</span>
         <div class="sconnect-signup-div">
            <form id="otp-form" name="otp-form" method="post" action="javascript:validateSubmitResetPasswordOTPForm()">
               <table class="table-responsive signup-table">
                  <tbody>
                     <tr>
                        <td class="signup-label-td"><span class="signup-label">University Email &nbsp;</span></td>
                        <td class="signup-input-td"><input class="input-signup input-sm" type="email" name="otp-email" id="otp-email"></td>
                     </tr>
                     <tr>
                        <td>
                           &nbsp;
                        </td>
                        <td class="signup-submit-td">
                           <button class="btn btn-lg btn-signup-submit" id="otp-button"><span id="send-otp-span">Send OTP in Email</span></button>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </form>
            <br>
            <br>
            <form id="reset-form" name="reset-form" method="post" action="javascript:validateSubmitResetPasswordForm()" class="display-none">
               <table class="table-responsive signup-table">
                  <tbody>
                     <tr class="display-none">
                        <td class="signup-label-td"><span class="signup-label">University Email &nbsp;</span></td>
                        <td class="signup-input-td"><input class="input-signup input-sm" type="email" name="reset-email" id="reset-email"></td>
                     </tr>
                     <tr>
                        <td class="signup-label-td"><span class="signup-label">OTP Received in Email &nbsp;</span></td>
                        <td class="signup-input-td"><input class="input-signup input-sm" type="password" name="reset-otp" id="reset-otp"></td>
                     </tr>
                     <tr>
                        <td class="signup-label-td"><span class="signup-label">New Password &nbsp;</span></td>
                        <td class="signup-input-td"><input class="input-signup input-sm" type="password" name="reset-password" id="reset-password"></td>
                     </tr>
                     <tr>
                        <td>
                           &nbsp;
                        </td>
                        <td class="signup-submit-td">
                           <button class="btn btn-lg btn-signup-submit" id="reset-button">Submit</button>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </form>
            <br>
            <br>
            <table class="table-responsive signup-table">
               <tbody>
                  <tr>
                     <td class="signup-error-msg-td" colspan="2">
                        <span class="login-error-msg-span" id="reset-error-msg">&nbsp;</span>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<?php include('../header_footer/footer.php'); ?>