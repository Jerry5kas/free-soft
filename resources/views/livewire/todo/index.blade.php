<div>
    <div id="content" class="mx-auto space-y-5 bg-white" style="max-width:500px;">
        <x-lwire.todos.create/>
        <x-lwire.todos.search/>

        <x-lwire.todos.list :list="$todo" :e-id="$eId" />
    </div>
    <div class="w-6/12 mx-auto">
        {{$todo->links()}}
    </div>
</div>

