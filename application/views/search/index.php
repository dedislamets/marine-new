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

    .ckateg {
        text-align: center;
        padding: 10px;
        background-color: #565f66;
        color: #fff;
    }

    .ckateg a {        
        color: #fff;
    }
</style>
<section id="y-boat_type">
     <div class="y-boat_type">
      <div class="container">
        <div class="row y-section_inner"> 
          <div class="y-section_content_full clearfix">
                <?php if($cari['keyword']!="") { ?>
                    <h4 class="center" style="padding: 10px;background-color: #f4f4f4; margin-top:  10px">Hasil Pencarian "<?= $cari['keyword'] ?>"</h4>
                <?php } ?>
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
                              <input type="checkbox" name="trading" <?php 
                                echo (!empty($cari['service'])? (in_array("trading", $cari['service']) ? 'checked' : '') : '')
                              ?> >Trading 
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="chartering" <?php 
                                echo (!empty($cari['service'])? (in_array("chartering", $cari['service']) ? 'checked' : '') : '')
                              ?>>Chartering 
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="management" <?php 
                                echo (!empty($cari['service'])? (in_array("management", $cari['service']) ? 'checked' : '') : '')
                              ?>>Management 
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="transportation" <?php 
                                echo (!empty($cari['service'])? (in_array("transportation", $cari['service']) ? 'checked' : '') : '')
                              ?>>Transportation 
                            </label>
                          </div>                                                
                        </form>
                      </div>
                    </div> 
                    <div class="panel panel-default sidebar-menu">
                      <div class="panel-heading">
                        <h3 class="panel-title">Type </h3>
                      </div>
                      <div class="panel-body" style="overflow-y: scroll;max-height: 300px;">
                        <form>
                          <div class="form-group"></div>                          
                          <div class="checkbox"><label><input type="checkbox">Cabin Cruiser</label></div>
                          <div class="checkbox"><label><input type="checkbox">Cargo Ship</label></div>
                          <div class="checkbox"><label><input type="checkbox">Vissing Vessel</label></div>
                          <div class="checkbox"><label><input type="checkbox">Other Boats</label></div>
                          <div class="checkbox"><label><input type="checkbox">Passenger Ship</label></div>
                          <div class="checkbox"><label><input type="checkbox">Sailboat</label></div>
                          <div class="checkbox"><label><input type="checkbox">Tanker</label></div>
                          <div class="checkbox"><label><input type="checkbox">General Cargo</label></div>
                          <div class="checkbox"><label><input type="checkbox">Bulk Carrier</label></div>
                          <div class="checkbox"><label><input type="checkbox">AHTS</label></div>
                          <div class="checkbox"><label><input type="checkbox">AHT</label></div>
                          <div class="checkbox"><label><input type="checkbox">PSV</label></div>
                          <div class="checkbox"><label><input type="checkbox">Dredging Vessel</label></div>
                          <div class="checkbox"><label><input type="checkbox">SPOB</label></div>
                          <div class="checkbox"><label><input type="checkbox">Accomodation Work Boat</label></div>
                          <div class="checkbox"><label><input type="checkbox">Accomodation Barge</label></div>
                          <div class="checkbox"><label><input type="checkbox">Tug Boat</label></div>
                          <div class="checkbox"><label><input type="checkbox">Flat Top Barge</label></div>
                          <div class="checkbox"><label><input type="checkbox">Oil Barge</label></div>
                          <div class="checkbox"><label><input type="checkbox">Landing Craft</label></div>
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
                             <li class="blog-post clearfix isotope-item col-xs-6 col-sm-6 col-md-4 col-lg-4 nopad">
                                <div class="post-date">
                                    <p>Rp <?= $price; ?></p>
                                </div>                                                            
                                <div class="ckateg">                               
                                    <div class="post-category">                                    
                                        <a href="#">                                                
                                            <?= $service; ?>                                        
                                        </a>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html">
                                        <h3 class="table-adv" style="margin-bottom: 0"><?= $value->title; ?></h3>
                                    </a>                              
                                </div>
                               <div class="y-yacht_intro_img">
                                 <!-- <a href="charter_single.html"><img alt="" class="img-responsive" src="<?= base_url(); ?>assets/images/product_1.jpg"></a> -->
                                 <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="post-img">
                                       <img src="<?= base_url(); ?>uploads/iklan/<?= isset($value->nama_foto)?$value->nama_foto:'not-found.jpg' ?>" />
                                  </a>
                               </div>
                               <div class="y-yacht_intro" style="padding-top: 5px"> 
                                  <table class="tablet">
                                    <tr>
                                        <td>
                                            Vessel Name
                                        </td>
                                        <td class="table-adv">
                                            <?= $value->vessel_nama; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Type
                                        </td>
                                        <td class="table-adv">
                                            <?= $value->type; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Build
                                        </td>
                                        <td class="table-adv">
                                            <?= $value->place_build; ?>, <?= $value->year_build; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Material
                                        </td>
                                        <td class="table-adv">
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
<script src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
  $('input[type=checkbox]').on('change', function(e) {
    
    var nama = this.name;
    var checked = this.checked;
    var spram = "";
    var keyword = window.location.href.includes("keyword=");
    var url = window.location.href.includes("service=");
    var cs = window.location.search.split('&'); 

    if(keyword){
      spram = cs[0];
    }
    switch(nama) {
      case "trading":                
        if(checked){   
          if(url){  
            if(cs.length==2){                      
              spram = checkedService(cs[1], spram,'trading');           
              window.location.assign("https://marinebusiness.co.id/search/" + spram);
            }  
          }else{
            window.location.assign("https://marinebusiness.co.id/search/" + spram + "&service=trading");
          }
        }else{
          uncheckedService('trading');
        }
        break;
      case "chartering":
        if(checked){                    
          if(url){            
            if(cs.length==2){
              spram = checkedService(cs[1], spram,'chartering');           
              window.location.assign("https://marinebusiness.co.id/search/" + spram);
            }  
          }else{
            window.location.assign("https://marinebusiness.co.id/search/" + spram + "&service=chartering");
          }
        }else{
          uncheckedService('chartering');
        }
        break;
      case "management":
        if(checked){                    
          if(url){            
            if(cs.length==2){
              spram = checkedService(cs[1], spram,'management');           
              window.location.assign("https://marinebusiness.co.id/search/" + spram);
            }  
          }else{
            window.location.assign("https://marinebusiness.co.id/search/" + spram + "&service=management");
          }
        }else{
          uncheckedService('management');
        }
        break; 
      case "transportation":
        if(checked){                    
          if(url){            
            if(cs.length==2){
              spram = checkedService(cs[1], spram,'transportation');           
              window.location.assign("https://marinebusiness.co.id/search/" + spram);
            }  
          }else{
            window.location.assign("https://marinebusiness.co.id/search/" + spram + "&service=transportation");
          }
        }else{
          uncheckedService('transportation');
        }
        break; 
      default:
        break;
    }
  });

  function uncheckedService(key) {
    var str = window.location.href.replace(key,'');
    var url = str.includes("=,");
    if(url){
      str = str.replace("=,","=");
    }

    if(str.includes(",,",",")) {
      str = str.replace(",,",","); 
    }
    if(str.endsWith(',')){
      str = str.slice(0,-1);
    }

    if(str.endsWith('=')){
      str = str.replace("&service=",""); 
    }
    window.location.assign(str);
  }
  function checkedService(arrayService, spram,key) {
    var s_cs = arrayService.replace('service=','').split(',');
    spram += "&service=";
    for (let i = 0; i < s_cs.length; i++) {
      spram += s_cs[i]+",";
    }
    spram += key;  
    return spram;
  }
</script>