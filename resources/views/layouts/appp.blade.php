<!DOCTYPE html>
<html>
<head>

	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
</head>
<body>
    @include('includes.navbar')
	@yield('content')

</body>	
</html>
