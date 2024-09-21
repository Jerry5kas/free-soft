@props([
    'list' => null,
    'eId' => null
])
<div id="todos-list relative">
    @foreach( $list as  $row)
        <div class="todo mb-5 card px-5 py-6 bg-white col-span-1 border-t-2 border-blue-500 hover:shadow">
            <div class="flex justify-between space-x-3">

                <div class="inline-flex items-center space-x-2">
                    @if($row->completed)
                        <input wire:click="toggle({{$row->id}})" type="checkbox" class="w-3 h-3  rounded-sm text-rose-600 focus:ring-red-600 border border-rose-600
                    transition-colors duration-300 ease-out" checked>
                    @else
                        <input wire:click="toggle({{$row->id}})" type="checkbox" class="w-3 h-3 rounded-sm text-rose-600 focus:ring-red-600 border border-rose-600
                    transition-colors duration-300 ease-out">
                    @endif

                    @if ( $eId === $row->id )
                        <div class="flex-col flex">
                            <input wire:model="eName" type="text" placeholder="Todo.."
                                   class="bg-white text-gray-900 text-sm rounded block w-full p-2.5 border-none focus:ring-0"
                            >
                            @error('eName')
                            <span class="text-red-500 text-xs block">{{ $message }}</span>
                            @enderror
                        </div>
                    @else
                        <h3 class="text-lg text-semibold text-gray-800">{{$row->name}}</h3>

                    @endif

                </div>

                <div class="flex items-center space-x-2">
                    <x-button.edit wire:click="edit({{$row->id}})"/>
                    <div class="mt-1" x-cloak x-data="{ modelDelete : false }">
                        <x-button.delete @click="modelDelete = true"/>
                        <x-modal.deleteDialog wire:click="delete({{$row->id}})"/>
                    </div>
                </div>
            </div>
            <span class="text-xs text-gray-500"> {{$row->created_at->diffForHumans()}} </span>
            <div class="mt-3 text-xs text-gray-700 flex items-center gap-x-3">
                @if ( $eId === $row->id )
                    <x-button.save-x wire:click="update"/>
                    <x-button.cancel-x wire:click="cancel"/>
                @endif
            </div>
        </div>
    @endforeach
</div>
