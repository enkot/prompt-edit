<script setup lang="ts">
import type { AccordionRootEmits, AccordionRootProps } from 'reka-ui';
import { AccordionRoot, useForwardPropsEmits } from 'reka-ui';
import { reactiveOmit } from '@vueuse/core';
import { cn } from '@/lib/utils';
import type { HTMLAttributes } from 'vue';

const props = defineProps<AccordionRootProps & { class?: HTMLAttributes['class'] }>();
const emits = defineEmits<AccordionRootEmits>();
const delegated = reactiveOmit(props, 'class');
const forwarded = useForwardPropsEmits(delegated, emits);
</script>

<template>
    <AccordionRoot data-slot="accordion" v-bind="forwarded" :class="cn(props.class)">
        <slot />
    </AccordionRoot>
</template>
