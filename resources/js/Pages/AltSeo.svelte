<script>
    import { onMount } from "svelte";
    import { writable } from "svelte/store";

    const entryData = writable({});

    let title;
    let description;
    let canonical;

    onMount(async () => {
        const response = await fetch("/alt-seo-meta");
        const data = await response.json();
        entryData.set(data);

        console.log($entryData);
        title = $entryData.values.alt_seo_meta_title_default;
        description = $entryData.values.alt_seo_meta_description_default;
        canonical = $entryData.canonical;
    });
</script>

<svelte:head>
    {#if title != null}
        <title>{title}</title>
    {/if}
    {#if canonical != null}
        <link rel="canonical" href={canonical} />
    {/if}
    {#if title != null}
        <meta name="description" content={description} />
    {/if}
</svelte:head>
