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
                <li class="active"><a href="#tab2" data-toggle="tab">Verified</a></li>
                <li><a href="{{ url('/pengajuan/sign/1') }}" >Sign Author</a></li>                
                <li><a href="{{ url('/pengajuan/sign/2') }}">Sign Client</a></li>
                <li><a href="{{ url('/pengajuan/meetup') }}">Meetup</a></li>
                <li  ><a href="{{ url('/pengajuan/deal') }}" >Deal</a></li> 
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
    function showpdf(val) {                
        $("#pdf").html('');
        val = $(val).attr('data-name');
        var html = '<object data="https://marinebusiness.co.id/'+val+'" type="application/pdf" width="100%" height="500px"><p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="https://marinebusiness.co.id/'+val+'">Download PDF</a>.</p></object>';
        $("#pdf").append(html);
        $("#row-pdf").removeClass("hidden");
        $.scrollTo('#pdf', 800, {easing:'elasout'});
    }
     $(document).ready(function() {        
        var table = $('#datatable-tabletools').DataTable({
            processing      : true,
            responsive      : true,
            serverSide      : true,
            ajax            : '{{ URL::asset('dtverified') }}',
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
                { sWidth: "15%", aTargets: [7] },
            ]                 
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
