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
    <section id="pricing" class="relative py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-xs font-medium tracking-widest text-[var(--accent-lime)] uppercase">
                    Simple pricing
                </p>
                <h2 class="mt-3 text-4xl font-semibold tracking-[-0.03em] text-white sm:text-5xl">
                    Pay for what you use.
                </h2>
                <p class="mt-4 text-lg text-white/60">
                    Think of credits like gas — drop them in, drive wherever
                    you want. Or subscribe for monthly fuel + the full
                    template library.
                </p>
            </div>

            <div class="mx-auto mt-14 grid max-w-5xl gap-6 md:grid-cols-2">
                <div
                    class="relative flex flex-col rounded-3xl border border-white/10 bg-white/[0.02] p-8 backdrop-blur">
                    <div class="flex items-center gap-2 text-xs font-semibold tracking-widest text-white/50 uppercase">
                        <Zap class="size-3.5" />
                        One-time
                    </div>
                    <h3 class="mt-3 text-2xl font-semibold text-white">Credit pack</h3>
                    <p class="mt-2 text-sm text-white/60">
                        Best for trying every tool without locking into a
                        monthly bill.
                    </p>
                    <div class="mt-6 flex items-baseline gap-2">
                        <span class="text-5xl font-semibold tracking-tight text-white">$98</span>
                        <span class="text-sm text-white/50">one time</span>
                    </div>
                    <p class="mt-1 text-sm text-[var(--accent-lime)]">
                        Get $110 worth of credits · 10% bonus
                    </p>
                    <ul class="mt-8 space-y-3 text-sm text-white/80">
                        <li v-for="item in oneTime" :key="item" class="flex items-start gap-2.5">
                            <Check class="mt-0.5 size-4 shrink-0 text-[var(--accent-lime)]" />
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                    <Link :href="canRegister ? register.url() : login.url()" class="mt-8 block">
                        <Button variant="outline" size="lg"
                            class="w-full border-white/15 bg-white/5 text-white hover:bg-white/10 hover:text-white">
                            Claim deal
                        </Button>
                    </Link>
                </div>

                <div
                    class="relative flex flex-col overflow-hidden rounded-3xl border border-[var(--accent-lime)]/30 bg-gradient-to-b from-[var(--accent-lime)]/[0.08] to-transparent p-8 backdrop-blur">
                    <BorderBeam :size="320" :duration="10" :border-width="2" />
                    <div class="flex items-center justify-between">
                        <div
                            class="flex items-center gap-2 text-xs font-semibold tracking-widest text-[var(--accent-lime)] uppercase">
                            <InfinityIcon class="size-3.5" />
                            Subscription
                        </div>
                        <span
                            class="rounded-full bg-[var(--accent-lime)] px-2.5 py-1 text-[10px] font-bold tracking-wider text-black uppercase">
                            Most popular
                        </span>
                    </div>
                    <h3 class="mt-3 text-2xl font-semibold text-white">All-access</h3>
                    <p class="mt-2 text-sm text-white/70">
                        Save even more on credits and unlock the full
                        Content Creator Templates Library.
                    </p>
                    <div class="mt-6 flex items-baseline gap-2">
                        <span class="text-5xl font-semibold tracking-tight text-white">$39</span>
                        <span class="text-sm text-white/60">/ month</span>
                    </div>
                    <p class="mt-1 text-sm text-[var(--accent-lime)]">
                        $49 credits/mo · 20% lifetime bonus
                    </p>
                    <ul class="mt-8 space-y-3 text-sm text-white/85">
                        <li v-for="item in subscription" :key="item" class="flex items-start gap-2.5">
                            <Check class="mt-0.5 size-4 shrink-0 text-[var(--accent-lime)]" />
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                    <Link :href="canRegister ? register.url() : login.url()" class="mt-8 block">
                        <Button size="lg"
                            class="w-full bg-[var(--accent-lime)] text-black hover:bg-[var(--accent-lime)]/90">
                            Start all-access
                        </Button>
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>
