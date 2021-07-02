<script>
    var list = localStorage.getItem('laravel-consent')
    var consent_items = list ? list.split(',') : [];

    for (let index = 0; index < consent_items.length; index++) {
        makeConsent(consent_items[index]);

        var checkbox = document.getElementById('consent-'+consent_items[index]);

        if(checkbox){
            checkbox.checked = true;
        }

    }

    function getPreselectedCheckboxes(){
        var elements = document.querySelectorAll('[data-preselect]');

        var list = []

        for (let index = 0; index < elements.length; index++) {
            var el = elements[index];
            elements[index].checked = true
            list.push(el.dataset.id)
        }

        return list;
    }

    // If key is found take the list, else preselect
    consent_array = list !== null ? consent_items : getPreselectedCheckboxes();

</script>