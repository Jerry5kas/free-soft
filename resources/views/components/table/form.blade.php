<div x-data="{ checkAll: false }"
    class="w-full mt-5 overflow-hidden overflow-x-auto border rounded-md border-neutral-200 dark:border-neutral-700">

    <table {{ $attributes->merge(['class' => 'w-full text-left text-sm text-neutral-700 dark:text-neutral-300']) }}>

        <thead
            class="text-sm text-center border-b border-neutral-300 bg-neutral-50 text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
            <tr>
                @if (isset($table_header))
                    {{ $table_header }}
                @endif
            </tr>
        </thead>

        <tbody class="text-center divide-y divide-neutral-300 dark:divide-neutral-700">
            @if (isset($table_body))
                {{ $table_body }}
            @endif
        </tbody>
    </table>
    {{--    <div class="py-2"> --}}
    {{--        @if (isset($table_pagination)) --}}
    {{--            {{$table_pagination}} --}}
    {{--        @endif --}}
    {{--    </div> --}}
</div>
