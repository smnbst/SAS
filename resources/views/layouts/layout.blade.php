<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #loading .svg-icon-loader {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -50px 0 0 -50px;
        }
    </style>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Delight - Bootstrap Material Design Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

    <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/weekdaypicker.css') }}"> -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/icons/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/icons/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/icons/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/icons/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/boilerplate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/border-radius.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/page-transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/spacing.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/typography.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/utils.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/material/ripple.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/badges.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/buttons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/content-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/dashboard-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/forms.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/images.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/info-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/invoice.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/loading-indicators.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/menus.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/panel-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/response-messages.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/responsive-tables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/ribbon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/social-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/tables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/tile-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/elements/timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/fontawesome/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/linecons/linecons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/spinnericon/spinnericon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/accordion-ui/accordion.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/calendar/calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/carousel/carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/charts/justgage/justgage.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/charts/morris/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/charts/piegage/piegage.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/charts/xcharts/xcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/chosen/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/colorpicker/colorpicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/datatable/datatable.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/datepicker/datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/datepicker-ui/datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/dialog/dialog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/dropdown/dropdown.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/dropzone/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/file-input/fileinput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/input-switch/inputswitch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/input-switch/inputswitch-alt.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/ionrangeslider/ionrangeslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/jcrop/jcrop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/jgrowl-notifications/jgrowl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/loading-bar/loadingbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/maps/vector-maps/vectormaps.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/markdown/markdown.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/modal/modal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/multi-select/multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/multi-upload/fileupload.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/nestable/nestable.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/noty-notifications/noty.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/popover/popover.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/pretty-photo/prettyphoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/progressbar/progressbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/range-slider/rangeslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/slidebars/slidebars.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/slider-ui/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/tabs-ui/tabs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/timepicker/timepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/tocify/tocify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/tooltip/tooltip.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/touchspin/touchspin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/uniform/uniform.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/wizard/wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/widgets/xeditable/xeditable.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/snippets/chat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/snippets/files-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/snippets/login-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/snippets/notification-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/snippets/progress-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/snippets/todo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/snippets/user-profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/snippets/mobile-navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/applications/mailbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/admin/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/admin/color-schemes/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/components/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/components/border-radius.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/responsive-elements.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/helpers/admin-responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/widgets/owlcarousel/owlcarousel.css') }}">


    <script type="text/javascript" src="{{ asset('assets/js-core/jquery-core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js-core/jquery-ui-core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js-core/jquery-ui-widget.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js-core/jquery-ui-mouse.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js-core/jquery-ui-position.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js-core/transition.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js-core/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js-core/jquery-cookie.js') }}"></script>

    <script type="text/javascript">
        $(window).load(function() {
            setTimeout(function() {
                $('#loading').fadeOut(400, "linear");
            }, 300);
        });
    </script>


</head>



<body>

		@yield('content')

    <script type="text/javascript" src="{{asset('assets/widgets/dropdown/dropdown.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/tooltip/tooltip.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/popover/popover.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/progressbar/progressbar.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/button/button.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/collapse/collapse.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/superclick/superclick.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/input-switch/inputswitch-alt.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/slimscroll/slimscroll.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/slidebars/slidebars.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/slidebars/slidebars-demo.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/piegage/piegage.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/piegage/piegage-demo.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/screenfull/screenfull.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/content-box/contentbox.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/material/material.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/material/ripples.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/overlay/overlay.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js-init/widgets-init.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/themes/admin/layout.js') }}"></script>


    <script type="text/javascript" src="{{asset('assets/widgets/skycons/skycons.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/datatable/datatable.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/datatable/datatable-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/datatable/datatable-tabletools.js') }}"></script>


    <script type="text/javascript" src="{{asset('assets/widgets/datatable/table.js') }}"></script>

    <script type="text/javascript" src="{{asset('assets/widgets/charts/chart-js/chart-core.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/chart-js/chart-doughnut.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/chart-js/chart-demo-1.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/flot/flot.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/flot/flot-resize.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/flot/flot-stack.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/flot/flot-pie.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/flot/flot-tooltip.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/flot/flot-demo-1.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/sparklines/sparklines.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/charts/sparklines/sparklines-demo.js') }}"></script>

    <script type="text/javascript" src="{{asset('assets/widgets/owlcarousel/owlcarousel.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/owlcarousel/owlcarousel-demo.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--script type="text/javascript" src="{{ asset('js/functions.js')}}" ></script -->

    <script type="text/javascript" src="{{ asset('assets/widgets/timepicker/timepicker.js') }}"></script>
    <script type="text/javascript">
                    /* Timepicker */

                    $(function() {
                        "use strict";
                        $('.timepicker-example').timepicker();
                    });
                </script>



</body>
</html>
