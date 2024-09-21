@props([
    'list' =>  null
])
<div class=" space-y-4" x-cloak x-data="{ open: false }">

    <div class="w-full flex items-center justify-between">
        <div class="w-2/3">
            <x-input.search-bar label="Search" wire:model.live="search"/>
        </div>
        <div class="inline-flex items-center gap-2 text-sm tracking-wider font-semibold">
            <x-button.new-x @click="open = true" />
        </div>
    </div>

    <div class="w-full flex items-center justify-between">
        <div class="w-1/3">
            <x-table.caption caption="Tags">
                {{ $list }}
            </x-table.caption>
        </div>
        <div class="inline-flex items-center gap-2 text-sm tracking-wider font-semibold">
            @if($this->active)
                <input type="checkbox" wire:model.live="active" checked
                       class="rounded-sm text-cyan-600 focus:ring-cyan-600 border-2 border-cyan-600 transition-all duration-300 ease-out">
                <label for="">Active Only?</label>
            @else
                <input type="checkbox" wire:model.live="active"
                       class="rounded-sm text-cyan-600 focus:ring-cyan-600 border-2 border-cyan-600 transition-all duration-300 ease-out">
                <label for="">Active Only?</label>
            @endif
        </div>
    </div>

    {{ $slot }}

</div>
