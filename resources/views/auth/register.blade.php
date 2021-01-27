@extends('layouts.app')

@section('content')

<div>{{ __('Register') }}</div>

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="formularz">
        <label for="name">{{ __('Login') }}</label>
        <input id="name" type="text" class="@error('name') is-invalid @enderror" placeholder="Login" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="email">{{ __('Mail') }}</label>
        <input id="email" type="email" placeholder="Mail" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="password">{{ __('Hasło') }}</label>
        <input id="password" type="password" placeholder="Hasło" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="password-confirm"">{{ __('Powtórz hasło') }}</label>
        <input id=" password-confirm" type="password" placeholder="Powtórz hasło" name="password_confirmation" required autocomplete="new-password">
            <div class="checkbox">
                <input type="checkbox" id="labelCheckbox" required />
                <label for="labelCheckbox">Nie znam regulaminu</label>
            </div>
            <button class="przycisk-formularz" type="submit">
                {{ __('Zarejestruj') }}
            </button>
    </div>
</form>
</div>
@endsection