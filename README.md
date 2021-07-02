# Laravel Consent

## Usage

In this example, a consent wrapper with to consents is presented.

```html
<x-consent-wrapper
    class="fixed bottom-0 left-0 w-full p-8 bg-gray-200"
    id="maps"
>
    <x-consent
        id="google-maps"
        preselect
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"
        callback="initMap"
    >
        I consent to use google maps.
    </x-consent>
    <x-consent id="analytics" preselect>
        I consent to use google analytics.
        <x-slot name="script">
            (function (w, d, s, l, i) { console.log('consent a') w[l] = w[l] ||
            []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js',
            }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl
            = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f); })(window, document, 'script',
            'dataLayer', 'GTM-ABCDEFG');
        </x-slot>
    </x-consent>
</x-consent-wrapper>
```

You can provide a 'on-time-consent' by providing a `toggle`. The following toggle will fire the callback of the consent above:

```html
<x-consent-toggle
    id="google-maps"
    class="p-4 text-xs bg-gray-100"
    button-class="inline-block px-2 py-1 mt-2 text-xs text-white bg-green-400 rounded-md cursor-pointer"
    button="Show Map"
>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam doloremque
    dolorem qui culpa quas sunt magni animi rem illo consequatur aliquid
    voluptates, illum, perspiciatis nam deserunt debitis suscipit labore
    reiciendis.
</x-consent-toggle>
```
