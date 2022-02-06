<style type="text/css">    
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
    .pagination > .active > span {
        padding-top:9px;
    }
    table th {
        background: #292938 none repeat scroll 0 0;
        color: #fff !important;
        text-shadow: inherit;     
    }
    .post-media {    
        height: 200px;    
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

    .isotope {
        padding-right: 0;
        padding-left: 0;
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
    .page-title-style02 {    
        margin-bottom: 15px;
    }
    .title-adv {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
    }
    ul li, ol li {
        padding-bottom: 5px;
        padding-top: 5px;
    }
    .container {        
        padding-left: 5px;
        padding-right: 5px;
    }
    .panel-default>.panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
    }
    .panel {        
        background-color: transparent;
    }

     @media (min-width:767px)  { 

        .container-top {
            margin-top:100px;
        }
        body {
            margin: 40px !important;
        }
        
    }
    

    h2.contact-large a {     
        font-weight: bold;
    }
    .box-list {
        border: solid 1px darkgray;
        border-radius: 5px;
        padding: 10px;
        margin-bottom:10px;
    }
    .status-inquiry {
        background-color: darkorange;
        padding: 0 10px;
        width: 100px;
        color: #fff;
        text-align: center;
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
                 
                <div class="page-content clearfix" style="margin-top: 10px">   
                    <?php if(!empty($this->session->flashdata('success'))) { ?>
                        <div class="alert alert-success alert-dismissable">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>Success!</strong>&nbsp;<?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php } ?>
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Submission List</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body"> 
                                
                                <?php 
                                    foreach($list as $row): ?>
                                        <div class="blog-box row">
                                            <div class="post-image col-md-4">
                                                <!--<a href="../../assets/image-resources/stock-images/img-44.jpg" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">-->
                                                <!--    <img class="img-responsive lazy img-rounded" src="../../assets/image-resources/stock-images/img-44.jpg" data-original="../../assets/image-resources/stock-images/img-44.jpg" alt="" style="display: block;">-->
                                                <!--</a>-->
                                                <a href="<?= base_url(); ?>ship/<?= $row->id_kapal; ?>/<?= str_replace(" ", "-",strtolower($row->title_pengajuan)) ?>.html" class="post-img">
                                                     <img src="<?= base_url(); ?>uploads/iklan/<?= isset($row->nama_foto)? $row->nama_foto :'not-found.jpg' ?>" />
                                                </a>
                                            </div>
                                            <div class="post-content-wrapper col-md-8">
                                                <a class="post-title" href="#" title="">
                                                    <h3><?= $row->kode_pengajuan ?>
                                                    <a href="<?= base_url().'ship/' .$row->id_kapal. '/' .str_replace(' ', '-', $row->title_pengajuan) ?>.html" target="_blank"><?= $row->title_pengajuan ?></a>
                                                    </h3>
                                                </a>
                                                <div class="post-meta">
                                                    <span>
                                                        <i class="glyph-icon icon-user"></i>
                                                        <a href="#" title=""><?= $row->nama_foto ?></a>
                                                    </span>
                                                    <span>
                                                        <i class="glyph-icon icon-clock-o"></i>
                                                        21 December 2014
                                                    </span>
                                                    <span>
                                                        <i class="glyph-icon icon-comments-o"></i>
                                                        <a href="#" title="">4 Comments</a>
                                                    </span>
                                                </div>
                                                <div class="post-content">
                                                    <table>
                                                        <tr>
                                                            <td>Posted By</td>
                                                            <td>:</td>
                                                            <td><?= $row->nama_buyer ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service</td>
                                                            <td>:</td>
                                                            <td><?= $row->jenis_pengajuan ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Amount</td>
                                                            <td>:</td>
                                                            <td><?= number_format($row->nilai_pengajuan) ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Comission</td>
                                                            <td>:</td>
                                                            <td><?= number_format($row->n_komisi) ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>:</td>
                                                            <td><?= $row->status ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <a href="<?= base_url().'setting/view_agreement_pdf/'. $row->id ?>" class="btn btn-sm btn-default" title="Read more"  target="_blank"><i class="fa fa-archive"></i>&nbsp;View</a></a>
                                                <a href="javascript::void(0)" data-id="<?= $row->id ?>" class="btn btn-sm btn-default edit-status"><i class="fa fa-pencil"></i>&nbsp;Edit Status</a>
                                            </div>
                                        </div>
                                <?php endforeach; ?>
                                    
                            </div>
                            <!-- /.box-body -->
                        </div>  
                        
                        <!-- <table id="table"
                               data-toolbar="#toolbar"
                               data-search="true"
                               data-show-refresh="true"
                               data-show-toggle="true"
                               data-show-columns="true"
                               data-show-export="true"
                               data-detail-view="false"
                               data-striped="true"
                               data-detail-formatter="detailFormatter"
                               data-minimum-count-columns="2"
                               data-show-pagination-switch="true"
                               data-pagination="true"
                               data-id-field="id"
                               data-page-list="[10, 25, 50, 100, ALL]"
                               data-side-pagination="server"
                               data-url="<?= base_url(); ?>setting/getlist"
                               data-response-handler="responseHandler" style="margin-top: 0">
                                <thead>
                                    <tr>
                                        <th data-field="id">Item ID</th>
                                        <th data-field="title_pengajuan" data-formatter="linkFormatter">Item Name</th>
                                        <th data-field="nama_seller">Item Name</th>
                                        <th data-field="nilai_pengajuan" data-editable="true" data-formatter="totalPriceFormatter" data-editable="true">Item Price</th>
                                    </tr>
                                </thead>
                        </table> -->                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popStatus">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <form action="" method="POST">
                 <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                 <input type="hidden" name="id" id="id" value="">
                <button type="submit" class="btn bg-orange btn-flat margin btn-block" style="color:#fff">Cancel Inquiry</button>      
          </form>
        <div class="clearfix"></div>
      </div>

    </div>
  </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>


<script type="text/javascript">
    $('.edit-status').click(function(e){
       e.preventDefault();    
       $("#id").val($(this).attr("data-id"));
       $("#popStatus").modal('show');
    });
    $('.click').click(function(e){
       // prevent default action
       e.preventDefault();    
       scrollToElement( $(this).attr('href'), 2000 );
    });
    var scrollToElement = function(el, ms){        
        var speed = (ms) ? ms : 600;
        $('html,body').animate({
            scrollTop: $(el).offset().top - 100
        }, speed);
        // $(el).css('padding-top','100px');
    }
</script>
