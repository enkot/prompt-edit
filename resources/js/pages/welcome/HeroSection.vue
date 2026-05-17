<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { register, login } from '@/routes';
import { ArrowRight, PlayCircle, Sparkles } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';
import { BorderBeam } from '@/components/ui/border-beam';
import { VideoText } from '@/components/ui/video-text';
import { LiquidBackground } from '@/components/ui/liquid-background';
import { ContainerScroll } from '@/components/ui/container-scroll';

defineProps<{ canRegister: boolean }>();

const partners = [
    { name: 'Veo', color: 'var(--accent-cyan)' },
    { name: 'Kling', color: 'var(--accent-magenta)' },
    { name: 'Suno', color: 'var(--accent-lime)' },
    { name: 'ElevenLabs', color: 'var(--accent-violet)' },
    { name: 'Nano Banana', color: 'var(--accent-amber)' },
    { name: 'Ideogram', color: 'var(--accent-cyan)' },
    { name: 'Heygen', color: 'var(--accent-magenta)' },
    { name: 'Grok', color: 'var(--accent-lime)' },
];

const videoPlaying = ref(false);
const heroThumb = '/thumbnail.png';

const videoTextSrc = '/ocean-small.webm';

function playVideo() {
    videoPlaying.value = true;
}
</script>

<template>
    <section id="top" class="relative isolate overflow-hidden bg-background pt-24 pb-12 sm:pt-28 sm:pb-16">
        <div aria-hidden="true"
            class="pointer-events-none absolute -top-32 right-[-10%] -z-10 h-[640px] w-[640px] rotate-6 opacity-70"
            style="mask-image: radial-gradient(closest-side, black 55%, transparent 90%);
                   -webkit-mask-image: radial-gradient(closest-side, black 55%, transparent 90%);">
            <LiquidBackground class="size-full" />
        </div>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center gap-3 text-center">
                <div class="animate-reveal-up flex max-w-4xl flex-col items-center">
                    <!-- <div
                        class="inline-flex items-center gap-2 border border-border bg-card px-3 py-1 font-mono text-[11px] tracking-[0.25em] text-foreground/80 uppercase">
                        <Sparkles class="size-3.5" :stroke-width="2.5" style="color: var(--accent-magenta);" />
                        Pay-as-you-go AI marketplace
                    </div> -->

                    <div class="mt-6 h-[12vw] min-h-[110px] max-h-[220px] w-full">
                        <VideoText :src="videoTextSrc" :font-size="12" font-weight="800" text-anchor="middle">
                            Prompt.EDIT
                        </VideoText>
                    </div>

                    <h1 class=" font-display mx-auto max-w-3xl text-balance text-5xl font-black leading-[0.95]
                            tracking-[-0.04em] text-foreground sm:text-6xl lg:text-6xl">
                        The grocery store for
                        <span class="italic font-light normal-case">AI tools.</span>
                    </h1>

                    <p class="mx-auto mt-6 max-w-xl text-base leading-relaxed text-muted-foreground sm:text-lg">
                        Every major AI model — image, video, audio, and editing plugins —
                        in one place. No subscriptions. Just load credits and create.
                    </p>

                    <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                        <Link :href="canRegister ? register.url() : login.url()">
                            <Button size="lg"
                                class="group h-12 border-2 border-foreground px-6 text-base font-bold uppercase tracking-wider text-foreground hover:opacity-90"
                                style="background-color: var(--accent-lime);">
                                Start creating
                                <ArrowRight class="size-4 transition-transform group-hover:translate-x-1" />
                            </Button>
                        </Link>
                        <a href="#video">
                            <Button size="lg" variant="outline"
                                class="h-12 border-2 border-foreground bg-card px-5 text-base font-bold uppercase tracking-wider text-foreground hover:bg-foreground hover:text-background">
                                <PlayCircle class="size-4" />
                                Watch the demo
                            </Button>
                        </a>
                    </div>

                    <div class="mt-10 flex items-center justify-center gap-6 text-sm text-muted-foreground">
                        <div>
                            <div class="font-display text-2xl font-medium text-foreground">40+</div>
                            <div>AI models</div>
                        </div>
                        <div class="h-8 w-px bg-border" />
                        <div>
                            <div class="font-display text-2xl font-medium text-foreground">$0</div>
                            <div>Subscription</div>
                        </div>
                        <div class="h-8 w-px bg-border" />
                        <div>
                            <div class="font-display text-2xl font-medium text-foreground">30-day</div>
                            <div>Money-back</div>
                        </div>
                    </div>
                </div>

                <div id="video" class="animate-reveal-up-slow relative w-full -mt-64 -mb-80">
                    <ContainerScroll>
                        <template #card>
                            <div class="relative h-full w-full overflow-hidden">
                                <!-- <BorderBeam :size="320" :duration="14" :border-width="2" color-from="#b6eb27"
                                    color-to="#06b6d4" /> -->

                                <template v-if="!videoPlaying">
                                    <img :src="heroThumb" alt="Prompt Edit demo video preview"
                                        class="absolute inset-0 h-full w-full object-cover" loading="lazy" />
                                    <div aria-hidden="true"
                                        class="absolute inset-0 bg-gradient-to-t from-foreground/40 via-transparent to-transparent" />
                                    <button type="button" class="group absolute inset-0 grid place-items-center"
                                        aria-label="Play demo video" @click="playVideo">
                                        <span class="relative grid place-items-center">
                                            <span class="animate-pulse-ring absolute inset-0 rounded-full"
                                                style="background-color: rgba(182, 235, 39, 0.5);" />
                                            <span
                                                class="animate-pulse-ring absolute inset-0 rounded-full [animation-delay:0.6s]"
                                                style="background-color: rgba(182, 235, 39, 0.35);" />
                                            <span
                                                class="relative grid size-20 place-items-center rounded-full text-foreground shadow-2xl transition-transform group-hover:scale-110"
                                                style="background-color: var(--accent-lime);">
                                                <svg viewBox="0 0 24 24" class="size-8 translate-x-0.5"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path d="M8 5v14l11-7z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                    <div
                                        class="absolute bottom-4 left-4 flex items-center gap-2 bg-background/90 px-3 py-1.5 text-xs font-medium text-foreground backdrop-blur">
                                        <span class="size-1.5 animate-pulse"
                                            style="background-color: var(--accent-lime);" />
                                        Watch in 90 seconds
                                    </div>
                                </template>
                                <iframe v-else class="absolute inset-0 h-full w-full"
                                    src="https://fast.wistia.net/embed/iframe/abcdefghij?autoPlay=true"
                                    title="Prompt Edit demo" allow="autoplay; fullscreen" allowfullscreen />
                            </div>
                        </template>
                    </ContainerScroll>
                </div>

            </div>
        </div>
    </section>
</template>
