<script setup lang="ts">
import { cn } from '@/lib/utils';
import type { HTMLAttributes } from 'vue';

const props = withDefaults(
    defineProps<{
        class?: HTMLAttributes['class'];
        reverse?: boolean;
        pauseOnHover?: boolean;
        vertical?: boolean;
        repeat?: number;
        duration?: string;
        gap?: string;
    }>(),
    { repeat: 4, duration: '40s', gap: '1rem' },
);
</script>

<template>
    <div :style="{ '--duration': duration, '--gap': gap, gap: 'var(--gap)' }" :class="cn(
        'group flex overflow-hidden p-2',
        vertical ? 'flex-col' : 'flex-row',
        props.class,
    )
        ">
        <div v-for="i in repeat" :key="i" :style="{ gap: 'var(--gap)' }" :class="cn(
            'flex shrink-0 justify-around',
            vertical
                ? 'animate-marquee-vertical flex-col'
                : 'animate-marquee flex-row',
            pauseOnHover && 'group-hover:[animation-play-state:paused]',
            reverse && '[animation-direction:reverse]',
        )
            ">
            <slot />
        </div>
    </div>
</template>
