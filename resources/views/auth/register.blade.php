<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-4 h-4" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h3 class="text-xl font-bold">Dane Konta</h3>
            <hr class="pb-3"/>
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Login')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Hasło')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Potwierdź Hasło')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <h3 class="text-xl pt-5 font-bold">Dane Użytkownika</h3>
            <hr class="pb-3"/>

            <!-- Firstname -->
            <div class="mt-4">
                <x-label for="first_name" :value="__('Imię')" />

                <x-input id="first_name" class="block mt-1 w-full"
                                type="text"
                                name="first_name" required />
            </div>

            <!-- Secondname -->
            <div class="mt-4">
                <x-label for="second_name" :value="__('Nazwisko')" />

                <x-input id="second_name" class="block mt-1 w-full"
                                type="text"
                                name="second_name" required />
            </div>

             <!-- Phone Number -->
             <div class="mt-4">
                <x-label for="phone_number" :value="__('Telefon')" />

                <x-input id="phone_number" class="block mt-1 w-full"
                                type="text"
                                name="phone_number" required />
            </div>

             <!-- Company Name -->
             <div class="mt-4">
                <x-label for="company_name" :value="__('Nazwa Firmy (opcjonalne)')" />

                <x-input id="company_name" class="block mt-1 w-full"
                                type="text"
                                name="company_name"  />
            </div>

             <!-- NIP -->
             <div class="mt-4">
                <x-label for="nip" :value="__('NIP (opcjonalne)')" />

                <x-input id="nip" class="block mt-1 w-full"
                                type="text"
                                name="nip"  />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Masz już konto?') }}
                </a>

                <x-button class="ml-4 bg-gradient-to-r from-mylogo to-mylogo">
                    {{ __('Zarejestruj') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
