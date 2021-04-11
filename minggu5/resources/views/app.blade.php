<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getlocale())}}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Competable" content="ie=adge">
	<title>{{ config('app.name')}}</title>
</head>
<body bgcolor="silver">
	<div class="jumbatron jumbatron-fluid">
		<div class="container">
			@yield('content')
		</div>
	</div>
</body>
</html>