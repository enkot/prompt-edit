<script setup lang="ts">
import { ShieldCheck, RefreshCcw, Infinity as InfinityIcon } from 'lucide-vue-next';

const points = [
    {
        icon: ShieldCheck,
        title: '30-day money-back',
        body: 'Refund any unused credits within 30 days of signup. No catch, no questions.',
        accent: 'var(--accent-lime)',
    },
    {
        icon: RefreshCcw,
        title: 'Cancel any time',
        body: 'Subscriptions cancel from your dashboard in a single click.',
        accent: 'var(--accent-cyan)',
    },
    {
        icon: InfinityIcon,
        title: 'Unlimited downloads',
        body: 'Subscribers get unlimited downloads and unlimited commercial usage.',
        accent: 'var(--accent-amber)',
    },
];
</script>

<template>
    <section class="relative bg-background py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-0 border border-border md:grid-cols-3">
                <div v-for="p in points" :key="p.title"
                    class="group flex items-start gap-4 border-border bg-card p-8 transition-colors hover:bg-secondary sm:p-10 md:[&:not(:last-child)]:border-r">
                    <span class="grid size-12 shrink-0 place-items-center" :style="{ backgroundColor: p.accent }">
                        <component :is="p.icon" class="size-5 text-foreground" />
                    </span>
                    <div>
                        <h3 class="font-display text-xl font-medium text-foreground">
                            {{ p.title }}
                        </h3>
                        <p class="mt-2 text-sm text-muted-foreground">{{ p.body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
