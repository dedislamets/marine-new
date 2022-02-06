@extends('home')
@section('content')

<script type="text/javascript">
     $(document).ready(function() {        
        var table = $('#datatable-tabletools').DataTable({
            processing      : true,
            serverSide      : true,
            ajax            : '{{ URL::asset('dtRegister') }}',
            columns         : [
                { data: 'nama', name: 'nama' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' },
                { data: 'tanggal_join', name: 'tanggal_join' },
                { data: 'verified', name: 'verified' },
                { data: 'action', name: 'action', searchable: false, sortable: false },
            ],    
            "columnDefs": [
                { "width": "20%", "targets": 5 }
            ]
                            
      });

         var tt = new $.fn.dataTable.TableTools(table, {
               "buttons": ["copy",
                          "csv",
                          "xls",
                          "pdf",{ "type": "print", "buttonText": "Print me!" } ],
                          "sSwfPath": "//cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf" });
        $( tt.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });
</script>

<div id="page-title">
    <h2>List User Register</h2>
    <p>Halaman ini untuk merubah halaman profil pada front end.</p>
    @csrf
</div>

<div class="panel">
    <div class="panel-body">
        
        <div class="example-box-wrapper">
            <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Join Date</th>
                        <th>Verified</th>
                        <th>Action</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>




@endsection
@section('script')
<script type="text/javascript">
 
    $(document).ready(function() {

    });
    $('[data-toggle="popover"]').popover();

    function delajax(val) {
    	var id= $(val).attr("data-id");
        var x = confirm("Are you sure you want to delete?");
        if (x){
            $.ajax({
                type: "GET",
                url: '{{ url("/users/destroy") }}/' + id,
                 success: function(response){
                    window.location.reload();
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
