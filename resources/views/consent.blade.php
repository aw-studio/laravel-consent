<div>
    {{ $slot }}

    <input
        type="checkbox"
        onclick="toggleConsent('{{ $id }}')"
        id="consent-{{ $id }}"
        data-id="{{  $id }}"
        @if($preselect)
        data-preselect
        @endif
    />
</div>
@include('laravel-consent::script-consent')

