<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex space-x-4">
                <div>
                    <x-label for="name" value="{{ __('Nome') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div>
                    <x-label for="lastName" value="{{ __('Sobrenome') }}" />
                    <x-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="lastName" />
                </div>
            </div>

            <div class="mt-4 flex space-x-4">
                <div>
                    <x-label for="dateBirth" value="{{ __('Data de Nascimento') }}" />
                    <x-input id="dateBirth" class="block mt-1 w-full" type="text" name="dateBirth" :value="old('dateBirth')" required autofocus autocomplete="dateBirth" />
                </div>

                <div>
                    <x-label for="phone" value="{{ __('Telefone') }}" />
                    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4 flex space-x-4">
                <div>
                    <x-label for="password" value="{{ __('Senha') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="text" name="password" :value="old('password')" required autofocus autocomplete="password" />
                </div>

                <div>
                    <x-label for="passwordConfirmation" value="{{ __('Confimar Senha') }}" />
                    <x-input id="passwordConfirmation" class="block mt-1 w-full" type="text" name="passwordConfirmation" :value="old('passwordConfirmation')" required autofocus autocomplete="passwordConfirmation" />
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Ja possuo uma conta') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
