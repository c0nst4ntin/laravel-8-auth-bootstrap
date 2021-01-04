@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Reset Password</h3>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ request('token') }}">

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
                name="password" required autocomplete="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" id="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror'" name="password_confirmation"
                required autocomplete="password_confirmation">

            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <button type="submit" class="btn btn-block btn-primary">Reset Password</button>
    </form>
</div>
@endsection