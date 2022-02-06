@extends('home')
@section('content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/calendar/calendar.css')}}">
<div id="page-title">
    <h2>Calendar</h2>
    <p>Halaman ini untuk melihat calendar meet up.</p>
    @csrf
</div>

<div class="panel">
    <div class="panel-body">        
        @foreach($users as $user)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="thumbnail-box-wrapper">
                <div class="thumb-pane">
                    <h3 class="thumb-heading animated rollIn">
                            {{$user["title"]}}
                    </h3>
                </div>
                <div class="thumbnail-box">
                    <div class="thumb-overlay bg-black"></div>
                    <img src="../../assets/image-resources/stock-images/img-17.jpg" alt="">
                </div>
                <div class="thumb-pane">
                    <h3 class="thumb-heading animated rollIn">
                        <a href="#" title="">
                           {{$user["description"]}}
                        </a>
                        <br>
                        {{$user["location"]}} <br>
                        <small>{{$user["start"]}} <br>s/d<br> {{$user["end"]}}</small>
                    </h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #337ab7;color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Schedule Meet Up</h4>
      </div>
        <div class="modal-body">      
            <form class="form-horizontal" id="form1">
                <div class="form-group">
                    <label for="country" class="col-sm-4 label-heading" >No. Pengajuan</label>
                    <div class="col-sm-8 ui-front">
                        <input type="text" class="form-control disabled" readonly name="kode_pengajuan_2" value="" id="kode_pengajuan_2">              
                    </div>
                </div> 
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                    <div class="col-md-8 ui-front">
                      <input type="text" class="form-control disabled" readonly name="name" value="" id="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Description</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" readonly name="description" id="description">
                    </div>
                </div>
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">When</label>
                    <div class="col-md-8">
                        <div class='input-group date' id='datetimepicker1' >
                          <input type='text' class="form-control" readonly id="start_date" name="start_date" />
                          <span class="input-group-addon">
                              <span class="fa fa-calendar"></span>
                          </span>
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Location</label>
                    <div class="col-md-8 ui-front">
                        <input type="text" class="form-control" readonly name="location" id="location">
                    </div>
                </div>       
                <div class="form-group hidden">
                    <label for="p-in" class="col-md-4 label-heading">Delete Schedule</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
                </div>
                <input type="hidden" name="eventid" id="event_id" value="" />
            </form>
        </div>
        <div class="modal-footer">        
        <!-- <input type="submit" class="btn btn-primary" id="btnSchedule" value="Add Schedule"> -->        
        </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{URL::asset('assets/widgets/interactions-ui/resizable.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/interactions-ui/draggable.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/interactions-ui/sortable.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/interactions-ui/selectable.js')}}"></script>


<script type="text/javascript" src="{{URL::asset('assets/widgets/daterangepicker/moment.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/calendar/calendar.js')}}"></script>
<!-- <script type="text/javascript" src="{{URL::asset('assets/widgets/calendar/calendar-demo.js')}}"></script> -->
<script type="text/javascript">
    $(document).ready(function() {

    });
</script>
@endsection
