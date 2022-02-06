<style type="text/css">
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
                    <h3 class="content-box-header bg-black">
                        Current Negotiation
                    </h3>
                    <div class="col-md-4">
                        <?php
                            $agent = $negotiation[0]->nama_foto_thumb;
                        ?>
                        <img class="img img-thumbnail" src="<?= base_url(); ?>uploads/iklan/thumbnail/<?= $agent; ?>" >
                    </div>
                    <div class="col-md-8" style="padding-top:10px">
                        <form action="<?= base_url(); ?>setting/not_deal" method="post">
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                            <h3><?= $negotiation[0]->title; ?></h3>
                            <table style="font-size:18px;font-weight:bold;padding:5px;border:1px solid gray;border-radius:5px">
                                <tr>
                                    <td width="120" style="border:none">From</td>
                                    <td width="5" style="border:none">:</td>
                                    <td style="border:none"><?= $negotiation[0]->email_nego; ?></td>
                                </tr>
                                <tr>
                                    <td width="120" style="border:none">Nego Price</td>
                                    <td width="5" style="border:none">:</td>
                                    <td style="border:none">IDR <?= number_format($negotiation[0]->price_nego); ?></td>
                                </tr>
                                <tr>
                                    <td width="120" style="border:none">Date</td>
                                    <td width="5" style="border:none">:</td>
                                    <td style="border:none"><?= $negotiation[0]->date_nego; ?></td>
                                </tr>
                                <?php if($negotiation[0]->f_komisi=="Y"){ ?>
                                    <tr>
                                        <td width="120" style="border:none">Comission</td>
                                        <td width="5" style="border:none">:</td>
                                        <td style="border:none"><?= $negotiation[0]->n_komisi; ?> %</td>
                                    </tr>
                                <?php } ?>
                            </table>

                            <p style="font-weight:bold">Comment :</p>
                            <textarea name="note" class="form-control" rows="4" style="margin-bottom:10px"></textarea>
                            <input type="hidden" name="id_nego" value="<?= $negotiation[0]->id_nego; ?>" />
                            <input type="hidden" name="f_nego" value="<?= $negotiation[0]->f_komisi; ?>" />
                            <?php if(empty($view)){ ?>
                                <button class="btn-primary" type="submit" name="btnDeal" value="deal" style="padding-left:15px;padding-right:15px;margin-bottom:10px">Deal</button>
                                <button class="btn-danger" type="submit" name="btnNoDeal" value="nodeal" style="padding-left:15px;padding-right:15px;margin-bottom:10px">Not Deal</button>
                            <?php } ?>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="content-box">
                    <h3 class="content-box-header bg-black">
                        History Negotiation
                    </h3>
                    <div class="content-box-wrapper">     
                        <?php  foreach ($history as $key => $value){ ?>                   
                        <div class="notification-card notification-card--group-primary">                                
                            <div class="notification-card__image">
                                <div class="notification-card__img-background" style="background-image: url(&quot;https://marinebusiness.co.id/uploads/iklan/thumbnail/<?= $value->nama_foto_thumb ?>&quot;);"></div>
                            </div>
                            <div class="notification-card__detail">
                                <div class="notification-card__title"><?= $value->title; ?></div>
                                <div class="notification-card__content" style="font-weight:bold">Price Negotiation : <?= number_format($value->price_nego); ?></div>
                                <div class="notification-card__info">
                                    <div class="notification-card__time"><?= $value->date_nego; ?></div>     
                                    <?php if($value->status_nego==0) { ?>
                                        <div class="status-nego">Wait Advice Seller</div>
                                    <?php }else if($value->status_nego==1) { ?>
                                        <div class="status-nego" style="background:green">Deal</div>
                                    <?php }else if($value->status_nego==2) { ?>
                                        <div class="status-nego" style="background:red">Not Deal</div>
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
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>

