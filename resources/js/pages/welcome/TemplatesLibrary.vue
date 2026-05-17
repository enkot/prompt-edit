<script setup lang="ts">
import NumberTicker from '@/components/inspira/NumberTicker.vue';

interface Tile {
    name: string;
    count: number;
    suffix: string;
    blurb: string;
    image: string;
    accent: string;
    span: string;
}

const tiles: Tile[] = [
    {
        name: 'Sound Effects',
        count: 60000,
        suffix: '+',
        blurb: 'Drag-and-drop SFX, professionally designed, searchable by mood.',
        image:
            'https://embed-ssl.wistia.com/deliveries/c5f8055766f3d81f9e4eaaa3c23d99bee10ccefe.webp?image_crop_resized=1920x1080',
        accent: 'var(--accent-magenta)',
        span: 'lg:col-span-7 lg:row-span-2',
    },
    {
        name: 'LUTs',
        count: 4000,
        suffix: '+',
        blurb: 'The cheat code to cinematic color — works in any NLE.',
        image:
            'https://embed-ssl.wistia.com/deliveries/b399bdd4d4bcccb0a2369d5d034843bcc5f713fe.webp?image_crop_resized=1920x540',
        accent: 'var(--accent-amber)',
        span: 'lg:col-span-5',
    },
    {
        name: 'Text Animations',
        count: 3000,
        suffix: '+',
        blurb: 'Scroll-stopping titles. Drop. Type. Done.',
        image:
            'https://embed-ssl.wistia.com/deliveries/68e9e9c19f6023efd6412d341b9e601726fb7d79.webp?image_crop_resized=1920x1080',
        accent: 'var(--accent-cyan)',
        span: 'lg:col-span-5',
    },
    {
        name: 'Overlays',
        count: 2000,
        suffix: '+',
        blurb: 'Vintage, viral, glitchy — drag, blend, ship.',
        image:
            'https://embed-ssl.wistia.com/deliveries/54c8c80f979d0f112ff6bacaac5cc25a613c7b70.webp?image_crop_resized=1920x1080',
        accent: 'var(--accent-violet)',
        span: 'lg:col-span-4',
    },
    {
        name: 'Backgrounds',
        count: 5000,
        suffix: '+',
        blurb: 'Animated and static backplates for every aspect ratio.',
        image:
            'https://embed-ssl.wistia.com/deliveries/41b19a4961bb34fd129a83a78c39d81b5c6372a1.webp?image_crop_resized=1920x1080',
        accent: 'var(--accent-lime)',
        span: 'lg:col-span-3',
    },
];
</script>

<template>
    <section id="templates" class="relative py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-start justify-between gap-6 sm:flex-row sm:items-end">
                <div class="max-w-2xl">
                    <p class="text-xs font-medium tracking-widest text-[var(--accent-lime)] uppercase">
                        Content Creator Templates Library
                    </p>
                    <h2 class="mt-3 text-4xl font-semibold tracking-[-0.03em] text-white sm:text-5xl">
                        <NumberTicker :value="100000" :format="(n) => Math.round(n).toLocaleString()" />+
                        assets, one subscription.
                    </h2>
                </div>
                <p class="max-w-md text-base text-white/60">
                    Professional editors in Hollywood use these. Now they
                    live in your timeline — no $130 packs, no endless
                    search.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-12 lg:auto-rows-[14rem]">
                <article v-for="tile in tiles" :key="tile.name"
                    :class="[tile.span, 'group relative overflow-hidden rounded-3xl border border-white/10 bg-neutral-900']">
                    <img :src="tile.image" :alt="`${tile.name} preview`" loading="lazy"
                        class="absolute inset-0 h-full w-full object-cover opacity-60 transition-all duration-700 group-hover:scale-105 group-hover:opacity-80" />
                    <div aria-hidden="true"
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent" />
                    <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1"
                        :style="{ backgroundColor: tile.accent }" />

                    <div class="relative flex h-full flex-col justify-end p-6 sm:p-7">
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-semibold tracking-tight text-white sm:text-5xl"
                                :style="{ color: tile.accent }">
                                <NumberTicker :value="tile.count" :format="(n) => Math.round(n).toLocaleString()" />{{
                                tile.suffix }}
                            </span>
                        </div>
                        <h3 class="mt-1 text-xl font-semibold text-white sm:text-2xl">
                            {{ tile.name }}
                        </h3>
                        <p class="mt-2 max-w-md text-sm text-white/70">
                            {{ tile.blurb }}
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
