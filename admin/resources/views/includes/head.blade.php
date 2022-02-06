<style>        
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title> Marine Business &amp; Admin </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{URL::asset('assets/images/icons/favicon.png')}}" rel="shortcut icon" /> 


<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap/css/bootstrap.css')}}">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/backgrounds.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/boilerplate.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/border-radius.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/grid.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/page-transitions.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/spacing.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/typography.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/utils.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/colors.css')}}">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/badges.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/buttons.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/content-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/dashboard-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/forms.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/images.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/info-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/invoice.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/loading-indicators.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/menus.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/panel-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/response-messages.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/responsive-tables.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/ribbon.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/social-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/tables.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/tile-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/elements/timeline.css')}}">



<!-- ICONS -->
<link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/icons/fontawesome/fontawesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/icons/linecons/linecons.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/icons/spinnericon/spinnericon.css')}}">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/accordion-ui/accordion.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/calendar/calendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/carousel/carousel.css')}}">

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/charts/justgage/justgage.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/charts/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/charts/piegage/piegage.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/charts/xcharts/xcharts.css')}}">

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/chosen/chosen.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/colorpicker/colorpicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/datatable/datatable.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/datepicker/datepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/datepicker-ui/datepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/dialog/dialog.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/dropdown/dropdown.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/dropzone/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/file-input/fileinput.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/input-switch/inputswitch.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/input-switch/inputswitch-alt.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/ionrangeslider/ionrangeslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/jcrop/jcrop.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/jgrowl-notifications/jgrowl.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/loading-bar/loadingbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/maps/vector-maps/vectormaps.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/markdown/markdown.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/modal/modal.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/multi-select/multiselect.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/multi-upload/fileupload.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/nestable/nestable.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/noty-notifications/noty.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/popover/popover.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/pretty-photo/prettyphoto.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/progressbar/progressbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/range-slider/rangeslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/slidebars/slidebars.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/slider-ui/slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/tabs-ui/tabs.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/theme-switcher/themeswitcher.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/timepicker/timepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/tocify/tocify.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/tooltip/tooltip.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/touchspin/touchspin.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/uniform/uniform.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/wizard/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/xeditable/xeditable.css')}}">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/snippets/chat.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/snippets/files-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/snippets/login-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/snippets/notification-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/snippets/progress-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/snippets/todo.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/snippets/user-profile.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/snippets/mobile-navigation.css')}}">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/applications/mailbox.css')}}">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/themes/admin/layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/themes/admin/color-schemes/default.css')}}">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/themes/components/default.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/themes/components/border-radius.css')}}">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/responsive-elements.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/helpers/admin-responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/thickbox.css')}}">

<?php if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == '::1') : ?>
    <script type="text/javascript" src="https://marinebusiness.co.id/assets/js/vue.js"></script>
<?php else : ?>
    <script type="text/javascript" src="https://marinebusiness.co.id/assets/js/vue.min.js"></script>
<?php endif; ?>
<script type="text/javascript" src="https://marinebusiness.co.id/assets/js/vuedraggable.min.js"></script>

<script type="text/javascript" src="{{URL::asset('assets/js-core/jquery-core.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js-core/jquery-ui-core.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js-core/jquery-ui-widget.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js-core/jquery-ui-mouse.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js-core/jquery-ui-position.js')}}"></script>
<!-- <script type="text/javascript" src="{{URL::asset('assets/js-core/transition.js')}}"></script> -->
<script type="text/javascript" src="{{URL::asset('assets/js-core/modernizr.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js-core/jquery-cookie.js')}}"></script>

<script type="text/javascript">
    $(window).load(function(){
        setTimeout(function() {
            $('#loading').fadeOut( 400, "linear" );
        }, 300);
    });
</script>