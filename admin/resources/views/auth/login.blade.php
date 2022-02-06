<!DOCTYPE html> 
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<style type="text/css">

    html,body {
        height: 100%;
    }

</style>
<div class="center-vertical bg-black">
    <div class="center-content row">
        <form action="{{ route('login') }}" id="login-validation" class="center-margin col-xs-11 col-sm-5" method="POST">
            @csrf
            <h3 class="text-center pad25B font-gray font-size-23">Marine Business <span class="opacity-80">v1.0</span></h3>
            <div id="login-form" class="content-box">
                
                <div class="content-box-wrapper pad20A" >

                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ __('E-Mail Address') }}</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">{{ __('Password') }}</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>                            
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                </div>
                <div class="button-pane">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
            </div>

            <div id="login-forgot" class="content-box modal-content hide">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address:</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <div class="button-pane text-center">
                    <button type="submit" class="btn btn-md btn-primary">Recover Password</button>
                    <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-forgot" title="Cancel">Cancel</a>
                </div>
            </div>

        </form>

    </div>
</div>

@include('includes.script')

</body>
</html>
