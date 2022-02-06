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
<div class="page-title-style01" style="padding-bottom: 0">
    <div class="banr-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                                        
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 border-form">                           
                        <div class="col-xs-12"> 
                            <?php if (!empty($this->session->flashdata('error'))): ?>
                              <div class="alert alert-danger">
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
                                <h1 class="text-center">Reset Password</h1>
                                <form class="form-register" action="<?php echo base_url(); ?>register/reset" method="post">
                                    <input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" > 
                                    <input type="hidden" name="email" value="<?= $email ?>"> 
                                    <input type="hidden" name="code" value="<?= $code ?>">                                 
                                  <input id="txtPass" name="txtPass" type="password" placeholder="New Password" required>
                                  <input id="txtPass2" name="txtPass2" type="password" placeholder="Retype New Password" required>
                                  <button type="submit">Recovery</button>                                      
                                </form> 
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
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
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
