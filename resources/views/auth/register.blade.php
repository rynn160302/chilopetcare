{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control input-custom" value="{{ old('name') }}"
                id="name" placeholder="Enter your name" required autofocus autocomplete="name" />
            <label for="name" class="label-custom">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{old('email')}}" class="form-control input-custom" id="email" placeholder="name@example.com" required/>
            <label for="email" class="label-custom">Email</label>
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control input-custom" id="password" placeholder="Password" required/>
            <label for="password" class="label-custom">Password</label>
        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <div class="form-floating">
            <input type="password" name="password_confirmation" class="form-control input-custom" id="confirm_password" placeholder="Confirm Password" required/>
            <label for="confirm_password" class="label-custom">Confirm Password</label>
        </div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <div class="d-grid mt-5">
            <button class="btn btn-primary rounded-pill btn-lg">Register</button>
        </div>
        <div class="text-center mt-3">
            <span>Sudah punya akun?
                <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                disini.</span>
        </div>
    </form>
</x-guest-layout>
