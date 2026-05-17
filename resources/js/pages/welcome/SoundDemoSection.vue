<script setup lang="ts">
import { ref } from 'vue';
import { VolumeX, Volume2 } from 'lucide-vue-next';
import { BorderBeam } from '@/components/ui/border-beam';

const muted = {
    label: 'Without sound design',
    icon: VolumeX,
    thumb:
        'https://embed-ssl.wistia.com/deliveries/e1a3f5f3f854ebb7349612ede6650c8c.webp?image_crop_resized=960x540',
    accent: 'rgba(0,0,0,0.18)',
    textOnAccent: 'text-foreground',
};
const loud = {
    label: 'With Prompt Edit sound design',
    icon: Volume2,
    thumb:
        'https://embed-ssl.wistia.com/deliveries/a2b45fabae16e066d68004b411d87d8b.webp?image_crop_resized=960x540',
    accent: 'var(--accent-cyan)',
    textOnAccent: 'text-foreground',
};

const playing = ref<'muted' | 'loud' | null>(null);
</script>

<template>
    <section class="relative bg-background py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="font-mono text-[11px] tracking-[0.3em] uppercase" style="color: var(--accent-cyan);">
                    A/B
                </p>
                <h2 class="font-display mt-4 text-4xl font-medium tracking-[-0.03em] text-foreground sm:text-6xl">
                    Hear the <span class="italic font-light">difference</span> sound makes.
                </h2>
                <p class="mt-4 text-base text-muted-foreground sm:text-lg">
                    Same edit. Same picture. The only thing that changed is what your ears are doing.
                </p>
            </div>

            <div class="mx-auto mt-14 grid max-w-5xl gap-6 md:grid-cols-2">
                <button v-for="(item, key) in { muted, loud }" :key="key" type="button"
                    class="group relative aspect-video overflow-hidden border border-border bg-foreground text-left"
                    @click="playing = key as 'muted' | 'loud'">
                    <BorderBeam v-if="key === 'loud'" :size="220" :duration="10" color-from="#06b6d4"
                        color-to="#b6eb27" />
                    <img :src="item.thumb" :alt="item.label"
                        class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                        :class="key === 'muted' ? 'opacity-60 grayscale' : 'opacity-95'" loading="lazy" />
                    <div aria-hidden="true"
                        class="absolute inset-0 bg-gradient-to-t from-foreground via-foreground/30 to-transparent" />
                    <div class="absolute inset-x-5 bottom-5 flex items-center justify-between">
                        <div class="flex items-center gap-2.5 text-background">
                            <span class="grid size-9 place-items-center" :style="{ backgroundColor: item.accent }">
                                <component :is="item.icon" class="size-4"
                                    :class="key === 'muted' ? 'text-background' : 'text-foreground'" />
                            </span>
                            <span class="font-display text-base font-medium sm:text-lg">{{ item.label }}</span>
                        </div>
                        <span
                            class="hidden bg-background/90 px-3 py-1 text-xs font-medium text-foreground backdrop-blur sm:inline-flex">
                            {{ playing === key ? 'Playing' : 'Click to play' }}
                        </span>
                    </div>
                </button>
            </div>
        </div>
    </section>
</template>
