@extends('main')

@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
            <h2>Register</h2>
            <form action="{{ URL::to('/registerUser') }}" method="POST">
                <fieldset>
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', '', array('class' => 'span6', 'placeholder' => 'Email (required)', 'required')) }}
                    {{ Form::label('username', 'Username:') }}
                    {{ Form::text('username', '', array('class' => 'span6', 'placeholder' => 'Username (required)', 'required')) }}
                    {{ Form::label('password', 'Password:') }}
                    <input class="span6" type="password" name="password" required="required" placeholder="Password (required)">
                    <button class="btn btn-primary" type="submit">Register</button>
                </fieldset>
            </form>
            </div>
        </div>
    </div>
@stop