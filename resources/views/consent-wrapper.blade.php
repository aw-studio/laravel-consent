<div>
    @include('laravel-consent::script-before')
    {{ $slot }}
    @include('laravel-consent::script-after')

    <div>
        <button onclick="updateConsent()">
            Save
        </button>
    </div>
</div>


