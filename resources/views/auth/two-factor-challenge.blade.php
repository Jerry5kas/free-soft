<x-jet.guest-layout>
    <x-jet.authentication-card>
        <x-slot name="logo">
            <x-jet.authentication-card-logo />
        </x-slot>

        <div x-jet.data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-jet.show="! recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-jet.cloak x-jet.show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

            <x-jet.validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4" x-jet.show="! recovery">
                    <x-jet.label for="code" value="{{ __('Code') }}" />
                    <x-jet.input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-jet.ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-jet.cloak x-jet.show="recovery">
                    <x-jet.label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-jet.input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-jet.ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-jet.show="! recovery"
                                    x-jet.on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-jet.cloak
                                    x-jet.show="recovery"
                                    x-jet.on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Use an authentication code') }}
                    </button>

                    <x-jet.button class="ms-4">
                        {{ __('Log in') }}
                    </x-jet.button>
                </div>
            </form>
        </div>
    </x-jet.authentication-card>
</x-jet.guest-layout>
