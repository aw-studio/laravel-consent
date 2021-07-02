<script>
    function makeConsent(id){
        var event = new Event(id);
        window.dispatchEvent(event);
    }
    var consent_array = [];

    function toggleArrayElement(array, el) {
        if (array.includes(el)) {
            var index = array.indexOf(el);
            if (index > -1) {
                array.splice(index, 1);
            }
        } else {
            array.push(el);
        }
        return array;
    }

    function toggleConsent(id){
        consent_array = toggleArrayElement(consent_array, id)
    }

    function updateConsent(){
        for (let index = 0; index < consent_array.length; index++) {
            makeConsent(consent_array[index]);
        }
        var list = consent_array.filter(function(el){ return el})
        
       
        localStorage.setItem('laravel-consent', list);
    }
</script>