@extends('home')
@section('content')
<style type="text/css">
  .dropzone .dz-preview .dz-details img, .dropzone-previews .dz-preview .dz-details img {    
    width: 218px;
    height: 137px;
}
.dropzone .dz-preview .dz-details, .dropzone-previews .dz-preview .dz-details {    
    width: 221px;
    height: 139px;    
}
</style>
<div id="page-title">
    <h2>Slider Banner Home</h2>
    
</div>

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/frontend-elements/portfolio-navigation.css')}}">
<!-- Mixitup -->

<script type="text/javascript" src="{{URL::asset('assets/widgets/mixitup/mixitup.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/mixitup/images-loaded.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/mixitup/isotope.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/mixitup/portfolio-demo.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/dropzone/dropzone.js')}}"></script>
<div class="panel">
    <div class="panel-body">        
        <div class="example-box-wrapper">
            <h3 style="text-align: center;padding-bottom: 10px">Click Box for Add Image</h3>
            <div class="row" id="dropzone-example">
                <form method="post" action="{{ url('/upload_slide') }}" enctype="multipart/form-data" class="dropzone bg-gray col-md-10 center-margin" id="drop1">
                  {{ csrf_field() }}
                  <div class="dz-message">
                      <div class="col-xs-8">
                          <div class="message">
                              <p>Drop files here or Click to Upload</p>
                          </div>
                      </div>
                  </div>
                  <div class="fallback">
                      <input type="file" name="file" multiple>
                  </div>
              </form>               
            </div>
        </div>
    </div>
</div>
<div class="clearfix">   
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript" src="{{URL::asset('js/thickbox.js')}}"></script>
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
    $(document).ready(function() {
      Dropzone.autoDiscover = false;
      var clasification_no = $("#idKapal").val();
      var foto_upload= new Dropzone("#drop1",{
          //url: "{{ url('/upload_slide') }}",
          maxFilesize: 10,
          //method:"post",
          uploadMultiple: true,
          parallelUploads: 2,
          acceptedFiles:"image/*",
          //paramName:"userfile",
          dictInvalidFileType:"Type file ini tidak dizinkan",
          dictRemoveFile: 'Remove file',
          dictFileTooBig: 'Image is larger than 16MB',
          addRemoveLinks:true,
          autoProcessQueue:true,
          //params: {csrf_token: $('meta[name="csrf-token"]').attr('content')},                    
          init: function() {  
              thisDropzone = this;            
              $.get("{{ url('/getslider') }}", function(data) {                  
                  $.each(data.slider, function(key,value){                     
                      var mockFile = { name: value.img_slider, size: 12345 };                     
                      thisDropzone.options.addedfile.call(thisDropzone, mockFile);    
                      thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "https://marinebusiness.co.id/admin/public/images/"+value.img_slider);                       
                      thisDropzone.emit("complete", mockFile);     
                      thisDropzone.files.push(mockFile);  
                      $(mockFile.previewElement).prop('id', value.id);                                          
                      $('<a href="https://marinebusiness.co.id/admin/public/images/'+value.img_slider+'"  style="color:green;font-weight:bold" class="float-right thickbox" >View</a>').insertAfter(mockFile._removeLink);                     
                  });                     
                  $(".dz-remove").html("Hapus");                                             
              });                                      
          }    
      });            
      foto_upload.on("sending",function(a,b,c){        
          a.token = $('meta[name="csrf-token"]').attr('content');              
          c.append("token_foto",a.token);           
      });      
      foto_upload.on("removedfile",function(a){          
          var name = a.name;                                
          $.ajax({
              type:"post",
              data:{name:name },
              url:"{{ url('/slider/destroy') }}",
              cache:false,
              dataType: 'json',
              success: function(){
                  console.log("Foto terhapus");
              },
              error: function(){
                  console.log("Error");
              }
          });
      });
    });
</script>
@endsection