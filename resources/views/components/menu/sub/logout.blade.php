{{-- logout --}}
<li {{ $attributes->class([
    'bottom-0 left-0 bg-white cursor-pointer
',
]) }}>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
            class="relative flex flex-row items-center h-16 px-4 space-x-2 text-gray-500 focus:outline-none hover:bg-violet-500 hover:text-gray-200 hover:border-red-500">
            <span class="inline-flex items-center justify-center text-red-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                </svg>
            </span>
            <span class="font-sans text-sm font-semibold tracking-wide truncate ">
                {{ __('Log Out') }}
            </span>
        </a>
    </form>
</li>
