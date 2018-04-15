<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Account Verification UI
    @description: This page verifies the user with the email and OTP
-->

<?php include('../header_footer_home/header.php'); ?>
<script src="../static/js/accountVerify/accountVerify.js"></script>

<div class="row marketing left-right-com-div" style="margin-top: 15px;">
   <div class="row header">
      <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
         <span class="sconnect-header">Verify Account</span>
         <div class="sconnect-signup-div">
            <form id="verify-form" name="verify-form" method="post" action="javascript:validateSubmitVerifyForm()">
               <table class="table-responsive signup-table">
                  <tbody>
                     <tr>
                        <td class="signup-label-td"><span class="signup-label">University Email &nbsp;</span></td>
                        <td class="signup-input-td"><input class="input-signup input-sm" type="email" name="verify-email" id="verify-email"></td>
                     </tr>
                     <tr>
                        <td class="signup-label-td"><span class="signup-label">Password &nbsp;</span></td>
                        <td class="signup-input-td"><input class="input-signup input-sm" type="password" name="verify-password" id="verify-password"></td>
                     </tr>
                     <tr>
                        <td class="signup-label-td"><span class="signup-label">OTP (Received in Email) &nbsp;</span></td>
                        <td class="signup-input-td"><input class="input-signup input-sm" type="password" name="verify-OTP" id="verify-OTP"></td>
                     </tr>
                     <tr>
                        <td class="signup-error-msg-td" colspan="2">
                           <span class="login-error-msg-span" id="verify-error-msg">&nbsp;</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           &nbsp;
                        </td>
                        <td class="signup-submit-td">
                           <button class="btn btn-lg btn-signup-submit" id="verify-button">Verify Account</button>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </form>
         </div>
      </div>
   </div>
</div>

<?php include('../header_footer_home/footer.php'); ?>