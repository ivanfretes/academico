
@include('template.header-main')
@include('template.nav-top')
@include('template.errors')


<div class="container">
@yield('content_page')
</div>

@include('template.footer-main')




