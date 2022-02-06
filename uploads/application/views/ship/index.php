<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ship.css"/>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style-theme.css"/>
<style type="text/css">
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
<div class="page-title-style02">
    <div class="">
        <div class="row">
           <div class="navi">
                <div class="custom-heading02">
                    <h2><?= isset($data[0])?$data[0]->title:''; ?></h2>
                    <h3><?= isset($data[0])?$data[0]->service:''; ?></h3>
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
                 <div id="shopify-section-product-template" class="shopify-section col-xs-12 main-product">                    
                    <div class="product-template__container product" id="ProductSection-product-template" data-section-id="product-template" data-section-type="product" >                      
                       <div class="product-single ">
                          <div class="row" style="margin-bottom: 0">
                             <div class=" col-lg-5 col-md-6 col-sm-12 product-img-box product-single__image grid__item product-single__photos ">
                                <div id="FeaturedImageZoom-product-template" class="large-image product-single__photo product-single__photo--has-thumbnails">
                                    <!-- <img id="img_01" src="small/image1.jpg" data-zoom-image="large/image1.jpg"/>
                                    <div id="gal1">
                                      <a href="#" data-image="small/image1.jpg" data-zoom-image="large/image1.jpg">
                                        <img id="img_01" src="thumb/image1.jpg" />
                                      </a>
                                    </div> -->
                                   <a href="#">
                                        <div style="height:392px;" class="zoomWrapper">                                           
                                            <img id="product-featured-image" src="<?= base_url(); ?>uploads/<?= $foto[0]->nama_foto ?>" data-zoom-image="<?= base_url(); ?>assets/img/pics/k1.jpg" class="product-featured-img  zoom_default"  style="position: absolute;height:395px;width: 100%;top: 0px;left: 0px;">
                                        </div>                                        
                                   </a>
                                </div>
                                <div class="thumbnails-slide thumbnails-wrapper">
                                   <div id="thumb-slider" class="owl-carousel owl-loaded owl-drag">
                                      <div class="owl-stage-outer">
                                         <div class="owl-stage" style="width: 508px;">
                                            <?php foreach($foto as $value) { ?>
                                                <div class="owl-item" style="width: 91.5px; margin-right: 10px;">
                                                    <a class="thumbnail" data-image-zoom="<?= base_url(); ?>uploads/<?= $value->nama_foto; ?>" data-index=" 0" data-image="<?= base_url(); ?>uploads/<?= $value->nama_foto; ?>">
                                                        <img class="product-single__thumbnail-image" src="<?= base_url(); ?>uploads/<?= $value->nama_foto; ?>" alt="Nulla deseru chicken">
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
                             <div class=" col-lg-7 col-md-6 col-sm-12 product-single__detail grid__item ">

                                <div class="panel with-nav-tabs panel-default">
                                    <div class="panel-heading">
                                           <h3 style="color: #fff">Information</h3>
                                    </div>
                                    <div class="panel-body">
                                         <div class="product-single__meta">                                                     
                                                   <h5 id="price" class="product-price__price hidden">
                                                      <span class="price"><span class="money" data-currency-usd="$423.00">$423.00</span></span>
                                                   </h5>                                                   
                                                   <div class="clearfix product-price">
                                                      <h2 style="display: inline-block;font-weight: 900">Price :</h2>
                                                      <h2 style="display: inline-block;font-weight: 900">Rp423.000.000</h2>
                                                   </div>
                                                  <!--  <div class="product-single__description short" itemprop="description">
                                                      <label class="hidden">Quick Overview</label>
                                                      Curabitur egestas malesuada volutpat. Nunc vel vestibulum odio, ac pellentesque lacus. Pellentesque dapibus nunc nec est imperdiet, a malesuada sem rutrum. Sed quam odio, porta a finibus quis,...
                                                   </div> -->
                                                   <ul class="nav nav-pills">
                                                        <li class="mov active" id="spec"><a data-toggle="pill" href="#home">Spesification</a></li>
                                                        <li class="mov" id="dimensi"><a data-toggle="pill" href="#menu1">Dimension</a></li>
                                                        <li class="mov" id="capacity"><a data-toggle="pill" href="#menu2">Cargo Capacity</a></li>                                                        
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
                                                                        <td><?= isset($data[0])?$data[0]->vessel_nama:''; ?></td>  
                                                                        <td>Owners</td>
                                                                        <td><?= isset($data[0])?$data[0]->owners:''; ?></td>                                           
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Place Build</td>
                                                                        <td><?= isset($data[0])?$data[0]->place_build:''; ?></td>  
                                                                        <td>Builder</td>                                                                    
                                                                        <td><?= isset($data[0])?$data[0]->year_build:''; ?></td>                                                                  
                                                                    </tr>                                                             
                                                                    <tr>
                                                                        <td>Port Registry</td>
                                                                        <td><?= isset($data[0])?$data[0]->port_registry:''; ?></td>
                                                                        <td>Construction</td>
                                                                        <td><?= isset($data[0])?$data[0]->construction:''; ?></td>   
                                                                    </tr>                                                              
                                                                    <tr>
                                                                        <td>Call Sign</td>
                                                                        <td><?= isset($data[0])?$data[0]->call_sign:''; ?></td>  
                                                                        <td>Tanda Sellar</td>
                                                                        <td>approx 158 units of textile</td>                                
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Classification</td>
                                                                        <td><?= isset($data[0])?$data[0]->clasification:''; ?></td>  
                                                                        <td>Classification No</td>
                                                                        <td><?= isset($data[0])?$data[0]->clasification_no:''; ?></td>                                
                                                                    </tr>
                                                                    <tr>
                                                                        <td>IMO No</td>
                                                                        <td><?= isset($data[0])?$data[0]->imo:''; ?></td>  
                                                                        <td>Satelite Phone Number</td>
                                                                        <td><?= isset($data[0])?$data[0]->s_phone:''; ?></td>                                
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
                                                                        <td>-</td>
                                                                        <td>-</td>   
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
                                                      <form action="/cart/add" method="post" enctype="multipart/form-data" class="product-form product-form-product-template product-form--hide-variant-labels" data-section="product-template">
                                                         <div id="product-variants">
                                                            <input type="hidden" name="id" value="7491712253995">
                                                         </div>                                                         
                                                         <div class="product-options-bottom">                        
                                                            <div class="product-form__item product-form__item--submit">
                                                               <button type="submit" name="add" id="AddToCart-product-template" class="btn product-form__cart-submit product-form__cart-submit--small">
                                                               <span id="AddToCartText-product-template">
                                                               <i class="fa fa-shopping-basket"></i>
                                                               Add to cart
                                                               </span>
                                                               </button>
                                                            </div>
                                                            <div class="product-addto-links">
                                                               <a class="btn_df btnProduct" href="/account/login" title="Wishlist">
                                                               <i class="fa fa-heart"></i>
                                                               <span class="hidden-xs hidden-sm hidden-md">Wishlist</span>
                                                               </a>
                                                            </div>
                                                            <!-- <div class="product-addto-links" style="padding-left: 10px">
                                                                 <label class="" style="float: left;">Share:</label>
                                                                 <ul style="float: left;">
                                                                    <div class="addthis_inline_share_toolbox" data-url="https://ss-emarket.myshopify.com/products/doggen-esseon" data-title="Nulla deseru chicken" data-description="Curabitur egestas malesuada volutpat. Nunc vel vestibulum odio, ac pellentesque lacus. Pellentesque dapibus nunc nec est imperdiet, a malesuada sem rutrum. Sed " style="clear: both;">
                                                                       <div id="atstbx" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-113af696-e0aa-461c-b41c-2f2efcb2da41" role="region">
                                                                          <span id="at-113af696-e0aa-461c-b41c-2f2efcb2da41" class="at4-visually-hidden">AddThis Sharing Buttons</span>
                                                                          <div class="at-share-btn-elements">
                                                                             <a role="button" tabindex="1" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 0px;">
                                                                                <span class="at4-visually-hidden">Share to Facebook</span>
                                                                                <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;" class="at-icon at-icon-facebook">
                                                                                      <title id="at-svg-facebook-1">Facebook</title>
                                                                                      <g>
                                                                                         <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                                                                                      </g>
                                                                                   </svg>
                                                                                </span>
                                                                             </a>
                                                                             <a role="button" tabindex="1" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 0px;">
                                                                                <span class="at4-visually-hidden">Share to Twitter</span>
                                                                                <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;" class="at-icon at-icon-twitter">
                                                                                      <title id="at-svg-twitter-2">Twitter</title>
                                                                                      <g>
                                                                                         <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                                                                                      </g>
                                                                                   </svg>
                                                                                </span>
                                                                             </a>
                                                                             <a role="button" tabindex="1" class="at-icon-wrapper at-share-btn at-svc-pinterest_share" style="background-color: rgb(203, 32, 39); border-radius: 0px;">
                                                                                <span class="at4-visually-hidden">Share to Pinterest</span>
                                                                                <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-pinterest_share-3" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;" class="at-icon at-icon-pinterest_share">
                                                                                      <title id="at-svg-pinterest_share-3">Pinterest</title>
                                                                                      <g>
                                                                                         <path d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z" fill-rule="evenodd"></path>
                                                                                      </g>
                                                                                   </svg>
                                                                                </span>
                                                                             </a>
                                                                             <a role="button" tabindex="1" class="at-icon-wrapper at-share-btn at-svc-google_plusone_share" style="background-color: rgb(220, 78, 65); border-radius: 0px;">
                                                                                <span class="at4-visually-hidden">Share to Google+</span>
                                                                                <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-google_plusone_share-4" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;" class="at-icon at-icon-google_plusone_share">
                                                                                      <title id="at-svg-google_plusone_share-4">Google+</title>
                                                                                      <g>
                                                                                         <path d="M12 15v2.4h3.97c-.16 1.03-1.2 3.02-3.97 3.02-2.39 0-4.34-1.98-4.34-4.42s1.95-4.42 4.34-4.42c1.36 0 2.27.58 2.79 1.08l1.9-1.83C15.47 9.69 13.89 9 12 9c-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.72-2.84 6.72-6.84 0-.46-.05-.81-.11-1.16H12zm15 0h-2v-2h-2v2h-2v2h2v2h2v-2h2v-2z" fill-rule="evenodd"></path>
                                                                                      </g>
                                                                                   </svg>
                                                                                </span>
                                                                             </a>
                                                                             <a role="button" tabindex="1" class="at-icon-wrapper at-share-btn at-svc-compact" style="background-color: rgb(255, 101, 80); border-radius: 0px;">
                                                                                <span class="at4-visually-hidden">Share to More</span>
                                                                                <span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;">
                                                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-5" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;" class="at-icon at-icon-addthis">
                                                                                      <title id="at-svg-addthis-5">Addthis</title>
                                                                                      <g>
                                                                                         <path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path>
                                                                                      </g>
                                                                                   </svg>
                                                                                </span>
                                                                             </a>
                                                                          </div>
                                                                       </div>
                                                                    </div>  
                                                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5"></script>
                                                                 </ul>
                                                              </div>   -->
                                                         </div>
                                                      </form>
                                                   </div>                                                  
                                        </div>
                                    </div>
                                </div>
                             </div>
                          </div>
                          <div class="row" style="margin-bottom: 0">
                             <div class="col-lg-12 col-md-12">
                                <div class="panel-group detail-bottom">
                                   <div class="tab-vertical">
                                      <ul class="nav nav-tabs font-ct">
                                         <li class="active"><a href="#tabs1" data-toggle="tab">Description</a></li>
                                         <li><a href="#tabs4" data-toggle="tab">Lokasi</a></li>
                                      </ul>
                                      <div class="tab-content">
                                         <div class="tab-pane fade in active" id="tabs1">

                                            <p><?= isset($data[0])?$data[0]->description:''; ?></p>
                                           
                                         </div>                                         
                                         <div class="tab-pane" id="tabs4">
                                            <div class="form-group row">                                                    
                                                <div class="col-sm-12">
                                                    <input type="hidden" name="longitude" id="longitude" value="<?= isset($data[0])?$data[0]->longitude:''; ?>">
                                                    <input type="hidden" name="latitude" id="latitude" value="<?= isset($data[0])?$data[0]->latitude:''; ?>">
                                                    <div id="peta" style="width:100%; height:300px;"></div>
                                                                                                                    
                                                </div>
                                            </div>
                                         </div>
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
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.elevateZoom.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyD0QsYct89XQ3Dg9NV11yxPjo3CdPeG6Rs"></script>
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

