# Laravel Consent

This package provides headless blade-components for building consents, e.g. cookie-consents.
Consents are being stored in `local-storage`.

## Installation

Install via composer:

```shell
composer require aw-studio/laravel-consent
```

## Components

The Laravel Consent package comes with three blade components: `<x-consent-wrapper>`, `<x-consent>` and `<x-consent-toggle>`.

### Consent Wrapper

The `<x-consent-wrapper>` component is used to group consents. You can style each wrapper to your liking. Every wrapper needs an unique `id`.
Each wrapper component shows the full list of consents and a `Save-Button`. After saving the wrapper is hidden.

```html
<x-consent-wrapper id="group-1" save="Save">
    <!-- consents go here -->
</x-consent-wrapper>
```

| Attributes | Type   | Description                     | required |
| ---------- | ------ | ------------------------------- | -------- |
| id         | String | unique id for grouping consents | ✅       |
| save       | String | Save-button text                |          |

### Consent

The `<x-consent>` component is used for actually giving a consent and MUST be wrapped by a `<x-consent-wrapper>` and neeeds a unique `id`.
Each consent has a label and and checkbox. The label text is filled with the content of the default slot.

When giving a consent, you may want to execute a local script or load a script from a source.

If you want to load an `external script` after the consent the component should look as follows:

```html
<x-consent
    id="google-maps"
    preselect
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"
    callback="initMap"
>
    I consent to use google maps.
</x-consent>
```

The script will be appended to the `<head>`.

If you want to execute a `local script` you can provide the code in the `<x-slot name="script">` of your `<x-consent>`:

```html
<x-consent id="analytics" preselect>
    I consent to use google analytics.
    <x-slot name="script">
        (function (w, d, s, l, i) { console.log('consent a') w[l] = w[l] || [];
        w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js', }); var
        f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l !=
        'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f); })(window, document, 'script',
        'dataLayer', 'GTM-ABCDEFG');
    </x-slot>
</x-consent>
```

| Attributes | Type   | Description                                                  | required |
| ---------- | ------ | ------------------------------------------------------------ | -------- |
| id         | String |                                                              | ✅       |
| preselect  | bool   | wheter the checkbox should be preselected                    |          |
| src        | bool   | external script src to be loaded after the consent was given |          |
| callback   | bool   | callback to be called after external script was loaded       |          |

### Consent Toggle

Sometimes you may want to provide a 'one-time-consent'. This can be achieved using the `<x-consent-toggle>` component. You may place it anywhere in your markup where a corresponding `<x-consent>` exists. A toggle is linked to a consent by providing the same `id` to the toggle. A toggle may be styled to your liking.

The following toggle will fire the callback of the `google-maps` consent:

```html
<x-consent-toggle
    id="google-maps"
    class="p-4 text-xs bg-gray-100"
    button="Show Map"
    button-class="inline-block px-2 py-1 mt-2 text-xs text-white bg-green-400 rounded-md cursor-pointer"
>
    I consent to using google maps.
</x-consent-toggle>
```

| Attributes   | Type   | Description                 | required |
| ------------ | ------ | --------------------------- | -------- |
| id           | String | id of the consent to toggle | ✅       |
| button       | String | button text                 | ✅       |
| button-class | String | classes to style the button |          |

## Full example

In this example, a consent wrapper with to consents is presented:

```html
<x-consent-wrapper
    id="google-group"
    class="fixed bottom-0 left-0 w-full p-8 bg-gray-200"
    button-class="px-2 py-1 mt-2 text-xs text-white bg-green-400 rounded-md cursor-pointer"
    save="Speichern"
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
