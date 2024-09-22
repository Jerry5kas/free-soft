<div class="fixed top-0 left-0 z-0 flex items-center justify-center w-full h-full in5set-0 bg-gray-600/75"
    x-show="modelDelete" x-cloak>
    <div class="absolute top-24 z-20 h-hull p-4 mx-2 text-left rounded shadow-xl w-[600px] space-y-4 bg-white"
        @click.away="modelDelete = false">
        <div class="flex flex-col rounded-md gap-y-3">
            <div class="inline-flex items-center p-2 gap-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-red-600">
                    <path
                        d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                    <path fill-rule="evenodd"
                        d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.133 2.845a.75.75 0 0 1 1.06 0l1.72 1.72 1.72-1.72a.75.75 0 1 1 1.06 1.06l-1.72 1.72 1.72 1.72a.75.75 0 1 1-1.06 1.06L12 15.685l-1.72 1.72a.75.75 0 1 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-xl font-bold text-red-600">Warning !</span>
            </div>
            <div class="p-2 text-lg font-semibold text-gray-600 ">
                Do you want to <b class="text-red-600">delete</b> this Permanently ?
            </div>
            <div class="flex justify-end w-full p-2 bg-gray-100 rounded-md gap-x-3">
                <x-button.cancel-x @click="modelDelete = false" />
                <x-button.danger-x {{ $attributes }} @click="setTimeout(() => { modelDelete = false; }, 500)" />
            </div>
        </div>
    </div>
</div>
