<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ship.css"/>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style-theme.css"/>
<style type="text/css">
    .btn-default.btn-on.active{background-color: #5BB75B;color: white;}
    .btn-default.btn-off.active{background-color: #DA4F49;color: white;}
    table td {
        background: #f9fdef none repeat scroll 0 0;
    }
    .nav-pills>li>a {        
        background: gainsboro;
    }
    .product-single .product-single__detail .product-addto-links .btn_df {
        color: #583dea;
        border: 1px solid #583dea;
    }
    .product-single .product-single__detail .product-addto-links .btn_df:hover {
        background: #583dea;
        border-color: #583dea;
    }
    @media only screen and (min-width: 767px) {    
        .page-title-style02 {
            padding-top: 88px;
            padding-bottom: 20px;
            margin-bottom: 0px; 
        }
    }
    @media only screen and (max-width: 767px) and (min-width: 480px) {    
        .page-title-style02 {
            padding-top: 0px;
            padding-bottom: 0px;
            margin-bottom: 0px; 
        }
    }
    .navi {
        background-color: #dededf;
        padding: 20px 0;
    }
    .panel-default>.panel-heading {        
        background-color: #3b42a0;        
    }
    .nav-tabs>li {
        padding-bottom: 0;
    }
    .color {      
        color: white;
    }
    .nav-tabs>li>a {                
        font-weight: bold;
        color: white;
    }
    .row .custom-heading02:only-child {
        margin-bottom: 0;
    }
    .product-single .detail-bottom .tab-vertical ul.nav-tabs {
        background-color: #3b42a0; 
    }
    .table caption {        
        margin-bottom: 0px; 
    }
    .table tbody tr td:nth-child(3) {
        text-align: left;
        color: #333;
        font-weight: 700;
    }
    .custom-heading02:after {
        top:110%;
    }
</style>
<?php 
    $service = $data[0]->service;       
    if ($service == 'Trading') {
        $price = number_format($data[0]->price);
    } else if ($service == 'CSM') {
        $price = number_format($data[0]->price_csm);
    } else if ($service == 'Transportation') {
        $price = number_format($data[0]->price_freight);
    } else if ($service == 'Chartering') {
        $service = ucwords($data[0]->type_charter)." Charter";
        $price = number_format($data[0]->price_charter);
    }     
?>
<div class="page-title-style02">
    <div class="">
        <div class="row">
           <div class="navi">
                <div class="custom-heading02">
                    <h2><?= isset($data[0])?$data[0]->title:''; ?></h2>
                    <h3><?= $service ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container">
        <div class="main-content" id="MainContent">         
           <div class="container">
              <div class="row">   
                <?php if (!empty($this->session->flashdata('error'))): ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                <?php endif ?>
                <?php if (!empty($this->session->flashdata('success'))): ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $this->session->flashdata('success'); ?>
                    </div>
                <?php endif ?>

                 <div id="shopify-section-product-template" class="shopify-section col-xs-12 main-product" style="padding-left: 0px;padding-right: 0px;">                    
                    <div class="product-template__container product" id="ProductSection-product-template" data-section-id="product-template" data-section-type="product" >                      
                       <div class="product-single ">
                          <div class="row" style="margin-bottom: 0">
                             <div class=" col-lg-5 col-md-6 col-sm-12 product-img-box product-single__image grid__item product-single__photos " style="padding-left: 0px;padding-right: 0px;">
                                <div id="FeaturedImageZoom-product-template" class="large-image product-single__photo product-single__photo--has-thumbnails">
                                    <!-- <img id="img_01" src="small/image1.jpg" data-zoom-image="large/image1.jpg"/>
                                    <div id="gal1">
                                      <a href="#" data-image="small/image1.jpg" data-zoom-image="large/image1.jpg">
                                        <img id="img_01" src="thumb/image1.jpg" />
                                      </a>
                                    </div> -->
                                   <a href="#">
                                        <div style="min-height:300px;" class="zoomWrapper">                                           
                                            <img id="product-featured-image" src="<?= base_url(); ?>uploads/iklan/<?= $foto[0]->nama_foto ?>" data-zoom-image="<?= base_url(); ?>uploads/iklan/<?= $foto[0]->nama_foto ?>" class="product-featured-img  zoom_default thickbox"  style="position: absolute;height:auto;width: 100%;top: 0px;left: 0px;">
                                        </div>                                        
                                   </a>
                                </div>
                                <div class="thumbnails-slide thumbnails-wrapper">
                                   <div id="thumb-slider" class="owl-carousel owl-loaded owl-drag">
                                      <div class="owl-stage-outer">
                                         <div class="owl-stage" style="width: 508px;">
                                            <?php foreach($foto as $value) { ?>
                                                <div class="owl-item" style="width: 91.5px; margin-right: 10px;">
                                                    <a class="thumbnail" data-image-zoom="<?= base_url(); ?>uploads/iklan/<?= $value->nama_foto; ?>" data-index=" 0" data-image="<?= base_url(); ?>uploads/iklan/<?= $value->nama_foto; ?>">
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
                                                        <img class="product-single__thumbnail-image" src="<?= base_url(); ?>uploads/iklan/<?= $agent; ?>" >
                                                   </a>
                                                </div>                                            
                                            <?php } ?>                                     
                                         </div>
                                      </div>
                                      <div class="owl-nav">
                                         <div class="owl-prev"></div>
                                         <div class="owl-next disabled"></div>
                                      </div>
                                      <div class="owl-dots disabled"></div>
                                   </div>
                                </div>
                             </div>
                             <div class=" col-lg-7 col-md-6 col-sm-12 product-single__detail grid__item " style="padding-left: 0px;padding-right: 0px;">
                                <div class="panel with-nav-tabs panel-default">
                                    <div class="panel-heading">
                                           <h3 style="color: #fff">Information</h3>
                                    </div>
                                    <div class="panel-body">
                                         <div class="product-single__meta">   
                                            <?php if(!empty($price)){ ?>
                                            <div class="clearfix product-price">                
                                                  <h2 style="display: inline-block;font-weight: 900">Price :</h2>
                                                  <h2 style="display: inline-block;font-weight: 900">Rp <?= $price ?></h2>
                                            </div>
                                            <?php } ?>
                                            <ul class="nav nav-pills">
                                                <li class="mov active" id="spec"><a data-toggle="pill" href="#home">Spesification</a></li>
                                                <li class="mov" id="dimensi"><a data-toggle="pill" href="#menu1">Dimension</a></li>
                                                <li class="mov" id="capacity"><a data-toggle="pill" href="#menu2">Capacity</a></li>                                                        
                                            </ul>
                                            <div class="tab-content">
                                                <div id="home" class="tabe tab-pane fade in active">
                                                    <div class="table-responsive">
                                                        <table class="table">                                                                
                                                            <thead>
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Size</th>  
                                                                    <th>Item</th>
                                                                    <th>Size</th>                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Vessel Name</td>
                                                                    <td style="text-align: left;"><?= isset($data[0])?$data[0]->vessel_nama:''; ?></td>  
                                                                    <td>Owners</td>
                                                                    <td style="text-align: left;"><?= isset($data[0])?$data[0]->owners:''; ?></td>                                           
                                                                </tr>
                                                                <tr>
                                                                    <td>Place Build</td>
                                                                    <td style="text-align: left;"><?= isset($data[0])?$data[0]->place_build:''; ?></td>  
                                                                    <td>Builder</td>                                                                    
                                                                    <td style="text-align: left;"><?= isset($data[0])?$data[0]->year_build:''; ?></td>                                                                  
                                                                </tr>                                                             
                                                                <tr>
                                                                    <td>Port Registry</td>
                                                                    <td style="text-align: left;"><?= isset($data[0])?$data[0]->port_registry:''; ?></td>
                                                                    <td>Construction</td>
                                                                    <td style="text-align: left;"><?= isset($data[0])?$data[0]->construction:''; ?></td>   
                                                                </tr>                                                              
                                                                <tr>
                                                                    <td>Call Sign</td>
                                                                    <td style="text-align: left;"><?= isset($data[0])?$data[0]->call_sign:''; ?></td>  
                                                                    <td>Tanda Sellar</td>
                                                                    <td style="text-align: left;">approx 158 units of textile</td>                                
                                                                </tr>
                                                                <tr>                                                             
                                                                    <td>IMO No</td>
                                                                    <td colspan="3" style="text-align: left;"><?= isset($data[0])?$data[0]->imo:''; ?></td>                                            
                                                                </tr> 
                                                                <tr>
                                                                    <td>Classification</td>
                                                                    <td colspan="3" style="text-align: left;"><?= isset($data[0])?$data[0]->clasification:''; ?></td>
                                                                </tr>                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div id="menu1" class="tabe tab-pane fade">
                                                    <div class="table-responsive">
                                                        <table class="table">                                                                
                                                            <thead>
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Size</th>  
                                                                    <th>Item</th>
                                                                    <th>Size</th>                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Length Overall (L.O.A)</td>
                                                                    <td><?= isset($data[0])?$data[0]->loa:''; ?></td>  
                                                                    <td>Breadth Moulded</td>
                                                                    <td><?= isset($data[0])?$data[0]->breadth:''; ?></td>                                           
                                                                </tr>
                                                                <tr>
                                                                    <td>Length</td>
                                                                    <td><?= isset($data[0])?$data[0]->length:''; ?></td>  
                                                                    <td>Depth Moulded</td>
                                                                    <td><?= isset($data[0])?$data[0]->depth:''; ?></td>                                                                  
                                                                </tr>  
                                                                <tr>
                                                                    <td>GRT</td>
                                                                    <td><?= isset($data[0])?$data[0]->grt:''; ?></td>  
                                                                    <td>NRT</td>
                                                                    <td><?= isset($data[0])?$data[0]->nrt:''; ?></td>                                
                                                                </tr>                                                           
                                                                <tr>
                                                                    <td>Summer Draught</td>
                                                                    <td><?= isset($data[0])?$data[0]->summer_draught:''; ?></td>
                                                                    <td>DWT</td>
                                                                    <td><?= isset($data[0])?$data[0]->dwt:''; ?></td>   
                                                                </tr>                                                              
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div id="menu2" class="tabe tab-pane fade">
                                                    <div class="table-responsive">
                                                        <table class="table">                                           
                                                            <thead>
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Size</th>                                                                      
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Deck Cargo Area Space</td>
                                                                    <td><?= isset($data[0])?$data[0]->deck_area:''; ?></td>  
                                                                </tr>
                                                                <tr>
                                                                    <td>Side Board</td>
                                                                    <td><?= isset($data[0])?$data[0]->sideboard:''; ?></td>  
                                                                </tr>  
                                                                <tr>
                                                                    <td>Deck Cargo Capacity</td>
                                                                    <td><?= isset($data[0])?$data[0]->deck_capacity:''; ?></td>  
                                                                </tr>                                                           
                                                                <tr>
                                                                    <td>Maimum Deck Load</td>
                                                                    <td><?= isset($data[0])?$data[0]->max_deck_load:''; ?></td>                                                          
                                                                </tr>                                                              
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                            <div> 
                                                                                                    
                                                <div class="product-options-bottom">                        
                                                    <div class="product-form__item product-form__item--submit">
                                                       <button type="submit" name="add" id="btnA" class="btn product-form__cart-submit product-form__cart-submit--small" data-toggle="modal" data-target="#myModal">
                                                       <span id="AddToCartText-product-template">
                                                         <i class="fa fa-file"></i>
                                                         Inquiry 
                                                       </span>
                                                       </button>
                                                    </div>
                                                    <?php if(!empty($this->session->userdata('email'))) { ?>
                                                    <div class="product-addto-links">
                                                       <button type="submit" class="btn_df btnProduct" title="Negotiation" data-toggle="modal" data-target="#modalNego">
                                                       <i class="fa fa-heart"></i>&nbsp;
                                                       Negotiation
                                                       </button>
                                                    </div>                                                 
                                                    <?php } ?>
                                                </div>                                               
                                            </div>                                                  
                                        </div>
                                    </div>
                                </div>
                             </div>
                          </div>
                          <div class="row" style="margin-bottom: 0;padding-left: 0px;padding-right: 0px;">
                             <div class="col-lg-12 col-md-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="panel-group detail-bottom">
                                   <div class="tab-horizontal">
                                      <ul class="nav nav-tabs font-ct">
                                         <li class="active"><a href="#tabs1" data-toggle="tab">Description</a></li>
                                         <!-- <li><a href="#tabs4" data-toggle="tab">Lokasi</a></li> -->
                                      </ul>
                                      <div class="tab-content">
                                         <div class="tab-pane fade in active" id="tabs1" style="padding: 10px;border: solid 1px gainsboro;">
                                            <?php if($data[0]->service=="Comodity"){ ?>
                                         	<table class="table">
                                             	  <tr>
                                             	      <td width="150" style="border:none">Type Ship</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->type:''; ?></td>
                                             	  </tr>
                                             	  <tr>
                                             	      <td width="150" style="border:none">Type Comodity</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->type_comodity:''; ?></td>
                                             	  </tr>
                                             	  <tr>
                                             	      <td width="150" style="border:none">Destination</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->dest_comodity:''; ?></td>
                                             	  </tr>
                                             	  <tr>
                                             	      <td width="150" style="border:none">Qty Comodity</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->qty_comodity:''; ?> Tons/Cubics</td>
                                             	  </tr>
                                         	</table>
                                         	<?php } ?>
                                         	<?php if($data[0]->service=="Chartering"){ ?>
                                         	<table class="table">
                                             	  <tr>
                                             	      <td width="150" style="border:none">Duration</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->duration." ". $data[0]->duration_uom:''; ?></td>
                                             	  </tr>
                                             	  <tr>
                                             	      <td width="150" style="border:none">Area</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->area:''; ?></td>
                                             	  </tr>
                                             	  
                                         	</table>
                                         	<?php } ?>
                                         	<?php if($data[0]->service=="CSM"){ ?>
                                         	<table class="table">
                                             	  <tr>
                                             	      <td width="100" style="border:none">Duration</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->duration_csm." ". $data[0]->duration_csm_uom:''; ?></td>
                                             	  </tr>
                                             	  <tr>
                                             	      <td width="100" style="border:none">Area</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->area_csm:''; ?></td>
                                             	  </tr>
                                             	  <tr>
                                             	      <td width="100" style="border:none">Country</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->country_name:''; ?></td>
                                             	  </tr>
                                         	</table>
                                         	<?php } ?>
                                         	<?php if($data[0]->service=="Transportation"){ ?>
                                         	<table class="table">
                                             	  <tr>
                                             	      <td width="150" style="border:none">Port Loading</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->portloading:''; ?></td>
                                             	  </tr>
                                             	  <tr>
                                             	      <td width="150" style="border:none">Port Discharge</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->portdiscarge:''; ?></td>
                                             	  </tr>
                                             	  <tr>
                                             	      <td width="150" style="border:none">Qty</td>
                                             	      <td width="10" style="border:none">:</td>
                                             	      <td style="border:none"><?= isset($data[0])?$data[0]->qty_freight:''; ?></td>
                                             	  </tr>
                                         	</table>
                                         	<?php } ?>
                                            <?= isset($data[0])?$data[0]->description:''; ?>
                                         </div>                                         
                                        <!--  <div class="tab-pane" id="tabs4">
                                            <div class="form-group row">                                                    
                                                <div class="col-sm-12">
                                                    <input type="hidden" name="longitude" id="longitude" value="<?= isset($data[0])?$data[0]->longitude:''; ?>">
                                                    <input type="hidden" name="latitude" id="latitude" value="<?= isset($data[0])?$data[0]->latitude:''; ?>">
                                                    <div id="peta" style="width:100%; height:300px;"></div>
                                                </div>
                                            </div>
                                         </div> -->
                                      </div>
                                   </div>
                                </div>
                                <!-- <section class="section-related">
                                   <div id="related" class="related-products">
                                      <h3 class="detail-title font-ct"><strong><span>Related Products</span></strong></h3>
                                      <div class="products-listing grid ss-carousel ss-owl">
                                         <div class="product-layout owl-carousel owl-loaded owl-drag" data-nav="true" data-margin="30" data-lazyload="true" data-column1="  5" data-column2="   4" data-column3="   3" data-column4="   2" data-column5="   2">
                                            <div class="owl-stage-outer">
                                               <div class="owl-stage" style="width: 1227px; transform: translate3d(0px, 0px, 0px); transition: 0s;">
                                                  <div class="owl-item active" style="width: 174.4px; margin-right: 30px;">
                                                     <div class="item">
                                                        <div class="product-item" data-id="product-622742175787">
                                                           <div class="product-item-container grid-view-item   ">
                                                              <div class="left-block">
                                                                 <div class="product-image-container product-image">
                                                                    <a class="grid-view-item__link image-ajax" href="/collections/fashion-accessories/products/horem-porche">
                                                                    <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2644/9252/products/23_e18b0399-16dd-4259-9c7e-4a179d604f12_large_crop_center.png?v=1514365369" alt="Horem porch anim">
                                                                    <span class="second-img hidden-sm hidden-xs">
                                                                    <img class="img-responsive s-img" alt="Horem porch anim" src="//cdn.shopify.com/s/files/1/2644/9252/products/16_087ba795-1d84-4196-ab0a-89322dd52bb8_large.png?v=1514365369">
                                                                    </span>
                                                                    </a>
                                                                    <ul class="swatch-list">
                                                                    </ul>
                                                                 </div>
                                                                 <span class="label-product label-sale"><span class="hidden">Sale</span>
                                                                 -31%</span>
                                                                 <span class="label-product label-new">new</span>
                                                                 <div class="button-link">
                                                                    <div class="btn-button add-to-cart action  ">
                                                                       <form action="/cart/add" method="post" class="variants" data-id="AddToCartForm-622742175787" enctype="multipart/form-data">   
                                                                          <input type="hidden" name="id" value="7491714547755">           
                                                                          <a class="btn-addToCart grl btn_df" href="javascript:void(0)" title="Add to cart"><i class="fa fa-shopping-basket"></i><span class="hidden-xs hidden-sm hidden-md">Add to cart</span></a>
                                                                       </form>
                                                                    </div>
                                                                    <div class="quickview-button">
                                                                       <a class="quickview iframe-link visible-lg btn_df" href="javascript:void(0)" data-variants_id="7491714547755" data-toggle="modal" data-target="#myModal" data-id="horem-porche" title="Quick View"><i class="fa fa-search"></i><span class="hidden-xs hidden-sm hidden-md">Quick View</span></a>
                                                                    </div>
                                                                    <div class="product-addto-links">
                                                                       <a class="btn_df btnProduct" href="/account/login" title="Wishlist">
                                                                       <i class="fa fa-heart"></i>
                                                                       <span class="hidden-xs hidden-sm hidden-md">Wishlist</span>
                                                                       </a>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="right-block">
                                                                 <div class="caption">
                                                                    <h4 class="title-product"><a class="product-name" href="/products/horem-porche">Horem porch anim</a></h4>
                                                                    <div class="price">
                                                                       <span class="visually-hidden">Regular price</span>
                                                                       <span class="price-new"><span class="money" data-currency-usd="$111.00">$111.00</span></span>
                                                                       <span class="price-old"> <span class="money" data-currency-usd="$160.00">$160.00</span> </span>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                                  <div class="owl-item active" style="width: 174.4px; margin-right: 30px;">
                                                     <div class="item">
                                                        <div class="product-item" data-id="product-622742274091">
                                                           <div class="product-item-container grid-view-item   ">
                                                              <div class="left-block">
                                                                 <div class="product-image-container product-image">
                                                                    <a class="grid-view-item__link image-ajax" href="/collections/fashion-accessories/products/eiusmod-mollit">
                                                                    <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2644/9252/products/16_b265970a-2c24-4ec8-bf08-ad4726b2ab3b_large_crop_center.png?v=1514364235" alt="Eiusm mollit minim">
                                                                    <span class="second-img hidden-sm hidden-xs">
                                                                    <img class="img-responsive s-img" alt="Eiusm mollit minim" src="//cdn.shopify.com/s/files/1/2644/9252/products/23_c3015ebe-b72c-47fa-9dc4-0a25c3d13267_large.png?v=1514364235">
                                                                    </span>
                                                                    </a>
                                                                    <ul class="swatch-list">
                                                                    </ul>
                                                                 </div>
                                                                 <div class="button-link">
                                                                    <div class="btn-button add-to-cart action  ">
                                                                       <form action="/cart/add" method="post" class="variants" data-id="AddToCartForm-622742274091" enctype="multipart/form-data">   
                                                                          <input type="hidden" name="id" value="7491716481067">           
                                                                          <a class="btn-addToCart grl btn_df" href="javascript:void(0)" title="Add to cart"><i class="fa fa-shopping-basket"></i><span class="hidden-xs hidden-sm hidden-md">Add to cart</span></a>
                                                                       </form>
                                                                    </div>
                                                                    <div class="quickview-button">
                                                                       <a class="quickview iframe-link visible-lg btn_df" href="javascript:void(0)" data-variants_id="7491716481067" data-toggle="modal" data-target="#myModal" data-id="eiusmod-mollit" title="Quick View"><i class="fa fa-search"></i><span class="hidden-xs hidden-sm hidden-md">Quick View</span></a>
                                                                    </div>
                                                                    <div class="product-addto-links">
                                                                       <a class="btn_df btnProduct" href="/account/login" title="Wishlist">
                                                                       <i class="fa fa-heart"></i>
                                                                       <span class="hidden-xs hidden-sm hidden-md">Wishlist</span>
                                                                       </a>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="right-block">
                                                                 <div class="caption">
                                                                    <h4 class="title-product"><a class="product-name" href="/products/eiusmod-mollit">Eiusm mollit minim</a></h4>
                                                                    <div class="price">
                                                                       <span class="visually-hidden">Regular price</span>
                                                                       <span class="price-new"><span class="money" data-currency-usd="$323.00">$323.00</span></span>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                                  <div class="owl-item active" style="width: 174.4px; margin-right: 30px;">
                                                     <div class="item">
                                                        <div class="product-item" data-id="product-622743191595">
                                                           <div class="product-item-container grid-view-item   ">
                                                              <div class="left-block">
                                                                 <div class="product-image-container product-image">
                                                                    <a class="grid-view-item__link image-ajax" href="/collections/fashion-accessories/products/exercitation-kielbasa">
                                                                    <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2644/9252/products/18_a9201803-7e2e-48ea-876b-62a656939314_large_crop_center.png?v=1514364714" alt="Tender pican adipis">
                                                                    <span class="second-img hidden-sm hidden-xs">
                                                                    <img class="img-responsive s-img" alt="Tender pican adipis" src="//cdn.shopify.com/s/files/1/2644/9252/products/22_6cffdf43-e789-4cb4-81a9-33b37482ee89_large.png?v=1514364714">
                                                                    </span>
                                                                    </a>
                                                                    <ul class="swatch-list">
                                                                    </ul>
                                                                    <div class="label-info">
                                                                       <span class="label-stock label label1 font-ct">Pre-Order</span>
                                                                    </div>
                                                                 </div>
                                                                 <span class="label-product label-sale"><span class="hidden">Sale</span>
                                                                 -3%</span>
                                                                 <span class="label-product label-new">new</span>
                                                                 <div class="button-link">
                                                                    <div class="btn-button add-to-cart action  ">
                                                                       <form action="/cart/add" method="post" class="variants" data-id="AddToCartForm-622743191595" enctype="multipart/form-data">   
                                                                          <input type="hidden" name="id" value="7491728310315">           
                                                                          <a class="btn-addToCart grl btn_df" href="javascript:void(0)" title="Add to cart"><i class="fa fa-shopping-basket"></i><span class="hidden-xs hidden-sm hidden-md">Add to cart</span></a>
                                                                       </form>
                                                                    </div>
                                                                    <div class="quickview-button">
                                                                       <a class="quickview iframe-link visible-lg btn_df" href="javascript:void(0)" data-variants_id="7491728310315" data-toggle="modal" data-target="#myModal" data-id="exercitation-kielbasa" title="Quick View"><i class="fa fa-search"></i><span class="hidden-xs hidden-sm hidden-md">Quick View</span></a>
                                                                    </div>
                                                                    <div class="product-addto-links">
                                                                       <a class="btn_df btnProduct" href="/account/login" title="Wishlist">
                                                                       <i class="fa fa-heart"></i>
                                                                       <span class="hidden-xs hidden-sm hidden-md">Wishlist</span>
                                                                       </a>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="right-block">
                                                                 <div class="caption">
                                                                    <h4 class="title-product"><a class="product-name" href="/products/exercitation-kielbasa">Tender pican adipis</a></h4>
                                                                    <div class="price">
                                                                       <span class="visually-hidden">Regular price</span>
                                                                       <span class="price-new"><span class="money" data-currency-usd="$266.00">$266.00</span></span>
                                                                       <span class="price-old"> <span class="money" data-currency-usd="$275.00">$275.00</span> </span>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                                  <div class="owl-item active" style="width: 174.4px; margin-right: 30px;">
                                                     <div class="item">
                                                        <div class="product-item" data-id="product-622747910187">
                                                           <div class="product-item-container grid-view-item   ">
                                                              <div class="left-block">
                                                                 <div class="product-image-container product-image">
                                                                    <a class="grid-view-item__link image-ajax" href="/collections/fashion-accessories/products/haborum-shoul">
                                                                    <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2644/9252/products/22_bd502808-fb81-4ab2-bdc3-237739f457ff_large_crop_center.png?v=1514365026" alt="Irure conseq shankle">
                                                                    <span class="second-img hidden-sm hidden-xs">
                                                                    <img class="img-responsive s-img" alt="Irure conseq shankle" src="//cdn.shopify.com/s/files/1/2644/9252/products/18_f865c05a-c2fc-404a-9683-1b706f321a30_large.png?v=1514365026">
                                                                    </span>
                                                                    </a>
                                                                    <ul class="swatch-list">
                                                                    </ul>
                                                                 </div>
                                                                 <span class="label-product label-sale"><span class="hidden">Sale</span>
                                                                 -4%</span>
                                                                 <div class="button-link">
                                                                    <div class="btn-button add-to-cart action  ">
                                                                       <form action="/cart/add" method="post" class="variants" data-id="AddToCartForm-622747910187" enctype="multipart/form-data">   
                                                                          <input type="hidden" name="id" value="7491806691371">           
                                                                          <a class="btn-addToCart grl btn_df" href="javascript:void(0)" title="Add to cart"><i class="fa fa-shopping-basket"></i><span class="hidden-xs hidden-sm hidden-md">Add to cart</span></a>
                                                                       </form>
                                                                    </div>
                                                                    <div class="quickview-button">
                                                                       <a class="quickview iframe-link visible-lg btn_df" href="javascript:void(0)" data-variants_id="7491806691371" data-toggle="modal" data-target="#myModal" data-id="haborum-shoul" title="Quick View"><i class="fa fa-search"></i><span class="hidden-xs hidden-sm hidden-md">Quick View</span></a>
                                                                    </div>
                                                                    <div class="product-addto-links">
                                                                       <a class="btn_df btnProduct" href="/account/login" title="Wishlist">
                                                                       <i class="fa fa-heart"></i>
                                                                       <span class="hidden-xs hidden-sm hidden-md">Wishlist</span>
                                                                       </a>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="right-block">
                                                                 <div class="caption">
                                                                    <h4 class="title-product"><a class="product-name" href="/products/haborum-shoul">Irure conseq shankle</a></h4>
                                                                    <div class="price">
                                                                       <span class="visually-hidden">Regular price</span>
                                                                       <span class="price-new"><span class="money" data-currency-usd="$222.00">$222.00</span></span>
                                                                       <span class="price-old"> <span class="money" data-currency-usd="$232.00">$232.00</span> </span>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                                  <div class="owl-item active" style="width: 174.4px; margin-right: 30px;">
                                                     <div class="item">
                                                        <div class="product-item" data-id="product-622750564395">
                                                           <div class="product-item-container grid-view-item   ">
                                                              <div class="left-block">
                                                                 <div class="product-image-container product-image">
                                                                    <a class="grid-view-item__link image-ajax" href="/collections/fashion-accessories/products/facapicola-brisket">
                                                                    <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2644/9252/products/19_20ba760a-f424-4975-a11b-1c0b6135b496_large_crop_center.png?v=1514364806" alt="Facapic brisket pig">
                                                                    <span class="second-img hidden-sm hidden-xs">
                                                                    <img class="img-responsive s-img" alt="Facapic brisket pig" src="//cdn.shopify.com/s/files/1/2644/9252/products/11_672f8399-6a77-4b40-844e-55c83926af45_large.png?v=1514364806">
                                                                    </span>
                                                                    </a>
                                                                    <ul class="swatch-list">
                                                                    </ul>
                                                                    <div class="label-info">
                                                                       <span class="label-stock label label1 font-ct">Pre-Order</span>
                                                                    </div>
                                                                 </div>
                                                                 <span class="label-product label-new">new</span>
                                                                 <div class="button-link">
                                                                    <div class="btn-button add-to-cart action  ">
                                                                       <form action="/cart/add" method="post" class="variants" data-id="AddToCartForm-622750564395" enctype="multipart/form-data">   
                                                                          <input type="hidden" name="id" value="7491831267371">           
                                                                          <a class="btn-addToCart grl btn_df" href="javascript:void(0)" title="Add to cart"><i class="fa fa-shopping-basket"></i><span class="hidden-xs hidden-sm hidden-md">Add to cart</span></a>
                                                                       </form>
                                                                    </div>
                                                                    <div class="quickview-button">
                                                                       <a class="quickview iframe-link visible-lg btn_df" href="javascript:void(0)" data-variants_id="7491831267371" data-toggle="modal" data-target="#myModal" data-id="facapicola-brisket" title="Quick View"><i class="fa fa-search"></i><span class="hidden-xs hidden-sm hidden-md">Quick View</span></a>
                                                                    </div>
                                                                    <div class="product-addto-links">
                                                                       <a class="btn_df btnProduct" href="/account/login" title="Wishlist">
                                                                       <i class="fa fa-heart"></i>
                                                                       <span class="hidden-xs hidden-sm hidden-md">Wishlist</span>
                                                                       </a>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="right-block">
                                                                 <div class="caption">
                                                                    <h4 class="title-product"><a class="product-name" href="/products/facapicola-brisket">Facapic brisket pig</a></h4>
                                                                    <div class="price">                                                                       
                                                                       <span class="visually-hidden">Regular price</span>
                                                                       <span class="price-new"><span class="money" data-currency-usd="$286.00">$286.00</span></span>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                                  <div class="owl-item" style="width: 174.4px; margin-right: 30px;">
                                                     <div class="item">
                                                        <div class="product-item" data-id="product-622751907883">
                                                           <div class="product-item-container grid-view-item   ">
                                                              <div class="left-block">
                                                                 <div class="product-image-container product-image">
                                                                    <a class="grid-view-item__link image-ajax" href="/collections/fashion-accessories/products/bresaola-volupta">
                                                                    <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2644/9252/products/12_33803960-8e99-4f91-bec6-083c25729744_large_crop_center.png?v=1515125669" alt="Boudin ando bualo">
                                                                    <span class="second-img hidden-sm hidden-xs">
                                                                    <img class="img-responsive s-img" alt="Boudin ando bualo" src="//cdn.shopify.com/s/files/1/2644/9252/products/13_11944792-7988-4f35-8da1-c585c7237d6a_large.png?v=1515125669">
                                                                    </span>
                                                                    </a>
                                                                    <ul class="swatch-list">
                                                                       <li>
                                                                          <a class="
                                                                             orange
                                                                             " href="javascript:void(0);" data-image="//cdn.shopify.com/s/files/1/2644/9252/products/23_0fe6f9db-ee80-4a3b-b770-99b5cdf6c240_large.png?v=1515125669" style="background-color: orange; background-image: url(//cdn.shopify.com/s/files/1/2644/9252/t/3/assets/orange.png?10013760330507878611);"></a>
                                                                       </li>
                                                                       <li>
                                                                          <a class="
                                                                             black
                                                                             " href="javascript:void(0);" data-image="//cdn.shopify.com/s/files/1/2644/9252/products/20_large.png?v=1515125669" style="background-color: black; background-image: url(//cdn.shopify.com/s/files/1/2644/9252/t/3/assets/black.png?10013760330507878611);"></a>
                                                                       </li>
                                                                       <li>
                                                                          <a class="
                                                                             white
                                                                             " href="javascript:void(0);" data-image="//cdn.shopify.com/s/files/1/2644/9252/products/15_a0e4bf0f-27e6-4817-9202-66a02fec96ce_large.png?v=1515125669" style="background-color: white; background-image: url(//cdn.shopify.com/s/files/1/2644/9252/t/3/assets/white.png?10013760330507878611);"></a>
                                                                       </li>
                                                                    </ul>
                                                                 </div>
                                                                 <div class="button-link">
                                                                    <div class="btn-button add-to-cart add-sellect">  
                                                                       <a href="/collections/fashion-accessories/products/bresaola-volupta" class="btn_df grl" title="Select options"><i class="fa fa-shopping-basket"></i><span class="hidden-xs hidden-sm hidden-md">Select options</span></a>
                                                                    </div>
                                                                    <div class="quickview-button">
                                                                       <a class="quickview iframe-link visible-lg btn_df" href="javascript:void(0)" data-variants_id="8148066500651" data-toggle="modal" data-target="#myModal" data-id="bresaola-volupta" title="Quick View"><i class="fa fa-search"></i><span class="hidden-xs hidden-sm hidden-md">Quick View</span></a>
                                                                    </div>
                                                                    <div class="product-addto-links">
                                                                       <a class="btn_df btnProduct" href="/account/login" title="Wishlist">
                                                                       <i class="fa fa-heart"></i>
                                                                       <span class="hidden-xs hidden-sm hidden-md">Wishlist</span>
                                                                       </a>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="right-block">
                                                                 <div class="caption">
                                                                    <h4 class="title-product"><a class="product-name" href="/products/bresaola-volupta">Boudin ando bualo</a></h4>
                                                                    <div class="price">                                                    
                                                                       <span class="price-new"><span class="money" data-currency-usd="$37.00">$37.00</span></span>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="owl-nav">
                                               <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                               <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                            </div>
                                            <div class="owl-dots">
                                               <div class="owl-dot"><span></span></div>
                                               <div class="owl-dot active"><span></span></div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </section> -->
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

<!-- Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #337ab7;color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Using our Services</h4>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height: 300px">                    
            <p>You must follow any policies made available to you within the Services.</p>

            <p>Don’t misuse our Services. For example, don’t interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.</p>

            <p>Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don’t remove, obscure, or alter any legal notices displayed in or along with our Services.</p>

            <p>Our Services display some content that is not Google’s. This content is the sole responsibility of the entity that makes it available. We may review content to determine whether it is illegal or violates our policies, and we may remove or refuse to display content that we reasonably believe violates our policies or the law. But that does not necessarily mean that we review content, so please don’t assume that we do.</p>

            <p>In connection with your use of the Services, we may send you service announcements, administrative messages, and other information. You may opt out of some of those communications.</p>

            <p>Some of our Services are available on mobile devices. Do not use such Services in a way that distracts you and prevents you from obeying traffic or safety laws.</p>
      </div>
      <div class="modal-footer"> 
        <div class="col-md-3">
            <div class="checkbox">
              <label><input type="checkbox" value="">I Agree</label>
            </div>               
        </div>
        <div class="col-md-9">
            <form action="<?= base_url(); ?>setting/cek_status_pengajuan" method="post">
            <?php
                $number = isset($data[0])? $data[0]->iklan_id :'';
                $link = isset($uri)? $uri :'';
            ?> 
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
            <input type="hidden" name="number" value="<?= $number ?>">
            <input type="hidden" name="uri" value="<?= $link ?>">
            <input class="btn btn-primary" type="submit" name="btnAgreement" id="btnAgreement" value="Inquiry" disabled/>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalNego">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #337ab7;color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Negotiation Price</h4>
      </div>
      <form action="<?= base_url(); ?>setting/nego" method="post">
          <div class="modal-body" style="overflow-y: scroll;max-height: 350px">
            <div class="col-md-12"> 
            <img class="img" style="width:100px;height:66px;float: left;margin-right: 10px;margin-bottom: 10px;" src="<?= base_url(); ?>uploads/iklan/<?= $agent; ?>" >
            <h3><?= isset($data[0])?$data[0]->title:''; ?></h3>
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
                        <span style="position: absolute;top: 112px;left: 103px;">% From Deal Price</span>
                    </div>
                </div>
                
                <p style="background: #fffacc;padding: 10px;">Your Negotiation will be process by seller. Please waiting max 3x24 hours for advice.</p>
            </div>
            <div class="col-md-12">
                <?php
                        $number = isset($data[0])? $data[0]->iklan_id :'';
                        $link = isset($uri)? $uri :'';
                    ?> 
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                <input type="hidden" name="number" value="<?= $number ?>">
                <input type="hidden" name="uri" value="<?= $link ?>">
                <input class="btn btn-primary btn-block" type="submit" name="btnNego" id="btnNego" value="Nego"/>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>

<script src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.elevateZoom.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places&key=AIzaSyD0QsYct89XQ3Dg9NV11yxPjo3CdPeG6Rs"></script>
<script type="text/javascript">
    $('.mov').click(function(e){      
       e.preventDefault();    
       var id = $(this).attr('id');
       var href = $(this).find('a').attr('href').replace('#','');
        $('.mov').removeClass('active');
        $('.tabe').removeClass('in active show');  
        $(this).addClass('active');
        $("#"+href).addClass('in active');
    });
    
    $("input[name='bcomision']").change(function(e){      
       var active = $("input[name='bcomision']:checked").val();
       if(active=="Y"){
           $("#icom").removeClass("hidden");
       }else{
           $("#icom").addClass("hidden");
       }
    });
</script>
<script>

    // $("#product-featured-image").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
    // $("#product-featured-image").bind("click", function(e) {  
    //   var ez =   $('#product-featured-image').data('elevateZoom'); 
    //     $.fancybox(ez.getGalleryList());
    //   return false;
    // });
    if ($("#FeaturedImageZoom-product-template img").length > 0) {
        if ($(".visible-phone").is(":visible")) {
            //mobile display
            $("#product-featured-image").elevateZoom({
              gallery: 'thumb-slider',
              cursor: 'pointer',
              galleryActiveClass: 'active',
              imageCrossfade: false,
              scrollZoom: false,
              onImageSwapComplete: function() {                
                $('#product-featured-image').data('zoom-image', $("#product-featured-image").attr('src')).elevateZoom({
                  gallery: 'thumb-slider',
                  galleryActiveClass: 'active',
                });
              },
              loadingIcon: window.theme_load
            });
            $("#FeaturedImageZoom-product-template img").bind("click", function(e) {
              return false;
            });
        }else {
            $("#FeaturedImageZoom-product-template img").elevateZoom({
              gallery: 'thumb-slider',
              cursor: 'pointer',
              galleryActiveClass: 'active',
              imageCrossfade: true,
              scrollZoom: true,
              onImageSwapComplete: function() {
                //$(".zoomWrapper div").hide();                
                var ez =   $('#product-featured-image').data('elevateZoom');                  
              },
              loadingIcon: window.theme_load
            });
        }
    }
    // $("#thumb-slider .thumbnail").each(function() {
    //   if($(this).index()==0) $(this).addClass('active');
    // });
</script>
