<script>
    var list = localStorage.getItem('laravel-consent-{{ $id }}')
    var consent_items = list ? list.split(',') : [];

    // hide wrapper, if consent list is found
    if(list !== null){
        document.getElementById('laravel-consent-wrapper-{{ $id }}').style.display = "none"
    }

    // callback to all consents that have been made
    for (let index = 0; index < consent_items.length; index++) {
        callLaravelConsentCallback(consent_items[index]);
    }

    // hide all toggles that are not needed
    var consentToggles = document.querySelectorAll("[data-consenttoggle]");
    for (let index = 0; index < consentToggles.length; index++) {
        var toggle = consentToggles[index];
        
        // find matching wrapper
        var consent = toggle.dataset.consenttoggle
        var consent_element = document.querySelector('[data-consent="'+toggle.dataset.consenttoggle+'"]');
        var consents_made = getConsentWrapperElements(consent_element)
        if(consents_made.includes(consent)){
            toggle.closest("[data-consenttogglewrapper]").style.display = 'none'
        }
        
    }

</script>