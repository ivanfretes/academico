
@include('template.header-main')
@include('template.nav-top')



<div class="container page-container">
	<div class="row">
		<div class="col-md-12">
			@include('template.errors')
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 text-right">
			<h2>
				{{ isset($title_main_section) ? $title_main_section : '' }}
			</h2>
		</div>
	</div>

	@yield('content_page')
</div>

@include('template.footer-main')




