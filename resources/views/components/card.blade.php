<div {{ $attributes->merge(['class' => 'card']) }}>
    @if (isset($title) || isset($button))
        <div class="card-header row align-middle align-items-center justify-center justify-content-between">
            @isset($title)
                <span class="fw-bolder col-auto">{{ $title }}</span>
            @endisset
            @isset($button)
                <a class="button btn btn-sm shadow-none btn-success col-auto"
                    @isset($route) href="{{ route($route) }}" @endisset>{{ $button }} </a>
            @endisset
        </div>
    @endif
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
