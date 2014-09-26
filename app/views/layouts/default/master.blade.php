<!DOCTYPE html>
<html lang="en">

    @include('includes.default.head')

  <body>

    <div class="container">

	<header class="row">
		@include('includes.default.nav')
	</header>


        <div id="main" class="row">


            @yield('content')

	</div>


    @include('includes.default.footer')

  </body>
</html>

