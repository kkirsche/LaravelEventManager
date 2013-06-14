@extends('main')

@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
            <h2>Login</h2>
            <form action="{{ URL::to('/login') }}" method="POST">
                <fieldset>
                    <label>Username:</label>
                    <input type="text" name="username" class="span6" placeholder="Username" />
                    <label>Password:</label>
                    <input type="password" name="password" class="span6" placeholder="Password">
                    <p><a href="{{ URL::to('/registerUser') }}" title="Create An Account">Create An Account</a></p>
                    <button class="btn btn-primary" type="submit">Sign in</button>
                </fieldset>
            </form>
            </div>
        </div>
    </div>
@stop