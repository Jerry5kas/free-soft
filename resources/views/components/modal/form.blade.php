@props([
    'list' => null,
])
<div x-cloak x-data="{ open: false }">

    <div class="space-y-4 ">
        <div class="flex items-center justify-between w-full">
            <div class="w-2/3">
                <x-input.search-bar label="Search" wire:model.live="search" />
            </div>
            <div class="inline-flex items-center gap-2 text-sm font-semibold tracking-wider">
                <x-button.new-x @click="open = true" />
            </div>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="w-1/3">
                <x-table.caption caption="Tags">
                    {{ $list }}
                </x-table.caption>
            </div>
            <div class="inline-flex items-center gap-2 text-sm font-semibold tracking-wider">
                @if ($this->active)
                    <input type="checkbox" wire:model.live="active" checked
                        class="transition-all duration-300 ease-out border-2 rounded-sm text-cyan-600 focus:ring-cyan-600 border-cyan-600">
                    <label for="">Active Only?</label>
                @else
                    <input type="checkbox" wire:model.live="active"
                        class="transition-all duration-300 ease-out border-2 rounded-sm text-cyan-600 focus:ring-cyan-600 border-cyan-600">
                    <label for="">Active Only?</label>
                @endif
            </div>
        </div>
    </div>
    {{ $slot }}

</div>
