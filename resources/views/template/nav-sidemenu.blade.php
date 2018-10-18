<ul class="list-group">
	@foreach($navSideMenu as $name => $link)
		<li class="list-group-item">
			<a href="{{ $link }}">{{ $name }}</a>
		</li>
	@endforeach
</ul>