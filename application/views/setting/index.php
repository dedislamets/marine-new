<style type="text/css">
    .clients-li li:first-child {
         padding-left: 15px; 
    }  
    .verify-alert .button-alert {
        margin-top: 5px;
        padding: 6px;
    }    
    .btn-primary {
        background: #ed6c09;
        border-color: #ed6c09;
    }  
    .verify-alert .circle-phone {
        color: #f8d2c9;
    }
    .ph {
        background-color: #f5f5f5;
        border-color: #ddd;
    }
    .page-title-style02 {    
        margin-bottom: 15px;
    }
    
    @media (min-width:767px)  {    
        .container-top {
            margin-top:100px;
        }
        body {
            margin: 40px;
        }
    }
    /*.panel-default>.panel-heading {*/
    /*    background: -webkit-linear-gradient(top, #210d9c 0%,#2c244a 100%);*/
    /*}*/
    .panel-default>.panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
    }
</style>
<input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
<div class="page-content">
    <div class="container-fluid container-top">
        <div class="row">
            <aside class="col-md-3 aside aside-left sidebar-left">
                <div class="hidden" >                   
                    <div class="">
                        <figure>
                            <a href="#">
                                <img src="" class="img-circle" alt="">
                            </a>
                        </figure>                                
                    </div>                                                    
                </div>
                <div class="clearfix"></div>   
                <ul class="aside-widgets">
                    <li class="widget widget_nav_menu clearfix">
                        <div class="panel-heading ph">
                            <h3 class="panel-title">Setting</h3>
                        </div>     
                        <div>
                            <div class="shopee-create" data-ember-action="" data-ember-action-6365="6365">
                                <div class="button">
                                    <a href="<?= base_url('setting/baru') ?>">
                                        <svg viewBox="0 0 32 32"><path d="M17.5 2.5h-3v12h-12v3h12v12h3v-12h12v-3h-12v-12z"></path></svg>
                                    </a>
                                </div>
                                <div class="description">Add Product</div>
                            </div>
                        </div>                
                        <ul class="menu">
                            <? $this->load->view('nav/sidebar'); ?>
                            
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="col-md-9"> 
                <div class="panel with-nav-tabs panel-default">
                   
                    <div class="panel-body">
                        <?php if (!empty($this->session->flashdata('error'))): ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?= $this->session->flashdata('error'); ?>
                            </div>
                        <?php endif ?>
                        <?php if(!empty($this->session->flashdata('statusMsg'))) { ?>
                            <div class="alert alert-success alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Success!</strong><?php echo $this->session->flashdata('statusMsg'); ?>
                            </div>
                        <?php } ?>
                          
                        <div class="row" style="margin-bottom: 0">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="verify-alert panel-collapse pull out hidden">
                                        <div class="account-profile-alerts">
                                            <div class="row" style="margin-bottom: 0">
                                                <div class="col-md-1 exclamation mt5 pl0">
                                                    <span class="fa-stack fa-lg fa-3x">
                                                      <i class="fa fa-circle fa-stack-2x circle-phone"></i>
                                                      <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </div>
                                                <div class="col-md-10 mt10 contact-alert">
                                                    <span class="col-md-10">
                                                        Banyak calon pembeli mengeluh <b> sulit menghubungi agen/pemilik </b> karena no. telepon tidak aktif/salah.
                                                        Jangan biarkan properti gagal terjual.                            </span>
                                                    <span class="col-md-2">
                                                        <a id="btnBannerAlertsVerify" class="btn btn-secondary btn-sm" href="#" data-label="Update Profile Page">Verifikasi</a>                            
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">                                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Profile</h3>
                                    </div>
                                    <div class="panel-body">
                                        <span id="uploaded_image"></span>
                                        <div class="form-group">
                                            <figure class="profile-img">
                                                <img id="profileimg" src="<?php echo base_url('uploads/profile/'.$data[0]->foto_profil); ?>" alt="">
                                            </figure>
                                            <h3 class="profile-fullname"><?= $data[0]->nama ?></h3>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Change foto profile                   
                                                    <i class="fa fa-gear"></i> 
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="btn-file js-upload-profile-pic">
                                                            <input name="file" id="file" type="file">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="clearfix"></div>
                                        <form id="w1" action="/setting/updatepassword" method="post">
                                            <input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                                            <div class="form-group field-userpasswordupdateform-oldpassword required">
                                                <label class="control-label" for="userpasswordupdateform-oldpassword">Old Password</label>
                                                <input type="password" id="oldpassword" class="form-control" name="oldPassword" required>
                                                <div class="help-block"></div>
                                            </div>            
                                            <div class="form-group field-userpasswordupdateform-newpassword required">
                                                <label class="control-label" for="userpasswordupdateform-newpassword">New Password</label>
                                                <input type="password" id="newPassword" class="form-control" name="newPassword" required>
                                                <div class="help-block"></div>
                                            </div>            
                                            <div class="form-group field-userpasswordupdateform-confirmnewpassword required">
                                                <label class="control-label" for="userpasswordupdateform-confirmnewpassword">Retype New Password</label>
                                                <input type="password" id="newPassword2" class="form-control" name="newPassword2" required>
                                                <div class="help-block"></div>
                                            </div>            
                                            <div class="panel-footer text-right">
                                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                                                <button type="submit" class="btn btn-secondary btn-sm">Save</button>            
                                            </div>
                                        </form>    
                                    </div>
                                </div>
                                                      
                            </div>
                            <div class="col-lg-7">
                                <!-- <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Cover Image</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="no-cover-image">Cover image tidak tersedia</div>
                                        <div class="panel-footer text-right">
                                            <a class="btn btn-secondary btn-sm js-upload-cover-image" href="/account/premium/cover-image/index" title="" data-toggle="tooltip" data-placement="top" data-original-title="Anda membutuhkan 10 Koin untuk mengunggah Cover Image">Ubah Cover Image</a>        
                                        </div>
                                    </div>
                                </div> -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Profile Information</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form id="form-profil" action="<?php echo base_url(); ?>setting/ajax_save_profil" onsubmit="return false;">
                                            <div class="form-group">
                                                <label class="control-label" >Full Name</label>&nbsp;
                                                <input type="text" id="fullname" class="form-control" name="fullName" value="<?= $data[0]->nama ?>" required>
                                                <div class="help-block"></div>
                                            </div>           
                                             <div class="form-group">
                                                <label class="control-label" for="baseprofileupdateform-email">Email Adress</label>                                                        
                                                <input type="text" id="emailuser" class="form-control" name="emailuser" value="<?= $data[0]->email ?>" readonly>
                                                <div class="help-block"></div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="control-label">Mobile Phone</label>&nbsp;
                                                <input type="text" id="hp" class="form-control" name="hp" value="<?= $data[0]->phone ?>" required>
                                                <div class="help-block"></div>
                                            </div>              
                                            <div class="form-group">
                                                <label class="control-label" >Personal Description</label>
                                                <textarea id="biodata" class="form-control" name="biodata" rows="3"><?= $data[0]->biodata ?></textarea>
                                                <div class="help-block"></div>
                                            </div>            
                                            <div class="form-group">
                                                <label class="control-label" >Address</label>
                                                <textarea id="address" class="form-control" name="address" rows="3"><?= $data[0]->address ?></textarea>
                                                <div class="help-block"></div>
                                            </div>            
                                            <div class="panel-footer text-right">
                                                <button type="reset" class="btn btn-default btn-sm">Reset</button>     
                                                <button type="submit" id="btnSave" class="btn btn-secondary btn-sm">Save</button>            
                                            </div>
                                        </form>    
                                    </div>
                                </div>                          
                            </div>
                        </div>  
                            
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        data: {
            csrf_token: <?php echo "'". $this->security->get_csrf_hash()."'" ?>
        }
    });
    $(document).on('change', '#file', function(){
        var name = document.getElementById("file").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
        {
           alert("Invalid Image File");
        }

        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);
        var f = document.getElementById("file").files[0];
        var fsize = f.size||f.fileSize;
        if(fsize > 2000000)
        {
           alert("Image File Size is very big");
        }
        else
        {
           form_data.append("file", document.getElementById('file').files[0]);
           form_data.append("csrf_token", $("input[name=csrf_token]").val());
           $.ajax({
                url:"<?php echo base_url(); ?>setting/foto_profil",
                method:"POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend:function(){
                    $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
                },   
                success:function(data)
                {
                    $('#uploaded_image').html('');
                    $(".profile-img").empty();
                    $('.profile-img').html(data.foto);
                    window.location.reload();
                }
           });
        }
    });
    $('.mov').click(function(e){      
       e.preventDefault();    
       var id = $(this).attr('id');
        $('.mov').removeClass('active');  
        $(this).addClass('active');
        var link = $(this).children().attr("href").replace("#","");
        $(".tab-pane").removeClass("in active");        
        link = $("#" + link).addClass("in active");        
    });

    $("#btnSave").on('click',function(e){      
         e.preventDefault();         
         var validator  = $('#form-profil').validate({
            rules: {                
                fullname: {
                    required: true
                },
                hp: {
                    required: true
                },                              
            }
        });
        validator.valid();
        $status = validator.form();
        if($status)
        {
            var post = $('form#form-profil').serialize();
            $.post("<?php echo base_url(); ?>setting/ajax_save_profil",post+'&csrf_token='+ $("input[name=csrf_token]").val(), function(data){    
                if(data.error==false)
                {
                    alert('Profil berhasil terupdate');
                }
            });
        }
    });
</script>
