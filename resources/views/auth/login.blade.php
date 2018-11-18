@extends('main')

@section('title', '| Login')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!!Form::open()!!}

                {{Form::label('email', 'Email:')}}
                {{Form::email('email',null, ['class' => 'form-control'])}}

                {{Form::label('password', 'Jelszó: ')}}
                {{Form::password('password',null, ['class' => 'form-control'])}}

                <br>
                {{Form::checkbox('remember')}}{{ Form::label('remember', "Jegyezzen meg")}}
                <br>

                {{Form::submit('Login', ['class'=>'btn btn-primary'])}}

            {!!Form::close()!!}
        </div>
    </div>

@endsection