@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Reset Password</h3>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">E-Mail:</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror'" name="email"
                value="{{ old('email') }}" required autocomplete="email">

            @error('error')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-block btn-primary">Send Password Reset Link</button>
    </form>
</div>
@endsection