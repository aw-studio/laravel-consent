<div>
    {{ $slot }}

    <input
        type="checkbox"
        data-consent="{{  $id }}"
        @if($preselect)
        checked
        @endif
    />
</div>
@include('laravel-consent::script-consent')

