<x-guest-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="col-md-8" />

        <form method="POST" action="{{ route('register') }}" class="form-group row">
            @csrf
            <div class="row col-md-12 py-2">
                <div class="col-md-6">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="col-md-6">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                </div>
            </div>
            <br>
            <div class="row col-md-12 py-2">
                <div class="col-md-6">
                    <x-jet-label for="mobile" value="{{ __('Mobile') }}" />
                    <x-jet-input id="mobile" class="form-control" type="text" name="mobile" :value="old('mobile')" required />
                </div>
                <div class="col-md-6">
                    <x-jet-label for="Role" value="{{ __('Role') }}" />
                    <select name ="role" class="form-control" required>
                        <option value="--select the value--">--Select the value--</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div>
            </div>
            <div class="row col-md-12 py-2">
                <div class="col-md-6">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="col-md-6">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
