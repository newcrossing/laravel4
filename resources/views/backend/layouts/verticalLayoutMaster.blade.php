<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns
@if(config('admin.isMenuCollapsed') == true) {{'menu-collapsed'}}@endif
@if(config('admin.theme') === 'dark') {{'dark-layout'}}
@elseif(config('admin.theme') === 'semi-dark'){{'semi-dark-layout'}}
@else {{'light-layout'}} @endif
@if(config('admin.isContentSidebar') === true) {{'content-left-sidebar'}} @endif
@if(!empty(config('admin.navbarType'))) {{config('admin.navbarType')}} @endif
@if(!empty(config('admin.footerType'))) {{config('admin.footerType')}} @endif
{{config('admin.bodyCustomClass')}}
@if(config('admin.mainLayoutType') === 'vertical-menu-boxicons'){{'boxicon-layout'}}@endif
@if(config('admin.isCardShadow') === false){{'no-card-shadow'}}@endif"
	  data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
@include('backend.panels.navbar')
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
@include('backend.panels.sidebar')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
	{{-- Application page structure --}}
	@if(config('admin.isContentSidebar') === true)
		<div class="content-area-wrapper">
			<div class="sidebar-left">
				<div class="sidebar">
					@yield('sidebar-content')
				</div>
			</div>
			<div class="content-right">
				<div class="content-overlay"></div>
				<div class="content-wrapper">
					<div class="content-header row">
					</div>
					<div class="content-body">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	@else
		{{-- others page structures --}}
		<div class="content-overlay"></div>
		<div class="content-wrapper">
			<div class="content-header row">
				@if(config('pageHeader')=== true && isset($breadcrumbs))
					@include('backend.panels.breadcrumbs')
				@endif
			</div>
			<div class="content-body">
				@yield('content')
			</div>
		</div>
	@endif
</div>
<!-- END: Content-->
@if( config('admin.isCustomizer') === true && !empty(config('admin.isCustomizer')))
	<!-- BEGIN: Customizer-->
	<div class="customizer d-none d-md-block">
		<a class="customizer-close" href="#"><i class="bx bx-x"></i></a>
		<a class="customizer-toggle" href="#"><i class="bx bx-cog bx bx-spin white"></i></a>
		@include('backend.pages.customizer-content')
	</div>
	<!-- End: Customizer-->


@endif


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
@include('backend.panels.footer')
<!-- END: Footer-->

@include('backend.panels.scripts')
</body>
<!-- END: Body-->
