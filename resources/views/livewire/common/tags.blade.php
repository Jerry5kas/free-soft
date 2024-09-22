<div>
    <x-slot name="header">Tags</x-slot>
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
