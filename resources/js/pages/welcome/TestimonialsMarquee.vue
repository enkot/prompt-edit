<script setup lang="ts">
import { Marquee } from '@/components/ui/marquee';
import { Quote } from 'lucide-vue-next';

const testimonials = [
    {
        quote:
            'My daughter and I got more editing work done today in 3 hours than we normally do in 3 days!',
        author: 'Hilda Schlueter',
        role: 'Online Course Creator',
        accent: 'var(--accent-lime)',
    },
    {
        quote:
            'My videos wouldn\'t look HALF as good as they do if it wasn\'t for the templates library. I lean into them heavily for every edit.',
        author: 'Matt Lilley',
        role: 'ContentCreator.com Student',
        accent: 'var(--accent-cyan)',
    },
    {
        quote:
            'The templates library is a fantastic resource. I don\'t need any other digital asset subscriptions.',
        author: 'Brady Hales',
        role: 'ContentCreator.com Student',
        accent: 'var(--accent-magenta)',
    },
    {
        quote:
            'Finally — every AI model in one place with a credit balance that doesn\'t expire. This is how it should have been from day one.',
        author: 'Jordan Reyes',
        role: 'YouTube Filmmaker',
        accent: 'var(--accent-amber)',
    },
    {
        quote:
            'The plugins drop generations straight onto my timeline. It saved my last client deadline.',
        author: 'Priya Anand',
        role: 'Freelance Editor',
        accent: 'var(--accent-violet)',
    },
];
</script>

<template>
    <section class="relative overflow-hidden bg-[#ec4899] py-16 sm:py-20 [--muted-foreground:hsl(0_0%_15%)]">
        <div class="mx-auto mb-12 max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <p class="font-mono text-[11px] tracking-[0.3em] text-muted-foreground uppercase">
                What creators are saying
            </p>
            <h2 class="font-display mt-4 text-4xl font-medium tracking-[-0.03em] text-foreground sm:text-6xl">
                Loved by people who <span class="italic font-light">actually ship.</span>
            </h2>
        </div>

        <div aria-hidden="true"
            class="pointer-events-none absolute inset-y-0 left-0 z-10 w-32 bg-gradient-to-r from-[#ec4899] to-transparent" />
        <div aria-hidden="true"
            class="pointer-events-none absolute inset-y-0 right-0 z-10 w-32 bg-gradient-to-l from-[#ec4899] to-transparent" />

        <Marquee pause-on-hover :duration="'70s'" class="[--gap:1.25rem]">
            <figure v-for="t in testimonials" :key="t.author"
                class="flex h-full w-[22rem] shrink-0 flex-col justify-between border border-border bg-background p-7">
                <Quote class="size-7 -scale-x-100" :style="{ color: t.accent }" />
                <blockquote class="mt-4 font-display text-lg leading-relaxed text-foreground">
                    “{{ t.quote }}”
                </blockquote>
                <figcaption class="mt-6 flex items-center gap-3">
                    <span class="grid size-10 place-items-center font-mono text-sm font-bold text-foreground"
                        :style="{ backgroundColor: t.accent }">
                        {{t.author.split(' ').map((p) => p[0]).join('')}}
                    </span>
                    <div>
                        <div class="text-sm font-semibold text-foreground">{{ t.author }}</div>
                        <div class="text-xs text-muted-foreground">{{ t.role }}</div>
                    </div>
                </figcaption>
            </figure>
        </Marquee>
    </section>
</template>
