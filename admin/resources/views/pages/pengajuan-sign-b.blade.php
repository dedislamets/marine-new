@extends('home')
@section('content')

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
                <li ><a href="{{ url('/pengajuan/sign/1') }}">Sign Author</a></li>                
                <li class="active"><a href="#tab3" data-toggle="tab">Sign Client</a></li>
                <li><a href="{{ url('/pengajuan/meetup') }}">Meetup</a></li>
                <li><a href="{{ url('/pengajuan/deal') }}">Deal</a></li>  
                <li><a href="{{ url('/pengajuan/cancel') }}">Cancel</a></li>                  
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
                                    <th>Sign 1</th>
                                    <th>Sign 2</th>                                    
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


@endsection
@section('script')

<script type="text/javascript">
    jQuery.easing.elasout = function(x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
    };

    function showpdf(val) {  
        val = $(val).attr('data-name');              
        $("#pdf").html('');
        var html = '<object data="https://marinebusiness.co.id/assets/pdf/'+val+'" type="application/pdf" width="100%" height="500px"><p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="https://marinebusiness.co.id/assets/pdf/'+val+'">Download PDF</a>.</p></object>';
        $("#pdf").append(html);
        $("#row-pdf").removeClass("hidden");
        $.scrollTo('#pdf', 800, {easing:'elasout'});
    }

     $(document).ready(function() {        
        var table = $('#datatable-tabletools').DataTable({
            processing      : true,
            serverSide      : true,
            ajax            : '{{ URL::asset('dtsign2') }}',
            columns         : [
                { data: 'tgl_pengajuan', name: 'tgl_pengajuan' },
                { data: 'kode_pengajuan', name: 'kode_pengajuan' },
                { data: 'title_pengajuan', name: 'title_pengajuan' },
                { data: 'jenis_pengajuan', name: 'jenis_pengajuan' },
                { data: 'nama_buyer', name: 'nama_buyer' },
                { data: 'nama_seller', name: 'nama_seller' },
                { data: 'nilai_pengajuan', name: 'nilai_pengajuan', render: $.fn.dataTable.render.number('.', ',', 0) },
                { data: 'tgl_sign_1', name: 'tgl_sign_1' },
                { data: 'tgl_sign_2', name: 'tgl_sign_2' },
                { data: 'action', name: 'action', searchable: false, sortable: false },
            ],     
                            
      });

         var tt = new $.fn.dataTable.TableTools(table);
        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });
</script>
@endsection
