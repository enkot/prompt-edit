<script setup lang="ts">
import { Sparkles } from 'lucide-vue-next';

const columns = [
    {
        title: 'Product',
        links: [
            { label: 'AI Image Tools', href: '#tools' },
            { label: 'AI Video Tools', href: '#tools' },
            { label: 'AI Audio Tools', href: '#tools' },
            { label: 'Editing Plugins', href: '#tools' },
            { label: 'Templates Library', href: '#templates' },
        ],
    },
    {
        title: 'Company',
        links: [
            { label: 'Pricing', href: '#pricing' },
            { label: 'FAQ', href: '#faq' },
            { label: 'Affiliates', href: '#' },
            { label: 'Contact', href: '#' },
        ],
    },
    {
        title: 'Legal',
        links: [
            { label: 'Terms', href: '#' },
            { label: 'Privacy', href: '#' },
            { label: 'Earnings disclaimer', href: '#' },
            { label: 'Refund policy', href: '#' },
        ],
    },
];
</script>

<template>
    <footer class="relative border-t border-white/10 bg-black/60 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 md:grid-cols-[1.4fr_repeat(3,1fr)]">
                <div class="max-w-sm">
                    <div class="flex items-center gap-2">
                        <span class="grid size-8 place-items-center rounded-lg bg-[var(--accent-lime)] text-black">
                            <Sparkles class="size-4" :stroke-width="2.5" />
                        </span>
                        <span class="font-semibold text-white">
                            prompt<span class="text-[var(--accent-lime)]">.edit</span>
                        </span>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-white/55">
                        The most affordable AI marketplace — every major
                        tool, one balance, no subscriptions required.
                    </p>
                </div>

                <div v-for="col in columns" :key="col.title">
                    <p class="text-xs font-semibold tracking-widest text-white/40 uppercase">
                        {{ col.title }}
                    </p>
                    <ul class="mt-4 space-y-2.5 text-sm">
                        <li v-for="link in col.links" :key="link.label">
                            <a :href="link.href" class="text-white/70 transition-colors hover:text-white">
                                {{ link.label }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="mt-14 flex flex-col gap-4 border-t border-white/10 pt-8 text-xs text-white/45 sm:flex-row sm:items-center sm:justify-between">
                <p>© 2026 Paul Xavier International LLC. All rights reserved.</p>
                <p>
                    Once AI credits are spent they are non-refundable.
                    Results vary by use.
                </p>
            </div>
        </div>
    </footer>
</template>
