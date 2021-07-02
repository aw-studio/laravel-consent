<div
    id="laravel-consent-wrapper-{{ $id }}"
    data-wrapper="{{ $id }}"
    class="{{ $attributes['class'] }}"
>
    @include('laravel-consent::script-before')
    {{ $slot }}
    @include('laravel-consent::script-after')

    <div>
        <button
            onclick="saveLaravelConsent('{{ $id }}')" 
            class="{{ $attributes['button-class'] }}"
        >
            {{ $save ?: 'Save' }}
        </button>
    </div>
</div>


