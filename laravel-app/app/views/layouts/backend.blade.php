@include('layouts.backendpartial.head')
<body>

<div id="wrapper">
	@include('layouts.backendpartial.menu')
	<div id="page-wrapper">
		@include('layouts.backendpartial.render-message')
		@include('layouts.backendpartial.render-message-form')
		<div class="container-fluid">
			@include('layouts.backendpartial.content')
		</div>
	</div>
</div>
@include('layouts.backendpartial.footer')
</body>
</html>