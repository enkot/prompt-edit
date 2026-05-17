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
    <section class="relative overflow-hidden py-20">
        <div class="mx-auto mb-10 max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <p class="text-xs font-medium tracking-widest text-[var(--accent-lime)] uppercase">
                What creators are saying
            </p>
            <h2 class="mt-3 text-4xl font-semibold tracking-[-0.03em] text-white sm:text-5xl">
                Loved by people who actually ship.
            </h2>
        </div>

        <div aria-hidden="true"
            class="pointer-events-none absolute inset-y-0 left-0 z-10 w-32 bg-gradient-to-r from-black to-transparent" />
        <div aria-hidden="true"
            class="pointer-events-none absolute inset-y-0 right-0 z-10 w-32 bg-gradient-to-l from-black to-transparent" />

        <Marquee pause-on-hover :duration="'70s'" class="[--gap:1.25rem]">
            <figure v-for="t in testimonials" :key="t.author"
                class="flex h-full w-[22rem] shrink-0 flex-col justify-between rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur">
                <Quote class="size-6 -scale-x-100" :style="{ color: t.accent }" />
                <blockquote class="mt-4 text-base leading-relaxed text-white/90">
                    “{{ t.quote }}”
                </blockquote>
                <figcaption class="mt-6 flex items-center gap-3">
                    <span class="grid size-10 place-items-center rounded-full text-sm font-semibold text-black"
                        :style="{ backgroundColor: t.accent }">
                        {{t.author.split(' ').map((p) => p[0]).join('')}}
                    </span>
                    <div>
                        <div class="text-sm font-semibold text-white">{{ t.author }}</div>
                        <div class="text-xs text-white/55">{{ t.role }}</div>
                    </div>
                </figcaption>
            </figure>
        </Marquee>
    </section>
</template>
