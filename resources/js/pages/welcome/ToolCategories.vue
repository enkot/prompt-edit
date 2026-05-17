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
        foreground: 'text-black',
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
        foreground: 'text-white',
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
        foreground: 'text-black',
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
        foreground: 'text-black',
        span: 'lg:col-span-6',
        description:
            'Premiere Pro, Davinci Resolve, Final Cut. AI lives inside your editing software, so generations drop straight onto your timeline.',
        items: ['Adobe Premiere', 'Davinci Resolve', 'Final Cut Pro', 'CapCut'],
    },
];
</script>

<template>
    <section id="tools" class="relative py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-start justify-between gap-6 sm:flex-row sm:items-end">
                <div class="max-w-2xl">
                    <p class="text-xs font-medium tracking-widest text-[var(--accent-lime)] uppercase">
                        Inside Prompt Edit
                    </p>
                    <h2 class="mt-3 text-4xl font-semibold tracking-[-0.03em] text-white sm:text-5xl">
                        Four categories. <br class="hidden sm:block" />
                        Forty-plus tools.
                    </h2>
                </div>
                <p class="max-w-md text-base text-white/60">
                    No more juggling subscriptions. Everything you need to
                    create — image, video, audio, and the plugins that
                    glue it all to your edit.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-4 lg:grid-cols-12 lg:auto-rows-fr">
                <article v-for="cat in categories" :key="cat.title" :style="{ backgroundColor: cat.accent }" :class="[
                    cat.span,
                    cat.foreground,
                    'group relative flex flex-col justify-between overflow-hidden rounded-3xl p-6 transition-transform duration-300 hover:-translate-y-1 sm:p-8 min-h-64',
                ]">
                    <div aria-hidden="true"
                        class="pointer-events-none absolute -right-20 -bottom-24 size-64 rounded-full bg-black/10 blur-3xl transition-transform duration-700 group-hover:scale-125" />

                    <div class="relative flex items-start justify-between">
                        <div>
                            <p class="text-xs font-semibold tracking-[0.2em] uppercase opacity-70">
                                {{ cat.eyebrow }}
                            </p>
                            <h3 class="mt-2 text-2xl font-semibold tracking-tight sm:text-3xl">
                                {{ cat.title }}
                            </h3>
                        </div>
                        <span
                            class="grid size-11 place-items-center rounded-full bg-black/10 backdrop-blur-sm transition-transform duration-300 group-hover:rotate-12">
                            <component :is="cat.icon" class="size-5" />
                        </span>
                    </div>

                    <p class="relative mt-6 max-w-md text-sm leading-relaxed opacity-80 sm:text-base">
                        {{ cat.description }}
                    </p>

                    <div class="relative mt-6 flex flex-wrap gap-2">
                        <span v-for="item in cat.items" :key="item"
                            class="rounded-full border border-current/30 bg-black/5 px-3 py-1 text-xs font-medium backdrop-blur-sm">
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
