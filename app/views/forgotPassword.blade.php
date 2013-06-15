@extends('main')

@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
            <h2>Forgot Password</h2>
            @if (Session::has('error'))
                <div class="alert alert-error">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Oops!</strong> {{ trans(Session::get('reason')) }}
                </div>
                {{ Session::flush() }}
            @elseif (Session::has('success'))
                <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Yay!</strong> An e-mail with the password reset has been sent.
                </div>
            @endif
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