<div x-cloak x-data="sidebar()" class="relative flex items-start " @click.away="sidebarOpen = false">
    <div class="fixed bg-white top-0 z-30 transition-all duration-300 w-full h-16 shadow shadow-gray-300">
        <div class="w-full h-full inline-flex justify-between">
            <x-menu.set.nav/>
            <x-menu.set.user/>
        </div>
    </div>

    <div x-cloak wire:ignore :class="{ 'w-56': sidebarOpen, 'w-0': !sidebarOpen }"
         class="z-40 inset-0 fixed top-0 bottom-0 left-0 block w-56 h-full min-h-screen overflow-y-auto bg-white backdrop:bg-gray-600/50
         text-gray-400 transition-all duration-300 ease-in-out shadow-lg overflow-x-hidden">
        <div class="flex flex-col items-stretch justify-between h-full">
            <div class="flex flex-col flex-shrink-0 w-full">
                <div class=" flex items-center justify-between px-3 py-3 text-center h-16 gap-3 bg-cyan-50">

                    <div class="font-bold inline-flex items-center gap-0.5">
                        <span>
                            <img src="../../../../images/logo.png" alt="" class="w-5 h-auto my-1 drop-shadow-2xl">
                        </span>
                        <span class="self-end text-2xl text-cyan-600">soft</span>
                    </div>
                    <button @click="sidebarOpen = false" class="hover:bg-cyan-700 hover:text-white text-gray-600 w-8 h-8 mt-4 rounded-full flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 ">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>

                    </button>
                </div>
                <nav>
                    <x-menu.items.list/>
                </nav>
            </div>
        </div>
        <script>
            function sidebar() {
                return {
                    sidebarOpen: false,
                    sidebarProductMenuOpen: false,
                    openSidebar() {
                        this.sidebarOpen = true
                    },
                    closeSidebar() {
                        this.sidebarOpen = false
                    },
                    sidebarProductMenu() {
                        if (this.sidebarProductMenuOpen === true) {
                            this.sidebarProductMenuOpen = false
                            window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                        } else {
                            this.sidebarProductMenuOpen = true
                            window.localStorage.setItem('sidebarProductMenuOpen', 'open');
                        }
                    },
                    checkSidebarProductMenu() {
                        if (window.localStorage.getItem('sidebarProductMenuOpen')) {
                            if (window.localStorage.getItem('sidebarProductMenuOpen') === 'open') {
                                this.sidebarProductMenuOpen = true
                            } else {
                                this.sidebarProductMenuOpen = false
                                window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                            }
                        }
                    },
                }
            }
        </script>
    </div>
    {{-- <div class="h-16 w-full"></div> --}}
</div>
