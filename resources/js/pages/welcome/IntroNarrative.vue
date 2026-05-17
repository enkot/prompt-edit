<script setup lang="ts">
import { ShoppingBasket, Fuel, Wallet } from 'lucide-vue-next';

const cards = [
    {
        icon: ShoppingBasket,
        title: 'The grocery store',
        body: 'Every major AI tool, displayed like cereal boxes on a shelf. Pick what you need today, not a whole pantry on subscription.',
        accent: 'var(--accent-lime)',
        text: 'text-foreground',
    },
    {
        icon: Fuel,
        title: 'Pay like gas',
        body: 'AI credits behave like fuel. Put $10 in, drive 200 miles. No meter. No monthly auto-bill you forgot to cancel.',
        accent: 'var(--accent-cyan)',
        text: 'text-foreground',
    },
    {
        icon: Wallet,
        title: 'One balance',
        body: 'Run Veo, Suno, Kling, ElevenLabs, Heygen and 40+ more from one wallet. No tab-juggling. No 12 invoices a month.',
        accent: 'var(--accent-amber)',
        text: 'text-foreground',
    },
];
</script>

<template>
    <section class="relative bg-background py-14 sm:py-18">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <p class="font-mono text-[11px] tracking-[0.3em] text-muted-foreground uppercase">
                    Introducing
                </p>
                <h2
                    class="font-display mt-4 text-balance text-4xl font-medium leading-[0.95] tracking-[-0.03em] text-foreground sm:text-6xl">
                    Think of Prompt Edit like
                    <span class="italic font-light"> a grocery store </span>
                    for every AI tool you ever wanted.
                </h2>
                <p class="mt-6 text-base leading-relaxed text-muted-foreground sm:text-lg">
                    Walk in. Grab what you need. Pay only for what's in your cart.
                    No yearly pantry membership, no shelves of stuff you'll never touch.
                </p>
            </div>

            <div class="mt-16 grid gap-px overflow-hidden border border-border bg-border sm:grid-cols-3">
                <div v-for="card in cards" :key="card.title"
                    class="group relative flex flex-col gap-4 bg-card p-8 transition-colors hover:bg-secondary sm:p-10">
                    <span class="grid size-12 place-items-center" :style="{ backgroundColor: card.accent }">
                        <component :is="card.icon" class="size-5" :class="card.text" />
                    </span>
                    <h3 class="font-display text-2xl font-medium tracking-tight text-foreground">
                        {{ card.title }}
                    </h3>
                    <p class="text-sm leading-relaxed text-muted-foreground sm:text-base">
                        {{ card.body }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
