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
                    <div class="panel-heading" style="color: #fff;padding: 10px;background: -webkit-linear-gradient(top, #210d9c 0%,#2c244a 100%);">Upload your documents to complete register</div>
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
                        <div class="tab-content">             
                            <div class="tab-pane fade in active" id="tab2default">
                                <ul class="doc">
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>Identify Card</span> 
                                                    <?php 
                                                        if(empty($files_ktp)) { ?>
                                                        <span class='job-place unverified'>Unverified</span> 
                                                    <?php }else{ ?>
                                                        <span class='job-place verified'>Verified</span>
                                                    <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">                                                
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFiles[]"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">                                                        
                                                        <?php if(!empty($files_ktp)): foreach($files_ktp as $file): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>NPWP</span> 
                                                        <?php 
                                                            if(empty($files_npwp)) { ?>
                                                            <span class='job-place unverified'>Unverified</span> 
                                                        <?php }else{ ?>
                                                            <span class='job-place verified'>Verified</span>
                                                        <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFilesNPWP[]" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmitNPWP" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">
                                                        <?php if(!empty($files_npwp)): foreach($files_npwp as $file_npwp): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file_npwp['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file_npwp['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>Diploma Certificate</span> 
                                                        <?php 
                                                            if(empty($files_ijazah)) { ?>
                                                            <span class='job-place unverified'>Unverified</span> 
                                                        <?php }else{ ?>
                                                            <span class='job-place verified'>Verified</span>
                                                        <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFilesIJAZAH[]" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmitIJAZAH" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">
                                                        <?php if(!empty($files_ijazah)): foreach($files_ijazah as $file_ijazah): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file_ijazah['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file_ijazah['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>SIUP</span> 
                                                        <?php 
                                                            if(empty($files_siup)) { ?>
                                                            <span class='job-place unverified'>Unverified</span> 
                                                        <?php }else{ ?>
                                                            <span class='job-place verified'>Verified</span>
                                                        <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFilesSIUP[]" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmitSIUP" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">
                                                        <?php if(!empty($files_siup)): foreach($files_siup as $file_siup): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file_siup['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file_siup['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>TDP</span> 
                                                        <?php 
                                                            if(empty($files_tdp)) { ?>
                                                            <span class='job-place unverified'>Unverified</span> 
                                                        <?php }else{ ?>
                                                            <span class='job-place verified'>Verified</span>
                                                        <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFilesTDP[]" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmitTDP" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">
                                                        <?php if(!empty($files_tdp)): foreach($files_tdp as $file_tdp): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file_tdp['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file_tdp['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                </ul>
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

