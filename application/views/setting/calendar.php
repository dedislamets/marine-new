<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ship.css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/buttons.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/fullcalendar.css">

<style type="text/css">
    .bootstrap-datetimepicker-widget table td span {        
        height: 30px;
        line-height: 30px;        
    }
    .input-group .btn, .input-group .input-group-field {
        height: 45px;        
    }
  .ui-draggable {
    background-color: #dd4b39; 
    border-color: rgb(60, 141, 188); 
    color: rgb(255, 255, 255); 
    position: relative; 
    z-index: auto; 
    right: auto; 
    height: 30px; 
    bottom: auto; 
    left: 0px; 
    top: 0px;
    text-align: center;
    margin-top: 10px;
  }
  .box.box-solid {
      border-top: 0;
      margin-top: 15px;
  }

  .box {
      position: relative;
      border-radius: 3px;
      background: #ffffff;
      border-top: 3px solid #d2d6de;
      margin-bottom: 20px;
      width: 100%;
      box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .box-header.with-border {
      border-bottom: 1px solid #f4f4f4;
      text-align: center;
  }

  .box-header {
      color: #444;
      display: block;
      padding: 10px;
      position: relative;
  }
  .box-header .box-title {
      display: inline-block;
      font-size: 18px;
      margin: 0;
      line-height: 1;
      text-align: center;
  }
  .box-body {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px;
      padding: 10px;
  }
  .fc-header-right {
      text-align: right;
      padding-top: 10px !important;
      padding-right:10px !important;
  }
  .fc-header-left {
    padding-top: 10px !important;
    padding-left: 10px !important;
  }
  .fc-header-center {
    padding-top: 10px !important;
    text-align: center;
  }
  .external-event {
      padding: 5px 10px;
      font-weight: bold;
      margin-bottom: 4px;
      box-shadow: 0 1px 1px rgba(0,0,0,0.1);
      text-shadow: 0 1px 1px rgba(0,0,0,0.1);
      border-radius: 3px;
      cursor: pointer;
  }
  /*.fc-event {
    color: #fff !important;
    background: #00bca4;
  }*/
  .fc-event-inner span {
    color: #fff !important;
    padding-right: 5px;
  }

  .fc-grid .fc-other-month .fc-day-number {
      opacity: .3;
      filter: alpha(opacity=30);
  }
  .fc-grid .fc-day-number {
      float: right;
      padding: 0 2px;
  }
    .title-adv {
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 2;
          overflow: hidden;
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
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;    
        border-radius: 0;
    }
    .btn-default {
        color: #fff;
        margin-top: 10px;
        margin-right: 16px;
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
        padding-top: 0px;
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
        color: #fff;
        background-color: #565f66;        
    }
    .panel {        
        background-color: transparent;
    }
     .dropzone {        
        border: 2px dashed #0087F7;
        text-align: center;
        border-radius: 3px;        
        background-color: #ededed;
        cursor: pointer;
    }
     @media (min-width:767px)  {    
        .container-top {
            margin-top:100px;
        }
        body {
            margin: 40px;
        }
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
                            <li class="menu-item">
                                <a href="<?= base_url('setting') ?>" >Profile</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/dokumen') ?>" >Document</a>
                            </li>
                            <!-- <li class="menu-item">
                                <a href="#visi" class="click">Notifikasi</a>
                            </li> -->
                            <li class="menu-item">
                                <a href="<?= base_url('setting/iklan') ?>">Product List</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/pengajuan') ?>">Submission List</a>
                                <span class="label label-warning" style="top: 303px;left: 10px;right: unset;"><?= ($notifikasi["count_submission"]==0)? "" : $notifikasi["count_submission"] ?></span>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/upload') ?>">Upload Sign Document</a>
                                <span class="label label-warning" style="top: 326px;left: 10px;right: unset;"><?= ($notifikasi["count_sign"]==0)? "" : $notifikasi["count_sign"] ?></span>
                            </li>                 
                            <li class="menu-item">
                                <a href="<?= base_url('setting/calendar') ?>">Schedule Meet Up</a>
                                <span class="label label-warning" style="top: 390px;left: 10px;right: unset;"><?= ($notifikasi["count_meetup"]==0)? "" : $notifikasi["count_meetup"] ?></span>
                            </li>        
                            <li class="menu-item">
                                <a href="<?= base_url('setting/notifikasi') ?>">Notifikasi</a>
                                <span class="label label-warning" style="top: 433px;left: 10px;right: unset;"><?= ($notifikasi["count_meetup"]==0)? "" : $notifikasi["count"] ?></span>
                            </li>   
                            <li class="menu-item">
                                <a href="<?= base_url('setting/negotiation') ?>">Negotiation</a>
                                <span class="label label-warning" style="top: 476px;left: 10px;right: unset;"><?= ($notifikasi["count_nego"]==0)? "" : $notifikasi["count_nego"] ?></span>
                            </li> 
                            <li class="menu-item">
                                <a href="<?= base_url('register/logout') ?>" class="click">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="col-md-9"> 
                 <div class="title">
                    <h3><?= $title ?></h3>
                </div>
                <div id="app_calendar" class="row">
                  <div class="page-content custom-bkg bkg-grey clearfix">  
                      <input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >                                                          
                          <div class="col-md-12" style="padding-left: 0;padding-right: 0"> 
                            <div class="col-md-3">
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h4 class="box-title">My Submission</h4>
                                </div>
                                <div class="box-body">                                
                                  <div id="external-events">
                                    <template v-for="calendars in calendar.mine">
                                      <div class="external-event ui-draggable ui-draggable-handle disabled" @click="startPopup(calendars.kode_pengajuan,calendars.onschedule,calendars.status)">{{ calendars.kode_pengajuan }}</div>
                                    </template>
                                                                    
                                  </div>
                                </div>                              
                              </div>
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h4 class="box-title">Submission Client</h4>
                                </div>
                                <div class="box-body">      
                                  <template v-for="calendars in calendar.client">
                                    <div class="external-event ui-draggable ui-draggable-handle" @click="startPopup(calendars.kode_pengajuan,calendars.onschedule,calendars.status)" style="background-color:#00a65a">{{ calendars.kode_pengajuan }}</div>
                                  </template>                                                            
                                </div>                              
                              </div>
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h4 class="box-title">Note</h4>
                                </div>
                                <div class="box-body">    
                                  <ul style="list-style: decimal;margin-left: 15px;">  
                                    <li>Please click the inquiry number for add and edit schedule. </li>
                                    <li>Only at Submission Client.</li>
                                  </ul>                                                           
                                </div>                              
                              </div>
                            </div>
                            <div class="col-md-9">
                              <div class="example-box-wrapper row">                                
                                  <div id="calendar-example-1" class="col-md-12 center-margin"></div>
                              </div> 
                            </div>                                                                         
                          </div>                    
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #337ab7;color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Schedule Meet Up</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("setting/add_event"), array("class" => "form-horizontal", "id" => "form1", "method" => "POST")) ?>
      <div class="form-group">
          <label for="country" class="col-sm-4 label-heading" >No. Pengajuan</label>
          <div class="col-sm-8 ui-front">
            <input type="text" class="form-control" name="kode_pengajuan_2" value="" id="kode_pengajuan_2">              
          </div>
      </div> 
      <div class="form-group">
          <label for="p-in" class="col-md-4 label-heading">Event Name</label>
          <div class="col-md-8 ui-front">
              <input type="text" class="form-control" name="name" value="" id="name">
          </div>
        </div>
        <div class="form-group">
          <label for="p-in" class="col-md-4 label-heading">Description</label>
          <div class="col-md-8 ui-front">
              <input type="text" class="form-control" name="description" id="description">
          </div>
        </div>
        <div class="form-group">
          <label for="p-in" class="col-md-4 label-heading">When</label>
          <div class="col-md-8">
              <div class='input-group date' id='datetimepicker1' >
                  <input type='text' class="form-control" id="start_date" name="start_date" />
                  <span class="input-group-addon">
                      <span class="fa fa-calendar"></span>
                  </span>
              </div>
          </div>
        </div> 
        <div class="form-group">
          <label for="p-in" class="col-md-4 label-heading">Location</label>
          <div class="col-md-8 ui-front">
              <input type="text" class="form-control" name="location" id="location">
          </div>
        </div>       
        <div class="form-group">
          <label for="p-in" class="col-md-4 label-heading">Delete Schedule</label>
          <div class="col-md-8">
              <input type="checkbox" name="delete" value="1">
          </div>
        </div>
        <input type="hidden" name="eventid" id="event_id" value="" />
      </div>
      <div class="modal-footer">        
        <input type="submit" class="btn btn-primary" id="btnSchedule" value="Add Schedule">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
    var app = new Vue({
      el: "#app_calendar",
      mounted: function () {
        //this.loadMachines();
      },
      updated: function () {
        
      },
      data: {
        calendar: {
          mine: [],
          client: [],          
        },        
      },
      methods: {
        resetData: function () {
          this.calendar = {
            mine: [],
            client: [], 
          };
        },
        loadPengajuan: function () {
          var that = this;

          jQuery.ajax({
            type: "GET",
            cache:false,
            url: '<?php echo base_url() ?>setting/calendar_json',
            success: function(response) {                                       
                that.calendar.mine = response.groups;
                that.calendar.client = response.groups_2;                    
            },
          });
        },
        startPopup: function(kode_pengajuan,onschedule,status) { 
          if(status=="On Schedule") {
            $("#btnSchedule").css("display", "none");
          }else{
            $("#btnSchedule").css("display", "block");
          }                 
          if(onschedule==0){
            $('#form1')[0].reset();
            $('#event_id').val('');
            $("#kode_pengajuan_2").val(kode_pengajuan);
            $('#addModal').modal();
            var action = $('#form1').attr('action').replace('edit_event','add_event');
            $('#form1').attr('action',action);            
          }else{
            $.get('<?php echo base_url(); ?>setting/find_calendar/'+ kode_pengajuan, function(data) {                    
                var a = data.data[0].start.split(' ');
                var part = a[0].split('-');
                var tgl = part[2]+'-'+part[1]+'-'+part[0]+' '+a[1];    
                  $("#kode_pengajuan_2").val(data.data[0].kode_pengajuan);
                  $("#name").val(data.data[0].title);
                  $("#description").val(data.data[0].description);
                  $("#start_date").val(tgl);
                  $('#event_id').val(data.data[0].ID);
                  $('#location').val(data.data[0].location);                               
                $('#addModal').modal();
                var action = $('#form1').attr('action').replace('add_event','edit_event');
                $('#form1').attr('action',action); 

            }); 
           
          }                  
        },
      }
    });
    $(document).ready(function(){ 
        app.loadPengajuan();
        var zone = "05:30";   

        $('#calendar-example-1').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },            
            eventSources: [
                {
                    color: '#18b9e6',   
                    textColor: '#000000',
                    events: function(start, end, timezone, callback) {                        
                       $.ajax({
                         url: '<?php echo base_url() ?>setting/get_events',
                         dataType: 'json',
                         data: {
                         // our hypothetical feed requires UNIX timestamps
                          start: start.unix(),
                          end: end.unix(),                          
                         },
                         success: function(msg) {                            
                             var events = msg.events;
                             callback(events);
                         }
                       });
                   }
                }
            ],
            dayClick: function(date, jsEvent, view) {
                // date_last_clicked = $(this);
                // $(this).css('background-color', '#bed7f3');
                // $('#form1')[0].reset();
                // $('#event_id').val('');
                // $('#addModal').modal();
                // var action = $('#form1').attr('action').replace('edit_event','add_event');
                // $('#form1').attr('action',action);
            },
            defaultDate: new Date(),
            editable: true,
            droppable: true,
            eventReceive: function(event){
                var title = event.title;
                var start = event.start.format("YYYY-MM-DD[T]HH:MM:SS");
                $.ajax({
                  url: '<?php echo base_url(); ?>setting/update_calendar',
                  data: 'type=new&title='+title+'&startdate='+start+'&zone='+zone+'&kode_pengajuan='+$("#kode_pengajuan_2").val()+'&location='+$("#location").val(),
                  type: 'POST',
                  dataType: 'json',
                  success: function(response){
                    event.id = response.eventid;
                    $('#calendar').fullCalendar('updateEvent',event);
                  },
                  error: function(e){
                    console.log(e.responseText);
                  }
               });
                $('#calendar').fullCalendar('updateEvent',event);
            },
            eventClick: function(event, jsEvent, view) {                                   
              $('#name').val(event.title);
              $('#description').val(event.description);
              $('#start_date').val(moment(event.start).format('DD-MM-YYYY HH:mm'));
              if(event.end) {
                $('#end_date').val(moment(event.end).format('DD-MM-YYYY HH:mm'));
              } else {
                $('#end_date').val(moment(event.start).format('DD-MM-YYYY HH:mm'));
              }
              $('#event_id').val(event.id);
              $('#kode_pengajuan_2').val(event.kode_pengajuan);
              $('#location').val(event.location);
              $('#addModal').modal();
              var action = $('#form1').attr('action').replace('add_event','edit_event');
              $('#form1').attr('action',action);
              if(event.agree_2==1) {
                $("#btnSchedule").css("display", "none");
              }else{
                $("#btnSchedule").css("display", "block");
              } 
            },
            eventAfterRender: function (event, element, view) {                  
                if (event.status=="Cancel") {                
                    element.css('background-color', '#77DD77');
                }else if (event.status=="On Schedule") {                
                    element.css('background-color', '#FFB347');
                }else if (event.status=="Finish") {                
                    element.css('background-color', '#AEC6CF');
                }
            },
        });
    });    
</script>
