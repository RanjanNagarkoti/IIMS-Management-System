@extends('layouts.auth')
@section('content')
    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form class="user" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" placeholder="Full Name" name="name"
                        :value="old('name')" required autofocus>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address"
                        name="email" :value="old('email')" required>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password"
                            name="password" required autocomplete="new-password">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="password_confirmation"
                            placeholder="Repeat Password" name="password_confirmation" required>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="/forgot-password">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="/login">Already have an account? Login!</a>
            </div>
        </div>
    </div>
@endsection

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
