# This is experimental

As a complete newbie to Statamic & Laravel as a whole I had set out to dive into something alien to me. If you are building a Statamic with Inertia to render Svelte on the front-end, you will be able to drop in this component to get the benefits of the Alt Seo addon. I have built this as a proof of concept and a way to gain experience with Laravel, I would advise against anyone implementing this.

## Overview / Currently Ported

- Drop in `<AltSeo />` component for Inertia w/ Svelte
- Title, Canonical & Descriptions currently pulled through
- No further Inertia setup required

## How to implement currently (Again please don't try this. It is a proof of concept)

- Once you have Laravel, Statamic & Alt SEO Addon, Inertia & Svelte installed you can replace the files within the alt-seo folder in vendor -> alt-design
- You can then import the component `<AltSeo />` into your .svelte files
- An example within a layout component file:

```
<script>
    import AltSeo from "../../../vendor/alt-design/alt-seo/resources/js/Pages/AltSeo.svelte";
    import "../../css/site.css";
    import "iconify-icon";
</script>

<AltSeo />

<main class="relative overflow-hidden p-3 md:p-5">
    <slot />
</main>

```

# Alt SEO

> Easy SEO for your Statamic sites

## Features

- General sitewide SEO tags
- Page specific SEO tags
- Title, Description, Social Title, Social Description and Social Image


## How to Installation

You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

``` bash
composer require alt-design/alt-seo
```

In layout.antlers.html remove your `<title>` and SEO tags and replace with

``` bash
{{ alt_seo:meta }}
```

You can also just use the following to output the title if you prefer

``` bash
{{ alt_seo:title }}
```

## What actually happens

The addon will look for data in the following order:

- Page specific SEO tags
- General sitewide SEO tags
- Defaults back to Site Name

For General/Site Wide SEO Tags Select Alt SEO from the Tools section in CP where you can set a general SEO Title and Description for the site. In the Social tab you can set the Title, Description and Image for Facebook and Twitter.

For Page Specific SEO Tags go to Collections > Pages > select your page and in the Alt SEO Tab you can set Title, Description, Social Title, Social Description and Social Image to override the general settings on that page.

You can use variables such as {title} | {site_name}

App name and url are taken from .env file so ensure this data is correct. Images must be stored in assets container.

## Questions etc

Drop us a big shout-out if you have any questions, comments, or concerns. We're always looking to improve our addons, so if you have any feature requests, we'd love to hear them.

Also - check out our other addons!
- [Alt Cookies Addon](https://github.com/alt-design/Alt-Cookies-Addon)
- [Alt Redirect Addon](https://github.com/alt-design/Alt-Redirect-Addon)
- [Alt Akismet Addon](https://github.com/alt-design/Alt-Akismet-Addon)
- [Alt Inbound Addon](https://github.com/alt-design/Alt-Inbound-Addon)
- [Alt Sitemap Addon](https://github.com/alt-design/Alt-Sitemap-Addon)
- [Alt Password Protect Addon](https://github.com/alt-design/Alt-Password-Protect-Addon)

## Postcardware

Send us a postcard from your hometown if you like this addon. We love getting mail from other cool peeps!

Alt Design  
St Helens House  
Derby  
DE1 3EE  
UK   
