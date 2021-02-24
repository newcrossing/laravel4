{{-- style blade file --}}
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
      rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('adm/app-assets/vendors/css/vendors.min.css') }}">

@yield('vendor-styles')
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('adm/app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adm/app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adm/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adm/app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adm/app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adm/app-assets/css/themes/semi-dark-layout.css')}}">
<!-- END: Theme CSS-->


<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('adm/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
@yield('page-styles')
<!-- END: Page CSS-->


<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('adm/assets/css/style.css')}}">
<!-- END: Custom CSS-->
