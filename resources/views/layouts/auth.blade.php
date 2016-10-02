<!doctype html>
<html lang="en">
<head>
	@include('layouts._partials.head')
</head>
<body>
	<div class="wrapper">
		 <div class="content">
				 <div class="container-fluid">
					 @yield('content')
				 </div>
		 </div>
	</div>
	<script src="/js/app.js"></script>
</body>
</html>
