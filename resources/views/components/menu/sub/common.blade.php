<!--  6 - Common -->
<li class="flex flex-col cursor-pointer align-center ">

    <div @click="selected !== 6 ? selected = 6 : selected = null"
        class="relative flex flex-row items-center justify-between h-16 px-4 text-gray-700 focus:outline-none hover:bg-violet-500 hover:text-white group">
        <span class="inline-flex items-center justify-center space-x-3">
            <x-icons.icon-fill iconfill="tag-menu" class="block w-4 h-auto fill-gray-500 group-hover:fill-white" />
            <span class="flex my-4 font-sans text-sm font-semibold tracking-wide uppercase truncate">
                Common
            </span>
        </span>
        <span class="inline-flex items-center justify-center">
            <svg fill="currentColor" viewBox="0 0 20 20"
                :class="{ 'rotate-0': selected == null, 'rotate-180': selected === 6 }"
                class="inline float-right w-6 h-6 transition-transform duration-500 transform md:-mt-1">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg></span>


    </div>

    <div x-show="selected === 6" class="flex flex-col">

        <ul class="grid-cols-1 grid bg-white space-y-0.5">
            <x-menu.items.common-menu  />
        </ul>
    </div>
</li>
