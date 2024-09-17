@props([
    'label' => null,
])
<div
    class="absolute top-0 left-0 flex items-center justify-center w-full h-full bg-gray-600/40 "
    x-show="open">

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
        <div class="flex w-full rounded-md shadow-sm  justify-between">
            <div class="w-1/2 inline-flex items-center gap-2 text-sm tracking-wider font-semibold px-1">
                <input type="checkbox" wire:model.live="active_id"
                       class="rounded-sm text-cyan-600 focus:ring-cyan-600 border-2 border-cyan-600 transition-all duration-300 ease-out">
                <label for="">Active</label>
            </div>
            <div class="w-1/2 justify-end flex gap-x-3">
                <x-button.back-x @click="open = false"/>
                <x-button.save-x wire:click="getSave()"/>
            </div>
        </div>

    </div>
</div>
