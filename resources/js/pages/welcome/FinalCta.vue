<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { register, login } from '@/routes';
import { ArrowRight } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';
import { WavyBackground } from '@/components/ui/wavy-background';

defineProps<{ canRegister: boolean }>();
</script>

<template>
    <section class="relative isolate overflow-hidden bg-foreground">
        <WavyBackground container-class="!h-auto min-h-[420px] sm:min-h-[520px] py-16 sm:py-20 w-full"
            class="relative z-10 mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8" background-fill="#141414"
            :colors="['#b6eb27', '#06b6d4', '#ec4899', '#f59e0b', '#8b5cf6']" :wave-width="60" :blur="14" speed="slow"
            :wave-opacity="0.4">
            <p class="font-mono text-[11px] tracking-[0.3em] uppercase" style="color: var(--accent-lime)">
                One last thing
            </p>
            <h2
                class="font-display mt-5 text-balance text-5xl font-medium leading-[0.95] tracking-[-0.03em] text-background sm:text-7xl lg:text-8xl">
                Pick the cart.
                <span class="block italic font-light">Skip the subscription.</span>
            </h2>
            <p class="mx-auto mt-8 max-w-2xl text-base leading-relaxed text-background/70 sm:text-lg">
                100,000+ creative assets. 40+ AI tools. One balance.
                Start with credits, or unlock the whole library for the
                price of one premium pack.
            </p>

            <div class="mt-12 flex flex-wrap items-center justify-center gap-4">
                <Link :href="canRegister ? register.url() : login.url()">
                    <Button size="lg" class="group h-14 px-8 text-base font-medium text-foreground"
                        style="background-color: var(--accent-lime);">
                        Grab the deal
                        <ArrowRight class="size-4 transition-transform group-hover:translate-x-1" />
                    </Button>
                </Link>
                <a href="#pricing">
                    <Button variant="outline" size="lg"
                        class="h-14 border-background/30 bg-transparent px-6 text-base text-background hover:bg-background/10 hover:text-background">
                        See pricing
                    </Button>
                </a>
            </div>

            <p class="mt-8 font-mono text-xs tracking-wider text-background/45 uppercase">
                30-day refund · Cancel any time · No hidden fees
            </p>
        </WavyBackground>
    </section>
</template>
