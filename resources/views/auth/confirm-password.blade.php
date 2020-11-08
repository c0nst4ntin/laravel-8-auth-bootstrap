@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Confirm Password</h3>
    <p>Please confirm your password before continuing</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror'"
                name="password" value="{{ old('password') }}" required autocomplete="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-block btn-primary">Login</button>

        <a href="{{ route('password.request') }}">Forgot Password?</a>
    </form>
</div>
@endsection