@extends('home')
@section('content')
<script type="text/javascript" src="{{URL::asset('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js')}}"></script>
<div id="page-title">
    <h2>List Pengajuan</h2>
    <p>Halaman ini untuk merubah halaman profil pada front end.</p>
    @csrf
</div>

<div class="panel">
    <div class="panel-body">
        
        <div class="example-box-wrapper">
            <ul class="nav-responsive nav nav-tabs">                
                <li><a href="{{ url('/pengajuan') }}">Pending</a></li>
                <li><a href="{{ url('/pengajuan/verified') }}">Verified</a></li>
                <li><a href="{{ url('/pengajuan/sign/1') }}" >Sign Author</a></li>                
                <li><a href="{{ url('/pengajuan/sign/2') }}">Sign Client</a></li>
                <li><a href="{{ url('/pengajuan/meetup') }}">Meetup</a></li>
                <li><a href="{{ url('/pengajuan/deal') }}">Deal</a></li>
                <li  class="active"><a href="#tab2" data-toggle="tab">Cancel</a></li>                 
            </ul>
            <div class="tab-content">
                
                <div class="tab-pane" id="tab2">
                    
                </div>
                <div class="tab-pane active" id="tab3">
                    <div class="example-box-wrapper">
                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nomor</th>
                                    <th>Judul</th>
                                    <th>Type</th>
                                    <th>Buyer</th>
                                    <th>Author</th>
                                    <th>Total</th>                                    
                                    <th>Action</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row hidden" id="row-pdf">
            <div class="col-md-12" id="pdf">                
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Alasan Reject</h4>
            </div>
            <form id="form1" action="{{ url('/pengajuan/rjc') }}" method="POST">
                @csrf
                <input type="hidden" name="idPengajuan" id="idPengajuan" value="" >
                <div class="modal-body">
                    <div class="example-box-wrapper">
                        <textarea name="alasan" class="alasan"></textarea>
                    </div>
                </div>
                <div class="modal-footer">                        
          
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript" src="{{URL::asset('js/thickbox.js')}}"></script>
<script type="text/javascript">
    jQuery.easing.elasout = function(x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
    };
    function showpdf(val) {                
        $("#pdf").html('');
        val = $(val).attr('data-name');
        var html = '<object data="https://marinebusiness.co.id/'+val+'" type="application/pdf" width="100%" height="500px"><p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="https://marinebusiness.co.id/'+val+'">Download PDF</a>.</p></object>';
        $("#pdf").append(html);
        $("#row-pdf").removeClass("hidden");
        $.scrollTo('#pdf', 800, {easing:'elasout'});
    }

    function confirmrjc(val) {  
        $("#idPengajuan").val(val);                    
        $.ajax({
            type: "GET",
            url: '{{ url("/pengajuan/reason") }}/' + val,
            success: function(response){           
                $(".note-editable").html('');     
                $(".note-editable").html(response["reason"]["reason"]);
                $(".note-editable").addClass('disabled');  
                $("#myModal").modal('show');               
            },
             error: function(e){
             console.log(e.responseText);
             }
        });
        
    }

     $(document).ready(function() {        
        var table = $('#datatable-tabletools').DataTable({
            processing      : true,
            responsive      : true,
            serverSide      : true,
            ajax            : '{{ URL::asset('dtcancel') }}',
            columns         : [
                { data: 'tgl_pengajuan', name: 'tgl_pengajuan' },
                { data: 'kode_pengajuan', name: 'kode_pengajuan' },
                { data: 'title_pengajuan', name: 'title_pengajuan' },
                { data: 'jenis_pengajuan', name: 'jenis_pengajuan' },
                { data: 'nama_buyer', name: 'nama_buyer' },
                { data: 'nama_seller', name: 'nama_seller' },
                { data: 'nilai_pengajuan', name: 'nilai_pengajuan', render: $.fn.dataTable.render.number('.', ',', 0) },
               
                { data: 'action', name: 'action', searchable: false, sortable: false },
            ],     
            aoColumnDefs: [
                { sWidth: "10%", aTargets: [7] },
            ]                 
      });

         var tt = new $.fn.dataTable.TableTools(table);
        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );

    $(document).ready(function() {
        $('textarea').summernote({
            height: 150
        });   
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });
</script>
@endsection
