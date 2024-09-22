<div class="bg-[#F8F8FF]">
    <x-slot name="header">Dashboard</x-slot>
    <div class="flex flex-col gap-10 p-2 tracking-wider">
        <!-- Col 1 -->
        <div class=" bg-[#F8F8FF] gap-10 flex sm:flex-row flex-col tracking-wider rounded-lg">
            <x-web.dashboard.greetings />
            <x-web.dashboard.sales />
            <x-web.dashboard.cards />
        </div>
        <!-- Col 2 -->
        <div class=" bg-[#F8F8FF] gap-10 flex sm:flex-row flex-col tracking-wider rounded-lg ">
            <x-web.dashboard.customer />
            <x-web.dashboard.entries />
            <x-web.dashboard.statistics />
        </div>
    </div>
</div>
