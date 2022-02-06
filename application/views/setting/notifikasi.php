<style type="text/css">
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
                <div class="content-box">
                    <h3 class="content-box-header bg-black">
                        Notification
                    </h3>
                    <div class="content-box-wrapper">     
                        <?php if(count($notifikasi["row_all"])==0) { ?>
                        <div class="row">
                            <div class="c-empty-box__illustration u-mrgn-bottom--5"></div> 
                            <h3 style="text-align:center">Empty Data
                            </h3> 
                        </div>
                        <?php } ?>
                        <?php  foreach ($notifikasi["row_all"] as $key => $value){ ?>
                        <?php if($value->status==1) { ?>
                        <div class="notification-card notification-card--group-primary" style="background-color:#fff9cf;">    
                        <?php } else { ?>
                        <div class="notification-card notification-card--group-primary"> 
                        <?php } ?>
                            
                                <div class="notification-card__image" style="float: left;margin-right: 10px;">
                                    <div class="notification-card__img-background" style="background-image: url(&quot;https://marinebusiness.co.id/assets/img/default-notification.png&quot;);"></div>
                                </div>
                                <a href="<?= $value->url; ?>" data-action="<?= $value->action; ?>"  data-id="<?= $value->id; ?>" class="btnShow" style="width: 100%;">
                                    <div class="notification-card__detail">
                                        <div class="notification-card__title"><?= $value->kategori; ?></div>
                                        <div class="notification-card__content"><?= $value->message_notif; ?></div>
                                        <div class="notification-card__info">
                                            <div class="notification-card__time"></div>                                        
                                        </div>
                                    </div>
                                </a>
                            <div class="notification-card__button">
                                <a href="<?= $value->url; ?>" data-action="<?= $value->action; ?>" data-id="<?= $value->id; ?>" class="btn btn-primary btnShow">Show Detail</a>
                            </div>
                        </div>  
                        <?php } ?>                                                           
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script>
    $(".btnShow").click(function() {
        var id = $(this).attr('data-id');
        var action = $(this).attr('data-action');
        
        if(action=="read"){
            jQuery.ajax({
                type: "GET",
                cache:false,
                dataType: 'json',                            
                url: '<?php echo base_url() ?>setting/read_notif/' + id ,
                success: function(response) {                                  
                    return true;                                                                                              
                },
            });
        }

    });
</script>

