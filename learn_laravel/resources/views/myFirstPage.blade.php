<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
                <div class="top-right links">
                   
                        <a href="{{ url('/home') }}">Home</a>

                 
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                  
                </div>
           
<?php /*echo '<pre>';print_r($expense);*/ ?>
            <div class="content">
                <div class="title m-b-md">
              {{ asset('img/photo.jpg') }}
                   {{ Form::open(array('url' => '/firstFunction/create','files'=>true)) }}
                
                <table align="center">
                    <?php 
                    echo '<tr><td>Email</td><td>'.Form::text('username').'</td></tr>';
                    echo '<tr><td>Password</td><td>'.Form::password('password').'</td></tr>';
                    echo '<tr><td>Hobby</td><td>'.Form::checkbox('hobby[]', 'play');
                    echo    Form::checkbox('hobby[]', 'read').'</td></tr>';
                    echo '<tr><td>Gender</td><td>'.Form::radio('gender', 'male');
                    echo Form::radio('gender', 'female').'</td></tr>';
                    echo '<tr><td>Technology</td><td>'.Form::select('technology', array('php' => 'PHP', 'Python' => 'Python', 'Java' => 'Java'), 'php').'</td></tr>';
                    echo '<tr><td>Image</td><td>'.Form::file('image').'</td></tr>';
                    echo '<tr><td colspan=2>'.Form::submit('Click Me!').'</td></tr>';
                     ?>
                     </table>
                    {{ Form::close() }}
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
