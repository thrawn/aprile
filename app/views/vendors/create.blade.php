
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tutorial Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Business theme for Bootstrap">
    <meta name="author" content="Untame.net">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/2.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.carousel').carousel({interval: 10000, pause: false});
      });
    </script>

    <style>
      .carousel { z-index: -99; }
      .carousel .item {
        position: fixed;
        width: 100%; height: 100%;
        -webkit-transition: opacity 2s;
        -moz-transition: opacity 2s;
        -ms-transition: opacity 2s;
        -o-transition: opacity 2s;
        transition: opacity 2s;

      }
      .carousel .one {
        background: url(/bootstrap/img/IMG_7098.jpg);
        background-size: cover;
        -moz-background-size: cover;
      }
      .carousel .two {
        background: url(/bootstrap/img/containers_3.jpg);
        background-size: cover;
        -moz-background-size: cover;
      }
      .carousel .three {
        background: url(/bootstrap/img/cranes.jpg);
        background-size: cover;
        -moz-background-size: cover;
      }

    </style>

  </head>

  <body>

    <div id="myCarousel" class="carousel container slide">
      <!-- Carousel items -->
      <div class="carousel-inner">
                <div class="active item one"></div>
                <div class="item two"></div>
      </div>
    </div>

    <div class="container well well-large">
      <h2>This page exemplifies a rotating background set.</h2>
      <h4>The images will resize nicely with the browser's viewport.</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae nibh placerat mauris dignissim convallis et sed nisi. Mauris gravida, sapien ut viverra posuere, massa sem ultricies purus, non accumsan eros magna vitae metus. Sed lobortis mauris risus, id iaculis enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam nec mauris arcu. Praesent hendrerit, velit id consequat sollicitudin, augue nibh varius dolor, vel viverra lacus arcu ac sapien. Nulla facilisi.</p>
      <p>Etiam et nibh sit amet nibh viverra mattis. Integer pretium faucibus sem, sit amet ultricies purus fermentum at. Maecenas dignissim, metus in tristique mattis, leo nunc sagittis sapien, eget pretium quam urna at enim. Cras quis massa vel massa scelerisque consequat. Suspendisse pulvinar elit ac dolor dictum condimentum. Vestibulum mattis accumsan luctus. In bibendum lorem nec dui interdum auctor. Sed lobortis faucibus augue, vel cursus nibh lacinia id. Pellentesque tincidunt, massa sit amet elementum posuere, velit nulla vulputate dui, vel viverra dolor nulla ut velit. In hac habitasse platea dictumst. Sed dictum tortor ultricies sapien cursus tincidunt. Nunc commodo ultrices justo, a tempor nibh bibendum a. Integer pulvinar justo ut diam congue eget facilisis erat sagittis.</p>


<!-- if there are creation errors, they will show here -->

@if ( HTML::ul($errors))

<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</                                                            button>
{{ HTML::ul($errors->all()) }}
</div>
@endif


{{ Form::open(array('route' => 'vendors.store','class'=> 'form-horizontal')) }}
<fieldset>
<legend>Create Vendor</legend>

    <div class="form-group">
        {{ Form::label('name', 'Vendor Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('contact_name', 'Contact Name') }}
        {{ Form::text('contact_name', Input::old('contact_name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::textarea('address', Input::old('address'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('state', 'State') }}
        {{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}
    </div>

    <div class="form-                                                                                                                                                     group">
        {{ Form::label('zip', 'Zipcode') }}
        {{ Form::text('zip', Input::old('zip'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('contact_phone', 'Contact Phone') }}
        {{ Form::textarea('contact_phone', Input::old('contact_phone'), array('class' => 'form-control')) }}
    </div>

    <div class="form-                                                                                                                                                     group">
        {{ Form::label('contact_email', 'Email') }}
        {{ Form::text('contact_email', Input::old('contact_email'), array('class' => 'form-control')) }}
    </div>



    <div class="form-group">
        {{ Form::label('note', 'Notes') }}
        {{ Form::textarea('note', Input::old('note'), array('class' => 'form-control')) }}
    </div>
<input class="form-control" name="quote_id" type="hidden" value="{{ $quote_id }}">

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Create Quote</button>
                    </div>
                  </div>

</fieldset>
{{ Form::close() }}

  </body>
</html>
