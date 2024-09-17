@props([
    'id'=>null,
])
<td class="w-12">
    <div class="flex justify-center items-center gap-4">
        {{-- <x-button.edit wire:click="edit({{$id}})"/> --}}
        <div class="mt-1">
            <x-button.edit wire:click="getEdit({{$id}})" @click="open = true"/>
        </div>

        <div class="mt-1" x-cloak x-data="{ modelDelete : false }">
            <x-button.delete @click="modelDelete = true"/>
            <x-modal.delete wire:click="getDelete({{$id}})" />
        </div>
    </div>
</td>
