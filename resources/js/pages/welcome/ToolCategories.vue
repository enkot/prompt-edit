<script setup lang="ts">
import {
    Image as ImageIcon,
    Video,
    AudioLines,
    Plug,
    ArrowUpRight,
} from 'lucide-vue-next';
import { type Component } from 'vue';

interface Category {
    title: string;
    accent: string;
    icon: Component;
    eyebrow: string;
    description: string;
    items: string[];
    span: string;
    foreground: string;
}

const categories: Category[] = [
    {
        title: 'AI Image Tools',
        eyebrow: 'Visuals',
        icon: ImageIcon,
        accent: 'var(--accent-lime)',
        foreground: 'text-foreground',
        span: 'lg:col-span-5',
        description:
            'Clone yourself, design scroll-stopping social posts, fix bad shots, and ship thumbnails that actually get clicked.',
        items: [
            'AI Clones',
            'Social Posts',
            'Graphic Design',
            'Image Editing',
            'YouTube Thumbnails',
            'Online Ads',
        ],
    },
    {
        title: 'AI Video Tools',
        eyebrow: 'Motion',
        icon: Video,
        accent: 'var(--accent-magenta)',
        foreground: 'text-background',
        span: 'lg:col-span-7',
        description:
            'Generate cinematic shots, swap faces and voices, and turn a prompt into a reel before your coffee gets cold.',
        items: ['Clone Videos', 'VFX', 'Cinematic Films', 'Ads', 'Reels & TikToks', 'YouTube'],
    },
    {
        title: 'AI Audio Tools',
        eyebrow: 'Sound',
        icon: AudioLines,
        accent: 'var(--accent-cyan)',
        foreground: 'text-foreground',
        span: 'lg:col-span-6',
        description:
            'Voiceovers, voice clones, voice swaps, sound design, and original music — all from a prompt.',
        items: ['AI Voiceovers', 'Voice Clones', 'Voice Swaps', 'Sound Effects', 'Music Generation'],
    },
    {
        title: 'Editing Plugins',
        eyebrow: 'Workflow',
        icon: Plug,
        accent: 'var(--accent-amber)',
        foreground: 'text-foreground',
        span: 'lg:col-span-6',
        description:
            'Premiere Pro, Davinci Resolve, Final Cut. AI lives inside your editing software, so generations drop straight onto your timeline.',
        items: ['Adobe Premiere', 'Davinci Resolve', 'Final Cut Pro', 'CapCut'],
    },
];
</script>

<template>
    <section id="tools" class="relative bg-background py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-start justify-between gap-6 sm:flex-row sm:items-end">
                <div class="max-w-2xl">
                    <p class="font-mono text-[11px] tracking-[0.3em] text-muted-foreground uppercase">
                        Inside Prompt Edit
                    </p>
                    <h2 class="font-display mt-4 text-4xl font-medium tracking-[-0.03em] text-foreground sm:text-6xl">
                        Four categories. <br class="hidden sm:block" />
                        <span class="italic font-light">Forty-plus tools.</span>
                    </h2>
                </div>
                <p class="max-w-md text-base text-muted-foreground">
                    No more juggling subscriptions. Everything you need to create — image, video, audio, and the plugins
                    that glue it all to your edit.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-4 lg:grid-cols-12 lg:auto-rows-fr">
                <article v-for="cat in categories" :key="cat.title" :style="{ backgroundColor: cat.accent }" :class="[
                    cat.span,
                    cat.foreground,
                    'group relative flex flex-col justify-between overflow-hidden p-6 transition-transform duration-300 hover:-translate-y-1 sm:p-8 min-h-72',
                ]">
                    <div aria-hidden="true"
                        class="pointer-events-none absolute -right-20 -bottom-24 size-64 rounded-full bg-foreground/10 blur-3xl transition-transform duration-700 group-hover:scale-125" />

                    <div class="relative flex items-start justify-between">
                        <div>
                            <p class="font-mono text-[11px] tracking-[0.3em] opacity-75 uppercase">
                                {{ cat.eyebrow }}
                            </p>
                            <h3 class="font-display mt-3 text-3xl font-medium tracking-tight sm:text-4xl">
                                {{ cat.title }}
                            </h3>
                        </div>
                        <span
                            class="grid size-11 place-items-center border border-current/30 transition-transform duration-300 group-hover:rotate-12">
                            <component :is="cat.icon" class="size-5" />
                        </span>
                    </div>

                    <p class="relative mt-6 max-w-md text-sm leading-relaxed opacity-85 sm:text-base">
                        {{ cat.description }}
                    </p>

                    <div class="relative mt-6 flex flex-wrap gap-2">
                        <span v-for="item in cat.items" :key="item"
                            class="border border-current/30 bg-foreground/[0.06] px-3 py-1 text-xs font-medium">
                            {{ item }}
                        </span>
                    </div>

                    <div
                        class="relative mt-8 inline-flex items-center gap-2 text-sm font-semibold opacity-0 transition-opacity group-hover:opacity-100">
                        Explore tools
                        <ArrowUpRight class="size-4" />
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
