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
                    
                    <h1 class="text-center" style="color: #333333">Tingkatkan produktivitas Anda.</h1>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 border-form">   
                        <div class="col-xs-12 text-center">
                            <a id="facebookRegisterButton" class="btn btn-facebook mb5" href="javascript:void(0);">
                                <i class="fa fa-facebook" style="float:left;font-size:20px;margin-right: 5px"></i>
                                Daftar menggunakan Facebook
                            </a>
                        </div>
                        <div class="col-xs-12 center">
                            <hr class="hr-text" data-content="ATAU">
                        </div> 
                        <div class="col-xs-12"> 
                            <?php if (!empty($this->session->flashdata('error'))): ?>
                              <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?= $this->session->flashdata('error'); ?>
                              </div>
                            <?php endif ?>
                            <div class="uou-tabs accordion-xs">
                                <ul class="tabs">
                                  <li class=""><a href="#register">Register Now</a></li>
                                  <li class=""><a href="#log-in">Member Login</a></li>
                                </ul> 
                                <div class="content">                                    
                                  <a href="#register" class="accordion-link first">Register Now</a>
                                    <div id="register" class="active">
                                    <form class="form-register" id="form-register" onsubmit="return false;">
                                      <input type="text" id="txtNama" name="txtNama" placeholder="Full Name" required="">
                                      <input type="email" id="txtEmail" name="txtEmail" required="" placeholder="Email Address">
                                      <input type="text" placeholder="Phone" id="txtPhone" name="txtPhone" required="">
                                      <input type="password" placeholder="Password" required id="txtPass" name="txtPass">
                                      <br>
                                      <button type="submit" id="btnRegistrasi">Register</button>
                                      <div class="login-with"> <span>Or login with:</span> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-google"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> </div>
                                    </form>
                                  </div>
                                  
                                  <!-- LOGIN -->
                                  <a href="#log-in" class="accordion-link last active">Member Login</a>
                                  <div id="log-in" class="">
                                    
                                    <form class="form-register" action="<?php echo base_url(); ?>register/signin" method="post">
                                        <input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                                      <input id="txtEmail2" name="txtEmail2" type="email" placeholder="Email Address" required>
                                      <input id="txtPass2" name="txtPass2" type="password" placeholder="Password" required>
                                      <button type="submit">Login</button>
                                      <div class="login-with"> <span>Or login with:</span> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-google"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> </div>
                                      <div class="forget">Forgot your password? <a href="#.">Click Here</a></div>
                                    </form>
                                  </div>                              
                                </div>  
                            </div> 
                                   
                            <!-- <form class="wpcf7 clearfix">
                                <fieldset>
                                    <label>
                                        <span class="required">*</span> Your request:
                                    </label>

                                    <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                                        <option value="I need an offer for contract logistics">I need an offer for contract logistics</option>
                                        <option value="I need an offer for air freight">I need an offer for air freight</option>
                                        <option value="I want to become your partner">I want to become your partner</option>
                                        <option value="I have some other request">I have some other request</option>
                                    </select>
                                </fieldset>

                                <fieldset>
                                    <label>
                                        <span class="required">*</span> First Name:
                                    </label>

                                    <input type="text" class="wpcf7-text" id="contact-name">
                                </fieldset>

                                <fieldset>
                                    <label>
                                        <span class="required">*</span> Last Name:
                                    </label>

                                    <input type="text" class="wpcf7-text" id="contact-last-name">
                                </fieldset>

                                <fieldset>
                                    <label>
                                        <span class="required">*</span> Email:
                                    </label>

                                    <input type="url" class="wpcf7-text" id="contact-email">
                                </fieldset>

                                <fieldset>
                                    <label>
                                        <span class="required">*</span> Message:
                                    </label>

                                    <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
                                </fieldset>

                                <input type="submit" class="wpcf7-submit" value="send" />
                            </form> -->
                        </div>
                    </div>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
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
            }
            $.post("<?php echo base_url(); ?>register/simpan",post, function(data){    
                if(data.error==false)
                {
                    alert('Email Verifikasi telah terkirim ke Email Anda. Lakukan aktifasi segera.');
                }
            });
        }
    });
</script>
