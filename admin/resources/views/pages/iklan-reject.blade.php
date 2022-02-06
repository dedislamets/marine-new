@extends('home')
@section('content')

<div id="page-title">
    <h2>List Semua Iklan</h2>
    <p>Halaman ini untuk melihat semua iklan yang reject</p>
    @csrf
</div>

<div class="panel">
    <div class="panel-body" id="box-panel">
        
        <div class="example-box-wrapper">
            <ul class="nav-responsive nav nav-tabs">                
                <li>
                    <a href="{{ url('/iklan') }}" >Need Approved</a>
                </li>
                <li><a href="{{ url('/iklan/approved') }}">Approved</a></li>
                <li><a href="{{ url('/iklan/all') }}">All</a></li>
                <li  class="active" data-toggle="tab"><a href="#tab2">Reject</a></li>
            </ul>
            <div class="tab-content">
                
                <div class="tab-pane active" id="tab2">
                    <div class="example-box-wrapper">
                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>                                    
                                    <th>Judul</th>
                                    <th>Service</th>
                                    <th>Type</th>
                                    <th>Charter</th>
                                    <th>Email</th>
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
        $("#pdf").html('');
        val = $(val).attr('data-name');
        var html = '<object data="http://localhost:8080/marinebusiness-git/assets/pdf/'+val+'" type="application/pdf" width="100%" height="500px"><p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="http://localhost:8080/marinebusiness-git/assets/pdf/'+val+'">Download PDF</a>.</p></object>';
        $("#pdf").append(html);
        $("#row-pdf").removeClass("hidden");
        $.scrollTo('#pdf', 800, {easing:'elasout'});
    }

     $(document).ready(function() {        
        var table = $('#datatable-tabletools').DataTable({
            responsive      : true,
            processing      : true,
            serverSide      : true,
            ajax            : '{{ URL::asset('iklan/iklan_reject') }}',
            columns         : [
                { data: 'id', name: 'id' },
                { data: 'date_iklan', name: 'date_iklan' },
                { data: 'title', name: 'title' },
                { data: 'service', name: 'service' },
                { data: 'type', name: 'type' },
                { data: 'type_charter', name: 'type_charter' },
                { data: 'email', name: 'email'},
                { data: 'action', name: 'action', searchable: false, sortable: false },
            ],      
            columnDefs:[{targets:1, render:function(data){
              return moment(data).format('DD MMMM YYYY'); 
            }}]                            
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
