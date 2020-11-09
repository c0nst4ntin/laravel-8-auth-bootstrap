@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Account</h3>

    <div>
        <h5>Edit Account Information</h5>

        <form method="POST" action="{{ route('user-profile-information.update') }}">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror'" name="name"
                    value="{{ old('name') ?? Auth::user()->name }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror'" name="email"
                    value="{{ old('email') ?? Auth::user()->email }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </form>
        <hr>
    </div>

    <div>
        <h5>Edit Account Password</h5>

        <form method="POST" action="{{ route('user-password.update') }}">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="current_password">Current Password:</label>
                <input type="password" id="current_password"
                    class="form-control @error('current_password') is-invalid @enderror'" name="current_password"
                    required autocomplete="current_password">

                @error('current_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="password">New Password:</label>
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
                    class="form-control @error('password_confirmation') is-invalid @enderror'"
                    name="password_confirmation" required autocomplete="password_confirmation">

                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </form>
        <hr>
    </div>


</div>
@endsection