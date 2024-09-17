<div>
    <!-- modal div -->
    <x-forms.m-panel-empty label="Tags">
        <x-modal.form>
            {{$name}}
            <div class="w-full flex items-center justify-between">
                <div class="w-1/3">
                    <x-table.caption caption="Tags">
                        {{$lists->count()}}
                    </x-table.caption>
                </div>
                <div class="inline-flex items-center gap-2 text-sm tracking-wider font-semibold">
                    <input type="checkbox" wire:model.live="active"
                           class="rounded-sm text-cyan-600 focus:ring-cyan-600 border-2 border-cyan-600 transition-all duration-300 ease-out">
                    <label for="">Active Only?</label>
                </div>
            </div>

            <!-- Table Header --------------------------------------------------------------------------------------------->
            <x-table.form>
                <x-slot:table_header name="table_header" class="bg-green-100">

                    <x-table.header-serial width="20%"/>

                    <x-table.header-text sortIcon="{{$this->sortAsc}}">Tag Name
                    </x-table.header-text>
                    @if (!$active)
                        <x-table.header-text sortIcon="{{$this->sortAsc}}">Status
                        </x-table.header-text>
                    @endif
                    <x-table.header-action/>

                </x-slot:table_header>

                <!-- Table Body ------------------------------------------------------------------------------------------->

                <x-slot:table_body name="table_body">
                    @forelse($lists as $index => $row)
                        <x-table.row>
                            <x-table.cell-text> {{ $index + 1 }} </x-table.cell-text>
                            <x-table.cell-text> {{ $row->name }} </x-table.cell-text>
                            @if (!$active)
                                <x-table.cell-text> {{ $row->active_id ? 'Active' : 'Not active' }} </x-table.cell-text>
                            @endif
                            <x-table.cell-action id="{{$row->id}}"/>
                        </x-table.row>

                    @empty
                        <x-table.cell-empty/>
                    @endforelse
                </x-slot:table_body>
            </x-table.form>
            <div>{{ $lists->links() }}</div>

            <!-- Create Modal -->
            <x-modal.dialog label="Tag">
                <x-input.floating label="Name" wire:model.live="name"/>
                @error('name')
                <span class="text-red-500">{{  $message }}</span>
                @enderror
            </x-modal.dialog>
        </x-modal.form>
    </x-forms.m-panel-empty>
</div>
