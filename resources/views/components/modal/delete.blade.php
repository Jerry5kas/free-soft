<div class="absolute top-0 left-0 flex items-center justify-center w-full h-full bg-gray-600/40 "
     x-show="modelDelete">
    <div
        class="absolute top-24 h-auto p-4 mx-2 text-left rounded shadow-xl w-[600px] space-y-4 bg-violet-50"
        @click.away="modelDelete = false">
        <div class="flex-col flex gap-y-3  rounded-md">
            <div class="inline-flex items-center gap-x-4 border-b-2 border-red-600 p-2 py-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="size-6 fill-red-600">
                    <path
                        d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z"/>
                    <path fill-rule="evenodd"
                          d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.133 2.845a.75.75 0 0 1 1.06 0l1.72 1.72 1.72-1.72a.75.75 0 1 1 1.06 1.06l-1.72 1.72 1.72 1.72a.75.75 0 1 1-1.06 1.06L12 15.685l-1.72 1.72a.75.75 0 1 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                          clip-rule="evenodd"/>
                </svg>
                <span class="text-red-600 font-bold text-xl">Warning !</span>
            </div>
            <div class=" p-2 text-lg text-gray-600 font-semibold">
                Do you want to <b class="text-red-600">delete</b> this Permanently ?
            </div>
            <div class="w-full flex justify-end p-2 gap-x-3 ">
                <x-button.cancel-x @click="modelDelete = false"/>
                <x-button.danger-x {{$attributes}} />
            </div>
        </div>
    </div>
</div>
