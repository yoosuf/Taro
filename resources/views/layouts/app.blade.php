<!doctype html>
<html lang="en">
<head>
	@include('layouts._partials.head')
</head>
<body>
	<div class="wrapper">
	   @include('layouts._partials.navigation')
	    <div class="main-panel">
				@include('layouts._partials.header')
				@include('layouts._partials.content')
				@include('layouts._partials.footer')
	    </div>
	</div>
	<script src="/js/app.js"></script>
</body>
</html>
