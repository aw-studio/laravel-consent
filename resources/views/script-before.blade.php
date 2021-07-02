<script>
    function callLaravelConsentCallback(id){
        var event = new Event(id);
        window.dispatchEvent(event);
    }

    function saveLaravelConsent(id){
        var wrapper = document.getElementById('laravel-consent-wrapper-'+ id);
        var elements = wrapper.querySelectorAll('[data-consent]');
        
        var consent_list = []

        for (let index = 0; index < elements.length; index++) {
            const element = elements[index];

            if(element.checked){
                callLaravelConsentCallback(element.dataset.consent);
                var toggle = document.querySelector("[data-consenttogglewrapper='"+consent+"']");

                if(toggle){
                    toggle.style.display = 'none'
                }
                consent_list.push(element.dataset.consent)
            }
        }

        localStorage.setItem('laravel-consent-'+id, consent_list);

        wrapper.style.display = 'none'
    }

    function toggleLaravelConsent(id){
        // get consent element
        var element = document.querySelector('[data-consent="'+id+'"]');
        
        var wrapper_id = element.closest("[data-wrapper]").dataset.wrapper
        var consents_made = getConsentWrapperElements(element)

        // add to list

        callLaravelConsentCallback(id)

        // hide toggle
        document.querySelector("[data-consenttogglewrapper='"+id+"']").style.display = 'none';
    }

    function getConsentWrapperElements(el){
        // get wrapper id
        var wrapper_id = el.closest("[data-wrapper]").dataset.wrapper
        
        var wrapper_elements = localStorage.getItem('laravel-consent-'+wrapper_id)?.split(',')

        if(wrapper_elements){
            return wrapper_elements
        }
        return [];
    }

</script>