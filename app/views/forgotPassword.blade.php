@extends('main')

@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
            <h2>Forgot Password</h2>
            <form action="{{ URL::to('/forgotPassword') }}" method="POST">
                <fieldset>
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', '', array('class' => 'span6', 'placeholder' => 'Email (required)', 'required')) }}
                    <button class="btn btn-primary" type="submit">Send Password</button>
                </fieldset>
            </form>
            </div>
        </div>
    </div>
@stop