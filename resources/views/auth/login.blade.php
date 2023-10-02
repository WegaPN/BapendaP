@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold mb-6">{{ __('Login') }}</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-input mt-1 block w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="text-red-500 mt-2 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-input mt-1 block w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="text-red-500 mt-2 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-6 flex items-center">
                    <input class="mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="text-gray-700" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="ml-4 text-gray-600" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
