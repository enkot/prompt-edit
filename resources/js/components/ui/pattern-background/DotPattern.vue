<script setup lang="ts">
import { cn } from '@/lib/utils';
import { computed, useId } from 'vue';
import type { HTMLAttributes } from 'vue';

const props = withDefaults(
    defineProps<{
        class?: HTMLAttributes['class'];
        width?: number;
        height?: number;
        cx?: number;
        cy?: number;
        cr?: number;
    }>(),
    { width: 16, height: 16, cx: 1, cy: 1, cr: 1 },
);

const rawId = useId();
const id = computed(() => `dot-pattern-${rawId.replace(/[^a-zA-Z0-9-]/g, '')}`);
</script>

<template>
    <svg aria-hidden="true" :class="cn(
        'pointer-events-none absolute inset-0 h-full w-full fill-white/15',
        props.class,
    )
        ">
        <defs>
            <pattern :id="id" :width="props.width" :height="props.height" patternUnits="userSpaceOnUse"
                patternContentUnits="userSpaceOnUse">
                <circle :cx="props.cx" :cy="props.cy" :r="props.cr" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" stroke-width="0" :fill="`url(#${id})`" />
    </svg>
</template>
