<script setup lang="ts">
import { useElementBounding, useWindowScroll, useWindowSize } from "@vueuse/core";
import { computed, onMounted, onUnmounted, ref } from "vue";
import ContainerScrollCard from "./ContainerScrollCard.vue";
import ContainerScrollTitle from "./ContainerScrollTitle.vue";

const containerRef = ref(null);
const isMobile = ref(false);

function updateIsMobile() {
    isMobile.value = window.innerWidth <= 768;
}

onMounted(() => {
    updateIsMobile();
    window.addEventListener("resize", updateIsMobile);
});

onUnmounted(() => {
    window.removeEventListener("resize", updateIsMobile);
});

const { height } = useWindowSize();
const { y: scrollY } = useWindowScroll();
const { bottom } = useElementBounding(containerRef);

const scrollYProgress = computed(() => {
    if (!bottom.value) return 0;
    return 1 - Math.max(0, bottom.value - scrollY.value) / height.value;
});

const scaleDimensions = computed(() => (isMobile.value ? [0.7, 0.9] : [1.05, 1])
);

const rotate = computed(() => 20 * Math.max(0, 1 - scrollYProgress.value * 2.5));
const scale = computed(() => {
    const [start, end] = scaleDimensions.value;
    return start + (end - start) * scrollYProgress.value;
});
const translateY = computed(() => -100 * scrollYProgress.value);
</script>

<template>
    <div ref="containerRef" class="relative flex h-240 items-center justify-center p-0.5 md:h-320 md:p-5">
        <div class="relative w-full py-2.5 md:py-10" style="perspective: 1000px">
            <ContainerScrollTitle :translate="translateY">
                <slot name="title" />
            </ContainerScrollTitle>
            <ContainerScrollCard :rotate="rotate" :scale="scale">
                <slot name="card" />
            </ContainerScrollCard>
        </div>
    </div>
</template>
