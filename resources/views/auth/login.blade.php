@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">E-Mail:</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror'" name="email"
                value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

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