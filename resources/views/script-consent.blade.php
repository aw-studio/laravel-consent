<script>
    window.addEventListener("{{ $id }}", function (e) {
        @if($script)
            {{ $script }}
        @endif
        @if($src)
            var script = document.createElement('script');
            @if ($callback)   
            script.onload = function () {
                var event = new Event('{{ $callback }}');
                window.dispatchEvent(event);
            }
            @endif
            script.src = "{{ $src }}";
            document.head.appendChild(script);
        @endif
    }, false);
</script>