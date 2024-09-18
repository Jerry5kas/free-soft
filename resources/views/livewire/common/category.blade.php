<div>

    @php
        $disabled = $errors->any() || empty($this->name) || empty($this->email) ? true : false;
    @endphp
    <div>Create Category</div>

    <form action="" wire:submit.prevent="save" class="space-y-4">
        <div>
            <x-jet.label for="name" value="{{ __('Name') }}"/>
            <x-jet.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                         autofocus autocomplete="username"/>
            <x-jet.input-error for="name"/>
        </div>

        <div>
            <x-jet.label for="email" value="{{ __('Email Address') }}" />
            <x-jet.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                         required autofocus autocomplete="username" />
            <x-jet.input-error for="email" />

            <x-button.primary-btn wire:target="save" wire:loading.attr="disabled" type="submit" :disabled="$disabled" >
                {{ __('Create') }}
            </x-button.primary-btn>

        </div>
    </form>
</div>
