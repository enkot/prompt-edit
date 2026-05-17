<script setup lang="ts">
import { ref } from 'vue';
import { VolumeX, Volume2 } from 'lucide-vue-next';
import { BorderBeam } from '@/components/ui/border-beam';

const muted = {
    label: 'Without sound design',
    icon: VolumeX,
    thumb:
        'https://embed-ssl.wistia.com/deliveries/e1a3f5f3f854ebb7349612ede6650c8c.webp?image_crop_resized=960x540',
    accent: 'rgba(255,255,255,0.25)',
};
const loud = {
    label: 'With Prompt Edit sound design',
    icon: Volume2,
    thumb:
        'https://embed-ssl.wistia.com/deliveries/a2b45fabae16e066d68004b411d87d8b.webp?image_crop_resized=960x540',
    accent: 'var(--accent-cyan)',
};

const playing = ref<'muted' | 'loud' | null>(null);
</script>

<template>
    <section class="relative py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-xs font-medium tracking-widest text-[var(--accent-cyan)] uppercase">
                    A/B
                </p>
                <h2 class="mt-3 text-4xl font-semibold tracking-[-0.03em] text-white sm:text-5xl">
                    Hear the difference sound makes.
                </h2>
                <p class="mt-4 text-base text-white/60">
                    Same edit. Same picture. The only thing that changed is
                    what your ears are doing.
                </p>
            </div>

            <div class="mx-auto mt-14 grid max-w-5xl gap-6 md:grid-cols-2">
                <button v-for="(item, key) in { muted, loud }" :key="key" type="button"
                    class="group relative aspect-video overflow-hidden rounded-2xl border border-white/10 bg-black text-left"
                    @click="playing = key as 'muted' | 'loud'">
                    <BorderBeam v-if="key === 'loud'" :size="220" :duration="10" color-from="#22d3ee"
                        color-to="#c4f24c" />
                    <img :src="item.thumb" :alt="item.label"
                        class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                        :class="key === 'muted' ? 'opacity-50 grayscale' : 'opacity-90'" loading="lazy" />
                    <div aria-hidden="true"
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent" />
                    <div class="absolute inset-x-5 bottom-5 flex items-center justify-between">
                        <div class="flex items-center gap-2.5 text-white">
                            <span class="grid size-9 place-items-center rounded-full"
                                :style="{ backgroundColor: item.accent }">
                                <component :is="item.icon" class="size-4"
                                    :class="key === 'muted' ? 'text-white' : 'text-black'" />
                            </span>
                            <span class="text-sm font-medium sm:text-base">{{ item.label }}</span>
                        </div>
                        <span
                            class="hidden rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white backdrop-blur sm:inline-flex">
                            {{ playing === key ? 'Playing' : 'Click to play' }}
                        </span>
                    </div>
                </button>
            </div>
        </div>
    </section>
</template>
