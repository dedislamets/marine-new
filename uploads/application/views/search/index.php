<style type="text/css">
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
    .header-wrapper {      
      position: relative;      
  }
</style>

<section id="y-boat_type">
     <div class="y-boat_type">
      <div class="container">
        <div class="row y-section_inner"> 
          <div class="y-section_content_full clearfix">
          	
            <h4 class="center" style="padding: 10px;background-color: #f4f4f4; margin-top:  10px">Hasil Pencarian "<?= $cari ?>"</h4>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad">
                <div class="col-md-3">                    
                    <div class="panel panel-default sidebar-menu">
                      <div class="panel-heading">
                        <h3 class="panel-title">Service </h3>
                      </div>
                      <div class="panel-body">
                        <form>
                          <div class="form-group"></div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Trading 
                              (25)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Chartering 
                              (30)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Management 
                              (18)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Transportation 
                              (31)
                            </label>
                          </div>                                                
                        </form>
                      </div>
                    </div> 
                    <div class="panel panel-default sidebar-menu">
                      <div class="panel-heading">
                        <h3 class="panel-title">Type </h3>
                      </div>
                      <div class="panel-body">
                        <form>
                          <div class="form-group"></div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Trading 
                              (25)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Chartering 
                              (30)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Management 
                              (18)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Transportation 
                              (31)
                            </label>
                          </div>                                                
                        </form>
                      </div>
                    </div> 
                    <div class="panel panel-default sidebar-menu">
                      <div class="panel-heading">
                        <h3 class="panel-title">Material </h3>
                      </div>
                      <div class="panel-body">
                        <form>
                          <div class="form-group"></div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Steel 
                              (25)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Aluminium 
                              (30)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Wood 
                              (18)
                            </label>
                          </div>                                                                        
                        </form>
                      </div>
                    </div>                    
                </div>
                <div class="col-md-9">
                    <div class="row clearfix">	                       
                        <div class="">        
                        	<ul class="col-md-12 blog-posts isotope">               
                           <?php                                                   
                            foreach ($live as $key => $value): ?>
    	                       <li class="blog-post clearfix isotope-item col-xs-6 col-sm-6 col-md-4 col-lg-4 nopad">
    	                       	<div class="post-info clearfix">
                                    <div class="post-date">
                                        <p>
                                            Rp<?= number_format($value->price) ?>
                                        </p>
                                    </div><!-- .post-date end -->  

                                    <div class="post-category">
                                        <a href="#"><?= $value->service; ?></a>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html">
                                        <h3 class="title-adv" style="margin-bottom: 0"><?= $value->title; ?></h3>
                                    </a>                              
                                </div>
    	                         <div class="y-yacht_intro_img">
    	                           <!-- <a href="charter_single.html"><img alt="" class="img-responsive" src="<?= base_url(); ?>assets/images/product_1.jpg"></a> -->
                                 <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="post-img">
                                       <img src="<?= base_url(); ?>uploads/<?= isset($value->nama_foto)?$value->nama_foto:'not-found.jpg' ?>" />
                                  </a>
    	                         </div>
    	                         <div class="y-yacht_intro" style="padding-top: 5px">	
                                  <table class="tablet">
                                    <tr>
                                        <td>
                                            Vessel Name
                                        </td>
                                        <td>
                                            <?= $value->vessel_nama; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Type
                                        </td>
                                        <td>
                                            <?= $value->type; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Build
                                        </td>
                                        <td>
                                            <?= $value->place_build; ?>, <?= $value->year_build; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Material
                                        </td>
                                        <td>
                                            <?= $value->construction; ?>
                                        </td>
                                    </tr>
                                  </table>                           
    	                          
    	                           <!-- <span>Price <strong>$5000</strong></span> -->
    	                           <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="y-button">Learn More</a>
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
     </div> 
</section>
 