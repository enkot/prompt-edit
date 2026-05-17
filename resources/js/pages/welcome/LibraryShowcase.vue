<script setup lang="ts">
import NumberTicker from '@/components/inspira/NumberTicker.vue';

interface Row {
    eyebrow: string;
    name: string;
    count: number;
    suffix: string;
    blurb: string;
    favorites: string[];
    image: string;
    accent: string;
}

const rows: Row[] = [
    {
        eyebrow: 'Color grading',
        name: 'LUT packs',
        count: 4000,
        suffix: '+',
        blurb: 'Drop-in cinematic looks for Premiere, Resolve, FCP and CapCut. The cheat code real colorists use.',
        favorites: ['Wes Anderson', 'Bladerunner', 'Christopher Nolan', '8mm Film', 'Vintage Polaroid'],
        image:
            'https://embed-ssl.wistia.com/deliveries/b399bdd4d4bcccb0a2369d5d034843bcc5f713fe.webp?image_crop_resized=1920x1080',
        accent: 'var(--accent-amber)',
    },
    {
        eyebrow: 'Sound design',
        name: 'Sound effects',
        count: 60000,
        suffix: '+',
        blurb: 'Risers, whooshes, transitions, foley. Searchable by mood. Royalty-free for every project you ship.',
        favorites: ['Cinematic Risers', 'UI Clicks', 'Whoosh Library', 'Tension Drones', 'Impact Hits'],
        image:
            'https://embed-ssl.wistia.com/deliveries/c5f8055766f3d81f9e4eaaa3c23d99bee10ccefe.webp?image_crop_resized=1920x1080',
        accent: 'var(--accent-magenta)',
    },
    {
        eyebrow: 'Type that pops',
        name: 'Text templates',
        count: 3000,
        suffix: '+',
        blurb: 'Drag. Drop. Customize. Headlines, lower-thirds, kinetic type. Pre-animated so you can stop keyframing.',
        favorites: ['Bold Headline Kit', 'Lower Thirds Pro', 'Quote Cards', 'Captions+', 'YouTube Titles'],
        image:
            'https://embed-ssl.wistia.com/deliveries/68e9e9c19f6023efd6412d341b9e601726fb7d79.webp?image_crop_resized=1920x1080',
        accent: 'var(--accent-cyan)',
    },
    {
        eyebrow: 'Texture & grit',
        name: 'Overlay packs',
        count: 2000,
        suffix: '+',
        blurb: 'Light leaks, film grain, dust, glitch, VHS. Blend on top of any clip in two clicks.',
        favorites: ['Light Leaks', 'Film Grain 16mm', 'VHS Glitch', 'Lens Flares', 'Smoke + Dust'],
        image:
            'https://embed-ssl.wistia.com/deliveries/54c8c80f979d0f112ff6bacaac5cc25a613c7b70.webp?image_crop_resized=1920x1080',
        accent: 'var(--accent-violet)',
    },
    {
        eyebrow: 'Backplates',
        name: 'Animated backgrounds',
        count: 5000,
        suffix: '+',
        blurb: 'Loops, gradients, abstract motion. Every aspect ratio. Perfect behind interviews, titles, and reels.',
        favorites: ['Liquid Gradients', 'Tech HUD Loops', 'Abstract Particles', 'Vintage TV', 'Studio Backplates'],
        image:
            'https://embed-ssl.wistia.com/deliveries/41b19a4961bb34fd129a83a78c39d81b5c6372a1.webp?image_crop_resized=1920x1080',
        accent: 'var(--accent-lime)',
    },
];
</script>

<template>
    <section class="relative bg-background py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <p class="font-mono text-[11px] tracking-[0.3em] text-muted-foreground uppercase">
                    Inside the templates library
                </p>
                <h2 class="font-display mt-4 text-4xl font-medium tracking-[-0.03em] text-foreground sm:text-6xl">
                    Five vaults. <span class="italic font-light">One subscription.</span>
                </h2>
                <p class="mt-5 text-base text-muted-foreground sm:text-lg">
                    Each library is the kind of asset pack pros pay $130 a pop for.
                    Subscribers get every one — and the new drops every month.
                </p>
            </div>

            <div class="mt-20 flex flex-col gap-24">
                <article v-for="(row, idx) in rows" :key="row.name"
                    class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
                    <div :class="idx % 2 === 1 ? 'lg:order-2' : ''">
                        <p class="font-mono text-[11px] tracking-[0.3em] uppercase" :style="{ color: row.accent }">
                            {{ row.eyebrow }}
                        </p>
                        <h3
                            class="font-display mt-3 text-4xl font-medium tracking-[-0.02em] text-foreground sm:text-5xl">
                            <NumberTicker :value="row.count" :format="(n) => Math.round(n).toLocaleString()" />{{
                                row.suffix }}
                            <span class="block italic font-light">{{ row.name }}</span>
                        </h3>
                        <p class="mt-5 max-w-md text-base leading-relaxed text-muted-foreground sm:text-lg">
                            {{ row.blurb }}
                        </p>
                        <ul class="mt-6 flex flex-wrap gap-2">
                            <li v-for="f in row.favorites" :key="f"
                                class="border border-border bg-card px-3 py-1.5 text-xs font-medium text-foreground/80">
                                {{ f }}
                            </li>
                        </ul>
                    </div>

                    <div :class="['group relative aspect-[4/3] overflow-hidden border border-border bg-foreground',
                        idx % 2 === 1 ? 'lg:order-1' : '']">
                        <div aria-hidden="true" class="absolute inset-x-0 top-0 z-10 h-1"
                            :style="{ backgroundColor: row.accent }" />
                        <img :src="row.image" :alt="`${row.name} preview`" loading="lazy"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-1000 group-hover:scale-105" />
                        <div aria-hidden="true"
                            class="absolute inset-0 bg-gradient-to-t from-foreground/40 via-transparent to-transparent" />
                        <div
                            class="absolute bottom-5 left-5 inline-flex items-center gap-2 bg-background/90 px-3 py-1.5 text-xs font-medium text-foreground backdrop-blur">
                            <span class="size-1.5 animate-pulse" :style="{ backgroundColor: row.accent }" />
                            Preview
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
