<div class="flex-grow md:block md:overflow-y-auto overflow-x-hidden bg-white"
    :class="{ 'opacity-1': sidebarOpen, 'opacity-0': !sidebarOpen }">
    {{-- <a class="flex justify-start items-center px-4 py-3 text-black font-bold hover:bg-gray-800 hover:text-white focus:bg-gray-800 focus:outline-none focus:ring"
        wire:navigate >
        <x-icons.swatch />
        <span class="mx-4">Dashboard</span>
    </a> --}}

    <x-menu.items.menu label="Common">
        <x-menu.items.sub label="Tags" href="{{route('tags')}}" />
        <x-menu.items.sub label="Category" href="{{route('categories')}}" />
    </x-menu.items.menu>
    <x-menu.items.menu label="Tasks">
        <x-menu.items.sub label="Todos" href="{{ route('todos') }}" />
    </x-menu.items.menu>

</div>
