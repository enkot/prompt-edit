<script setup lang="ts">
import { type Component, ref } from 'vue';
import { Play } from 'lucide-vue-next';

interface Capability {
    title: string;
    description: string;
    icon: Component;
    video?: string;
    poster?: string;
    wistiaId?: string;
}

const props = defineProps<{
    id?: string;
    eyebrow: string;
    title: string;
    titleAccent?: string;
    description: string;
    capabilities: Capability[];
    accent: string;
    invertText?: boolean;
}>();

const playing = ref(new Set<number>());

function play(index: number) {
    playing.value = new Set([...playing.value, index]);
}
</script>

<template>
    <section :id="id"
        class="relative overflow-hidden bg-[#0a0a0a] py-16 text-[hsl(0_0%_98%)] [--muted-foreground:hsl(0_0%_75%)] sm:py-20">
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-0 opacity-60" :style="{
            background:
                `radial-gradient(60% 50% at 15% 0%, ${accent}33 0%, transparent 70%),` +
                `radial-gradient(50% 40% at 90% 100%, ${accent}26 0%, transparent 75%)`,
        }" />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-start justify-between gap-6 sm:flex-row sm:items-end">
                <div class="max-w-2xl">
                    <p class="font-mono text-[11px] tracking-[0.3em] uppercase" :style="{ color: accent }">
                        {{ eyebrow }}
                    </p>
                    <h2 class="font-display mt-4 text-4xl font-medium leading-[1.02] tracking-[-0.03em] sm:text-6xl">
                        {{ title }}
                        <span v-if="titleAccent" class="block italic font-light" :style="{ color: accent }">{{
                            titleAccent }}</span>
                    </h2>
                </div>
                <p class="max-w-md text-base text-white/70">{{ description }}</p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-6">
                <article v-for="(cap, i) in props.capabilities" :key="cap.title"
                    class="group lg:col-span-2 flex flex-col border border-white/10 bg-white/[0.04] transition-colors hover:bg-white/[0.08]">
                    <div class="relative aspect-video w-full overflow-hidden bg-white/[0.06]"
                        :class="i === 5 ? 'lg:aspect-auto lg:w-1/2 lg:self-stretch' : ''">
                        <template v-if="!playing.has(i)">
                            <img v-if="cap.poster" :src="cap.poster" :alt="cap.title"
                                class="absolute inset-0 size-full object-cover transition-transform duration-500 group-hover:scale-105"
                                loading="lazy" />
                            <div aria-hidden="true"
                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent" />
                            <button type="button" class="absolute inset-0 grid place-items-center"
                                :aria-label="`Preview ${cap.title}`" @click="play(i)">
                                <span
                                    class="grid size-14 place-items-center rounded-full bg-white text-black shadow-lg transition-transform group-hover:scale-110">
                                    <Play class="size-5 translate-x-0.5" fill="currentColor" :stroke-width="0" />
                                </span>
                            </button>
                            <!-- <div
                                class="absolute bottom-3 left-3 flex items-center gap-2 bg-white/95 px-2.5 py-1 font-mono text-[10px] tracking-[0.2em] text-black uppercase">
                                Click to preview
                            </div> -->
                        </template>
                        <iframe v-else-if="cap.wistiaId" class="absolute inset-0 size-full"
                            :src="`https://fast.wistia.net/embed/iframe/${cap.wistiaId}?autoPlay=true`"
                            :title="cap.title" allow="autoplay; fullscreen" allowfullscreen />
                        <video v-else class="absolute inset-0 size-full object-cover" :src="cap.video"
                            :poster="cap.poster" autoplay controls playsinline />
                    </div>

                    <div class="flex flex-col gap-2 p-6 sm:p-7"
                        :class="i === 5 ? 'lg:flex-1 lg:justify-center lg:p-10' : ''">
                        <h3 class="font-display flex gap-2 items-center text-xl font-medium tracking-tight sm:text-2xl"
                            :class="i === 5 ? 'lg:text-3xl' : ''">
                            <component :is="cap.icon" class="size-6" :stroke-width="2.5" />
                            <span>{{ cap.title }}</span>
                        </h3>
                        <p class="text-sm leading-relaxed text-white/70 sm:text-base"
                            :class="i === 5 ? 'lg:max-w-md lg:text-lg' : ''">
                            {{ cap.description }}
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
