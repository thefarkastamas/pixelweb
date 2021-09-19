@extends('layouts.backend.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div data-aos="zoom-in">
                <main class="form-signin">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <h1 class="h3 mb-3 fw-normal">Bejelentkezés</h1>

                        <div class="form-floating @error('email') is-invalid @enderror">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Email cím</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label for="password">Jelszó</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Jegyezzen meg!
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Bejelentkezés</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
