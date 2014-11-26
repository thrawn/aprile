<!DOCTYPE html>
<html lang="en">

    @include('includes.material.head')

  <body>

    <div class="container">

	<header class="row">
		@include('includes.default.nav')
	</header>


        <div id="main" class="row">


            @yield('content')

	</div>


    @include('includes.material.footer')

  </body>
</html>

