<script setup lang="ts">
import { onBeforeUnmount, onMounted, ref } from 'vue';

const props = withDefaults(
    defineProps<{
        value: number;
        duration?: number;
        format?: (n: number) => string;
    }>(),
    {
        duration: 1600,
        format: (n: number) => Math.round(n).toLocaleString(),
    },
);

const display = ref(0);
const root = ref<HTMLSpanElement | null>(null);
let started = false;
let rafId = 0;
let observer: IntersectionObserver | null = null;

function start() {
    if (started) return;
    started = true;
    const startedAt = performance.now();
    const tick = (now: number) => {
        const progress = Math.min(1, (now - startedAt) / props.duration);
        const eased = 1 - Math.pow(1 - progress, 3);
        display.value = props.value * eased;
        if (progress < 1) {
            rafId = requestAnimationFrame(tick);
        } else {
            display.value = props.value;
        }
    };
    rafId = requestAnimationFrame(tick);
}

onMounted(() => {
    if (!root.value) return;
    observer = new IntersectionObserver(
        (entries) => {
            for (const entry of entries) {
                if (entry.isIntersecting) {
                    start();
                    observer?.disconnect();
                    break;
                }
            }
        },
        { threshold: 0.25 },
    );
    observer.observe(root.value);
});

onBeforeUnmount(() => {
    cancelAnimationFrame(rafId);
    observer?.disconnect();
});
</script>

<template>
    <span ref="root">{{ props.format(display) }}</span>
</template>
