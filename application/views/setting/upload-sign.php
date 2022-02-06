<style type="text/css">

    .panel-heading, .panel-body {
       border-radius: 0px;
    }
    .panel-default >.panel-heading {
       background-color: #73C92D;
       text-transform: uppercase;
       font-weight: 500;
    }
    .nav-tabs {
       border-bottom: none;
    }
    .nav-tabs>li.active>a {
          &:after {
           position: absolute;
           content: " ";
           background: #73C92D;
           width: 12px;
           height: 12px;
           border-radius: 3px 0 0 0;
           -webkit-transform: rotate(45deg);
           -ms-transform: rotate(45deg);
           transform: rotate(45deg);
           box-shadow: none;
           bottom: -60%;
           right: 50%;
        }
    }
    .nav-tabs>li>a {
       border: 1px solid transparent;
       border-right: 2px solid #000;
       border-radius: 0px;
       padding: 3px 20px;
       &:hover {
          background-color: transparent;
          border: 1px solid transparent;
          border-right: 2px solid white;
       }
    }
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
       color: black;
       cursor: pointer;
       background-color: transparent;
       border: 1px solid transparent;
       border-right: 2px solid #000;
    }

    ul.asset-list {
        margin: 20px 0px 0px 0px;
        padding: 0;
        position: relative;
        display: inline-block;
        li.photo {
            list-style: none;
            box-shadow: 0 0 1px #00a6e1;
            display: inline-block;
            margin: 10px;
            cursor: pointer;
            .asset-loading {
                width: 170px;
                position: relative;
                text-align: center;
               img {
                  max-width: 170px;
               }
            }
            .cta-delete {
                position: absolute;
                z-index: 100;
                top: 5px;
                right: 5px;
                color: white;
                cursor: pointer;
                i {
                    font-size: 20px;
                }
               &.video {
                  top: 35%;
                  left: 35%;
                  color: #e40046;
                  opacity: 0.7;
                  height: 35px;
                  width: 35px;
                  border: 2px solid transparent;
                  border-radius: 50%;
                  padding-top: 5px;
                  padding-left: 5px;
                  background-color: #e40046;
                  i {
                     font-size: 20px;
                     color: white;
                  }
               }
            }
        }
    }
    .btn.flat {
        border: none;
        color: white;
        text-shadow: none;
        border-radius: 0px;
        min-width: 160px;
    }

    .btn.flat.btn-default {
        background: #38a9de;
        padding: 12px 50px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .btn.flat.btn-submit {
        background: #e40046;
        padding: 12px 50px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .btn.flat.btn-create {
        background: #e40046;
        padding: 12px 50px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .btn-small {
        padding: 12px 30px !important;
    }

    .btn.flat.btn-chat-submit,
    .btn.flat.btn-pitch-chat-submit {
        background: #E40046;
        padding: 8px 20px;
        text-transform: uppercase;
        font-weight: bold;
        min-width: 50px;
    }

    .btn.Previous {
        background: #eee !important;
        color: #333 !important;
        border: solid 1px #aaa;
    }

    .btn.Next {
        width: 130px;
        border-radius: 0px !important;
    }

    .btn-Upload-group {
        margin: 10px auto;
        padding: 5px;
    }

    .btn.flat.Upload {
        background: white;
        border: solid 1px #E40046;
        color: #E40046;
        font-size: 13px;
        margin-left: 10px;
    }
    .actions {
       margin: 50px 10px;
    }
    .modal-body.payment {
        padding: 20px 30px;
        margin: 0 auto;
        h3.title {
            font-size: 1.8em;
            color: #e40046;
            text-align: center;
            font-weight: 500;
            margin: 20px 0;
        }
        button.close {
            color: #e40046;
            font-size: 23px;
            padding-bottom: 15px;
            width: 30px;
            height: 30px;
            border: solid 2px #e40046;
            border-radius: 50%;
            margin-top: 5px;
            margin-right: 5px;
        }
        p {
            font-size: 16px;
            text-align: center;
            padding: 0 1.5em;
        }
       input.input-form {
          width: 100%;
          padding: 5px 0;
          margin: 10px 0;
       }
       .add-link {
          text-align: left;
          a {
             color: #e40046;
             margin-left: -20px;
          }
       }
       .actions {
          text-align: center;
       }
    }
    // Dropdown
    ul.nav {
      list-style: none;
       li {
          display: inline-block;
          //Notifications
          &.message-nav {
             float: right;
             margin-right: 20px;
             a {
                color: black;
                background-color: white;
                &:hover, &.open, &.focus, &.active{
                   cursor: pointer;
                   color: #e40046;
                   background-color: white;
                }
             }
             i {
                font-size: 20px;
             }
          }
          //Filter Sort
          &.filter-sort {
             float: right;
             margin-right: 20px;
             a {
                font-size: 18px;
                color: black;
                background-color: white;
                &:hover, &.open, &.focus, &.active{
                   cursor: pointer;
                   color: #e40046;
                   background-color: white;
                   text-decoration: none;
                }
             }
          }
       }
    }
    .dropdown-menu {
        padding: 0;
        margin: 0;
        background: white;
        min-width: 200px;        
        position: absolute;
        top: 50px;
        display: none;
        z-index: 100;
        border-radius: 0px;
        &.sorting {
           width: 250px;
        }
        &:before {
           position: absolute;
           content: "";
           background: #fff;
           width: 12px;
           height: 12px;
           border-radius: 3px 0 0 0;
           -webkit-transform: rotate(45deg);
           -ms-transform: rotate(45deg);
           transform: rotate(45deg);
           box-shadow: -1px -1px 1px rgba(2,2,4,0.2);
           top: -6px;
           right: 12px;
        }
        li {
          width: 100%;
          &.notification-title {
             text-transform: uppercase;
             color: black;
             font-weight: 500;
             font-size: 18px;
             padding: 5px 20px;
             margin: 5px auto 5px;
          }
          &.notification-footer {
             text-transform: uppercase;
             color: black;
             font-weight: 500;
             font-size: 18px;
             padding: 5px 20px;
             margin: -5px auto 5px;
             border-top: solid 1px rgba(151,151,151,.8);
             a:hover {text-decoration:none;}
          }
       }
        ul.notification-list {
           li.notification-item {
              padding: 5px 25px;
              margin-left: -35px;
              margin-right: 0px;
              width: 360px;
              border-top: solid 1px rgba(151,151,151,.8);
             }
             a.notification-anchor {
                display: block;
                clear: both;
                &:hover {
                   text-decoration: none;
                }
             }
            .notification-anchor {           
               span.notification-img {
                  float: left;
                  margin-right: 10px;
                  height: 80px;
                  padding-top: 5px;
                  img {
                     border-radius: 50%;
                     width: 60px;
                     height: 60px;
                  }
               }
               p {
                  margin-bottom: 0px;
                  color: #8D8D8D;
                  font-size: 14px;
                  &.notification-type {
                     font-size: 16px;
                     color: #E63A45;
                  }
                  &.notification-project {
                     font-style: italic;
                  }
               }
            }
          }
        ul.filter-sort-list {
           padding: 10px;
           li {
              padding: 5px;
              
           }  
        }
    }

    .skill-zone {
       .label {
          margin-right: 5px;
       }
    }




    .title-adv {
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 2;
          overflow: hidden;
      }
    .post-media {    
        height: 200px;    
    }

    .ckateg {
        text-align: center;
        padding: 10px;
        background-color: #565f66;
        color: #fff;
    }

    .ckateg a {        
        color: #fff;
    }

    .isotope {
        padding-right: 0;
        padding-left: 0;
    }
    .clients-li li:first-child {
         padding-left: 15px; 
    }  
    .verify-alert .button-alert {
        margin-top: 5px;
        padding: 6px;
    }    
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;    
        border-radius: 0;
    }
    .btn-default {
        color: #fff;
        margin-top: 10px;
        margin-right: 16px;
    }
    .verify-alert .circle-phone {
        color: #f8d2c9;
    }
    .ph {
        background-color: #f5f5f5;
        border-color: #ddd;
    }   
    .mason {
        margin-bottom: 30px;                    
        float: left;
    } 
    .putih {
        background-color: #fff;
    }
    .page-content.custom-bkg {
        padding-top: 0px;
    }
    .page-title-style02 {    
        margin-bottom: 15px;
    }
    .title-adv {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
    }
    ul li, ol li {
        padding-bottom: 5px;
        padding-top: 5px;
    }
    .container {        
        padding-left: 5px;
        padding-right: 5px;
    }
    .panel-default>.panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
    }
    .panel {        
        background-color: transparent;
    }
     .dropzone {        
        border: 2px dashed #0087F7;
        text-align: center;
        border-radius: 3px;        
        background-color: #ededed;
        cursor: pointer;
    }
     @media (min-width:767px)  {    
        .container-top {
            margin-top:100px;
        }
        body {
            margin: 40px;
        }
    }

</style>

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
                            <li class="menu-item">
                                <a href="<?= base_url('setting') ?>" >Profile</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/dokumen') ?>" >Document</a>
                            </li>
                            <!-- <li class="menu-item">
                                <a href="#visi" class="click">Notifikasi</a>
                            </li> -->
                            <li class="menu-item">
                                <a href="<?= base_url('setting/iklan') ?>">Product List</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/pengajuan') ?>">Submission List</a>
                                <span class="label label-warning" style="top: 315px;left: 10px;right: unset;"><?= ($notifikasi["count_submission"]==0)? "" : $notifikasi["count_submission"] ?></span>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/upload') ?>">Upload Sign Document</a>
                                <span class="label label-warning" style="top: 360px;left: 10px;right: unset;"><?= ($notifikasi["count_sign"]==0)? "" : $notifikasi["count_sign"] ?></span>
                            </li>                 
                            <li class="menu-item">
                                <a href="<?= base_url('setting/calendar') ?>">Schedule Meet Up</a>
                                <span class="label label-warning" style="top: 400px;left: 10px;right: unset;"><?= ($notifikasi["count_meetup"]==0)? "" : $notifikasi["count_meetup"] ?></span>
                            </li>           
                            <li class="menu-item">
                                <a href="<?= base_url('setting/notifikasi') ?>">Notification</a>
                                <span class="label label-warning" style="top: 406px;left: 10px;right: unset;"><?= ($notifikasi["count"]==0)? "" : $notifikasi["count"] ?></span>
                            </li>     
                            <li class="menu-item">
                                <a href="<?= base_url('register/logout') ?>" class="click">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="col-md-9"> 
                 <div class="title">
                    <h3>Upload Sign</h3>
                </div>
                <div class="page-content custom-bkg bkg-grey clearfix">  
                    <input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >                                                          
                        <div class="col-md-12" style="padding-left: 0;padding-right: 0"> 
                            <div class="panel with-nav-tabs panel-default" style="margin-bottom:0 ">
                               <div class="panel-heading single-project-nav">
                                    <ul class="nav nav-tabs"> 
                                        <li class="active">
                                          <a href="#pengajuan_saya" data-toggle="tab">Buyer</a>
                                        </li>
                                        <li>
                                          <a href="#pengajuan_client" data-toggle="tab">Seller</a>
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="pengajuan_saya">
                                            <div class="form-group row">
                                                <label for="country" class="col-sm-3 col-form-label right" >Inquiry Number</label>
                                                <div class="col-sm-9">
                                                    <select id="kode_pengajuan" name="kode_pengajuan" class="form-control">
                                                        <?php 
                                                        foreach($groups as $row_group)
                                                        { 
                                                          echo '<option value="'.$row_group->kode_pengajuan.'">'.$row_group->kode_pengajuan.'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>                                
                                            <div class="dropzone" id="drop_me">
                                                <div class="dz-message">
                                                    <h3> Click or Drop Picture Here</h3>
                                                </div>
                                            </div>   
                                            <div class="row">
                                                <a style="float: left;margin-left: 15px" id="btnDown" class="btn btn-default hidden" href="#">
                                                    <i class="fa fa-download"></i>&nbsp;&nbsp;Download 
                                                    <span id="lblKode"></span>
                                                </a>

                                                <button type="button" id="btnUp" class="btn btn-default"><i class="fa fa-upload"></i>&nbsp;&nbsp;Upload Now</button>
                                            </div>
                                            <h3 style="background: darkgoldenrod;color: #fff;padding: 5px;margin-bottom: 0;">Submission Sign Step</h3>  
                                            <ul style="padding: 10px;background-color: gainsboro;color: black;">
                                                <li>Download the PDF file according to the inquiry code</li>
                                                <li>Print PDF file that has been downloaded</li>
                                                <li>Put a signature on the stamp 6000</li>
                                                <li>Scan dokumen and save it with extention JPEG,JPG atau PDF</li>
                                                <li>Reupload the document in this page to complete the submission</li>
                                                <li>Please waiting until document are processed</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="pengajuan_client">
                                            <div class="form-group row">
                                                <label for="country" class="col-sm-3 col-form-label right" >Inquiry No.</label>
                                                <div class="col-sm-9">
                                                    <select id="kode_pengajuan_2" name="kode_pengajuan_2" class="form-control">
                                                        <?php 
                                                        foreach($groups_2 as $row_group)
                                                        { 
                                                          echo '<option value="'.$row_group->kode_pengajuan.'">'.$row_group->kode_pengajuan.'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>                                
                                            <div class="dropzone" id="drop">
                                                <div class="dz-message">
                                                    <h3> Click or Drop picture here</h3>
                                                </div>
                                            </div>   
                                            <div class="row">
                                                <a style="float: left;margin-left: 15px" id="btnDown_2" class="btn btn-default hidden" href="#">
                                                    <i class="fa fa-download"></i>&nbsp;&nbsp;Download 
                                                    <span id="lblKode_2"></span>
                                                </a>

                                                <button type="button" id="btnUp_2" class="btn btn-default"><i class="fa fa-upload"></i>&nbsp;&nbsp;Upload Now</button>
                                            </div> 
                                            <h3 style="background: darkgoldenrod;color: #fff;padding: 5px;margin-bottom: 0;">Submission Sign Step</h3>  
                                            <ul style="padding: 10px;background-color: gainsboro;color: black;">
                                                <li>Download the PDF file according to the inquiry code</li>
                                                <li>Print PDF file that has been downloaded</li>
                                                <li>Put a signature on the stamp 6000</li>
                                                <li>Scan dokumen and save it with extention JPEG,JPG atau PDF</li>
                                                <li>Reupload the document in this page to complete the submission</li>
                                                <li>Please waiting until document are processed</li>
                                            </ul>                        
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
<script src="<?= base_url(); ?>assets/js/dropzone.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){    
        select_pengejuan();
    });

    function select_pengejuan() {
        $.ajax({
            type:"GET",
            data:{'csrf_token' : $("input[name=csrf_token]").val(), 'kode_pengajuan': $('#kode_pengajuan').val()},
            url:"<?php echo base_url(); ?>setting/get_pdf/"+ $('#kode_pengajuan').val(),
            cache:false,
            dataType: 'json',
            success: function(data){ 
                if(data.data==""){
                    $("#btnDown").addClass('hidden');
                }else{
                    $("#btnDown").removeClass('hidden');
                    $("#lblKode").text('('+ data.data[0]["kode_pengajuan"]+')');
                    $("#btnDown").attr('href',"<?php echo base_url(); ?>setting/download/" + data.data[0]["id"] +"/1");                    
                }                
            },
            error: function(){
                console.log("Error");
            }
        });

        $.ajax({
            type:"GET",
            data:{'csrf_token' : $("input[name=csrf_token]").val(), 'kode_pengajuan': $('#kode_pengajuan_2').val()},
            url:"<?php echo base_url(); ?>setting/get_pdf/"+ $('#kode_pengajuan_2').val(),
            cache:false,
            dataType: 'json',
            success: function(data){ 
                if(data.data==""){
                    $("#btnDown_2").addClass('hidden');
                }else{
                    $("#btnDown_2").removeClass('hidden');
                    $("#lblKode_2").text('('+ data.data[0]["kode_pengajuan"]+')');
                    $("#btnDown_2").attr('href',"<?php echo base_url(); ?>setting/download/" + data.data[0]["id"] +"/2");                    
                }
                
            },
            error: function(){
                console.log("Error");
            }
        }); 
    }
    $('#kode_pengajuan_2').on('change', function(event){                        
        event.preventDefault();
        var id = $('#kode_pengajuan_2').val();
        $.get('<?php echo base_url(); ?>setting/get_pdf/' + id, function(data){     
            if(data.data==""){
                $("#btnDown_2").addClass('hidden');
            }else{
                $("#btnDown_2").removeClass('hidden');
                $("#lblKode_2").text('('+ data.data[0]["kode_pengajuan"]+')');
                $("#btnDown_2").attr('href',"<?php echo base_url(); ?>setting/download/" + data.data[0]["id"] +"/2");                    
            }
        });
    }) 

    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#drop_me", {  
        url: "<?php echo base_url(); ?>setting/proses_upload_sign",       
        autoProcessQueue:false,
        maxFilesize: 1,
        method:"post",
        uploadMultiple: false,
        clickable: true,
        acceptedFiles:"image/*,.pdf",
        paramName:"userfile",
        dictInvalidFileType:"Type file ini tidak dizinkan",
        addRemoveLinks:true,
        params: {csrf_token: $("input[name=csrf_token]").val(), kode: $("#kode_pengajuan").val()},    
        success: function(file, response){            
            alert('Dokumen Berhasil diupload');
            window.location.reload();
        },
        init: function() {
            var th = this;
            this.on('queuecomplete', function(file, response){
            });                     
            this.on("success", function(file, response) {
            });                                            
        }  
    });
    //Event ketika Memulai mengupload
    myDropzone.on("sending",function(a,b,c){                   
        a.token= $("input[name=csrf_token]").val();
        var kode_pengajuan = $("#kode_pengajuan").val();
        c.append("token_sertifikat",a.token);
        c.append("kode",kode_pengajuan); 
    });

    var myDropzone2 = new Dropzone("#drop", {  
        url: "<?php echo base_url(); ?>setting/proses_upload_sign_2",       
        autoProcessQueue:false,
        maxFilesize: 1,
        method:"post",
        uploadMultiple: false,
        clickable: true,
        acceptedFiles:"image/*,.pdf",
        paramName:"userfile",
        dictInvalidFileType:"Type file ini tidak dizinkan",
        addRemoveLinks:true,
        params: {csrf_token: $("input[name=csrf_token]").val(), kode: $("#kode_pengajuan_2").val()},    
        success: function(file, response){
            alert('Dokumen Berhasil diupload');
            window.location.reload();
        },
        init: function() {
            var th = this;
            this.on('queuecomplete', function(file, response){
            });                     
            this.on("success", function(file, response) {
            });                                            
        }  
    });
    //Event ketika Memulai mengupload
    myDropzone2.on("sending",function(a,b,c){                   
        a.token= $("input[name=csrf_token]").val();
        var kode_pengajuan = $("#kode_pengajuan_2").val();        
        c.append("kode",kode_pengajuan); 
    });


    $('#btnUp').on('click',function(e){
        e.preventDefault();                 
        myDropzone.processQueue(); 
        $("#drop_me").attr('class','dropzone dz-clickable');
        $(".dz-preview").remove('');
        $(".dz-complete").remove('');    
    });
    $('#btnUp_2').on('click',function(e){
        e.preventDefault();                 
        myDropzone2.processQueue(); 
        $("#drop").attr('class','dropzone dz-clickable');
        $(".dz-preview").remove('');
        $(".dz-complete").remove('');    
    });
</script>
