<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { register, login } from '@/routes';
import { ArrowRight, PlayCircle, Sparkles } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';
import { BorderBeam } from '@/components/ui/border-beam';
import { DotPattern } from '@/components/ui/pattern-background';
import Spotlight from '@/components/inspira/Spotlight.vue';

defineProps<{ canRegister: boolean }>();

const partners = [
    { name: 'Veo', color: 'var(--accent-cyan)', rotate: '-3deg' },
    { name: 'Kling', color: 'var(--accent-magenta)', rotate: '2deg' },
    { name: 'Suno', color: 'var(--accent-lime)', rotate: '-5deg' },
    { name: 'ElevenLabs', color: 'var(--accent-violet)', rotate: '4deg' },
    { name: 'Nano Banana', color: 'var(--accent-amber)', rotate: '-2deg' },
    { name: 'Ideogram', color: 'var(--accent-cyan)', rotate: '5deg' },
    { name: 'Heygen', color: 'var(--accent-magenta)', rotate: '-4deg' },
    { name: 'Grok', color: 'var(--accent-lime)', rotate: '3deg' },
];

const videoPlaying = ref(false);
const heroThumb =
    'https://embed-ssl.wistia.com/deliveries/57cb867d7a2e5b7cd26e2c5352e678b46243e31d.webp?image_crop_resized=1920x1080';

function playVideo() {
    videoPlaying.value = true;
}
</script>

<template>
    <section id="top" class="relative overflow-hidden">
        <DotPattern :width="22" :height="22" :cr="1"
            class="[mask-image:radial-gradient(ellipse_at_center,white,transparent_75%)] fill-white/10" />
        <!-- <div aria-hidden="true"
            class="pointer-events-none absolute -top-40 left-1/2 h-[480px] w-[900px] -translate-x-1/2 rounded-full bg-[radial-gradient(closest-side,rgba(196,242,76,0.18),transparent)]" /> -->

        <Spotlight class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
            <div class="relative grid items-center gap-12 lg:grid-cols-[1.1fr_1fr]">
                <div>
                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs font-medium text-white/80 backdrop-blur">
                        <Sparkles class="size-3.5 text-[var(--accent-lime)]" />
                        Pay-as-you-go AI marketplace
                    </div>

                    <h1
                        class="mt-6 font-sans text-5xl font-semibold tracking-[-0.04em] text-white sm:text-6xl lg:text-7xl">
                        The grocery store
                        <span class="block">
                            for
                            <span class="relative inline-block text-[var(--accent-lime)]">
                                AI tools.
                                <svg class="absolute -bottom-3 left-0 w-full" height="14" viewBox="0 0 200 14"
                                    fill="none" aria-hidden="true">
                                    <path d="M2 11 Q 50 2, 100 7 T 198 4" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                        </span>
                    </h1>

                    <p class="mt-6 max-w-xl text-lg leading-relaxed text-white/70">
                        One place for every major AI model — image, video,
                        audio, and editing plugins. No subscriptions. Just
                        load credits and create.
                    </p>

                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <Link :href="canRegister ? register.url() : login.url()">
                            <Button size="lg"
                                class="group h-12 bg-[var(--accent-lime)] px-6 text-base text-black hover:bg-[var(--accent-lime)]/90">
                                Start creating
                                <ArrowRight class="size-4 transition-transform group-hover:translate-x-1" />
                            </Button>
                        </Link>
                        <a href="#video">
                            <Button size="lg" variant="outline"
                                class="h-12 border-white/15 bg-white/5 px-5 text-base text-white hover:bg-white/10 hover:text-white">
                                <PlayCircle class="size-4" />
                                Watch the demo
                            </Button>
                        </a>
                    </div>

                    <div class="mt-10 flex items-center gap-6 text-sm text-white/50">
                        <div>
                            <div class="text-2xl font-semibold text-white">40+</div>
                            <div>AI models</div>
                        </div>
                        <div class="h-8 w-px bg-white/10" />
                        <div>
                            <div class="text-2xl font-semibold text-white">$0</div>
                            <div>Subscription</div>
                        </div>
                        <div class="h-8 w-px bg-white/10" />
                        <div>
                            <div class="text-2xl font-semibold text-white">30-day</div>
                            <div>Money-back</div>
                        </div>
                    </div>
                </div>

                <div id="video" class="relative">
                    <div
                        class="relative aspect-video w-full overflow-hidden rounded-2xl border border-white/10 bg-black shadow-[0_30px_80px_-20px_rgba(0,0,0,0.8)]">
                        <BorderBeam :size="260" :duration="12" :border-width="2" />

                        <template v-if="!videoPlaying">
                            <img :src="heroThumb" alt="Prompt Edit demo video preview"
                                class="absolute inset-0 h-full w-full object-cover opacity-90" loading="lazy" />
                            <div aria-hidden="true"
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent" />
                            <button type="button" class="group absolute inset-0 grid place-items-center"
                                aria-label="Play demo video" @click="playVideo">
                                <span class="relative grid place-items-center">
                                    <span
                                        class="animate-pulse-ring absolute inset-0 rounded-full bg-[var(--accent-lime)]/40" />
                                    <span
                                        class="animate-pulse-ring absolute inset-0 rounded-full bg-[var(--accent-lime)]/30 [animation-delay:0.6s]" />
                                    <span
                                        class="relative grid size-20 place-items-center rounded-full bg-[var(--accent-lime)] text-black shadow-2xl transition-transform group-hover:scale-110">
                                        <svg viewBox="0 0 24 24" class="size-8 translate-x-0.5" fill="currentColor"
                                            aria-hidden="true">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </span>
                                </span>
                            </button>
                            <div
                                class="absolute bottom-4 left-4 flex items-center gap-2 rounded-full bg-black/60 px-3 py-1.5 text-xs text-white/90 backdrop-blur">
                                <span class="size-1.5 animate-pulse rounded-full bg-[var(--accent-lime)]" />
                                Watch in 90 seconds
                            </div>
                        </template>
                        <iframe v-else class="absolute inset-0 h-full w-full"
                            src="https://fast.wistia.net/embed/iframe/abcdefghij?autoPlay=true" title="Prompt Edit demo"
                            allow="autoplay; fullscreen" allowfullscreen />
                    </div>

                    <div aria-hidden="true"
                        class="pointer-events-none absolute -inset-x-6 -bottom-6 -z-10 h-32 rounded-full bg-[radial-gradient(closest-side,rgba(34,211,238,0.18),transparent)] blur-2xl" />
                </div>
            </div>

        </Spotlight>
    </section>
</template>
