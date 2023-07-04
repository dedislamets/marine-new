<style type="text/css">
    @media (min-width: 1200px){
        .col-lg-2 {
            width: 20%;
        }
    }
    
    .y-yacht_intro span {
        display:none;
    }
    
    @media (max-width: 767px){
        .table-hide {
            display:none;   
        }
        .post-date {
            display:none;   
        }
        .y-yacht_intro span {
            display:block;
        }
    }
    
    @media (max-width: 1023px){
        .y-header_form form.y-form button {
            padding: 6px 13px 8px;
        }
    }
    .y-yacht_intro {
        padding: 10px;
    }
    .row .custom-heading02:only-child {
       margin-bottom: 0px; 
    }
    .container {    
     padding-left: 5px; 
     padding-right: 5px; 
    }
    .title-adv {
      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 2;
      overflow: hidden;
    }
    .tablet tbody tr td:nth-child(1) {
        text-align: left;
        color: #333;
        font-weight: 700;
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
    
    .blog-post .post-body a:hover h3 {
        color: blue;
    }
    .blog-post.isotope-item .post-date p {
        padding: 0px 0 0 20px;
    }
    .blog-post.isotope-item .post-date {
        width: unset;
    }
</style>
  
 <div id="masterslider" class="master-slider ms-skin-default mb-0">
    <?php 
    foreach ($slider as $key => $value) { 
        ?>
        <div class="ms-slide">          
          <img src="<?= base_url(); ?>assets/masterslider/blank.gif" data-src="<?= base_url(); ?>admin/public/images/<?= $value->img_slider ?>" alt=""/>          
        </div>
    <?php } ?>         
</div><!-- #masterslider end -->
<div class="page-content parallax parallax01">
    <div class="container">        
         <div id="y-header_form">
          <div class="container wow fadeInUp" data-wow-duration="2.5s">
            <div class="row y-header_form">
                <div class="">
                  <form action="search/" class="y-form" method="GET">                      
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8">
                      <div>                                                                    
                        <input type="text" name="keyword" class="form-control freetext-input tt-input" id="keyword" placeholder="Search">
                      </div>                             
                    </div>                         
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="y-form_gap">
                        <button class="y-button"><i class="material-icons" style="padding-left: 25px;color: #fff;">search</i> Search</button>   
                      </div> 
                    </div>  
                  </form>
                </div>
            </div>
          </div>
        </div>
    </div><!-- .container end -->
</div>
<div class="page-content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12" style="margin-top: 15px;">
              <div class="custom-heading02">
                  <h2>Our Services</h2>
                  <p>
                  </p>
              </div><!-- .custom-heading02 end -->
          </div>
      </div><!-- .row end -->
      <div class="row mb-0">
          <ul class="services-gallery clearfix">
              <li class="col-xs-6 col-sm-3 col-md-3 col-lg-2 nopad">
                  <figure class="service-item-container">                               
                      <div class="service-item">
                          <img src="<?= base_url(); ?>assets/images/trading.jpg" alt=""/>
                          <div class="hover-mask-container">
                              <div class="hover-mask"></div>
                              <div class="hover-details">
                                  <a href="search/?keyword=trading">
                                      <span>
                                          view details
                                      </span>
                                  </a>
                              </div><!-- .hover-details end -->
                          </div><!-- .hover-mask-container end -->
                      </div><!-- .service-item end -->
                      <figcaption>
                          <h3>Ship Trading</h3>
                      </figcaption>
                  </figure><!-- .service-item end -->
              </li>
              <li class="col-xs-6 col-sm-3 col-md-3 col-lg-2 nopad">
                  <figure class="service-item-container">
                      <div class="service-item">
                          <a href="rail-transportation.html">
                              <img src="<?= base_url(); ?>assets/images/ship_chartering.jpg" alt=""/>
                          </a>
                          <div class="hover-mask-container">
                              <div class="hover-mask"></div>
                              <div class="hover-details">
                                  <a href="search/?keyword=chartering">
                                      <span>
                                          view details
                                      </span>
                                  </a>
                              </div><!-- .hover-details end -->
                          </div><!-- .hover-mask-container end -->
                      </div><!-- .service-item end -->
                      <figcaption>
                          <h3>Ship Chartering</h3>
                      </figcaption>
                  </figure><!-- .service-item end -->
              </li>
              <li class="col-xs-6 col-sm-3 col-md-3 col-lg-2 nopad">
                  <figure class="service-item-container">
                      <div class="service-item">
                          <a href="air-freight.html">
                              <img src="<?= base_url(); ?>assets/images/ship_management.jpg" alt=""/>
                          </a>
                          <div class="hover-mask-container">
                              <div class="hover-mask"></div>
                              <div class="hover-details">
                                  <a href="search/?keyword=csm">
                                      <span>
                                          view details
                                      </span>
                                  </a>
                              </div><!-- .hover-details end -->
                          </div><!-- .hover-mask-container end -->
                      </div><!-- .service-item end -->
                      <figcaption>
                          <h3>Commercial Ship Management</h3>
                      </figcaption>
                  </figure><!-- .service-item end -->
              </li>
              <li class="col-xs-6 col-sm-3 col-md-3 col-lg-2 nopad">
                  <figure class="service-item-container">
                      <div class="service-item">
                          <a href="overland-transportation.html">
                              <img src="<?= base_url(); ?>assets/images/transportation.jpg" alt=""/>
                          </a>
                          <div class="hover-mask-container">
                              <div class="hover-mask"></div>
                              <div class="hover-details">
                                  <a href="search/?keyword=transportation">
                                      <span>
                                          view details
                                      </span>
                                  </a>
                              </div><!-- .hover-details end -->
                          </div><!-- .hover-mask-container end -->
                      </div><!-- .service-item end -->
                      <figcaption>
                          <h3>Transportation</h3>
                      </figcaption>
                  </figure><!-- .service-item end -->
              </li>
              <li class="col-xs-6 col-sm-3 col-md-3 col-lg-2 nopad">
                  <figure class="service-item-container">
                      <div class="service-item">
                          <a href="overland-transportation.html">
                              <img src="<?= base_url(); ?>assets/images/comodity.jpg" alt=""/>
                          </a>
                          <div class="hover-mask-container">
                              <div class="hover-mask"></div>
                              <div class="hover-details">
                                  <a href="search/?keyword=comodity">
                                      <span>
                                          view details
                                      </span>
                                  </a>
                              </div><!-- .hover-details end -->
                          </div><!-- .hover-mask-container end -->
                      </div><!-- .service-item end -->
                      <figcaption>
                          <h3>Comodity Trading</h3>
                      </figcaption>
                  </figure><!-- .service-item end -->
              </li>
          </ul><!-- #services-gallery end -->
      </div><!-- .row end -->
  </div><!-- .container-fluid end -->
</div>
<section id="y-boat_type">
     <div class="y-boat_type">
      <div class="container">
        <div class="y-section_inner"> 
          <div class="y-section_content_full clearfix">
            <div class="row" style="margin-bottom: 0">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>Ship Ready</h2>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .col-md-12 end -->
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad">
                <div class="row clearfix">                         
                    <div class="">        
                      <ul class="col-md-12 blog-posts isotope">               
                       <?php                                                   
                        foreach ($live as $key => $value): ?>
                        <?php 
                            $service = $value->service; 

                            if ($service == 'Trading') {
                                $price = number_format($value->price);
                                $service = "Ship " . $service;
                            } else if ($service == 'CSM') {
                                $price = number_format($value->price_csm);
                            } else if ($service == 'Transportation') {
                                $price = number_format($value->price_freight);
                            } else if ($service == 'Chartering') {
                                $service = ucwords($value->type_charter)." Charter";
                                $price = number_format($value->price_charter);
                            } else if ($service == 'Comodity') {
                                $price = number_format($value->price);
                                $service = $service . " Trading";
                            }
                        ?>
                         <li class="blog-post clearfix isotope-item col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad">
                                                                                        
                            <div class="ckateg"> 
                                <div class="post-date">
                                    <p>Rp <?= $price; ?></p>
                                </div>
                                <div class="post-category">                                    
                                    <a href="#" class="table-adv">                                                
                                        <?= $service; ?>                                        
                                    </a>
                                </div>
                            </div>

                           <div class="y-yacht_intro_img">                      
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
                             <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(",","", str_replace(" ", "-",strtolower($value->title))) ?>.html" class="post-img">
                                   <img src="<?= base_url(); ?>uploads/iklan/<?= empty($value->nama_foto)? 'not-found.png' : $agent ?>" />
                              </a>
                           </div>
                           <div class="y-yacht_intro" style="padding-top: 5px"> 
                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(",","", str_replace(" ", "-",strtolower($value->title))) ?>.html">
                                    <h3 class="title-adv" style="margin-bottom: 0;height: 45px;font-size:15px;"><?= $value->title; ?></h3>
                                </a>
                              <table class="tablet table-hide">
                                <tr>
                                    <td >
                                        Vessel 
                                    </td>
                                    <td >
                                        <div class="table-adv">
                                          <?= $value->vessel_nama; ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Service
                                    </td>
                                    <td class="table-adv">
                                        <?= $service; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Type
                                    </td>
                                    <td>
                                        <div class="table-adv">
                                          <?= $value->type; ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Build
                                    </td>
                                    <td>
                                        <div class="table-adv">
                                          <?= $value->place_build; ?>, <?= $value->year_build; ?>
                                        </div>
                                    </td>
                                </tr>
                               
                              </table>                           
                              <span style="text-align:left;font-size: 16px;" class="price-ship"><?= $price ?></span> 
                             <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(",","", str_replace(" ", "-",strtolower($value->title))) ?>.html" class="y-button">Learn More</a>
                           </div> 
                         </li> 
                        <?php 
                        endforeach ?>
                    </div>                
                </div>
            </div> 
          </div>
        </div>
      </div>
     </div> 
</section>
<div class="page-content custom-bkg bkg-dark-blue column-img-bkg dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-2 custom-col-padding-both">
                <div class="custom-heading">
                    <h3>Available On</h3>
                </div><!-- .custom-heading end -->
                <p>
                    Marine Business, is “ Online Transaction” created specialises in marine transport business and trading business. Marine Business’s aim is to provide market place to all the company or personal arround the word to share their business wich it connecting with marine transport businees and shipping business.
                </p>
                <ul class="service-list clearfix">
                    <li>
                        <a href="https://play.google.com/store/apps/details?id=id.marine.business"><img class="svg-white" src="<?= base_url(); ?>assets/img/playstore.png" alt="icon"/></a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>assets/MarineBusiness.ipa">
                             <img class="svg-white" src="<?= base_url(); ?>assets/img/appstore.png" alt="icon"/>
                        </a>
                    </li>
                </ul><!-- .service-list end -->
            </div><!-- .col-md-6 end -->
            <div class="col-md-6">
              <div class="app-download"></div>
                <div>&nbsp;</div>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
