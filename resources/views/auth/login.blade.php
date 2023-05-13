@extends('layouts.app')

@section('content') 
    {{-- <div class="text">
    <img src="{{Asset('web logo.png')}}" alt="">
    </div> --}}
    
    <div class="container"> 
        <header>Login</header> 
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input">
                <input id="email" type="email" class="input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <label for="email" class="input_label">{{ __('Email Address') }}</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror            
            </div>

            <div class=" input">
                <input id="password" type="password" class="input_field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <label for="password" class="input_label">{{ __('Password') }}</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="remember">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

            <div class="row mb-0">
                <div class="button">
                    <button type="submit" class="card_button">
                        {{ __('Login') }}
                    </button>
            </div>
        </form>
    </div>
  </div>

</div>
@endsection
