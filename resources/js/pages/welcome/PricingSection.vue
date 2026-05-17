<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { register, login } from '@/routes';
import { Check, Zap, Infinity as InfinityIcon } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';
import { BorderBeam } from '@/components/ui/border-beam';

defineProps<{ canRegister: boolean }>();

const oneTime = [
    '$110 worth of AI credits',
    '10% bonus on this purchase',
    'No subscription — credits never expire monthly',
    'Use across every tool on the platform',
    'Top up any time',
];

const subscription = [
    '$49 worth of credits every month',
    'Lifetime 20% bonus on monthly credits',
    '10% discount on every additional top-up',
    'Unlimited access to 100,000+ templates',
    'Faster generation queues',
    'Run multiple generations at once',
    'Cancel any time',
];
</script>

<template>
    <section id="pricing" class="relative bg-background py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="font-mono text-[11px] tracking-[0.3em] text-muted-foreground uppercase">
                    Simple pricing
                </p>
                <h2 class="font-display mt-4 text-4xl font-medium tracking-[-0.03em] text-foreground sm:text-6xl">
                    Pay for <span class="italic font-light">what you use.</span>
                </h2>
                <p class="mt-5 text-base text-muted-foreground sm:text-lg">
                    Credits are like gas — drop them in, drive wherever you want.
                    Or subscribe for monthly fuel and the full template library.
                </p>
            </div>

            <div class="mx-auto mt-14 grid max-w-5xl gap-0 border border-border md:grid-cols-2">
                <div class="relative flex flex-col bg-card p-8 sm:p-10">
                    <div
                        class="flex items-center gap-2 font-mono text-[11px] tracking-[0.3em] text-muted-foreground uppercase">
                        <Zap class="size-3.5" />
                        One-time
                    </div>
                    <h3 class="font-display mt-3 text-3xl font-medium text-foreground">Credit pack</h3>
                    <p class="mt-2 text-sm text-muted-foreground">
                        Best for trying every tool without locking into a monthly bill.
                    </p>
                    <div class="mt-6 flex items-baseline gap-2">
                        <span class="font-display text-6xl font-black tracking-[-0.04em] text-foreground">$98</span>
                        <span class="text-sm text-muted-foreground">one time</span>
                    </div>
                    <p class="mt-2 font-mono text-xs tracking-wider uppercase" style="color: var(--accent-magenta);">
                        $110 in credits · 10% bonus
                    </p>
                    <ul class="mt-8 space-y-3 text-sm text-foreground/90">
                        <li v-for="item in oneTime" :key="item" class="flex items-start gap-2.5">
                            <Check class="mt-0.5 size-4 shrink-0" style="color: var(--accent-lime);" />
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                    <Link :href="canRegister ? register.url() : login.url()" class="mt-8 block">
                        <Button variant="outline" size="lg"
                            class="w-full border-2 border-foreground bg-background font-bold uppercase tracking-wider text-foreground hover:bg-foreground hover:text-background">
                            Claim deal
                        </Button>
                    </Link>
                </div>

                <div class="relative flex flex-col overflow-hidden bg-foreground p-8 text-background sm:p-10">
                    <BorderBeam :size="380" :duration="10" :border-width="2" color-from="#b6eb27" color-to="#06b6d4" />
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2 font-mono text-[11px] tracking-[0.3em] uppercase"
                            style="color: var(--accent-lime);">
                            <InfinityIcon class="size-3.5" />
                            Subscription
                        </div>
                        <span
                            class="px-2.5 py-1 font-mono text-[10px] font-bold tracking-wider text-foreground uppercase"
                            style="background-color: var(--accent-lime);">
                            Most popular
                        </span>
                    </div>
                    <h3 class="font-display mt-3 text-3xl font-medium">All-access</h3>
                    <p class="mt-2 text-sm text-background/70">
                        Save more on credits and unlock the full Content Creator Templates Library.
                    </p>
                    <div class="mt-6 flex items-baseline gap-2">
                        <span class="font-display text-6xl font-black tracking-[-0.04em]">$39</span>
                        <span class="text-sm text-background/60">/ month</span>
                    </div>
                    <p class="mt-2 font-mono text-xs tracking-wider uppercase" style="color: var(--accent-lime);">
                        $49 credits/mo · 20% lifetime bonus
                    </p>
                    <ul class="mt-8 space-y-3 text-sm text-background/90">
                        <li v-for="item in subscription" :key="item" class="flex items-start gap-2.5">
                            <Check class="mt-0.5 size-4 shrink-0" style="color: var(--accent-lime);" />
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                    <Link :href="canRegister ? register.url() : login.url()" class="mt-8 block">
                        <Button size="lg"
                            class="w-full border-2 border-background font-bold uppercase tracking-wider text-foreground hover:opacity-90"
                            style="background-color: var(--accent-lime);">
                            Start all-access
                        </Button>
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>
