<style type="text/css">

    @media (max-width: 1400px) and (min-width: 760px) {
        .page-title-negative-top {        
             padding-top: 127px;
        }
    }
    @media only screen and (max-width: 479px) and (min-width: 320px){    
    .page-title-negative-top {
        padding-top: 0px;
    }
    .page-title-style01 {        
        padding-bottom: 0px;        
    }
</style>
<div class="page-title-style01 page-title-negative-top pt-bkg08">
    <div class="banr-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h1 class="text-center" style="color: #333333">Improve Your Productivity.</h1>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 border-form">   
                        <div class="col-xs-12 text-center">
                            <!-- <a id="facebookRegisterButton" class="btn btn-facebook mb5" href="javascript:void(0);" scope="public_profile,email" onclick="checkLoginState();>
                                <i class="fa fa-facebook" style="float:left;font-size:20px;margin-right: 5px"></i>
                                Login with Facebook
                            </a> -->
                            <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" scope="public_profile,email" onlogin="checkLoginState();">                              
                            </div>                                                        
                        </div>
                        <div class="col-xs-12 center">
                            <hr class="hr-text" data-content="Or">
                        </div> 
                        <div class="col-xs-12"> 
                            <?php if (!empty($this->session->flashdata('error'))): ?>
                              <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?= $this->session->flashdata('error'); ?>
                              </div>
                            <?php endif ?>
                            <?php if(!empty($this->session->flashdata('success'))) { ?>
                                <div class="alert alert-success alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong>Success!</strong>&nbsp;<?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php } ?>
                            
                            <div class="uou-tabs accordion-xs">
                                <ul class="tabs">
                                  <li id="lia" class=""><a href="#log-in">Log In</a></li>
                                  <li id="lib" class=""><a href="#register">Register</a></li>
                                  
                                </ul> 
                                <div class="content">                                    
                                  <!-- LOGIN -->                                  
                                  <div id="log-in" class="active">
                                    
                                    <form class="form-register" action="<?php echo base_url(); ?>register/signin" method="post">
                                        <input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                                      <input id="txtEmail2" name="txtEmail2" type="email" placeholder="Email Address" required>
                                      <input id="txtPass2" name="txtPass2" type="password" placeholder="Password" required>
                                      <button type="submit">Login</button>
                                      <!--<div class="login-with"> <span>Or login with:</span> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-google"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> </div>-->
                                      <div class="forget">Forgot your password? <a href="javascript:void(0);" data-toggle="modal" data-target="#modalForgot">Click Here</a></div>
                                    </form>
                                  </div>                                                                
                                    <div id="register" class="">
                                    <form class="form-register" id="form-register" onsubmit="return false;">                                        
                                      <input type="text" id="txtNama" name="txtNama" placeholder="Full Name" required="">
                                      <input type="email" id="txtEmail" name="txtEmail" required="" placeholder="Email Address">
                                      <input type="text" placeholder="Phone" id="txtPhone" name="txtPhone" required="">
                                      <input type="password" placeholder="Password" required id="txtPass" name="txtPass">                                      
                                      <br>
                                      <button type="submit" id="btnRegistrasi">Register</button>
                                      <!--<div class="login-with"> <span>Or login with:</span> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-google"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> </div>-->
                                    </form>
                                  </div>
                                  
                                </div>  
                            </div> 

                        </div>
                    </div>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div>
    </div>
</div>
<div id="modalForgot" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="register/forgot" method="post">
        <div class="modal-header">
          <h5 class="modal-title">Reset Password</h5>        
        </div>
        <div class="modal-body">
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
          <p>Type your email registered to verification</p>
          <input type="email" class="form-control" name="txtForgotEmail" placeholder="Your Email" required>
        </div>
        <div class="modal-footer" style="border-top: none;">
          <button type="submit" class="btn btn-primary">Next</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div id="modalRegister" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url(); ?>register/reg_fb" method="post">
        <div class="modal-header">
          <h5 class="modal-title">Please Complete Your Register</h5>        
        </div>
        <div class="modal-body">                    
              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
            <input id="txtidFB" name="txtidFB" type="hidden">
            <input id="txtNameFB" name="txtNameFB" type="hidden">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label right" >Email</label>
                <div class="col-sm-9">                    
                    <input id="txtEmail3" class="form-control" name="txtEmail3" type="email" placeholder="Type Your Email Address" required>
                    <div class="help-block with-errors"></div>
                </div>                                                
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label right" >New Password</label>
                <div class="col-sm-9">                                        
                    <input id="txtPass3" class="form-control" name="txtPass3" type="password" placeholder="Type New Password" required>
                    <div class="help-block with-errors"></div>
                </div>                                                
            </div>
            
            
        </div>
        <div class="modal-footer" style="border-top: none;">
          <button type="submit" class="btn btn-primary">Next</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
     $("#lia").click(function() {
        $("#lib").removeClass("active");
        $("#register").removeClass("active");
        $("#log-in").addClass("active");
    });
    $("#lib").click(function() {
        $("#lia").removeClass("active");
       
    });
    $("#btnRegistrasi").on('click',function(e){      
         e.preventDefault();         
         var validator  = $('#form-register').validate({
            rules: {                
                txtNama: {
                    required: true
                },
                txtEmail: {
                    required: true
                }, 
                txtPass: {
                    required: true
                }, 
                txtPhone: {
                    required: true
                },              
            }
        });
        validator.valid();
        $status = validator.form();
        if($status)
        {
            var post = {
              nama: $("#txtNama").val(),
              email: $("#txtEmail").val(),
              phone: $("#txtPhone").val(),              
              pass: $("#txtPass").val(), 
              token: $("#csrf_token").val(),             
            }
            $.post("<?php echo base_url(); ?>register/simpan",post, function(data){    
                if(data.error==false)
                {
                  $("#form-register")[0].reset();
                  $("#login").removeClass("active");
                  $("#register").addClass("active");

                  $("#lib").removeClass("active");
                  $("#lia").addClass("active");

                  $("#last").removeClass("active");
                  $(".first").addClass("active");
                  alert('Email Verification already sent to your email.');
                }else{
                  alert(data.message);
                   $("#form-register")[0].reset();
                }
            });
        }
    });
</script>
