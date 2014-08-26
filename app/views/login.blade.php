
<!-- login.blade.php -->

      <div class="jumbotron">                                                                                                                                                   
                                                                                                                                                                                
    {{ Form::open(array('url' => 'login', 'class'>='form-horizontal')) }}                                                                                                       
        <h2>Login</h2>                                                                                                                                                          
                                                                                                                                                                                
        <!-- if there are login errors, show them here -->                                                                                                                      
        <p>                                                                                                                                                                     
                                                                                                                                                                                
        @if($errors->has())                                                                                                                                                     
            @foreach ($errors->all() as $error)                                                                                                                                 
            <div class="alert alert-danger">                                                                                                                                    
            {{ $errors->first('email') }}                                                                                                                                       
            {{ $errors->first('password') }}                                                                                                                                    
            </div>                                                                                                                                                              
            @endforeach                                                                                                                                                         
        @endif                                                                                                                                                                  
                                                                                                                                                                                
        </p>                                                                                                                                                                    
                                                                                                                                                                                
        <p>                                                                                                                                                                     
            {{ Form::label('email', 'Email Address') }}                                                                                                                         
            {{ Form::text('email', Input::old('email'), array('placeholder' => ' youremail@aprileusa.com ')) }}                                                                 
        </p>                                                                                                                                                                    
                                                                                                                                                                                
        <p>                                                                                                                                                                     
            {{ Form::label('password', 'Password') }}                                                                                                                           
            {{ Form::password('password') }}                                                                                                                                    
        </p>                                                                                                                                                                    
                                                                                                                                                                                
        <p>{{ Form::submit('Submit!') }}</p>                                                                                                                                    
                                                                                                                                                                                
        <p> <!-- LOGOUT BUTTON -->                                                                                                                                              
    <a href="{{ URL::to('logout') }}">Logout</a>                                                                                                                                
        </p>                                                                                                                                                                    
                                                                                                                                                                                
    {{ Form::close() }} 

<!-- end login.blade.php -->
