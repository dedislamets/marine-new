<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" > -->
<link href="<?= base_url(); ?>assets/css/smart_wizard.css" rel="stylesheet" type="text/css" />        
<link href="<?= base_url(); ?>assets/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/lightbox.css">
<style type="text/css">
h1, h2 {
    font-weight: 800;
    margin-top: 0    
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;    
    border-radius: 0;
}

.btn-default {
    text-shadow: 0 1px 0 #fff;
    background-image: -webkit-linear-gradient(top,#fff 0,#e0e0e0 100%);
    background-image: -o-linear-gradient(top,#fff 0,#e0e0e0 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#fff),to(#e0e0e0));
    background-image: linear-gradient(to bottom,#fff 0,#e0e0e0 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    background-repeat: repeat-x;
    border-color: #dbdbdb;
    border-color: #ccc;
}
.navbar-nav>li>a {        
   line-height: 48px; 
}
.btn:hover {
    color: #fbfbfb;
    text-decoration: none;
}
.suffix {
    position: absolute;
    top: -3px;
    right: 15px;
    height: 100%;
    line-height: 24px;
    float: left;
    padding: 8px;
    color: #bababa;
    font-size: 14px;
    transition: color .25s ease;
}

    /*.drop-zone {
        height: 200px;
        padding: 10px;
        border: 3px #ccc dashed;
        color: #aaa;
        text-align: center;
        border-radius: 3px;
        background-image: url(<?= base_url(); ?>assets/img/here.jpg);
        background-repeat: no-repeat;
        background-position: center center;
        background-color: #ededed;
        cursor: pointer;
        }*/
        .dropzone {        
            border: 2px dashed #0087F7;
            text-align: center;
            border-radius: 3px;
        /*background-image: url(<?= base_url(); ?>assets/img/here.jpg);
        background-repeat: no-repeat;
        background-position: center center;*/
        background-color: #ededed;
        cursor: pointer;
    }
    .page-title-style02 {        
        margin-bottom: 9px;
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
.navbar {
    margin-bottom: 0px;
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
                <div class="page-content">
                    <div class="">
                        <div class="">                            
                            <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                                <input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >

                                    <!-- SmartWizard html -->
                                    <div id="smartwizard">
                                        <ul>
                                            <li class="col-sm-4"><a href="#step-1">Step 1<br /><small>Information</small></a></li>
                                            <li class="col-sm-4"><a href="#step-2">Step 2<br /><small>Detail Ship</small></a></li>
                                            <li class="col-sm-4"><a href="#step-3">Step 3<br /><small>Certificate</small></a></li>
                                        </ul>
                                        <div>                                    
                                            <div id="step-1">   
                                                <h3>Information</h3>  
                                                <?php
                                                    $idIklan        = '';
                                                    $idKapal      = '';
                                                    $title          = '';
                                                    $description    = '';
                                                    $type           = '';
                                                    $service        = '';
                                                    $price          = 0;
                                                    $price_charter  = 0;
                                                    $duration       = 0;
                                                    $duration_uom   = '';
                                                    $area           = '';
                                                    $type_charter   = '';
                                                    $vessel         = '';
                                                    $owner          = '';
                                                    $place_build    = '';
                                                    $year_build     = '';
                                                    $builder        = '';
                                                    $keel           = '';
                                                    $launching      = '';
                                                    $port           = '';
                                                    $construction   = '';
                                                    $imo            = '';   
                                                    $call_sign      = '';   
                                                    $clasification  = '';
                                                    $length         = 0;
                                                    $loa            = 0;
                                                    $breadth        = 0;
                                                    $depth          = 0;
                                                    $summer         = 0;
                                                    $grt            = 0;  
                                                    $nrt            = 0; 
                                                    $dwt            = 0; 
                                                    $deck_area      = '';
                                                    $sideboard      = 0;
                                                    $deck_capacity  = 0;
                                                    $max_deck_load  = 0; 

                                                    if ($mode == 'edit') {
                                                        $idIklan        = $edit1[0]->id;
                                                        $idKapal        = $edit2[0]->clasification_no;
                                                        $title          = $edit1[0]->title;
                                                        $description    = $edit1[0]->description;
                                                        $type           = $edit1[0]->type; 
                                                        $service        = $edit1[0]->service; 
                                                        $price          = $edit1[0]->price; 
                                                        $price_charter  = $edit1[0]->price_charter; 
                                                        $duration       = $edit1[0]->duration;
                                                        $duration_uom   = $edit1[0]->duration_uom; 
                                                        $area           = $edit1[0]->area;   
                                                        $type_charter   = $edit1[0]->type_charter;   
                                                        $vessel         = $edit2[0]->vessel_nama;   
                                                        $owner          = $edit2[0]->owners;
                                                        $place_build    = $edit2[0]->place_build;
                                                        $year_build     = $edit2[0]->year_build;
                                                        $builder        = $edit2[0]->builder; 
                                                        $keel           = $edit2[0]->keel_laid; 
                                                        $launching      = $edit2[0]->launching;   
                                                        $port           = $edit2[0]->port_registry;   
                                                        $construction   = $edit2[0]->construction;   
                                                        $imo            = $edit2[0]->imo;   
                                                        $call_sign      = $edit2[0]->call_sign;   
                                                        $clasification  = $edit2[0]->clasification;

                                                        $length         = $edit2[0]->length;
                                                        $loa            = $edit2[0]->loa;
                                                        $breadth        = $edit2[0]->breadth;
                                                        $depth          = $edit2[0]->depth;
                                                        $summer         = $edit2[0]->summer_draught;
                                                        $grt            = $edit2[0]->grt;  
                                                        $nrt            = $edit2[0]->nrt;
                                                        $dwt            = $edit2[0]->dwt;
                                                        $deck_area      = $edit2[0]->deck_area;
                                                        $sideboard      = $edit2[0]->sideboard;
                                                        $deck_capacity  = $edit2[0]->deck_capacity;
                                                        $max_deck_load  = $edit2[0]->max_deck_load;  
                                                        
                                                    }
                                                    
                                                ?>   
                                                <input type="hidden" id="mode" name="mode" value="<?= $mode ?>">
                                                <div id="form-step-0" role="form" data-toggle="validator">    
                                                    <div class="form-group row">
                                                        <label for="email" class="col-sm-3 col-form-label right" >Title</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="Write your title" value="<?= $title ?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>                                                   
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label right">Description</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" id="description" name="description" rows="5" placeholder="Write your Description" required><?= $description ?></textarea>
                                                        </div>
                                                    </div>                                                
                                                    <div class="form-group row">
                                                        <label for="inputState" class="col-sm-3 col-form-label right">Category</label>
                                                        <div class="col-sm-9">
                                                            <select id="inputState" name="inputState" class="form-control">
                                                                <option value="Barge" <?php if ($type == "Barge") echo "selected" ?> >Barge</option>
                                                                <option value="Cabin Cruiser" <?php if($type == 'Cabin Cruiser') echo "selected"; ?>>Cabin Cruiser</option>
                                                                <option value="Cargo Ship" <?php if($type == 'Cargo Ship') echo "selected"; ?>>Cargo Ship</option>
                                                                <option value="Vissing Vessel" <?php if($type == 'Vissing Vessel') echo "selected"; ?>>Vissing Vessel</option>
                                                                <option value="Other Boats" <?php if($type == 'Other Boats') echo "selected"; ?>>Other Boats</option>
                                                                <option value="Passenger Ship" <?php if($type == 'Passenger Ship') echo "selected"; ?>>Passenger Ship</option>
                                                                <option value="Sailboat" <?php if($type == 'Sailboat') echo "selected"; ?>>Sailboat</option>
                                                                <option value="Tanker" <?php if($type == 'Tanker') echo "selected"; ?>>Tanker</option>
                                                                <option value="General Cargo" <?php if($type == 'General Cargo') echo "selected"; ?>>General Cargo</option>
                                                                <option value="Bulk Carrier" <?php if($type == 'Bulk Carrier') echo "selected"; ?>>Bulk Carrier</option>
                                                                <option value="AHTS" <?php if($type == 'AHTS') echo "selected"; ?>>AHTS</option>
                                                                <option value="AHT" <?php if($type == 'AHT') echo "selected"; ?>>AHT</option>
                                                                <option value="PSV" <?php if($type == 'PSV') echo "selected"; ?>>PSV</option>
                                                                <option value="Dredging Vessel" <?php if($type == 'Dredging Vessel') echo "selected"; ?>>Dredging Vessel</option>
                                                                <option value="SPOB" <?php if($type == 'SPOB') echo "selected"; ?>>SPOB</option>
                                                                <option value="Accomodation Work Boat" <?php if($type == 'Accomodation Work Boat') echo "selected"; ?>>Accomodation Work Boat</option>
                                                                <option value="Accomodation Barge" <?php if($type == 'Accomodation Barge') echo "selected"; ?>>Accomodation Barge</option>
                                                                <option value="Tug Boat" <?php if($type == 'Tug Boat') echo "selected"; ?>>Tug Boat</option>
                                                                <option value="Flat Top Barge" <?php if($type == 'Flat Top Barge') echo "selected"; ?>>Flat Top Barge</option>
                                                                <option value="Oil Barge" <?php if($type == 'Oil Barge') echo "selected"; ?>>Oil Barge</option>
                                                                <option value="Landing Craft" <?php if($type == 'Landing Craft') echo "selected"; ?>>Landing Craft</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="col-form-label col-sm-3 pt-0 right">Type</label>
                                                            <div class="col-sm-9">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Trading" 
                                                                    <?php if($service == 'Trading'){ 
                                                                        echo "checked";
                                                                    }else if(empty($service)){ 
                                                                        echo "checked"; 
                                                                    }  ?>>
                                                                    <label class="form-check-label" for="gridRadios1">
                                                                    Ship Trading
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Chartering" <?php if($service == 'Chartering') echo "checked"; ?>>
                                                                    <label class="form-check-label" for="gridRadios2">
                                                                        Ship Chartering
                                                                    </label>
                                                                </div>
                                                                <div class="form-check disabled">
                                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="CSM" <?php if($service == 'CSM') echo "checked"; ?>>
                                                                    <label class="form-check-label" for="gridRadios3">
                                                                        Commercial Ship Management
                                                                    </label>
                                                                </div>
                                                                <div class="form-check disabled">
                                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="Transportation" <?php if($service == 'Transportation') echo "checked"; ?>>
                                                                    <label class="form-check-label" for="gridRadios4">
                                                                        Transportation
                                                                    </label>
                                                                </div>
                                                                <div class="form-check disabled">
                                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="Comodity" value="Transportation" <?php if($service == 'Comodity') echo "checked"; ?>>
                                                                    <label class="form-check-label" for="gridRadios5">
                                                                        Comodity Trading
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row trading <?php if($service=='Chartering') echo "hidden"; ?>">
                                                        <label for="price" class="col-sm-3 col-form-label right" >Price (IDR)</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control dec" name="price" id="price" placeholder="" value="<?= $price ?>">
                                                            <div class="help-block with-errors"></div>
                                                        </div>                                                
                                                    </div>
                                                    <div class="form-group row type-charter <?php if($service!='Chartering') echo "hidden"; ?>">
                                                        <label for="inputState" class="col-sm-3 col-form-label right">Chartering Type</label>
                                                        <div class="col-sm-9">
                                                            <select id="typeCharter" name="typeCharter" class="form-control">
                                                                <option value="time" <?php if($type_charter == 'time') echo "selected"; ?>>Time Charter</option>
                                                                <option value="bareboat" <?php if($type_charter == 'bareboat') echo "selected"; ?>>Bareboat Charter</option>
                                                                <option value="freight" <?php if($type_charter == 'freight') echo "selected"; ?>>Freight Charter</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div style="border: dotted;padding: 10px" class="charter <?php if($service!='Chartering') echo "hidden"; ?>">
                                                        <div class="form-group row dura">
                                                            <label for="price_charter" class="col-sm-3 col-form-label right" >Price (IDR)</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control dec" name="price_charter" id="price_charter" placeholder="" value="<?= $price_charter ?>">
                                                                <div class="help-block with-errors"></div>
                                                            </div>                                                
                                                        </div>
                                                        <div class="form-group row">                                  
                                                            <label for="inputState" class="col-sm-3 col-form-label right">Duration</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="duration" id="duration" placeholder="" value="<?= $duration ?>">
                                                                    <span class="input-group-btn" style="color: #fff;">
                                                                        <select class="btn" id="duration_uom" name="duration_uom">
                                                                            <option value="day" <?php if($duration_uom == 'day') echo "selected"; ?>>Day</option>
                                                                            <option value="month" <?php if($duration_uom == 'month') echo "selected"; ?>>Month</option>
                                                                            <option value="year" <?php if($duration_uom == 'year') echo "selected"; ?>>Year</option>         
                                                                        </select>
                                                                     </span>
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group row">
                                                            <label for="area" class="col-sm-3 col-form-label right" > Operational Area</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="area" id="area"  placeholder="" value="<?= $area ?>">
                                                                <div class="help-block with-errors"></div>
                                                            </div>                                                
                                                        </div>
                                                    </div>
                                                    <div style="border: dotted;padding: 10px" class="freight hidden">
                                                        <div class="form-group row">
                                                            <label for="loa" class="col-sm-3 col-form-label right">Price (IDR)</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control dec" value="0" name="price_freight" id="price_freight" style="padding-right: 57px;">                                                            
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="price" class="col-sm-3 col-form-label right" >Port Of Loading</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="portloading" id="portloading" placeholder="" >
                                                                <div class="help-block with-errors"></div>
                                                            </div>                                                
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="price" class="col-sm-3 col-form-label right" >Port Of Discharging</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="portdiscarge" id="portdiscarge" placeholder="" >
                                                                <div class="help-block with-errors"></div>
                                                            </div>                                                
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="loa" class="col-sm-3 col-form-label right">Quantity</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control dec" value="0" name="qty_freight" id="qty_freight" style="padding-right: 57px;">
                                                                <div class="suffix">Tons/Cubics</div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="border: dotted;padding: 10px" class="csm hidden">
                                                        <div class="form-group row">
                                                            <label for="price_csm" class="col-sm-3 col-form-label right" >Price (IDR)</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control dec" name="price_csm" id="price_csm" placeholder="" value="0">
                                                                <div class="help-block with-errors"></div>
                                                            </div>                                                
                                                        </div>
                                                        <div class="form-group row">                                  
                                                            <label for="inputState" class="col-sm-3 col-form-label right">Duration</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="duration_csm" id="duration_csm" placeholder="" >
                                                                    <span class="input-group-btn" style="color: #fff;">
                                                                        <select class="btn" id="duration_csm_uom" name="duration_csm_uom">
                                                                            <option value="day" selected>Day</option>
                                                                            <option value="month">Month</option>
                                                                            <option value="year">Year</option>         
                                                                        </select>
                                                                     </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="area" class="col-sm-3 col-form-label right" > Operational Area</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="area_csm" id="area_csm"  placeholder="">
                                                                <div class="help-block with-errors"></div>
                                                            </div>                                                
                                                        </div>  
                                                        <div class="form-group row">
                                                            <label for="country" class="col-sm-3 col-form-label right" >Country</label>
                                                            <div class="col-sm-9">
                                                                <select id="country" name="country" class="form-control">
                                                                    <?php 
                                                                    foreach($country as $row_country)
                                                                    { 
                                                                      echo '<option value="'.$row_country->iso.'">'.$row_country->nicename.'</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>                     
                                                    </div>
                                                    <div style="border: dotted;padding: 10px" class="comodity hidden">
                                                       
                                                        <div class="form-group row">
                                                            <label for="area" class="col-sm-3 col-form-label right" > Type Comodity</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="type_comodity" id="type_comodity"  placeholder="">
                                                                <div class="help-block with-errors"></div>
                                                            </div>                                                
                                                        </div>  
                                                        <div class="form-group row">
                                                            <label for="area" class="col-sm-3 col-form-label right" > Destination</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="dest_comodity" id="dest_comodity"  placeholder="">
                                                                <div class="help-block with-errors"></div>
                                                            </div>                                                
                                                        </div>  
                                                        <div class="form-group row">
                                                            <label for="loa" class="col-sm-3 col-form-label right">Quantity</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control dec" value="0" name="qty_comodity" id="qty_comodity" style="padding-right: 57px;">
                                                                <div class="suffix">Tons/Cubics</div>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>                    
                                                    </div>
                                                    <!-- <h3>Location</h3> 
                                                    <div>
                                                        <form class="form-vertical" method="post" action="#">
                                                          <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label right">Search Location</label>
                                                            <div class="col-sm-9">                                     
                                                                <input type="text" class="form-control" name="cari" id="cari">
                                                                <div id="type-selector" class="controls">
                                                                  <input type="radio" name="type" id="changetype-all" checked="checked">
                                                                  <label for="changetype-all">All</label>
                                                                  <input type="radio" name="type" id="changetype-establishment">
                                                                  <label for="changetype-establishment">By Instansi</label>
                                                                  <input type="radio" name="type" id="changetype-address">
                                                                  <label for="changetype-address">By Alamat</label>
                                                                  <input type="radio" name="type" id="changetype-geocode">
                                                                  <label for="changetype-geocode">Geocodes</label>
                                                                </div>
                                                            </div>                                                    
                                                          </div>                                                              
                                                        </form>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="peta" class="col-sm-3 col-form-label right">Koordinat</label>
                                                        <div class="col-sm-9">
                                                            <div id="map" style="width:100%; height:300px;"></div>
                                                            <textarea class="form-control" name="AddWaypoint" id="AddWaypoint" rows="3" readonly>                                                        
                                                            </textarea>                                                       
                                                        </div
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="peta" class="col-sm-3 col-form-label right">Latlng</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" name="latitude" id="latitude" readonly>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="longtitude" id="longtitude" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="address" class="col-sm-3 col-form-label right">Complete Address</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your address..." required></textarea>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div> -->
                                                </div>                                            
                                            </div>
                                            <div id="step-2">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Upload Image Ship</h3>
                                                    </div>
                                                    <div class="panel-body">                                
                                                        <div class="dropzone" id="drop1">
                                                            <div class="dz-message">
                                                                <h3> Click or Drop Picture Here</h3>
                                                            </div>
                                                        </div>                                            
                                                    </div>
                                                 </div>
                                                <h3>Spesification Ship</h3>                                     
                                                <div id="form-step-1" role="form" data-toggle="validator">
                                                    <div class="form-group row">
                                                        <label for="vessel" class="col-sm-3 col-form-label right">Vessel Name:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="vessel" id="vessel" placeholder="Write your vessel name" value="<?= $vessel ?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="owner" class="col-sm-3 col-form-label right">Owners:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="owner" id="owner" placeholder="Write Owners" value="<?= $owner ?>" >
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="place_build" class="col-sm-3 col-form-label right">Place Build:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="place_build" id="place_build" placeholder="Write Place Build" value="<?= $place_build ?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="year_build" class="col-sm-3 col-form-label right">Year Build:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="year_build" id="year_build" placeholder="Write Year Build" value="<?= $year_build ?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row hidden">
                                                        <label for="build" class="col-sm-3 col-form-label right">Builder:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="builder" id="builder" placeholder="Write Company" value="<?= $builder ?>" >
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="keel" class="col-sm-3 col-form-label right hidden">Keel Land:</label>
                                                        <div class="col-sm-4 hidden">
                                                            <div class='input-group date' id='datetimepicker11'>
                                                                <input type='text' class="form-control" id="keel" name="keel" required value="<?= $keel ?>" />
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar">
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <label for="launching" class="col-sm-3 col-form-label right">Launching:</label>
                                                        <div class="col-sm-4">
                                                            <div class='input-group date' id='datetimepicker10'>
                                                                <input type='text' class="form-control" id="launching" name="launching" required value="<?= $launching ?>"/>
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar">
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="port" class="col-sm-3 col-form-label right">Port Of Registry:</label>
                                                        <div class="col-sm-9">                                                    
                                                           <input type="text" class="form-control" name="port" id="port" placeholder="Write Port Of Registry" required value="<?= $port ?>">
                                                           <div class="help-block with-errors"></div>
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="construction" class="col-sm-3 col-form-label right">Construction:</label>
                                                        <div class="col-sm-9">                                                    
                                                            <input type="text" class="form-control" name="construction" id="construction" placeholder="Write Construction" value="<?= $construction ?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="call" class="col-sm-3 col-form-label right">Call Sign:</label>
                                                        <div class="col-sm-9">                                                    
                                                            <input type="text" class="form-control" name="call" id="call" placeholder="Write Call Sign" value="<?= $call_sign ?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="clasification" class="col-sm-3 col-form-label right">Clasification:</label>
                                                        <div class="col-sm-9">                                                    
                                                            <input type="text" class="form-control" name="clasification" id="clasification" placeholder="Write Clasification" value="<?= $clasification ?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>                                                    
                                                    <div class="form-group row">
                                                        <label for="imo" class="col-sm-3 col-form-label right">IMO No:</label>
                                                        <div class="col-sm-9">                                                    
                                                            <input type="text" class="form-control" name="imo" id="imo" placeholder="Write IMO No" value="<?= $imo ?>" >
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                   <h3>Dimensions Ship</h3> 
                                                   <div class="form-group row">
                                                        <label for="loa" class="col-sm-3 col-form-label right">Length Overall (L.O.A):</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control dec" name="loa" id="loa" value="<?= $loa ?>" required style="padding-right: 57px;">
                                                            <div class="suffix">meters</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <label for="length" class="col-sm-1 col-form-label">Length:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control dec" value="0" name="length" id="length" value="<?= $length ?>" required style="padding-right: 57px;">
                                                            <div class="suffix">meters</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="breadth" class="col-sm-3 col-form-label right">Breadth Moulded:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control dec" name="breadth" id="breadth" value="<?= $breadth ?>" required style="padding-right: 57px;">
                                                            <div class="suffix">meters</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <label for="dept" class="col-sm-1 col-form-label">Dept Moulded:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control dec" name="dept" id="dept" value="<?= $depth ?>" required style="padding-right: 57px;">
                                                            <div class="suffix">meters</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="summer" class="col-sm-3 col-form-label right">Summer Draught:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control dec" name="summer" id="summer" value="<?= $summer ?>" required style="padding-right: 57px;">
                                                            <div class="suffix">meters</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <label for="grt" class="col-sm-1 col-form-label">GRT:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control dec" name="grt" id="grt" required value="<?= $grt ?>" style="padding-right: 31px;">
                                                            <div class="suffix">RT</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nrt" class="col-sm-3 col-form-label right">NRT:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control dec" name="nrt" id="nrt" required value="<?= $nrt ?>" style="padding-right: 31px;">
                                                            <div class="suffix">RT</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <label for="nrt" class="col-sm-1 col-form-label">DWT:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control dec" value="<?= $dwt ?>" name="dwt" id="dwt" required style="padding-right: 31px;" >
                                                            <div class="suffix">DWT</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <h3>Cargo Capacity</h3> 
                                                    <div class="form-group row hidden">
                                                        <label for="desk" class="col-sm-3 col-form-label right">Deck Cargo Area Space:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" value="<?= $deck_area ?>" name="desk" id="desk" placeholder="0 mtrs x 0 mtrs">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <label for="side" class="col-sm-2 col-form-label">Side Board:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control right dec" value="<?= $sideboard ?>" name="side" id="side" style="padding-right: 42px;">
                                                            <div class="suffix">mtrs</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="desk2" class="col-sm-3 col-form-label right">Deck Cargo Capacity:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control right dec" value="<?= $deck_capacity ?>" name="desk2" id="desk2" required style="padding-right: 58px;">
                                                            <div class="suffix">Tonnes</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <label for="load" class="col-sm-2 col-form-label">Max Deck Load:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control right dec" value="<?= $max_deck_load ?>" name="load" id="load" required style="padding-right: 68px;">
                                                            <div class="suffix">Tons/M2</div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                            <div id="step-3" class="">  
                                                <h3>Upload Certificates</h3>   
                                                <hr>                    
                                                <div id="form-step-2" role="form" data-toggle="validator">               
                                                    <div class="form-group row">
                                                        <label for="prov" class="col-sm-1 col-form-label">Type</label>
                                                        <div class="col-sm-3">
                                                            <select id="type" name="type" class="form-control">
                                                            <?php 
                                                                foreach($groups as $row)
                                                                { 
                                                                    echo '<option value="'.$row->type.'">'.$row->type.'</option>';
                                                                }
                                                            ?>
                                                            </select>
                                                        </div>
                                                        <label for="sertifikat" class="col-sm-2 col-form-label">Certificate Name</label>
                                                        <div class="col-sm-6">
                                                            <select id="sertifikat" class="form-control">
                                                                <?php 
                                                                foreach($kab as $row_kab)
                                                                { 
                                                                  echo '<option value="'.$row_kab->kode_sertifikat.'">'.$row_kab->nama_sertifikat.'</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-12" style="margin-top: 10px">
                                                            <div class="panel panel-default">                                                
                                                                <div class="panel-body">
                                                                    <div class="dropzone" id="drop2">
                                                                        <div class="dz-message">
                                                                            <h3> Click or drop picture here</h3>
                                                                        </div>
                                                                    </div>                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                     <input type="text" name="token_s" id="token_s" class="form-control hidden" value="<?=$this->security->get_csrf_hash();?>">
                                                     <input type="hidden" name="idx" id="idx">
                                                     <input type="hidden" name="idKapal" id="idKapal" value="<?= $idKapal ?>">
                                                     <input type="hidden" name="idIklan" id="idIklan" value="<?= $idIklan ?>">
                                                     <a href="javascript::void(0)" id="btnUp" name="btnUp" class="btn btn-secondary btn-sm" disabled>Add List</a>                                                
                                                    <h3>Certificates List</h3>   
                                                     <hr>  
                                                    <table class="table table-dark" id="list-sertifikat">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                              <th scope="col">#</th>
                                                              <th scope="col">First</th>
                                                              <th scope="col">Last</th>
                                                              <th scope="col">Handle</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>                                                                                    
                                            </div>                                                                          
                                        </div>
                                    </div>
                            </form>
                        </div><!-- .row end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.price_format.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dropzone.min.js"></script>
<script src="<?= base_url(); ?>assets/js/lightbox.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyD0QsYct89XQ3Dg9NV11yxPjo3CdPeG6Rs"></script>
<script type="text/javascript">
    $('#type').on('change', function(event){                        
        event.preventDefault();
        var id = $('#type').val();
        $.get('<?php echo base_url(); ?>setting/get_sertifikat/' + id, function(data){     
            $('#sertifikat').html('');                                       
            $.each(data.data, function(idx, value){
                $('#sertifikat').append('<option value="'+value.kode_sertifikat+'">'+value.nama_sertifikat+'</option>');
            });
        });
    }) 
    $('#typeCharter').on('change', function(event){                        
        event.preventDefault();   
        var id = $('#typeCharter').val();
        if(id=='freight'){
            $('.freight').removeClass('hidden');            
            $('#area').tagsinput('removeAll');
            $('.charter').addClass('hidden');
        }else{
            $('.freight').addClass('hidden');            
            $('.charter').removeClass('hidden');
        }     
    })    
    $('.angka').priceFormat({
        prefix: '',
        centsSeparator: '.',
        centsLimit: 2,
        thousandsSeparator: ','
    });
    $('.dec').priceFormat({
        prefix: '',
        centsSeparator: '.',
        centsLimit: 0,
        thousandsSeparator: ','
    });

    Dropzone.autoDiscover = false;
    var clasification_no = $("#idKapal").val();
    var foto_upload= new Dropzone("#drop1",{
        url: "<?php echo base_url(); ?>setting/proses_upload",
        maxFilesize: 10,
        method:"post",
        acceptedFiles:"image/*",
        paramName:"userfile",
        dictInvalidFileType:"Type file ini tidak dizinkan",
        addRemoveLinks:true,
        autoProcessQueue:true,
        params: {csrf_token: $("input[name=csrf_token]").val(), clasification_no: clasification_no },                    
        init: function() {  
            thisDropzone = this;            
            $.get('<?php echo base_url(); ?>setting/foto/'+ $("#idIklan").val(), function(data) {
                $.each(data, function(key,value){                     
                    var mockFile = { name: value.nama_foto, size: 12345 };                     
                    thisDropzone.options.addedfile.call(thisDropzone, mockFile);    
                    thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "<?php echo base_url(); ?>uploads/"+value.nama_foto);                       
                    thisDropzone.emit("complete", mockFile);     
                    thisDropzone.files.push(mockFile);  
                    $(mockFile.previewElement).prop('id', value.id);
                    if(value.main == 1) {                        
                        $('<div><a href="javascript:void(0)" id="main'+value.id+'" data-id='+value.id+' style="color:green;font-weight:bold" class="mainpic" >Foto Utama</a></div>').insertAfter(mockFile._removeLink);
                    }else{
                        $('<div><a href="javascript:void(0)" id="main'+value.id+'" data-id='+value.id+' class="mainpic">Set Utama</a></div>').insertAfter(mockFile._removeLink);
                    }
                });                     
                $(".dz-remove").html("Hapus"); 
                $(".mainpic").on("click", function() {                    
                    var id = $(this).attr('data-id');
                    var clasification_no = $("#idIklan").val();
                    var csrf_test_name = $("input[name=csrf_token]").val();
                    $.ajax({
                        type:"post",
                        data:{'csrf_token' : csrf_test_name, id:id, clasification_no:clasification_no},
                        url:"<?php echo base_url(); ?>setting/setutama",
                        cache:false,
                        dataType: 'json',
                        success: function(data){
                            if(data.error==false){
                                
                                $("#main"+data.data).text('Set Utama');
                                $("#main"+data.data).css('font-weight','400');
                                $("#main"+data.data).css('color','#23527c');                    

                                $("#main"+id).text('Foto Utama');
                                $("#main"+id).css('color','green');
                                $("#main"+id).css('font-weight','bold');                                 
                            }                           
                        },
                        error: function(){
                            alert("Error");
                        }
                    });
                })                          
            });                
            $.get('<?php echo base_url(); ?>setting/find_sertifikat/'+ $("#idIklan").val(), function(data) {
                $("#list-sertifikat").html('');
                $("#list-sertifikat").html(data.tabel);                         
            });        
        }    
    });

    
    //Event ketika Memulai mengupload
    foto_upload.on("sending",function(a,b,c){        
        a.token = $("input[name=csrf_token]").val();
        var id = $("#idKapal").val();        
        c.append("token_foto",a.token); 
        c.append("clasification_no", id); 
    });
    //Event ketika foto dihapus
    foto_upload.on("removedfile",function(a){
        var token=a.token;
        var name = a.name;        
        var csrf_test_name = $("input[name=csrf_token]").val();
        var id = $("#idKapal").val();
        $.ajax({
            type:"post",
            data:{'csrf_token' : csrf_test_name, token:token, id:id, name:name },
            url:"<?php echo base_url(); ?>setting/remove_foto",
            cache:false,
            dataType: 'json',
            success: function(){
                console.log("Foto terhapus");
            },
            error: function(){
                console.log("Error");
            }
        });
    });

    var myDropzone2 = new Dropzone("#drop2", {  
        url: "<?php echo base_url(); ?>setting/proses_upload_sertifikat",       
        autoProcessQueue:false,
        maxFilesize: 1,
        method:"post",
        uploadMultiple: false,
        clickable: true,
        acceptedFiles:"image/*",
        paramName:"userfile",
        dictInvalidFileType:"Type file ini tidak dizinkan",
        addRemoveLinks:true,
        params: {csrf_token: $("input[name=csrf_token]").val(), clasification_no: clasification_no},    
        success: function(file, response){
            $("#list-sertifikat").html('');
            $("#list-sertifikat").html(response.tabel);
        },
        init: function() {
            var th = this;
            this.on("addedfile", function(file) { 
                 $('#btnUp').removeAttr("disabled");
            });
            this.on('queuecomplete', function(file, response){

            });                     
            this.on("success", function(file, response) {               
            });                                            
        }  
    });
    //Event ketika Memulai mengupload
    myDropzone2.on("sending",function(a,b,c){                   
        a.token= $("input[name=csrf_token]").val();
        var id = $("#idx").val();
        c.append("token_sertifikat",a.token);
        c.append("id",id); //Menmpersiapkan token untuk masing masing foto
    });
    myDropzone2.on("removedfile",function(a){
        var csrf_test_name = $("input[name=csrf_token]").val();
        var token=a.token;
        $.ajax({
            type:"post",
            data:{'csrf_token' : csrf_test_name,token:token, 'clasification_no': clasification_no},
            url:"<?php echo base_url(); ?>setting/remove_sertifikat",
            cache:false,
            dataType: 'json',
            success: function(){
                console.log("Foto terhapus");
            },
            error: function(){
                console.log("Error");
            }
        });
    });
    $('#gridRadios2').on('click', function(e) {
        $('.charter').removeClass('hidden');
        $('.type-charter').removeClass('hidden');
        $('.csm').addClass('hidden');
        $('.freight').addClass('hidden');
        $('.trading').addClass('hidden');
        $('.comodity').addClass('hidden');
    });
    $('#gridRadios1').on('click', function(e) {
        $('.charter').addClass('hidden');
        $('.type-charter').addClass('hidden');
        $('.csm').addClass('hidden');
        $('#area').tagsinput('removeAll');
        $('.freight').addClass('hidden');
        $('.trading').removeClass('hidden');   
        $('.comodity').addClass('hidden');
    });
    $('#gridRadios3').on('click', function(e) {
        $('.charter').addClass('hidden');
        $('.type-charter').addClass('hidden');
        $('#area').tagsinput('removeAll');
        $('.csm').removeClass('hidden');
        $('.freight').addClass('hidden');
        $('.trading').addClass('hidden');
        $('.comodity').addClass('hidden');
    });
    $('#gridRadios4').on('click', function(e) {
        $('.charter').addClass('hidden');
        $('.type-charter').addClass('hidden');
        $('#area').tagsinput('removeAll');
        $('.csm').addClass('hidden');
        $('.freight').removeClass('hidden');
        $('.trading').addClass('hidden');
        $('.comodity').addClass('hidden');
    });
    $('#gridRadios5').on('click', function(e) {
        $('.charter').addClass('hidden');
        $('.type-charter').addClass('hidden');
        $('#area').tagsinput('removeAll');
        $('.csm').addClass('hidden');
        $('.freight').addClass('hidden');
        $('.trading').addClass('hidden');
        $('.comodity').removeClass('hidden');
    });
    $('#btnUp').on('click',function(e){
        e.preventDefault();                 
        var post = {
          type: $("#sertifikat").val(),           
          csrf_token: $("input[name=csrf_token]").val(),
          token: $("#token_s").val(),                               
      }
      $.ajax({
        type:"post",
        data:post,
        url:"<?php echo base_url(); ?>setting/simpan",
        cache:false,
        dataType: 'json',
        success: function(data){  
            $('#idx').val(data.id);              
            myDropzone2.processQueue(); 
            var unique_id = $.gritter.add({                 
                title: 'Upload Certificate Success!',                   
                text: 'To Remove, Please click remove on image',    
                sticky: false,                   
                time: '',                   
                class_name: 'my-sticky-class'
            });
            $("#drop2").attr('class','dropzone dz-clickable');
            $(".dz-preview").remove('');
            $(".dz-complete").remove('');
        },
        error: function(){
            console.log("Error");
        }
    }); 
  });
    function hapus_sertifikat(idx){
        var csrf_test_name = $("input[name=csrf_token]").val(); 
        var token = $("#token_s").val();   
        $.ajax({
            type:"post",
            data:{'csrf_token' : csrf_test_name,'id':idx,'token':token, 'clasification_no': clasification_no},
            url:"<?php echo base_url(); ?>setting/remove_sertifikat",
            cache:false,
            dataType: 'json',
            success: function(data){
                $("#list-sertifikat").html('');
                $("#list-sertifikat").html(data.tabel);
            },
            error: function(){
                console.log("Error");
            }
        });
    }
</script>
