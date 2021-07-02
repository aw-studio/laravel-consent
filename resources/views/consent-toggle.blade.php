<div
    data-consenttogglewrapper="{{ $id }}"
    class="{{ $attributes['class'] }}"
    >
    <div>
        {{ $slot }}
    </div>
    <div
        data-consenttoggle="{{ $id }}"
        onclick="toggleLaravelConsent('{{ $id }}')"
        class="{{ $attributes['button-class'] }}"
    >
        
        {{ $button }}
    </div>
</div> 
