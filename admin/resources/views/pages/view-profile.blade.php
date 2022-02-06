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
	.mail-header {	    
	    background-color: darkkhaki;
	}
	.mail-title {
		text-align: center;
	    float: none;
	    font-weight: 700;
	}
</style>
<script type="text/javascript" src="{{URL::asset('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js')}}"></script>

<div class="row mailbox-wrapper">	
    <div class="content-box">
        <h3 class="content-box-header bg-blue">
            Profile User
            <a href="#" onclick="javascript:window.history.back();">
        		<span class="float-right" style="font-size: 14px;color: #fff;"><< Back</span>
        	</a>
        </h3>
        <div class="content-box-wrapper">
            <div class="col-lg-3">
                <div class="thumbnail-box-wrapper">
                    <div class="thumbnail-box">
                         <img src="https://marinebusiness.co.id/uploads/profile/thumbnail/{{$user->thumbnail}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <table class="table table-hover">							        
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
			                <td width="150">Status</td>
			                <td width="20">:</td>
			                <td class="invoice-address">{{ ($user->verified==1)?"Verified":"Not Verified" }}</td>
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
			            <tr>
			                <td width="150">Join</td>
			                <td width="20">:</td>
			                <td>{{$user->tanggal_join}}</td>
			            </tr>
			        </tbody>
			    </table>
            </div>
            <div class="clearfix"></div>
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
</script>
@endsection

