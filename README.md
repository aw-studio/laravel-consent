# Laravel Consent

## Usage

```html
<x-consent-wrapper>
    <x-consent
        id="google-maps"
        preselect
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"
        callback="initMap"
    >
        Consent A
    </x-consent>
    <x-consent id="analytics" preselect>
        Google Analytics zustimmen
        <x-slot name="script">
            (function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js', }); var f =
            d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l !=
            'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f); })(window, document, 'script',
            'dataLayer', 'GTM-T8J8R2G');
        </x-slot>
    </x-consent>
</x-consent-wrapper>
```
