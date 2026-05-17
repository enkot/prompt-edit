<script setup lang="ts">
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
    <footer class="relative border-t border-border bg-card py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 md:grid-cols-[1.4fr_repeat(3,1fr)]">
                <div class="max-w-sm">
                    <div class="flex items-center gap-2">
                        <span
                            class="grid size-7 place-items-center bg-foreground font-mono text-[10px] font-bold tracking-tight text-background">
                            PE
                        </span>
                        <span class="font-display text-lg font-medium text-foreground">
                            Prompt<span class="italic font-light">.edit</span>
                        </span>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-muted-foreground">
                        The most affordable AI marketplace — every major tool, one balance, no subscriptions required.
                    </p>
                </div>

                <div v-for="col in columns" :key="col.title">
                    <p class="font-mono text-[11px] tracking-[0.3em] text-muted-foreground uppercase">
                        {{ col.title }}
                    </p>
                    <ul class="mt-4 space-y-2.5 text-sm">
                        <li v-for="link in col.links" :key="link.label">
                            <a :href="link.href" class="text-foreground/80 transition-colors hover:text-foreground">
                                {{ link.label }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="mt-14 flex flex-col gap-4 border-t border-border pt-8 text-xs text-muted-foreground sm:flex-row sm:items-center sm:justify-between">
                <p>© 2026 Paul Xavier International LLC. All rights reserved.</p>
                <p>
                    Once AI credits are spent they are non-refundable. Results vary by use.
                </p>
            </div>
        </div>
    </footer>
</template>
