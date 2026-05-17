<script setup lang="ts">
import type { AccordionItemProps } from 'reka-ui';
import { AccordionItem, useForwardProps } from 'reka-ui';
import { reactiveOmit } from '@vueuse/core';
import { cn } from '@/lib/utils';
import type { HTMLAttributes } from 'vue';

const props = defineProps<AccordionItemProps & { class?: HTMLAttributes['class'] }>();
const delegated = reactiveOmit(props, 'class');
const forwarded = useForwardProps(delegated);
</script>

<template>
    <AccordionItem data-slot="accordion-item" v-bind="forwarded"
        :class="cn('border-b border-white/10 last:border-b-0', props.class)">
        <slot />
    </AccordionItem>
</template>
