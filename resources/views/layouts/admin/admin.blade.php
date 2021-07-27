<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="http://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/auth/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/style.css">
    <link id="color" rel="stylesheet" href="http://admin.pixelstrap.com/cuba/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body onload="startTime()">
      <!-- @include('layouts.admin.includes.initial-loader') -->
      <div id="app">
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            @include('layouts.admin.includes.top-header')
            <div class="page-body-wrapper">
              @include('layouts.admin.includes.side-bar')
              <main class="py-4">
                @yield('content')
              </main>
            </div>
        </div>
      </div>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/jquery-3.5.1.min.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/scrollbar/simplebar.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/scrollbar/custom.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/config.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/sidebar-menu.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/chart/chartist/chartist.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/chart/knob/knob.min.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/chart/knob/knob-chart.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/dashboard/default.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/notify/index.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/typeahead/handlebars.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/typeahead-search/handlebars.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/script.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/theme-customizer/customizer.js"></script>
  </body>
</html>