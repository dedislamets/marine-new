@extends('home')
@section('content')
<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/sparklines/sparklines.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/sparklines/sparklines-demo.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/piegage/piegage.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/piegage/piegage-demo.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('assets/js-core/d3.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/xcharts/xcharts.js')}}"></script>
<!--<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/xcharts/xcharts-demo-1.js')}}"></script>-->


<!-- Sparklines charts -->

<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/sparklines/sparklines.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/sparklines/sparklines-demo.js')}}"></script>

<!-- Skycons -->

<script type="text/javascript" src="{{URL::asset('assets/widgets/skycons/skycons.js')}}"></script>

<!-- Calendar -->
<script type="text/javascript" src="{{URL::asset('assets/js-init/widgets-init.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/theme-switcher/themeswitcher.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/daterangepicker/moment.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/calendar/calendar.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/calendar/calendar-demo.js')}}"></script>

<!--<script type="text/javascript" src="{{URL::asset('assets/widgets/wizard/wizard-demo.js')}}"></script>-->
<script type="text/javascript" src="{{URL::asset('assets/themes/admin/layout.js')}}"></script>


<div id="page-title">
    <h2>Dashboard</h2>
    <p>The most complete user interface framework that can be used to create stunning admin dashboards and presentation websites.</p>    
</div>

<div class="row">
    <div class="col-md-6">
        <div class="content-box">
            <h3 class="content-box-header content-box-header-alt bg-white">
                <span class="icon-separator">
                    <i class="glyph-icon icon-linecons-megaphone"></i>
                </span>
                <span class="header-wrapper">
                    Register Member Chart
                    <small>Graphic Register Member</small>
                </span>
            </h3>
            <div class="content-box-wrapper">
                <div id="chart_reg" style="width: 100%; height: 300px;"></div>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="tile-box tile-box-alt mrg20B bg-green">
                    <div class="tile-header">
                        Members
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-dashboard"></i>
                        <div class="tile-content">
                            {{$j_registrasi}}
                        </div>
                        <small>
                            <i class="glyph-icon icon-caret-up"></i>
                            
                        </small>
                    </div>
                    <a href="users" class="tile-footer tooltip-button" data-placement="bottom" title="Register Member">
                        view details
                        <i class="glyph-icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile-box tile-box-alt mrg20B bg-red">
                    <div class="tile-header">
                        Iklan
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-camera"></i>
                        <div class="tile-content">
                            {{$j_iklan}}
                        </div>
                        <small>
                            <i class="glyph-icon icon-caret-up"></i>
                            
                        </small>
                    </div>
                    <a href="iklan" class="tile-footer tooltip-button" data-placement="bottom" title="Posting Member">
                        view details
                        <i class="glyph-icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile-box tile-box-alt mrg20B bg-orange">
                    <div class="tile-header">
                        Ship
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-tag"></i>
                        <div class="tile-content">
                            {{$j_kapal}}
                        </div>
                        <small>
                            <i class="glyph-icon icon-caret-up"></i>
                            
                        </small>
                    </div>
                    <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="Ship">
                        view details
                        <i class="glyph-icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile-box tile-box-alt mrg20B bg-blue-alt">
                    <div class="tile-header">
                        Inquiry
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-camera"></i>
                        <div class="tile-content">
                            {{$j_pengajuan}}
                        </div>
                        <small>
                            <i class="glyph-icon icon-caret-up"></i>
                            
                        </small>
                    </div>
                    <a href="pengajuan" class="tile-footer tooltip-button" data-placement="bottom" title="Inquiry">
                        view details
                        <i class="glyph-icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>    

    </div>
    <div class="col-md-12">
        <div class="content-box">
            <h3 class="content-box-header content-box-header-alt bg-white">
                <span class="icon-separator">
                    <i class="glyph-icon icon-linecons-megaphone"></i>
                </span>
                <span class="header-wrapper">
                    Inquiry Chart
                    <small>Graphic Inquiry Request Client</small>
                </span>
            </h3>
            <div class="content-box-wrapper">
                <div id="donut-example" class="graph"></div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script type="text/javascript">
 
    $(document).ready(function() { 
       
        Morris.Area({
            element: 'donut-example',
            data: {!!$chart_pengajuan!!},
            xkey: 'x',
            ykeys: ['y'],
            labels: ['Inquiry'],
            pointSize: 2,
            hideHover: 'auto'
        });
        
        var tt = document.createElement('div'),
            leftOffset = -(~~$('html').css('padding-left').replace('px', '') + ~~$('body').css('margin-left').replace('px', '')),
            topOffset = -32;
        tt.className = 'ex-tooltip';
        document.body.appendChild(tt);
        
        
        var data = {
            "xScale": "time",
            "yScale": "linear",
            "main": 
                [{
                "className": ".pizza",
                "data": {!!$chart_registrasi!!}
            }]
        };
        var opts = {
            "dataFormatX": function(x) {
                return d3.time.format('%Y-%m-%d').parse(x);
            },
            "tickFormatX": function(x) {
                return d3.time.format('%d %B')(x);
            },
            "mouseover": function(d, i) {
                var pos = $(this).offset();
                $(tt).text(d3.time.format('%d %B')(d.x) + ': ' + d.y)
                    .css({
                        top: topOffset + pos.top,
                        left: pos.left + leftOffset
                    })
                    .show();
            },
            "mouseout": function(x) {
                $(tt).hide();
            }
        };
        var myChart = new xChart('line-dotted', data, '#chart_reg', opts);
    
        
    });
        
    
</script>

@endsection