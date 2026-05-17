<script setup lang="ts">
import { cn } from '@/lib/utils';
import type { HTMLAttributes } from 'vue';

const props = withDefaults(
    defineProps<{
        class?: HTMLAttributes['class'];
        size?: number;
        duration?: number;
        delay?: number;
        colorFrom?: string;
        colorTo?: string;
        borderWidth?: number;
    }>(),
    {
        size: 220,
        duration: 14,
        delay: 0,
        colorFrom: '#c4f24c',
        colorTo: '#22d3ee',
        borderWidth: 1.5,
    },
);
</script>

<template>
    <div :style="{
        '--size': `${props.size}px`,
        '--duration': `${props.duration}s`,
        '--delay': `-${props.delay}s`,
        '--color-from': props.colorFrom,
        '--color-to': props.colorTo,
        '--border-width': `${props.borderWidth}px`,
    }" :class="cn(
            'pointer-events-none absolute inset-0 overflow-hidden rounded-[inherit]',
            props.class,
        )
            " aria-hidden="true">
        <div
            class="animate-border-beam absolute aspect-square w-[var(--size)] [animation-delay:var(--delay)] [background:linear-gradient(to_left,var(--color-from),var(--color-to),transparent)] [offset-anchor:90%_50%] [offset-path:rect(0_auto_auto_0_round_var(--size))]" />
    </div>
</template>
