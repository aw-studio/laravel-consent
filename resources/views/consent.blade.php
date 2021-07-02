<label for="{{  $id }}" style="display: block;">
    <input
        type="checkbox"
        id="{{  $id }}"
        data-consent="{{  $id }}"
        @if($preselect)
        checked
        @endif
    />
    {{ $slot }}
</label>
@include('laravel-consent::script-consent')

