<div {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6']) }}>
    {{-- to surround something with component --}}
    {{ $slot }}
</div>
