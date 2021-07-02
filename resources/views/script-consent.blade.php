<script>
    window.addEventListener("{{ $id }}", function (e) {
        @if($script)
            {{ $script }}
        @elseif($src)
            var script = document.createElement('script');
            script.onload = function () {
                var event = new Event('{{ $callback }}');
                window.dispatchEvent(event);
            }
            script.src = "{{ $src }}";
            document.head.appendChild(script);
        @endif
    }, false);
</script>