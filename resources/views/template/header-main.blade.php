<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Kuaasys </title>
    
    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ @url("vendor/jquery-easyui/themes/default/easyui.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ @url("vendor/jquery-easyui/themes/icon.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ @url("assets/css/custom.css") }}">
	<link rel="stylesheet" href="{{ @url("vendor/bootstrap/css/bootstrap.min.css")}}" >
	<link rel="stylesheet" type="text/css" href="{{ @url("assets/css/normalize.css") }}">

    <script type="text/javascript" src="{{ @url("vendor/jquery-easyui/jquery.min.js") }} "></script>
    
    <script type="text/javascript" src="{{ @url("vendor/jquery-easyui/jquery.easyui.min.js") }}"></script>
   
   
   	<script type="text/javascript">
		var urlAPI = '{{ @url("api/v1") }}/';
		var urlAction = '';

		
		$('document').ready(function(){
			setTimeout(function(){
				$('.preloader').removeClass('preloader');	
			},1000)
		});
	</script>
   
</head>
<body>

<div class="preloader">
	<div class="icon"></div>
</div>
