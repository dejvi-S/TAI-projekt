@extends('layouts.app')

@section('content')

<div>{{ __('Login') }}</div>
<form method="POST" action="{{ route('login') }}">
    <div class="formularz">
        @csrf
        <label for="email"">{{ __('Mail') }}</label>

            <input id=" email" type="email" placeholder="Mail" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="password">{{ __('Hasło') }}</label>

            <input id="password" type="password" placeholder="Haslo" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </br>
            <button class="przycisk-formularz" type="submit">
                {{ __('Zaloguj') }}
            </button>
            <br />

    </div>
</form>


@endsection