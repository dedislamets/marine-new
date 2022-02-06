@extends('home')
@section('content')
<style type="text/css">
	#page-content-wrapper {	 
	    z-index: 91;
	}
	#TB_overlay {    
	    z-index: 162;
	}
	#TB_window {	    
	    z-index: 172;	    
	}
</style>
<script type="text/javascript" src="{{URL::asset('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js')}}"></script>
<div id="page-title">
    <h2>Form Iklan</h2>
    <p>Halaman ini untuk merubah halaman profil pada front end.</p>    
</div>

<div class="row mailbox-wrapper">
	<div class="col-md-12">
	    <div class="panel-layout">
	        <div class="panel-box">
				@foreach($foto as $item)
					<div class="col-md-4 mix hover_2 mix_all" data-cat="2" style="display: inline-block;  opacity: 1;">
						<a href="https://marinebusiness.co.id/uploads/{{$item->nama_foto}}" class="thickbox">
					    <div class="thumbnail-box">				        
					        <div class="thumb-overlay bg-black"></div>
					        <img src="https://marinebusiness.co.id/uploads/{{$item->nama_foto}}" alt="">
					    </div>
					</a>
					</div>
	            @endforeach		
	        </div>
	    </div>	   
	</div>
	<div class="col-md-12">

	    <div class="content-box">
	        <div class="mail-header clearfix row">
	            <div class="col-md-12">
	                <span class="mail-title">Judul : {{$iklan->title}}</span>
	                <?php
	                	if($iklan->status=="1") {
	                		$status = "Approve";
	                	}elseif ($iklan->status=="0") {
	                		$status = "Waiting QC";
	                	}else{
	                		$status = "Reject";
	                	}
	                ?>
	                
	                	                
	            </div>	
	            <div class="col-md-12">
	            	<span class="mail-title"> Status : 
	            		<a href="#" class="popover-button-default" data-toggle="popover" data-content="{{$iklan->reason}}" title="Alasan Reject" data-trigger="hover" data-placement="top">{{$status}}</a>
	            	</span>
	            </div>            
	            <div class="col-md-12">
	                <?php if($iklan->status !="1"): ?>
	            	<button class="btn ra-100 btn-success" id="btnApprove" data-id="{{$iklan->id}}" onclick="Approve(this)">Approve</button>
	            	<?php endif; ?>
	            	<?php if($iklan->status =="1"): ?>
                    <button class="btn ra-100 btn-danger" id="btnReject" data-id="{{$iklan->id}}" data-style="light" data-theme="bg-black" data-opacity="60" data-toggle="modal" data-id="{{$iklan->id}}" data-target="#myModal">Not Approve</button>
	                <?php endif; ?>
	            </div>            
	        </div>
	    </div>	    
	    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Masukkan Alasan Reject</h4>
                    </div>
                    <form id="form1" action="{{ url('/iklan/rjc') }}" method="POST">
                    	@csrf
                    	<input type="hidden" name="idIklan" value="{{$iklan->id}}" >
	                    <div class="modal-body">
	                        <div class="example-box-wrapper">
			                    <textarea name="alasan" class="alasan"></textarea>
			                </div>
	                    </div>
	                    <div class="modal-footer">                        
	                        <button id="submit-reject" type="submit" class="btn btn-primary">Save changes</button>
	                    </div>
	                </form>
                </div>
            </div>
        </div>
	    <div class="example-box-wrapper">
	        <ul class="list-group row list-group-icons">
	            <li class="col-md-3 active">
	                <a href="#tab-example-4" data-toggle="tab" class="list-group-item">
	                    <i class="glyph-icon font-red icon-bullhorn"></i>
	                    Data Pembuat Iklan
	                </a>
	            </li>
	            <li class="col-md-3">
	                <a href="#tab-example-2" data-toggle="tab" class="list-group-item">
	                    <i class="glyph-icon font-primary icon-camera"></i>
	                    Informasi Iklan
	                </a>
	            </li>
	            <li class="col-md-3">
	                <a href="#tab-example-1" data-toggle="tab" class="list-group-item">
	                    <i class="glyph-icon icon-dashboard"></i>
	                    Kapal/Ship
	                </a>
	            </li>
	            
	            <li class="col-md-3">
	                <a href="#tab-example-3" data-toggle="tab" class="list-group-item">
	                    <i class="glyph-icon font-blue-alt icon-globe"></i>
	                    Sertifikat
	                </a>
	            </li>
	        </ul>
	        <div class="tab-content">
	            <div class="tab-pane fade" id="tab-example-1">
	                
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="content-box">
	                        	<div class="col-md-6">
	                        		<div class="content-box">
				                        <h3 class="content-box-header bg-blue-alt">
				                            Spesification Ship
				                        </h3>
				                        <div class="content-box-wrapper">				                            
				                            <table class="table">
						                        <thead>
							                        <tr>
							                            <th>Spesifikasi</th>
							                            <th>Value</th>				                            
							                        </tr>
						                        </thead>
						                        <tbody>
							                        <tr>
							                            <td width="150">Vessel Name</td>				                            
							                            <td>{{$ship->vessel_nama}}</td>
							                        </tr>
							                        <tr>
							                            <td width="150">Owners</td>
							                            <td>{{$ship->owners}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="150">Place Build</td>
							                            <td>{{$ship->place_build}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="150">Year Build</td>
							                            <td>{{$ship->year_build}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="150">Launching</td>
							                            <td>{{$ship->launching}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="150">Port of registry</td>
							                            <td>{{$ship->port_registry}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="150">Construction</td>
							                            <td>{{$ship->construction}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="150">Call Sign</td>
							                            <td>{{$ship->call_sign}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="150">IMO No</td>
							                            <td>{{$ship->imo}}</td>				                            
							                        </tr>
						                        </tbody>
						                    </table>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-md-6">
				                	<div class="content-box">
				                        <h3 class="content-box-header bg-blue-alt">
				                            Dimension & Capacity Cargo
				                        </h3>
				                        <div class="content-box-wrapper">
				                            <table class="table">
						                        <thead>
							                        <tr>
							                            <th>Dimension</th>
							                            <th>Value</th>				                            
							                        </tr>
						                        </thead>
						                        <tbody>
							                        <tr>
							                            <td width="200">Length Overall (LOA)</td>				                            
							                            <td>{{$ship->loa}}</td>
							                        </tr>
							                        <tr>
							                            <td width="200">Length</td>
							                            <td>{{$ship->length}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="200">Breadth Moulded</td>
							                            <td>{{$ship->breadth}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="200">Dept Moulded</td>
							                            <td>{{$ship->depth}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="200">Summer Draught</td>
							                            <td>{{$ship->summer}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="200">GRT</td>
							                            <td>{{$ship->grt}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="200">NRT</td>
							                            <td>{{$ship->nrt}}</td>				                            
							                        </tr>
							                        <tr>
							                            <td width="200">DWT</td>
							                            <td>{{$ship->dwt}}</td>				                            
							                        </tr>					                        
							                        <tr>
							                            <td width="200">Deck Cargo Capacity</td>
							                            <td>{{$ship->deck_capacity}}</td>				                            
							                        </tr>					                        
							                        <tr>
							                            <td width="200">Max Deck Load</td>
							                            <td>{{$ship->max_deck_load}}</td>				
							                        </tr>					                        
						                        </tbody>
						                    </table>
				                        </div>
				                    </div>
				                </div>
				                
	                        </div>
	                    </div>
	                   
	                </div>
	            </div>
	            <div class="tab-pane fade" id="tab-example-2">
	                <h3 class="content-box-header bg-blue-alt">
                        Information Posting
                    </h3>
                    <div class="content-box-wrapper">
                    	<?php
                    		$service = $iklan->service; 
                    		$duration ="";    
                    		$price = 0 ;
						    if ($service == 'Trading') {
						        $price = number_format($iklan->price);
						    } else if ($service == 'CSM') {
						        $price = number_format($iklan->price_csm);
						        $duration = $iklan->duration_csm . " ". $iklan->duration_csm_uom;
						        $operational = $iklan->area_csm;
						        $country = $iklan->country;
						    } else if ($service == 'Transportation') {
						        $price = number_format($iklan->price_freight);
						        $portloading = $iklan->portloading;
						        $portdischarge = $iklan->portdischarge;
						        $qty_freight = $iklan->qty_freight;
						    } else if ($service == 'Chartering') {
						        $service = ucwords($iklan->type_charter)." Charter";
						        $price = number_format($iklan->price_charter);
						        $duration = $iklan->duration . " ". $iklan->duration_uom;
						        $operational = $iklan->area;
						        if($iklan->type_charter=="freight") {
						        	$price = number_format($iklan->price_freight);
						        	$portloading = $iklan->portloading;
						        	$portdischarge = $iklan->portdischarge;
						        	$qty_freight = $iklan->qty_freight;
						        }
						    }    

                    	?>
                    	<table class="table">
                    		<tr>
                    			<td>Date</td>
                    			<td>{{$iklan->date_iklan}}</td>
                    		</tr>
                    		<tr>
                    			<td>Title</td>
                    			<td>{{$iklan->title}}</td>
                    		</tr>
                    		<tr>
                    			<td>Description</td>
                    			<td>{{$iklan->description}}</td>
                    		</tr>
                    		<tr>
                    			<td>Service</td>
                    			<td>{{$service}}</td>
                    		</tr>
                    		<tr>
                    			<td>Type</td>
                    			<td>{{$iklan->type}}</td>
                    		</tr>
                    		<tr>
                    			<td>Price</td>
                    			<td>{{$price}}</td>
                    		</tr>
                    		<?php if($iklan->service =="CSM") { ?>
	                    		<tr>
	                    			<td>Duration</td>
	                    			<td>{{$duration}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td>Operation Area</td>
	                    			<td>{{$operational}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td>Country</td>
	                    			<td>{{$country}}</td>
	                    		</tr>
	                    	<?php } ?>
	                    	<?php if($iklan->service =="Transportation" || $iklan->type_charter =="freight") { ?>
	                    		<tr>
	                    			<td>Port Loading</td>
	                    			<td>{{$portloading}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td>Port Discharge</td>
	                    			<td>{{$portdischarge}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td>Qty</td>
	                    			<td>{{$qty_freight}}</td>
	                    		</tr>
	                    	<?php } ?>
	                    	<?php if($iklan->service =="Chartering") { ?>
	                    		<tr>
	                    			<td>Duration</td>
	                    			<td>{{$duration}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td>Operation Area</td>
	                    			<td>{{$operational}}</td>
	                    		</tr>	                    		
	                    	<?php } ?>
                            <?php if($iklan->service =="Comodity") { ?>
	                    		<tr>
	                    			<td>Jenis</td>
	                    			<td>{{$iklan->type_comodity}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td>Destination</td>
	                    			<td>{{$iklan->dest_comodity}}</td>
	                    		</tr>
	                    		<tr>
	                    			<td>Qty</td>
	                    			<td>{{$iklan->qty_comodity}} Tons/Cubics</td>
	                    		</tr>
	                    	<?php } ?>
                    	</table>
                    </div>                
	            </div>
	            <div class="tab-pane fade" id="tab-example-3">
	                <div class="row">
	                    @foreach($sertifikat as $item)
							<div class="col-md-6 mix hover_2 mix_all" data-cat="2" style="display: inline-block;  opacity: 1;">
								<h3>{{$item->nama_sertifikat}}</h3><hr>
							    <div class="thumbnail-box">				      
							        <a href="https://marinebusiness.co.id/uploads/{{$item->dokumen}}" class="thickbox">
								        <img src="https://marinebusiness.co.id/uploads/{{$item->dokumen}}" alt="" >
								    </a>
							    </div>
							</div>
			            @endforeach
	                </div>
	            </div>
	            <div class="tab-pane pad0A fade active in" id="tab-example-4">
	                <div class="content-box">
	                    <div class="form-horizontal pad15L pad15R bordered-row">
	                        <div class="row">
		                    	<h2 class="invoice-client mrg10T">Client information:</h2>
		                    	<div class="dummy-logo col-md-3">
					                <img src="https://marinebusiness.co.id/uploads/profile/thumbnail/{{$user->thumbnail}}" alt="" />
					            </div>	
		                    	<table class="table mrg20T table-hover">							        
							        <tbody>
							            <tr>
							                <td width="150">Name</td>
							                <td width="20">:</td>
							                <td>{{$user->nama}}</td>
							            </tr>
							            <tr>
							                <td width="150">Email</td>
							                <td width="20">:</td>
							                <td>{{$user->email}}</td>
							            </tr>
							            <tr>
							                <td width="150">Phone</td>
							                <td width="20">:</td>
							                <td>{{$user->phone}}</td>
							            </tr>
							            <tr>
							                <td width="150">KTP No.</td>
							                <td width="20">:</td>
							                <td>{{$user->ktp}}</td>
							            </tr>
							            <tr>
							                <td width="150">Perusahaan</td>
							                <td width="20">:</td>
							                <td>{{$user->perusahaan}}</td>
							            </tr>
							            <tr>
							                <td width="150">Alamat</td>
							                <td width="20">:</td>
							                <td class="invoice-address">{{$user->address}}</td>
							            </tr>
							        </tbody>
							    </table>
		                    </div>
		                    <div class="row">
        	                    @foreach($files as $item)
        							<div class="col-md-6 mix hover_2 mix_all" data-cat="2" style="display: inline-block;  opacity: 1;">
        								<h3>{{$item->jenis}}</h3><hr>
        							    <div class="thumbnail-box">				      
        							        <a href="https://marinebusiness.co.id/uploads/files/{{$item->file_name}}" class="thickbox">
        								        <img src="https://marinebusiness.co.id/uploads/files/{{$item->file_name}}" alt="" >
        								    </a>
        							    </div>
        							</div>
        			            @endforeach
        	                </div>
	                    </div>
	                    
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript" src="{{URL::asset('js/thickbox.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/chosen/chosen.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/chosen/chosen-demo.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/input-switch/inputswitch.js')}}"></script>

<script type="text/javascript">
	$('.input-switch').bootstrapSwitch();
    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });
</script>
<script type="text/javascript">
 
    $(document).ready(function() {
      $('textarea').summernote({
        height: 150
      });
    });
    $('[data-toggle="popover"]').popover();

    function Approve(val) {
    	var id= $(val).attr("data-id");
        var x = confirm("Are you sure you want to approve?");
        if (x){
            $.ajax({
                type: "GET",
                url: '{{ url("/iklan/aprv") }}/' + id,
                 success: function(response){
                    window.history.back();
                },
                 error: function(e){
                 console.log(e.responseText);
                 }
            });
             return true;
        }else{
             return false;
        }
    }

    
</script>
@endsection

