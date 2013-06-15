@extends('main')

@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
            <h2>Login</h2>
            @if (Session::has('error'))
                <div class="alert alert-error">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Oops!</strong> {{ trans(Session::get('reason')) }}
                </div>
            {{ Session::flush() }}
            @endif
            <form action="{{ URL::to('/login') }}" method="POST">
                <fieldset>
                    <label><i class="icon-user"></i> Username:</label>
                    <input type="text" name="username" class="span6" placeholder="Username" />
                    <label><i class="icon-key"></i> Password:</label>
                    <input type="password" name="password" class="span6" placeholder="Password">
                    <p><a href="{{ URL::to('/registerUser') }}" title="Create An Account">Create An Account</a> | <a href="{{ URL::to('/forgotPassword') }}" title="Create An Account">Forgot Your Password?</a></p>
                    <button class="btn btn-primary" type="submit">Sign in <i class="icon-signin"></i></button>
                </fieldset>
            </form>
            </div>
        </div>
    </div>
@stop