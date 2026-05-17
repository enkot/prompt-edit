<script setup lang="ts">
import { ShieldCheck, RefreshCcw, Infinity as InfinityIcon } from 'lucide-vue-next';

const points = [
    {
        icon: ShieldCheck,
        title: '30-day money-back',
        body: 'Refund any unused credits within 30 days of signup. No catch, no questions.',
    },
    {
        icon: RefreshCcw,
        title: 'Cancel any time',
        body: 'Subscriptions cancel from your dashboard in a single click.',
    },
    {
        icon: InfinityIcon,
        title: 'Unlimited downloads',
        body: 'Subscribers get unlimited downloads and unlimited commercial usage.',
    },
];
</script>

<template>
    <section class="relative py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03] px-6 py-10 sm:px-10 sm:py-14">
                <div aria-hidden="true"
                    class="pointer-events-none absolute -top-24 -right-24 size-72 rounded-full bg-[radial-gradient(closest-side,rgba(196,242,76,0.18),transparent)]" />
                <div class="grid gap-10 lg:grid-cols-3">
                    <div v-for="p in points" :key="p.title" class="flex items-start gap-4">
                        <span
                            class="grid size-12 shrink-0 place-items-center rounded-2xl bg-[var(--accent-lime)] text-black">
                            <component :is="p.icon" class="size-5" />
                        </span>
                        <div>
                            <h3 class="text-lg font-semibold text-white">
                                {{ p.title }}
                            </h3>
                            <p class="mt-1.5 text-sm text-white/65">{{ p.body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
