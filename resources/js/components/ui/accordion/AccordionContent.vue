<script setup lang="ts">
import type { AccordionContentProps } from 'reka-ui';
import { AccordionContent } from 'reka-ui';
import { cn } from '@/lib/utils';
import type { HTMLAttributes } from 'vue';

const props = defineProps<AccordionContentProps & { class?: HTMLAttributes['class'] }>();
</script>

<template>
    <AccordionContent data-slot="accordion-content" v-bind="props"
        class="overflow-hidden text-base text-muted-foreground transition-all data-[state=closed]:animate-[accordion-up_220ms_ease-out] data-[state=open]:animate-[accordion-down_220ms_ease-out] sm:text-lg">
        <div :class="cn('pt-0 pb-5 pr-8', props.class)">
            <slot />
        </div>
    </AccordionContent>
</template>
