<x-layouts.test>
    <div class="container">
        <x-upload_image />
    </div>
    {{-- @isset(session('data'))
    @endisset --}}
    {{ session('data') }}
</x-layouts.test>
