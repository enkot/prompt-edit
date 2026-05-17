<script setup lang="ts">
import { BorderBeam } from '@/components/ui/border-beam';

const editors = [
    { name: 'Adobe Premiere Pro', short: 'Pr', color: '#9999FF' },
    { name: 'DaVinci Resolve', short: 'DR', color: '#FF6B35' },
    { name: 'Final Cut Pro', short: 'FC', color: '#0A84FF' },
    { name: 'CapCut', short: 'CC', color: '#000000' },
];

const features = [
    'Run text-to-video without leaving your timeline.',
    'Generate B-roll, voiceovers and SFX from the panel.',
    'Apply LUTs, transitions, and overlays in one click.',
    'Auto-caption with timecode-perfect accuracy.',
];
</script>

<template>
    <section class="relative bg-background py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-14 lg:grid-cols-2">
                <div>
                    <p class="font-mono text-[11px] tracking-[0.3em] text-muted-foreground uppercase">
                        Editing plugins
                    </p>
                    <h2
                        class="font-display mt-4 text-4xl font-medium leading-[1.02] tracking-[-0.03em] text-foreground sm:text-6xl">
                        AI lives <span class="italic font-light">inside</span>
                        your editing software.
                    </h2>
                    <p class="mt-6 max-w-lg text-base leading-relaxed text-muted-foreground sm:text-lg">
                        No more exporting, downloading, and re-importing.
                        Prompt Edit ships native plugins for the four NLEs that
                        run 99% of cuts on the planet — generations drop straight
                        onto your timeline.
                    </p>

                    <ul class="mt-8 flex flex-col gap-3">
                        <li v-for="(f, idx) in features" :key="f" class="flex items-start gap-3">
                            <span class="mt-1 font-mono text-xs text-muted-foreground">
                                0{{ idx + 1 }}
                            </span>
                            <span class="text-base text-foreground/90">{{ f }}</span>
                        </li>
                    </ul>
                </div>

                <div class="relative">
                    <div class="relative grid grid-cols-2 gap-px overflow-hidden border border-border bg-border">
                        <div v-for="(e, idx) in editors" :key="e.name"
                            class="group relative flex aspect-square flex-col justify-between bg-card p-6 transition-colors hover:bg-secondary">
                            <span
                                class="font-display grid size-14 place-items-center text-2xl font-medium text-background"
                                :style="{ backgroundColor: e.color }">
                                {{ e.short }}
                            </span>
                            <div>
                                <p class="font-mono text-[10px] tracking-widest text-muted-foreground uppercase">
                                    0{{ idx + 1 }} · NLE
                                </p>
                                <p class="font-display mt-1 text-xl font-medium text-foreground">
                                    {{ e.name }}
                                </p>
                            </div>
                            <BorderBeam v-if="idx === 0" :size="180" :duration="11" :border-width="2" />
                        </div>
                    </div>
                    <div aria-hidden="true"
                        class="pointer-events-none absolute -inset-4 -z-10 bg-[radial-gradient(closest-side,rgba(0,0,0,0.06),transparent)]" />
                </div>
            </div>
        </div>
    </section>
</template>
