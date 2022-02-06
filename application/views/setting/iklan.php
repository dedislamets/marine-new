
<style type="text/css">
    .nav-tabs>li>a {
        color:#000;   
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
    .mason {
        margin-bottom: 30px;                    
        float: left;
    } 
    .putih {
        background-color: #fff;
    }
    .page-content.custom-bkg {
        padding-top: 15px;
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
    /*.panel {        */
    /*    background-color: transparent;*/
    /*}*/

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
                            <h3 class="panel-title">Pengaturan</h3>
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
                <?php if(!empty($this->session->flashdata('success'))) { ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Success!</strong><?php echo $this->session->flashdata('sucess'); ?>
                    </div>
                <?php } ?> 
                 <div class="title">
                    <h3>My Products</h3>
                </div>
                <div class="page-content bkg-grey clearfix">                    
                        <div class="col-md-12" style="padding-left: 0;padding-right: 0">                           
                            <div class="panel with-nav-tabs panel-default clearfix">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active mov" id="biodata">
                                            <a href="#tab1default" data-toggle="tab">All</a>
                                        </li>
                                        <li id="live" class="mov">
                                            <a href="#tab2default" data-toggle="tab" >Live</a>
                                        </li>
                                        <li id="nonaktif" class="mov">
                                            <a href="#tab3default" data-toggle="tab">Non Aktif</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1default">  
                                            <ul class="col-md-12 blog-posts isotope">
                                            <?php 
                                                $no=1; 
                                                foreach ($listing as $key => $value): ?>
                                                    <?php 
                                                        $service = $value->service; 

                                                        if ($service == 'Trading') {
                                                            $price = number_format($value->price);
                                                        } else if ($service == 'CSM') {
                                                            $price = number_format($value->price_csm);
                                                        } else if ($service == 'Transportation') {
                                                            $price = number_format($value->price_freight);
                                                        } else if ($service == 'Chartering') {
                                                            $service = ucwords($value->type_charter)." Charter";
                                                            $price = number_format($value->price_charter);
                                                        } 
                                                    ?>
                                                    <li class="blog-post clearfix isotope-item col-xs-6 col-sm-6 col-md-4 col-lg-4 nopad mason">
                                                        <div class="putih clearfix "> 
                                                            <div class="post-date">
                                                                <p class="table-adv">Rp <?= $price; ?></p>
                                                            </div>                                                            
                                                            <div class="ckateg">                               
                                                                <div class="post-category">                                    
                                                                    <a href="#" class="table-adv">                                                
                                                                        <?= $service; ?>                                        
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <?php
                			                                    if ($this->agent->is_mobile())
                			                                    {
                			                                        $agent = "thumbnail/". $value->nama_foto_thumb;
                			                                    }
                			                                    else
                			                                    {
                			                                        $agent = $value->nama_foto;
                			                                    }
                			                                ?>
                                                            <div class="post-body">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="table-adv">
                                                                    <h3 class="title-adv table-adv"><?= $value->title; ?></h3>
                                                                </a>                              
                                                            </div>
                                                            <div class="post-media">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="post-img">
                                                                     <img src="<?= base_url(); ?>uploads/iklan/<?= isset($value->nama_foto)?$agent:'not-found.jpg' ?>" />
                                                                </a>
                                                            </div>
                                                            <div class="post-footer">
                                                                <div class="col-md-6" style="padding:0">
                                                                    <a href="<?= base_url(); ?>setting/edit/<?= $value->id; ?>" class="btn btn-info btn-block" style="margin-bottom:10px;">
                                                                        <i class="fa fa-edit"></i>&nbsp;Edit
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6" style="padding:0">
                                                                    <a href="<?= base_url(); ?>setting/delete_ship/<?= $value->id; ?>" class="btn btn-info btn-block" style="margin-bottom:10px;">
                                                                        <i class="fa fa-trash"></i>&nbsp;Delete
                                                                    </a>
                                                                </div>
                                                                <div class="checkbox">
                                                                      <label>
                                                                        <input type="checkbox" data-toggle="toggle" class="chkactive" data-id="<?= $value->id; ?>"
                                                                        <?php 
                                                                            echo ($value->active==true)? 'checked' : ''?>>
                                                                        Show Product
                                                                      </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>                                  
                                            <?php 
                                                $no++; 
                                                endforeach ?>                                            
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="tab2default">
                                            <ul class="col-md-12 blog-posts isotope">
                                            <?php 
                                                $no=1; 
                                                foreach ($live as $key => $value): ?>
                                                    <?php 
                                                        $service = $value->service; 

                                                        if ($service == 'Trading') {
                                                            $price = number_format($value->price);
                                                        } else if ($service == 'CSM') {
                                                            $price = number_format($value->price_csm);
                                                        } else if ($service == 'Transportation') {
                                                            $price = number_format($value->price_charter);
                                                        } else if ($service == 'Chartering') {
                                                            $service = ucwords($value->type_charter)." Charter";
                                                            $price = number_format($value->price_charter);
                                                        } 
                                                    ?>
                                                    <li class="blog-post clearfix isotope-item col-xs-6 col-sm-6 col-md-4 col-lg-4 nopad mason">
                                                        <div class="putih clearfix "> 
                                                            <div class="post-date">
                                                                <p class="table-adv">Rp <?= $price; ?></p>
                                                            </div>                                                            
                                                            <div class="ckateg">                               
                                                                <div class="post-category">                                    
                                                                    <a href="#" class="table-adv">                                                
                                                                        <?= $service; ?>                                        
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="post-body">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="table-adv">
                                                                    <h3 class="title-adv table-adv"><?= $value->title; ?></h3>
                                                                </a>                              
                                                            </div>
                                                            <div class="post-media">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="post-img">
                                                                     <img src="<?= base_url(); ?>uploads/iklan/<?= isset($value->nama_foto)?$value->nama_foto:'not-found.jpg' ?>" />
                                                                </a>
                                                            </div>
                                                            <div class="post-footer">
                                                                <a href="<?= base_url(); ?>setting/edit/<?= $value->id; ?>" class="btn btn-info btn-block" style="margin-bottom:10px;">
                                                                    <i class="fa fa-edit"></i>&nbsp;Edit
                                                                </a>
                                                            </div>
                                                            <div class="checkbox">
                                                                  <label>
                                                                    <input type="checkbox" data-toggle="toggle" class="chkactive" data-id="<?= $value->id; ?>"
                                                                    <?php 
                                                                        echo ($value->active==true)? 'checked' : ''?>>
                                                                    Show Product
                                                                  </label>
                                                            </div>
                                                        </div>
                                                    </li>                                  
                                            <?php 
                                                $no++; 
                                                endforeach ?>                                            
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="tab3default">
                                            <ul class="col-md-12 blog-posts isotope">
                                            <?php 
                                                $no=1; 
                                                foreach ($nonaktif as $key => $value): ?>
                                                    <?php 
                                                        $service = $value->service; 

                                                        if ($service == 'Trading') {
                                                            $price = number_format($value->price);
                                                        } else if ($service == 'CSM') {
                                                            $price = number_format($value->price_csm);
                                                        } else if ($service == 'Transportation') {
                                                            $price = number_format($value->price_charter);
                                                        } else if ($service == 'Chartering') {
                                                            $service = ucwords($value->type_charter)." Charter";
                                                            $price = number_format($value->price_charter);
                                                        } 
                                                    ?>
                                                    <li class="blog-post clearfix isotope-item col-xs-6 col-sm-6 col-md-4 col-lg-4 nopad mason">
                                                        <div class="putih clearfix "> 
                                                            <div class="post-date">
                                                                <p class="table-adv">Rp <?= $price; ?></p>
                                                            </div>                                                            
                                                            <div class="ckateg">                               
                                                                <div class="post-category">                                    
                                                                    <a href="#" class="table-adv">                                                
                                                                        <?= $service; ?>                                        
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="post-body">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="table-adv">
                                                                    <h3 class="title-adv table-adv"><?= $value->title; ?></h3>
                                                                </a>                              
                                                            </div>
                                                            <div class="post-media">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="post-img">
                                                                     <img src="<?= base_url(); ?>uploads/iklan/<?= isset($value->nama_foto)?$value->nama_foto:'not-found.jpg' ?>" />
                                                                </a>
                                                            </div>
                                                            <div class="post-footer">
                                                                <a href="<?= base_url(); ?>setting/edit/<?= $value->id; ?>" class="btn btn-info btn-block" style="margin-bottom:10px;">
                                                                    <i class="fa fa-edit"></i>&nbsp;Edit
                                                                </a>
                                                            </div>
                                                            <div class="checkbox">
                                                                  <label>
                                                                    <input type="checkbox" data-toggle="toggle" class="chkactive" data-id="<?= $value->id; ?>"
                                                                    <?php 
                                                                        echo ($value->active==true)? 'checked' : ''?>>
                                                                    Show Product
                                                                  </label>
                                                            </div>
                                                        </div>
                                                    </li>                                  
                                            <?php 
                                                $no++; 
                                                endforeach ?>                                            
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
<script type="text/javascript">
    $('.click').click(function(e){
       // prevent default action
       e.preventDefault();    
       scrollToElement( $(this).attr('href'), 2000 );
    });
    var scrollToElement = function(el, ms){        
        var speed = (ms) ? ms : 600;
        $('html,body').animate({
            scrollTop: $(el).offset().top - 100
        }, speed);
        // $(el).css('padding-top','100px');
    }

    $('.chkactive').click(function () {
        var active;
        if ($(this).is(':checked')) {
            active=1;
        } else {
            active=0;
        }
        $.ajax({
            url: '<?php echo base_url(); ?>setting/update_active_product/' + active +'/' + $(this).attr("data-id"),
            type: 'POST',
            dataType: 'json',
            success: function(response){
                alert("success");
            },
            error: function(e){
                console.log(e.responseText);
            }
       });
    })
</script>
