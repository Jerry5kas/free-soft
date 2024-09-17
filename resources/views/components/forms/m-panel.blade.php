@props([
    'margin' => '',
    'label' => '',
])
<div class="w-full min-h-svh border-t-[1px] border-blue-500 rounded-md shadow-lg {{ $margin }}">
    <div class="w-full py-3 px-5 font-semibold text-lg border-t border-l border-r border-blue-500 rounded-t-md">
        {{ $label }}</div>
    <div {{ $attributes->merge(['class' => 'min-h-svh p-5 bg-white space-y-4 rounded-b-md border border-gray-400']) }}>
        {{ $slot }}
    </div>
</div>


