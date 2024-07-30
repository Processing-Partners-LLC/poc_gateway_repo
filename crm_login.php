<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/header'); ?>
    <div class="create-account-wrapper">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    

                    <div class="create-account-center">
                        <div class="full-div">
                            <div class="maxw-400">
                                <h2>WELCOME</h2>
                                <h3>Log in to your CRM account</h3>
                            </div>
                        </div>
	<?php echo form_open(base_url().'home/do_login', array('method'=>'post','name'=>'frmLogin', 'id'=>'frmLogin','class'=>'form-frame'));?>
	<!-- ERROR MESSAGE -->
			<?php if($this->session->flashdata('login_error_msg')){ ?>
			<div class="alert alert-danger" role="alert">
			  <?php echo $this->session->flashdata('login_error_msg'); ?>
			</div>
			<?php } ?>
			<!-- ERROR MESSAGE -->

			<!-- SUCCESS MESSAGE -->
			<?php if($this->session->flashdata('login_success_msg')){ ?>
			<div class="alert alert-success" role="alert">
			  <?php echo $this->session->flashdata('login_success_msg'); ?>
			</div>
			<?php } ?>
			<!-- SUCCESS MESSAGE -->
                        <div class="default-form-holder maxw-400 create-acco">
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="default-input" name="login_email" id="login_email" placeholder="" value="<?php echo $cookie_username ? $cookie_username:''; ?>" autocomplete="off" tabindex="1">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <div class="full-div">
                                    <a href="#" class="show-pass-icon"></a>
                                    <input type="password" class="default-input password-input" placeholder="" name="login_password" id="login_password" value="<?php echo $cookie_password ? $cookie_password:''; ?>" autocomplete="off" tabindex="2">
                                </div>
                                <div class="forget-pass"><a href="<?php echo base_url()?>home/forgot_password" class="text-underline">Forgot password?</a></div>
                            </div>

                            <div class="form-group">
                                <label class="default-checkbox">Remember Me
                                    <input type="checkbox" name="remember" id="remember" checked="checked" value="Y">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                        </div>
                        
                        <div class="phone-action mt-5">
						<input type="submit" class="default-btn yellow-btn minw-356 lh-35 font-weight-bold customized_hover" name="sub_login" id="login_confirm" value="Log In" tabindex="3">
                        </div>
						<?php echo form_close(); ?>
                        <!-- <div class="full-div mt-5 blk-txt">
                            Don’t have an account? <br><a href="create-account.php" class="blk-txt text-underline font-weight-bold">Open an account</a> now
                        </div> -->
                    </div>
                </div>
            </div>
       
        </div>
        
    </div>
 <?php $this->load->view('include/footer'); ?>
    
<script type="text/javascript">

$( document ).ready(function() {
    console.log( "ready!" );
    $(".show-pass-icon").click(function(event) {
        event.preventDefault();
        $(this).toggleClass("show");
        var input = $('input.password-input');
        //alert(input.attr("type"))
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	// ---------------------------------------------------
	// SIGN UP VALIDATION
	$("body").on("click","#reg_confirm",function(e){
		var contact_email_obj=$("#contact_email");
		//var user_name_obj=$("#user_name");
		var password_obj=$("#password");
		var confirm_password_obj=$("#confirm_password");
		var is_accept_terms_obj=$("#is_accept_terms");

		if(contact_email_obj.val()=='')
		{
			contact_email_obj.addClass('error_input');
			$("#contact_email_error").html("Please enter email.");
			contact_email_obj.focus();
			return false;
		}
		else
		{
			if(is_email_validate(contact_email_obj.val())!=true)
			{
				contact_email_obj.addClass('error_input');
				$("#contact_email_error").html("Please enter valid email.");
				contact_email_obj.focus();
				return false;
			}
			else
			{
				contact_email_obj.removeClass('error_input');
				$("#contact_email_error").html('');
			}			
		}

		// if(user_name_obj.val()=='')
		// {
		// 	user_name_obj.addClass('error_input');
		// 	$("#user_name_error").html("Please enter username.");
		// 	user_name_obj.focus();
		// 	return false;
		// }
		// else
		// {
		// 	user_name_obj.removeClass('error_input');
		// 	$("#user_name_error").html("");
		// }

		if(password_obj.val()=='')
		{			
			password_obj.addClass('error_input');
			$("#password_error").html("Please enter password.");
			password_obj.focus();
			return false;
		}
		else
		{	
			if(chk_password_format(password_obj.val())!=true)
			{
				password_obj.addClass('error_input');
				$("#password_error").html("Please enter proper format as mentioned below.");
				password_obj.focus();
				return false;
			}
			else
			{	
				if(password_obj.val().length<8 || password_obj.val().length>14)
				{
					password_obj.addClass('error_input');
					$("#password_error").html("Please enter the password between 8 to 14.");
					password_obj.focus();
					return false;
				}
				else
				{
					password_obj.removeClass('error_input');
					$("#password_error").html("");
				}
			}			
		}

		if(confirm_password_obj.val()=='')
		{			
			confirm_password_obj.addClass('error_input');
			$("#confirm_password_error").html("Please enter confirm password.");
			confirm_password_obj.focus();
			return false;
		}
		else
		{
			if(password_obj.val()!=confirm_password_obj.val())
			{
				confirm_password_obj.addClass('error_input');
				$("#confirm_password_error").html("Confirm password should be same as password.");
				confirm_password_obj.focus();
				return false;
			}
			else
			{
				confirm_password_obj.removeClass('error_input');
				$("#confirm_password_error").html("");
			}
			
		}

		if($("#is_accept_terms").is(":not(:checked)"))
		{
			
			$("#is_accept_terms").addClass('error_checkbox');
			$("#is_accept_terms_error").html("Please check to accept the Terms and Condition.");
			$("#is_accept_terms").focus();
			return false;
		}
		else
		{			
			$("#is_accept_terms").removeClass('error_checkbox');
			$("#is_accept_terms_error").html("");
		}

		return true;
	});

	// -------------------------------------
	// no space check
	$('.no_space').keypress(function( e ) {
       if(e.which === 32){
         return false;
       }
    });
    // no space check
    // ------------------------------------

    // SIGN UP VALIDATION
    // ---------------------------------------------------
	


    // ---------------------------------------------------
    // LOGIN VALIDATION
    $("body").on("click","#login_confirm",function(e){

    	var login_email_obj=$("#login_email");
		var login_password_obj=$("#login_password");

		if(login_email_obj.val()=='')
		{
			login_email_obj.addClass('error_input');
			$("#login_email_error").html("Please enter login email.");
			login_email_obj.focus();
			return false;
		}
		else
		{
			if(is_email_validate(login_email_obj.val())!=true)
			{
				login_email_obj.addClass('error_input');
				$("#login_email_error").html("Please enter valid login email.");
				login_email_obj.focus();
				return false;
			}
			else
			{
				login_email_obj.removeClass('error_input');
				$("#login_email_error").html("");
			}			
		}

		if(login_password_obj.val()=='')
		{
			login_password_obj.addClass('error_input');
			$("#login_password_error").html("Please enter valid password.");
			login_password_obj.focus();
			return false;
		}
		else
		{
			login_password_obj.removeClass('error_input');
			$("#login_password_error").html("");
		}
	});
	// LOGIN VALIDATION
	// ---------------------------------------------------
});
</script>
