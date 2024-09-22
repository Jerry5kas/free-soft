<div x-show="sidebarOpen" x-transition.opacity.duration.600ms @click="sidebarOpen = false"
    class="fixed inset-0 z-20 bg-black bg-opacity-30 "></div>
<nav x-cloak class="fixed inset-0 z-30 h-screen text-white duration-500 transform w-80 bg-violet-200 print:hidden"
    :class="{
        'translate-x-0 ease-in opacity-100': open === true,
        '-translate-x-full ease-out opacity-0': sidebarOpen ===
            false
    }">
    <div class="flex justify-between px-5 py-3.5">
        <a href="{{ route('dashboard') }}" class="flex gap-3">
            <span><img src="../../../images/logo.png" alt="" class="w-auto h-9"></span>
            {{-- <x-assets.logo.cxlogo :icon="'dark'" class="block w-auto h-10" /> --}}
            {{-- <span class="text-2xl font-bold tracking-widest sm:text-3xl text-violet-800">{{ config('app.name') }}</span> --}}
        </a>

        <button class="rounded-md focus:outline-none focus:bg-gray-700 hover:bg-gray-200 group"
            @click="sidebarOpen = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-7 w-7 group-hover:text-violet-600"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </div>

    <div class="h-full overflow-y-scroll text-white bg-white ">
        <ul class="flex flex-col " x-data="{ selected: null }">

            <x-menu.sub.common />
            <x-menu.sub.tasks />

            <x-menu.sub.logout />

        </ul>
    </div>
</nav>
