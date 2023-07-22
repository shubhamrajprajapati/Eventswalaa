@section('title')Reset Password - Events walaa @endsection
@section('keywords')Reset Password - Events walaa @endsection
@section('description')Reset Password - Events walaa @endsection

<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
        </x-slot>

        <x-validation-errors class="mb-4" />
        <div class="mb-4"></div>
        <div class="mb-4"></div>
        <div class="mb-4"></div>
        <div class="mb-4"></div>
        <div class="mb-4"></div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
                @if (Route::has('password.request'))
                    <a class="ml-4 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

               
            </div>

            {{-- Login with Facebook --}}
            <div class="row">
                <div class="col-lg-6 mt-4">
                    <a  href="{{ url('auth/facebook') }}"  id="btn-fblogin">
                        {{-- <i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook --}}
                        <img class="mx-auto d-block img-fluid" src="{{ asset('assets/images/facebook.png') }}" alt="Facebook">
                    </a>
                    
                </div>
    
                <div class="col-lg-6 mt-4 ">
                    <a href="{{ route('auth.google') }}">
                        <img class="mx-auto d-block img-fluid" src="{{ asset('assets/images/google.png') }}" alt="Google">
                    </a>
                </div>
            </div>
          
        </form>
    </x-authentication-card>
</x-guest-layout>
