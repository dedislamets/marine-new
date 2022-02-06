@extends('home')
@section('content')
<div id="page-title">
    <h2>Profil Editor</h2>
    <p>Halaman ini untuk merubah halaman profil pada front end.</p>
        
</div>
<script type="text/javascript" src="{{URL::asset('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js')}}"></script>
<form method="POST" action="{{ url('/profil') }}">
@csrf
    @foreach($profils as $profil)
    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Riwayat Perusahaan
            </h3>
            <div class="example-box-wrapper">
                <div class="wysiwyg-editor"></div>
                <textarea name="history" class="history">{{ $profil->history }}</textarea>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-6">
                <h3 class="title-hero">
                    Visi
                </h3>
                <div class="example-box-wrapper">
                    <textarea name="visi" class="visi">{{ $profil->visi }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="title-hero">
                    Misi
                </h3>
                <div class="example-box-wrapper">                    
                    <textarea name="misi" class="misi">{{ $profil->misi }}</textarea>
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 10px">
                <h3 class="title-hero">
                    Service Description
                </h3>
                <div class="example-box-wrapper">
                    <textarea name="service_desc" class="service_desc">{{ $profil->service_desc }}</textarea>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 10px">
                <h3 class="title-hero">
                    Trading Description
                </h3>
                <div class="example-box-wrapper">                    
                    <textarea name="trading_desc" class="trading_desc">{{ $profil->trading_desc }}</textarea>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 10px">
                <h3 class="title-hero">
                    Chartering Description
                </h3>
                <div class="example-box-wrapper">                    
                    <textarea name="chartering_desc" class="chartering_desc">{{ $profil->chartering_desc }}</textarea>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 10px">
                <h3 class="title-hero">
                    CSM Description
                </h3>
                <div class="example-box-wrapper">                    
                    <textarea name="csm_desc" class="csm_desc">{{ $profil->csm_desc }}</textarea>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 10px">
                <h3 class="title-hero">
                    Transportation Description
                </h3>
                <div class="example-box-wrapper">                    
                    <textarea name="transportation_desc" class="transportation_desc">{{ $profil->transportation_desc }}</textarea>
                </div>
            </div>
            
        </div>
    </div>
    @endforeach
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>
        </div>
    </div>
</form>

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
      $('textarea').summernote({
        height: 150
      });
    });
</script>
@endsection
