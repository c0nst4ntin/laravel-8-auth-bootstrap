@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Verify Your E-Mail Address</h3>

    <p>
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we
        just emailed to you? If you didn\'t receive the email, we will gladly send you another.
    </p>

    @if (session('status') == 'verification-link-sent')
    <div class="alert alert-success" role="alert">
        A fresh verficiation link has been sent to your email address.
    </div>
    @endif
    Before proceeding, please check your email for a verification link.
    If you did not receive the email
    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">click here to request another</button>.
    </form>
</div>
@endsection