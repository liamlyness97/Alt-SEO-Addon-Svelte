<script>
    import { onMount } from "svelte";
    import { writable } from "svelte/store";

    const entryData = writable({});

    let title;
    let description;

    onMount(async () => {
        const response = await fetch("/alt-seo-meta");
        const data = await response.json();
        entryData.set(data.values);

        console.log($entryData);
        title = $entryData.alt_seo_meta_title_default;
        description = $entryData.alt_seo_meta_description_default;
    });
</script>

<svelte:head>
    {#if title != null}
        <title>{title}</title>
    {/if}
    {#if title != null}
        <meta name="description" content={description} />
    {/if}
</svelte:head>
