<style type="text/css">
    .btn { background-color:transparent};
    .btn-default.btn-on.active{background-color: #5BB75B;color: white;}
    .btn-default.btn-off.active{background-color: #DA4F49;color: white;}
    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1035;
        background-color: #000;
    }
    .modal-backdrop.in {
        filter: alpha(opacity=50);
        opacity: .5;
    }
    .status-nego{
        padding: 2px 10px;
        background: coral;
        color: #fff;
        margin-left: 10px;
    }
    .c-empty-box__illustration {
        background-image: url("https://marinebusiness.co.id/assets/images/no_cart_15052017@2x.png");
        -webkit-background-size: 100% 100%;
        background-size: 100%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 0px;
        text-align: center;
        width: 400px;
        height: 240px;
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: contain;
        background-size: contain;
    }
    @media screen and (max-width: 735px) {
        .notification-card__button {
            display: none;
        }
    }
    .notification-card--group-primary {
        position: relative;
    }
    .notification-card {
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        padding: 1rem;
    }

    .notification-card:hover {
        background-color: #f8f8f8;
    }
    .notification-card__image {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        -webkit-flex-flow: row-reverse wrap-reverse;
        -moz-box-orient: horizontal;
        -moz-box-direction: reverse;
        -ms-flex-flow: row-reverse wrap-reverse;
        flex-flow: row-reverse wrap-reverse;
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        -webkit-justify-content: space-around;
        -ms-flex-pack: distribute;
        justify-content: space-around;
        position: relative;
        width: 5rem;
        height: 5rem;
        background-color: #fff;
    }
    .notification-card__img-background {
        width: 100%;
        padding-top: 100%;
        background-position: 50%;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .notification-card__detail {
        word-wrap: break-word;
        padding-left: 2rem;
        min-width: 0;
        -webkit-flex-shrink: 1;
        -ms-flex-negative: 1;
        flex-shrink: 1;
        margin-right: 1rem;
    }
    .notification-card__title {
        font-size: 16px;
        margin-bottom: 10px;
        color: rgba(0,0,0,.8);
        font-weight: 700;
    }
    .notification-card__content {
        font-size: 14px;
        color: rgba(0,0,0,.54);
        margin-bottom: .5rem;
    }
    .notification-card__info {
        font-size: 14px;
        color: rgba(0,0,0,.54);
        line-height: 1;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
    }
    .notification-card__button {
        margin-left: auto;
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0;
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
    .page-title-style02 {    
        margin-bottom: 15px;
    }
    
    .content-box-header {
        font-size: 14px;
        text-transform: uppercase;
        margin: -1px -1px 0;
        padding: 15px;
        border-color: transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    .content-box, .content-box-header {
        position: relative;
        border-width: 1px;
        border-style: solid;
    }
    .badge-black, .label-black, .btn-black, .hover-black:hover, .bg-black {
        color: #ccc;
        border-color: #000;
        background: #2d2d2d;
    }
    .content-box .content-box-wrapper {
        border-bottom-right-radius: 3px !important;
        border-bottom-left-radius: 3px !important;
        line-height: 1.6em;        
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
                                <span class="label label-warning" style="top: 290px;left: 10px;right: unset;"><?= ($notifikasi["count_submission"]==0)? "" : $notifikasi["count_submission"] ?></span>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/upload') ?>">Upload Sign Document</a>
                                <span class="label label-warning" style="top: 326px;left: 10px;right: unset;"><?= ($notifikasi["count_sign"]==0)? "" : $notifikasi["count_sign"] ?></span>
                            </li>                 
                            <li class="menu-item">
                                <a href="<?= base_url('setting/calendar') ?>">Schedule Meet Up</a>
                                <span class="label label-warning" style="top: 365px;left: 10px;right: unset;"><?= ($notifikasi["count_meetup"]==0)? "" : $notifikasi["count_meetup"] ?></span>
                            </li> 
                            <li class="menu-item">
                                <a href="<?= base_url('setting/notifikasi') ?>">Notifikasi</a>
                                <span class="label label-warning" style="top: 406px;left: 10px;right: unset;"><?= ($notifikasi["count"]==0)? "" : $notifikasi["count"] ?></span>
                            </li> 
                            <li class="menu-item">
                                <a href="<?= base_url('setting/negotiation') ?>">Negotiation</a>
                                <span class="label label-warning" style="top: 446px;left: 10px;right: unset;"><?= ($notifikasi["count_nego"]==0)? "" : $notifikasi["count_nego"] ?></span>
                            </li> 

                            <li class="menu-item">
                                <a href="<?= base_url('register/logout') ?>" class="click">Logout</a>
                            </li>  
                            
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="col-md-9"> 
                <?php if (!empty($this->session->flashdata('success'))): ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $this->session->flashdata('success'); ?>
                    </div>
                <?php endif ?>
                <div class="content-box">
                    <h3 class="content-box-header bg-black" style="background: -webkit-linear-gradient(top, #210d9c 0%,#2c244a 100%);">
                        Negotiation
                    </h3>
                    <div class="content-box-wrapper">     
                        <?php if(count($negotiation)==0) { ?>
                        <div class="row">
                            <div class="c-empty-box__illustration u-mrgn-bottom--5"></div> 
                            <h3 style="text-align:center">Empty Data
                            </h3> 
                        </div>
                        <?php } ?>
                        <?php  foreach ($negotiation as $key => $value){ ?>                   
                        <div class="notification-card notification-card--group-primary">                                
                            <div class="notification-card__image">
                                <div class="notification-card__img-background" style="background-image: url(&quot;https://marinebusiness.co.id/uploads/iklan/thumbnail/<?= $value->nama_foto_thumb ?>&quot;);"></div>
                            </div>
                            <div class="notification-card__detail">
                                <div class="notification-card__title"><?= $value->title; ?></div>
                                <div class="notification-card__content" style="font-weight:bold">Price Negotiation : <?= number_format($value->price_nego); ?></div>
                                <?php if($value->f_komisi=="Y"){ ?>
                                    <div class="notification-card__content" style="font-weight:bold">Commision : <?= number_format($value->n_komisi); ?> %</div>
                                <?php } ?>
                                <div class="notification-card__info">
                                    <div class="notification-card__time"><?= $value->date_nego; ?></div>     
                                    <?php if($value->status_nego==0) { ?>
                                        <div class="status-nego">Wait Advice Seller</div>
                                    <?php }else if($value->status_nego==1) { ?>
                                        <div class="status-nego" style="background:green">Deal</div>
                                    <?php }else if($value->status_nego==2) { ?>
                                        <div class="status-nego" style="background:red;padding-top: 7px;">Not Deal</div>
                                        <?php if($value->kirim==0) { ?>
                                            <button type="submit" style="padding: 5px;" data-id="<?= $value->id ?>" data-nego="<?= $value->id_nego ?>" id="bNego">Nego Again</button>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                                <?php if(!empty($value->note_nego)) { ?>
                                    <p style="background: #fffacc;padding: 10px;margin-top:5px"><?= $value->note_nego ?></p>
                                <?php } ?>
                            </div>
                        </div>  
                        <?php } ?>                                                           
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalNego">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Negotiation Price</h4>
      </div>
      <form action="<?= base_url(); ?>setting/renego" method="post">
          <div class="modal-body" style="overflow-y: scroll;max-height: 350px">
            <div class="col-md-12"> 
                <img id="img-nego" class="img" style="width:100px;height:66px;float: left;margin-right: 10px;margin-bottom: 10px;" src="" >
                <h3 id="title-nego" style="margin-bottom:0;"></h3>
                <p>Last Negotiation Price : <span id="last-price"></span></p>
            </div>
            <div class="col-md-12">
                
                <div class="form-group">
                    <label for="email" class="" >Negotiation Price</label>
                    <input type="number" class="form-control" name="txtNego" id="txtNego" placeholder="0" value="" required>
                </div>
                <div class="form-group">
                    <label for="txtKomisi" class="" >With Comission</label>
                    <div class="btn-group" id="status" data-toggle="buttons">
                        <label class="btn btn-default btn-on btn-xs ">
                        <input type="radio" value="Y" name="bcomision" >Yes</label>
                        <label class="btn btn-default btn-off btn-xs active">
                        <input type="radio" value="N" name="bcomision" checked="checked">No</label>
                    </div>
                     <div class="form-group hidden" id="icom">
                        <label for="email" class="" ></label>
                        <input type="number" class="form-control" style="width: 80px;float: left;" name="txtKomisi" id="txtKomisi" placeholder="" value="0" step="0.1" >
                        <span style="position: absolute;top: 100px;left: 103px;">% From Deal Price</span>
                    </div>
                </div>
                <p style="background: #fffacc;padding: 10px;margin-bottom:10px">Your Negotiation will be process by seller. Please waiting max 3x24 hours for advice.</p>
            </div>
            
            <div class="col-md-12">
                <?php
                        $link = isset($uri)? $uri :'';
                    ?> 
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                <input type="hidden" id="number" name="number" value="<?= $number ?>">
                <input type="hidden" name="uri" value="<?= $link ?>">
                <input type="hidden" id="id_nego" name="id_nego" value="">
                <input class="btn btn-primary btn-block" type="submit" name="btnNego" id="btnNego" value="Nego Again"/>
            </div>
          </div>
      </form>
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
    $("input[name='bcomision']").change(function(e){      
       var active = $("input[name='bcomision']:checked").val();
       if(active=="Y"){
           $("#icom").removeClass("hidden");
       }else{
           $("#icom").addClass("hidden");
       }
    });
    $('#bNego').click(function(e){      
        e.preventDefault();    
        $("#modalNego").modal("show");
        var id = $(this).attr('data-id');
        var id_nego = $(this).attr('data-nego');
        $("#last-price").text($(this).parent().prev().text().replace('Price Negotiation : ',''));
        $("#id_nego").val(id_nego);
        jQuery.ajax({
            type: "GET",
            cache:false,
            dataType: 'json',                            
            url: '<?php echo base_url() ?>setting/view_re_nego/'+ id ,
            success: function(response) {       
                if(response.ok){      
                    $("#number").val(response.row[0]["id"]);
                    $("#img-nego").attr("src","https://marinebusiness.co.id/uploads/iklan/thumbnail/" + response.row[0]["nama_foto_thumb"]);
                    $("#title-nego").text(response.row[0]["title"]);
                }                                                                                               
            },
        }); 
    });

</script>

