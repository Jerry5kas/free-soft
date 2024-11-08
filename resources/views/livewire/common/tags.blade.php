<div>
    <x-slot name="header">Tags</x-slot>

    {{-- @if (session()->has('message'))
        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
            </svg>
            <p>{{ session('message') }}</p>
        </div>
    @endif --}}

{{--    @endif--}}

    <!-- modal div -->
    <x-forms.m-panel-empty label="Tags">
        <x-modal.form :list="$lists->count()">
            {{-- <x-button.primary-btn wire:click="open">open</x-button.primary-btn> --}}
            <!-- Table Header --------------------------------------------------------------------------------------------->
            <x-table.form>
                <x-slot:table_header name="table_header" class="bg-green-100">

                    <x-table.header-serial />

                    <x-table.header-text sortIcon="{{ $this->sortAsc }}" left>Tag Name
                    </x-table.header-text>
                    @if (!$active)
                        <x-table.header-text sortIcon="{{ $this->sortAsc }}" width="8%">Status
                        </x-table.header-text>
                    @endif
                    <x-table.header-action />
                </x-slot:table_header>

                <!-- Table Body ------------------------------------------------------------------------------------------->

                <x-slot:table_body name="table_body">
                    @forelse($lists as $index => $row)
                        <x-table.row>
                            <x-table.cell-text> {{ $index + 1 }} </x-table.cell-text>
                            <x-table.cell-text left> {{ $row->name }} </x-table.cell-text>
                            @if (!$active)
                                <x-table.cell-text class="flex items-center justify-center">
                                    @if ($row->active_id)
                                        <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                                    @else
                                        <div class="w-4 h-4 bg-red-500 rounded-full"></div>
                                    @endif
                                </x-table.cell-text>
                            @endif
                            <x-table.cell-action id="{{ $row->id }}" />
                        </x-table.row>
                    @empty
                        <x-table.cell-empty />
                    @endforelse
                </x-slot:table_body>
            </x-table.form>
            <div>{{ $lists->links() }}</div>

            <!-- Create Modal -->
            <x-modal.createDialog label="Tag">
                <x-input.floating label="Name" wire:model.live="name" />
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </x-modal.createDialog>
        </x-modal.form>
    </x-forms.m-panel-empty>

    {{-- <x-jet.modal wire:model.deffer="openModal">test</x-jet.modal> --}}
    {{--    @if ($openModal == true) --}}
    {{--    @endif --}}
</div>
