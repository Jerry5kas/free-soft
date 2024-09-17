<div class="container content py-6 mx-auto bg-gray-50 rounded-md p-1">
    <div class="mx-auto">
        <div id="create-form" class="hover:shadow p-6 bg-white border-blue-500 border-t-2 rounded-md">
            <div class="flex ">
                <h2 class="font-semibold text-lg text-gray-800 mb-5">Create New Todo</h2>
            </div>
            <div>
                <form>
                    <div class="mb-6">
                        <x-input.floating wire:model.live="name" label="Todo"/>
                        @error('name')
                        <span class="text-red-500 text-xs mt-3 block ">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="flex-col flex gap-y-2 ">
                        <div class="w-full flex justify-end">
                        <x-button.new-x  class="" wire:click.prevent="create" />
                        </div>
                        @if(session('success'))
                            <span class="self-end max-w-max text-green-500 text-xs bg-green-100 px-2 py-1 text-center">{{ session('success') }}</span>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
