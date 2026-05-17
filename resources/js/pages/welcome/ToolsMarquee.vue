<script setup lang="ts">
import { Marquee } from '@/components/ui/marquee';

const tools = [
    { name: 'Veo', color: 'var(--accent-cyan)' },
    { name: 'Kling', color: 'var(--accent-magenta)' },
    { name: 'Suno', color: 'var(--accent-lime)' },
    { name: 'ElevenLabs', color: 'var(--accent-violet)' },
    { name: 'Nano Banana Pro', color: 'var(--accent-amber)' },
    { name: 'Ideogram', color: 'var(--accent-cyan)' },
    { name: 'Heygen', color: 'var(--accent-magenta)' },
    { name: 'Grok', color: 'var(--accent-lime)' },
    { name: 'Seedance', color: 'var(--accent-violet)' },
    { name: 'Runway', color: 'var(--accent-amber)' },
];
</script>

<template>
    <section class="relative overflow-hidden border-y border-white/5 bg-white/[0.015] py-12">
        <div aria-hidden="true"
            class="pointer-events-none absolute inset-y-0 left-0 z-10 w-24 bg-gradient-to-r from-black to-transparent" />
        <div aria-hidden="true"
            class="pointer-events-none absolute inset-y-0 right-0 z-10 w-24 bg-gradient-to-l from-black to-transparent" />

        <Marquee pause-on-hover :duration="'42s'" class="[--gap:1.5rem]">
            <div v-for="t in tools" :key="t.name"
                class="inline-flex items-center gap-3 rounded-2xl border border-white/10 bg-white/[0.04] px-5 py-3 text-base font-medium text-white/85 backdrop-blur">
                <span class="size-2.5 rounded-full" :style="{ backgroundColor: t.color }" />
                {{ t.name }}
            </div>
        </Marquee>
        <Marquee reverse pause-on-hover :duration="'56s'" class="mt-4 [--gap:1.5rem]">
            <div v-for="t in [...tools].reverse()" :key="t.name + '-r'"
                class="inline-flex items-center gap-3 rounded-2xl border border-white/10 bg-white/[0.04] px-5 py-3 text-base font-medium text-white/85 backdrop-blur">
                <span class="size-2.5 rounded-full" :style="{ backgroundColor: t.color }" />
                {{ t.name }}
            </div>
        </Marquee>
    </section>
</template>
