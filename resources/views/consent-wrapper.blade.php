<div
    id="laravel-consent-wrapper-{{ $id }}"
    data-wrapper="{{ $id }}"
    {{ $attributes->merge(['class' => '']) }}
>
    @include('laravel-consent::script-before')
    {{ $slot }}
    @include('laravel-consent::script-after')

    <div>
        <button onclick="saveLaravelConsent('{{ $id }}')">
            Save
        </button>
    </div>
</div>


