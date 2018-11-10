<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MEduline</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/news.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </head>

    <body>
        <div class="super-container">

            <div class="home">
                <div class="home-background-container prlx-parent">
                    <div class="home-background prlx" style="background-image:url(images/news_background.jpg)"></div>
                </div>
                <div class="home-content">
                    <h1>Hírek/Események</h1>
                </div>
            </div>

            <div class="create-post">
            {!! Form::open(['url' => 'foo/bar']) !!}
                {{Form::label('title', 'Title: ')}}
                {{Form::text('title', null, array('class'=>'form-control'))}}

                {{Form::label('body','Post Body: ')}}
                {{Forum::textarea('body',null,array('class'=>'form-control'))}}

                {{Forum::submit('Create Post', array('class'=>'btn btn-success btn-lg btn'))}}
            {!! Form::close() !!}
            </div>

        </div>
    </body>