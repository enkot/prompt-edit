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
    { name: 'Pika', color: 'var(--accent-cyan)' },
    { name: 'Luma', color: 'var(--accent-magenta)' },
];
</script>

<template>
    <section class="relative overflow-hidden border-y border-gray-300 bg-card py-8">

        <div class="flex justify-center mb-6">
            <p class="font-mono text-[10px] tracking-[0.35em] text-muted-foreground uppercase">
                Powered by the best models on earth
            </p>
        </div>

        <div aria-hidden="true"
            class="pointer-events-none absolute inset-y-0 left-0 z-10 w-24 bg-gradient-to-r from-card to-transparent" />
        <div aria-hidden="true"
            class="pointer-events-none absolute inset-y-0 right-0 z-10 w-24 bg-gradient-to-l from-card to-transparent" />

        <Marquee pause-on-hover :duration="'48s'" class="[--gap:1rem]">
            <div v-for="t in tools" :key="t.name"
                class="font-display inline-flex items-center gap-3 border border-border bg-background px-6 py-3 text-xl font-medium tracking-tight text-foreground">
                <span class="size-2.5" :style="{ backgroundColor: t.color }" />
                {{ t.name }}
            </div>
        </Marquee>
        <Marquee reverse pause-on-hover :duration="'62s'" class="mt-3 [--gap:1rem]">
            <div v-for="t in [...tools].reverse()" :key="t.name + '-r'"
                class="font-display inline-flex items-center gap-3 border border-border bg-background px-6 py-3 text-xl font-medium tracking-tight text-foreground">
                <span class="size-2.5" :style="{ backgroundColor: t.color }" />
                {{ t.name }}
            </div>
        </Marquee>
    </section>
</template>
