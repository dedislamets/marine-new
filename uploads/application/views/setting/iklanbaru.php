<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" >

<link href="<?= base_url(); ?>assets/css/smart_wizard.css" rel="stylesheet" type="text/css" />
        
<link href="<?= base_url(); ?>assets/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />


<style type="text/css">
    h1, h2 {
        font-weight: 800;
        margin-top: 0    
    }
    .navbar-nav>li>a {        
         line-height: 48px; 
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
</style>
<div class="page-title-style02 pt-bkg02">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Marine Business</h1>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content">
    <div class="container">
        <div class="row">
            <aside class="col-md-3 aside aside-left sidebar-left">
                <div class="agent-info clearfix" >                   
                    <div class="agent-info__identity">
                        <figure>
                            <a href="/agusriyadi2016">
                                <img src="<?= base_url(); ?>assets/img/39119211.jpg"></a>
                        </figure>        
                        <div class="basic-info impression">
                            <h2 class="contact-large">
                                <a href="/agusriyadi2016" itemprop="name">Agus Riyadi                                    
                                </a>
                            </h2>                            
                            <p name="lastActivity" class="contact-large">
                                Aktif: Kurang dari 1 minggu            </p>
                        </div>
                    </div>                    
                    <h3 class="row agent-info__listing-count contact-large">
                        <div class="col-xs-4"><strong>47</strong>properti</div>
                        <div class="col-xs-4"><strong>2</strong>terjual</div>
                        <div class="col-xs-4"><strong>0</strong>tersewa</div>
                    </h3>            
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
                                    <div class="description">Tambah Produk Baru</div>
                                
                            </div>
                        </div>              
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="<?= base_url('setting') ?>">Profil</a>
                            </li>
                            <li class="menu-item">
                                <a href="#visi" class="click">Pesan</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/iklan') ?>">Daftar Iklan</a>
                            </li>

                            <li class="menu-item">
                                <a href="#klien" class="click">Daftar Pengajuan</a>
                            </li>
                            <li class="menu-item">
                                <a href="#klien" class="click">Dompet/Saldo</a>
                            </li>

                            <li class="menu-item current-menu-item">
                                <a href="#kontak" class="click">Keluar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>

            <div class="col-md-9"> 
                <div class="panel-heading ph">
                    <h3 class="panel-title ph">Iklan Saya</h3>
                </div>
                <div class="page-content">
                    <div class="">
                        <div class="">                            
                            <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                            <input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <ul>
                                    <li class="col-sm-4"><a href="#step-1">Step 1<br /><small>Informasi</small></a></li>
                                    <li class="col-sm-4"><a href="#step-2">Step 2<br /><small>Detail Ship</small></a></li>
                                    <li class="col-sm-4"><a href="#step-3">Step 3<br /><small>Certificate</small></a></li>
                                </ul>
                                
                                <div>                                    
                                        <div id="step-1">   
                                            <h3>Informasi</h3>                                     
                                            <div id="form-step-0" role="form" data-toggle="validator">                                                
                                                <div class="form-group row">
                                                  <label for="inputState" class="col-sm-3 col-form-label right">Kategori</label>
                                                  <div class="col-sm-9">
                                                      <select id="inputState" name="inputState" class="form-control">
                                                        <option selected>Barge</option>
                                                        <option>Cabin Cruiser</option>
                                                        <option>Canoe Kayak</option>
                                                        <option>Cargo Ship</option>
                                                        <option>Vissing Vessel</option>
                                                        <option>Other Boats</option>
                                                        <option>Passenger Ship</option>
                                                        <option>Raft</option>
                                                        <option>Rowing Boat</option>
                                                        <option>Sailboat</option>
                                                        <option>Tanker</option>
                                                      </select>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                      <label class="col-form-label col-sm-3 pt-0 right">Tipe</label>
                                                      <div class="col-sm-9">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Trading" checked>
                                                          <label class="form-check-label" for="gridRadios1">
                                                            Trading
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Chartering">
                                                          <label class="form-check-label" for="gridRadios2">
                                                            Chartering
                                                          </label>
                                                        </div>
                                                        <div class="form-check disabled">
                                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="CSM">
                                                          <label class="form-check-label" for="gridRadios3">
                                                            Commercial Ship Management
                                                          </label>
                                                        </div>
                                                        <div class="form-check disabled">
                                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="Transportation">
                                                          <label class="form-check-label" for="gridRadios3">
                                                            Transportation
                                                          </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="price" class="col-sm-3 col-form-label right" >Price</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control dec right" name="price" id="price" placeholder="" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                   
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-3 col-form-label right" >Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="title" id="title" placeholder="Write your title" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                   
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label right">Description</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Write your Description" required></textarea>
                                                    </div>
                                                </div>
                                                <h3>Location</h3> 
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
                                                        
                                                    </div>
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
                                                </div>
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
                                                       <h3> Klik atau Drop gambar disini</h3>
                                                      </div>

                                                    </div>                                            
                                                </div>
                                            </div>
                                            <h3>Spesification Ship</h3>                                     
                                            <div id="form-step-1" role="form" data-toggle="validator">
                                                <div class="form-group row">
                                                    <label for="vessel" class="col-sm-3 col-form-label right">Vessel Name:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="vessel" id="vessel" placeholder="Write your vessel name" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="owner" class="col-sm-3 col-form-label right">Owners:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="owner" id="owner" placeholder="Write Owners" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="place_build" class="col-sm-3 col-form-label right">Place Build:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="place_build" id="place_build" placeholder="Write Place Build" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="year_build" class="col-sm-3 col-form-label right">Year Build:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="year_build" id="year_build" placeholder="Write Year Build" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="build" class="col-sm-3 col-form-label right">Builder:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="builder" id="builder" placeholder="Write Company" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="keel" class="col-sm-3 col-form-label right">Keel Land:</label>
                                                    <div class="col-sm-4">
                                                        <div class='input-group date' id='datetimepicker11'>
                                                            <input type='text' class="form-control" id="keel" name="keel" required />
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <label for="launching" class="col-sm-1 col-form-label right">Launching:</label>
                                                    <div class="col-sm-4">
                                                        <div class='input-group date' id='datetimepicker10'>
                                                            <input type='text' class="form-control" id="launching" name="launching" required />
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
                                                         <input type="text" class="form-control" name="port" id="port" placeholder="Write Port Of Registry" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="construction" class="col-sm-3 col-form-label right">Construction:</label>
                                                    <div class="col-sm-9">                                                    
                                                         <input type="text" class="form-control" name="construction" id="construction" placeholder="Write Construction" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="call" class="col-sm-3 col-form-label right">Call Sign:</label>
                                                    <div class="col-sm-9">                                                    
                                                         <input type="text" class="form-control" name="call" id="call" placeholder="Write Call Sign" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="clasification" class="col-sm-3 col-form-label right">Clasification:</label>
                                                    <div class="col-sm-9">                                                    
                                                         <input type="text" class="form-control" name="clasification" id="clasification" placeholder="Write Clasification" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="clasification_no" class="col-sm-3 col-form-label right">Clasification No:</label>
                                                    <div class="col-sm-9">                                                    
                                                         <input type="text" class="form-control" name="clasification_no" id="clasification_no" placeholder="Write Clasification No" required >
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="imo" class="col-sm-3 col-form-label right">IMO No:</label>
                                                    <div class="col-sm-9">                                                    
                                                         <input type="text" class="form-control" name="imo" id="imo" placeholder="Write IMO No" required >
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="clasification_no" class="col-sm-3 col-form-label right">Satelite Phone No:</label>
                                                    <div class="col-sm-9">                                                    
                                                         <input type="text" class="form-control" name="phone" id="phone" placeholder="Write Phone No" required >
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <h3>Dimensions Ship</h3> 
                                                <div class="form-group row">
                                                    <label for="loa" class="col-sm-3 col-form-label right">Length Overall (L.O.A):</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control angka" value="0" name="loa" id="loa" required style="padding-right: 57px;">
                                                        <div class="suffix">meters</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <label for="length" class="col-sm-1 col-form-label">Length:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control angka" value="0" name="length" id="length" required style="padding-right: 57px;">
                                                        <div class="suffix">meters</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="breadth" class="col-sm-3 col-form-label right">Breadth Moulded:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control angka" value="0" name="breadth" id="breadth" required style="padding-right: 57px;">
                                                        <div class="suffix">meters</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <label for="dept" class="col-sm-1 col-form-label">Dept Moulded:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control angka" value="0" name="dept" id="dept" required style="padding-right: 57px;">
                                                        <div class="suffix">meters</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="summer" class="col-sm-3 col-form-label right">Summer Draught:</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control angka" value="0" name="summer" id="summer" required style="padding-right: 57px;">
                                                        <div class="suffix">meters</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <label for="grt" class="col-sm-1 col-form-label">GRT:</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control dec" value="0" name="grt" id="grt" required style="padding-right: 31px;">
                                                        <div class="suffix">RT</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <label for="nrt" class="col-sm-1 col-form-label">NRT:</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control dec" value="0" name="nrt" id="nrt" required style="padding-right: 31px;">
                                                        <div class="suffix">RT</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <h3>Cargo Capacity</h3> 
                                                <div class="form-group row">
                                                    <label for="desk" class="col-sm-3 col-form-label right">Deck Cargo Area Space:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" value="" name="desk" id="desk" placeholder="0 mtrs x 0 mtrs">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <label for="side" class="col-sm-2 col-form-label">Side Board:</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control right angka" value="0" name="side" id="side" required style="padding-right: 42px;">
                                                        <div class="suffix">mtrs</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="desk2" class="col-sm-3 col-form-label right">Deck Cargo Capacity:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control right angka" value="0" name="desk2" id="desk2" required style="padding-right: 58px;">
                                                        <div class="suffix">Tonnes</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <label for="load" class="col-sm-2 col-form-label">Max Deck Load:</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control right angka" value="0" name="load" id="load" required style="padding-right: 68px;">
                                                        <div class="suffix">Tons/M2</div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div id="step-3" class="">  
                                            <h3>Upload Sertificate</h3>   
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
                                                                   <h3> Klik atau Drop gambar disini</h3>
                                                                  </div>

                                                                </div>                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <input type="text" name="token_s" id="token_s" class="form-control hidden" value="<?=$this->security->get_csrf_hash();?>">
                                                <input type="hidden" name="idx" id="idx">
                                                <button type="submit" class="btn btn-secondary btn-sm" id="btnUp">Simpan</button>
                                                <h3>List Sertificate</h3>   
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
                                                  <tbody>
                                                    
                                                  </tbody>
                                                </table>
                                            </div>                                                                                    
                                        </div>                                                                          
                                </div>
                            </div>
                            
                            </form>
                            
                            
                        </div><!-- .row end -->
                    </div><!-- .container end -->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.price_format.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dropzone.min.js"></script>
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

    var foto_upload= new Dropzone("#drop1",{
    url: "<?php echo base_url(); ?>setting/proses_upload",
    maxFilesize: 2,
    method:"post",
    acceptedFiles:"image/*",
    paramName:"userfile",
    dictInvalidFileType:"Type file ini tidak dizinkan",
    addRemoveLinks:true,
    params: {csrf_token: $("input[name=csrf_token]").val()},    
    });


    //Event ketika Memulai mengupload
    foto_upload.on("sending",function(a,b,c){
        a.token=$("input[name=csrf_token]").val();
        c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
    });

    //Event ketika foto dihapus
    foto_upload.on("removedfile",function(a){
        var token=a.token;
        var csrf_test_name = $("input[name=csrf_token]").val();
        $.ajax({
            type:"post",
            data:{'csrf_token' : csrf_test_name,token:token},
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
        params: {csrf_token: $("input[name=csrf_token]").val()},    
        success: function(file, response){
            
            $("#list-sertifikat").html('');
            $("#list-sertifikat").html(response.tabel);

        },
        init: function(){
            var th = this;
            this.on('queuecomplete', function(file, response){
                  
            });                     
            this.on("success", function(file, response) {
                
            });
        },
    });
    //Event ketika Memulai mengupload
    myDropzone2.on("sending",function(a,b,c){                   
        a.token= $("input[name=csrf_token]").val();
        var id = $("#idx").val();
        c.append("token_sertifikat",a.token);
        c.append("id",id); //Menmpersiapkan token untuk masing masing foto
    });
    // myDropzone2.on('complete', function (response)
    // {
    //    $(".dz-preview").remove();
    // });
    myDropzone2.on("removedfile",function(a){
        var csrf_test_name = $("input[name=csrf_token]").val();
        var token=a.token;
        $.ajax({
            type:"post",
            data:{'csrf_token' : csrf_test_name,token:token},
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

    $('#btnUp').on('click',function(e){
        e.preventDefault();                 
        var post = {
          type: $("#sertifikat").val(), 
          clasification_no: $("#clasification_no").val(), 
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
                    title: 'Upload Sertificate Success!',                   
                    text: 'Untuk menghapus silahkan klik remove pada image',    
                    sticky: true,                   
                    time: '5000',                   
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
            data:{'csrf_token' : csrf_test_name,'id':idx,'token':token},
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


