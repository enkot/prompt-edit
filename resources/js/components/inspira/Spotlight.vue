<script setup lang="ts">
import { cn } from '@/lib/utils';
import { ref } from 'vue';
import type { HTMLAttributes } from 'vue';

const props = withDefaults(
    defineProps<{
        class?: HTMLAttributes['class'];
        color?: string;
        size?: number;
    }>(),
    { color: 'rgba(196, 242, 76, 0.18)', size: 520 },
);

const container = ref<HTMLDivElement | null>(null);
const x = ref(0);
const y = ref(0);
const visible = ref(false);

function onMove(event: MouseEvent) {
    if (!container.value) return;
    const rect = container.value.getBoundingClientRect();
    x.value = event.clientX - rect.left;
    y.value = event.clientY - rect.top;
    visible.value = true;
}
function onLeave() {
    visible.value = false;
}
</script>

<template>
    <div ref="container" :class="cn('group relative', props.class)" @mousemove="onMove" @mouseleave="onLeave">
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-0 transition-opacity duration-300"
            :style="{
                opacity: visible ? 1 : 0,
                background: `radial-gradient(${props.size}px circle at ${x}px ${y}px, ${props.color}, transparent 60%)`,
            }" />
        <slot />
    </div>
</template>
