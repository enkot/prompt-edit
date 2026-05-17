<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { register, login } from '@/routes';
import { Check } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';

defineProps<{ canRegister: boolean }>();

const bullets = [
    'You make videos for YouTube, TikTok, Reels or Shorts — and you want every cut to look like Hollywood.',
    'You\'re tired of subscribing to six AI tools and forgetting which one does what.',
    'You want to use Veo, Kling, Suno, ElevenLabs and the rest without ever opening another invoice.',
    'You edit in Premiere, Resolve, Final Cut, or CapCut — and want AI to drop straight onto your timeline.',
    'You care about your time. A 60,000-strong sound library is faster than another Google search.',
    'And of course, you care about the way your work feels. Color, sound, typography — the small stuff that makes the big stuff land.',
];
</script>

<template>
    <section class="relative bg-foreground py-16 text-background sm:py-20">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <p class="font-mono text-[11px] tracking-[0.3em] uppercase" style="color: var(--accent-lime)">
                Reality check
            </p>
            <h2 class="font-display mt-4 text-4xl font-medium leading-[1.02] tracking-[-0.03em] sm:text-6xl">
                A subscription to Prompt Edit is
                <span class="italic font-light"> for you </span>
                if&hellip;
            </h2>

            <ul class="mt-14 flex flex-col gap-0">
                <li v-for="(line, idx) in bullets" :key="idx"
                    class="group flex items-start gap-6 border-t border-background/10 py-7 transition-colors hover:bg-background/[0.04]"
                    :class="{ 'border-b': idx === bullets.length - 1 }">
                    <span
                        class="mt-1 grid size-7 shrink-0 place-items-center border border-background/15 transition-colors group-hover:bg-[var(--accent-lime)] group-hover:text-foreground"
                        :style="idx === bullets.length - 1 ? { backgroundColor: 'var(--accent-lime)', color: 'hsl(0 0% 8%)', borderColor: 'transparent' } : undefined">
                        <Check class="size-3.5" :stroke-width="3" />
                    </span>
                    <p class="text-lg leading-relaxed text-background/85 sm:text-xl">
                        {{ line }}
                    </p>
                </li>
            </ul>

            <div class="mt-14 flex flex-wrap items-center gap-4">
                <Link :href="canRegister ? register.url() : login.url()">
                    <Button size="lg" class="h-14 px-8 text-base font-medium text-foreground"
                        style="background-color: var(--accent-lime);">
                        Yes, this is for me
                    </Button>
                </Link>
                <p class="max-w-sm text-sm text-background/55">
                    Monthly. Cancel any time. 30-day money-back on unused credits.
                </p>
            </div>
        </div>
    </section>
</template>
