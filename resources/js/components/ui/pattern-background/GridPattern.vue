<script setup lang="ts">
import { cn } from '@/lib/utils';
import type { HTMLAttributes } from 'vue';

const props = withDefaults(
    defineProps<{
        class?: HTMLAttributes['class'];
        size?: number;
    }>(),
    { size: 40 },
);
</script>

<template>
    <div aria-hidden="true" :style="{
        '--grid-size': `${props.size}px`,
        backgroundImage:
            'linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px)',
        backgroundSize: 'var(--grid-size) var(--grid-size)',
    }" :class="cn(
            'animate-grid pointer-events-none absolute inset-0',
            props.class,
        )
            " />
</template>
