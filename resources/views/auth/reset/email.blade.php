@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
    <div class="logo-reset">
        <img src="{{ asset('images/wnn3.png') }}" alt="Winn Jobs Logo" height="50" width="180">    
    </div>
    <div class="Reset-container">
        <div class="form-reset">
            <div class="header-reset">
                <h2>Lupa Password</h2>
            </div>
            <div style="margin-bottom: 20px">Masukkan email untuk reset password</div>
            <div>
                <label for="email">Alamat Email</label>
                <input type="email" id="email">
            </div>
            <button style="margin-top: 10px" onclick="location.href='/verify'" class="btn btn-primary">Reset</button>
        </div>
    </div>

@endsection