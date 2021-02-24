<!-- BEGIN: Vendor JS-->
<script>
    var assetBaseUrl = "{{ asset('') }}";
</script>
<script src="{{asset('adm/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('adm/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
<script src="{{asset('adm/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
<script src="{{asset('adm/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
@yield('vendor-scripts')
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('adm/app-assets/js/scripts/configs/vertical-menu-light.js')}}"></script>
<script src="{{asset('adm/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('adm/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('adm/app-assets/js/scripts/components.js')}}"></script>
<script src="{{asset('adm/app-assets/js/scripts/footer.js')}}"></script>
<script src="{{asset('adm/app-assets/js/scripts/customizer.js')}}"></script>
<script src="{{asset('adm/assets/js/scripts.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
@yield('page-scripts')
<!-- END: Page JS-->
