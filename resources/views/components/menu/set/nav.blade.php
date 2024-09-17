<div class="inline-flex gap-2 items-center">
                <button @click="sidebarOpen = !sidebarOpen"
                    :class="{ 'hover:bg-cyan-700': !sidebarOpen, 'hover:bg-cyan-800': sidebarOpen,}"
                    class=" transition-all duration-300 w-8 p-1 mx-3 my-2 rounded-full focus:outline-none ">
                    <svg viewBox="0 0 20 20" class="w-6 h-6 fill-current hover:text-white"
                        :class="{ 'text-gray-600': !sidebarOpen, 'text-white': sidebarOpen }">
                        <path x-show="!sidebarOpen" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="sidebarOpen" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="flex items-center gap-x-6">
{{--                    <div class="font-bold text-gray-600">--}}
{{--                        <img src="../../../../images/logo.png" alt="" class="w-auto h-1">--}}
{{--                    </div>--}}
{{--                    <a class="font-bold text-gray-600" href="{{route('home')}}">Home</a>--}}
                    <a class="font-bold text-gray-600" href="#">Home</a>
                    <a class="font-bold text-gray-600" href="{{route('dashboard')}}">Dashboard</a>
                </div>
            </div>
