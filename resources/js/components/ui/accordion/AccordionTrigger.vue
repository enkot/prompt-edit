<script setup lang="ts">
import type { AccordionTriggerProps } from 'reka-ui';
import { AccordionHeader, AccordionTrigger } from 'reka-ui';
import { ChevronDown } from 'lucide-vue-next';
import { cn } from '@/lib/utils';
import type { HTMLAttributes } from 'vue';

const props = defineProps<AccordionTriggerProps & { class?: HTMLAttributes['class'] }>();
</script>

<template>
    <AccordionHeader class="flex">
        <AccordionTrigger data-slot="accordion-trigger" v-bind="props" :class="cn(
            'group flex flex-1 items-start justify-between gap-4 py-5 text-left text-base font-medium text-white outline-none transition-colors hover:text-[var(--accent-lime)] focus-visible:ring-2 focus-visible:ring-[var(--accent-lime)]/60 sm:text-lg',
            props.class,
        )
            ">
            <slot />
            <ChevronDown
                class="size-5 shrink-0 translate-y-0.5 text-white/60 transition-transform duration-300 group-data-[state=open]:rotate-180 group-data-[state=open]:text-[var(--accent-lime)]" />
        </AccordionTrigger>
    </AccordionHeader>
</template>
