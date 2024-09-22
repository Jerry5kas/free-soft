@props([
    'label' => null,
])
<div class="absolute top-0 left-0 flex items-center justify-center w-full h-full bg-gray-600/75 " x-show="open">

    <!-- A basic modal dialog with title, body and one button to close -->
    <div class="absolute top-24 h-auto p-4 mx-2 text-left bg-white rounded shadow-xl w-[600px] space-y-4 "
        @click.away="open = false">
        <div class="space-y-4">
            <h3 class="text-lg font-medium leading-6 text-gray-900">
                {{ $label }}
            </h3>
            <div class="space-y-4">

                {{ $slot }}
            </div>
        </div>

        <!-- One big close button.  --->
        <div class="flex justify-between w-full rounded-md shadow-sm">
            <div class="inline-flex items-center w-1/2 gap-2 px-1 text-sm font-semibold tracking-wider">

                @if ($this->active_id)
                    <input type="checkbox" checked wire:model.live="active_id"
                        class="transition-all duration-300 ease-out border-2 rounded-sm text-cyan-600 focus:ring-cyan-600 border-cyan-600">
                    <label for="">Active</label>
                @else
                    <input type="checkbox" wire:model.live="active_id"
                        class="transition-all duration-300 ease-out border-2 rounded-sm text-cyan-600 focus:ring-cyan-600 border-cyan-600">
                    <label for="">Active</label>
                @endif
            </div>
            <div class="flex justify-end w-1/2 gap-x-3">
                <x-button.back-x @click="open = false" />
                <x-button.save-x @click="setTimeout(() => { open = false; }, 500)" wire:click="getSave()" />
            </div>
        </div>

    </div>
</div>
