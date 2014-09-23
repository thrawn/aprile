<!DOCTYPE html>
<html lang="en">

    @include('includes.default.head')

  <body>
    <div class="container">

	<header class="row">
		@include('includes.default.nav')
	</header>


        <div id="main" class="row">
            <p>D E F A U L T</p>
            
            @yield('content')

	</div>


    @include('includes.default.footer')

  </body>
</html>

