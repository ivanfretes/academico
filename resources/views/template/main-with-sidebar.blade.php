
@include('template.header-main')
@include('template.nav-top')
@include('template.errors')


<div class="container page-container">
	<div class="row">
		<div class="col-md-3">
			@yield('sidebar_page')
		</div>
		<div class="col-md-9">
			@yield('content_page')
		</div>
	</div>
</div>

@include('template.footer-main')




