<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import SiteNav from './welcome/SiteNav.vue';
import HeroSection from './welcome/HeroSection.vue';
import ToolsMarquee from './welcome/ToolsMarquee.vue';
import ToolCategories from './welcome/ToolCategories.vue';
import SoundDemoSection from './welcome/SoundDemoSection.vue';
import PricingSection from './welcome/PricingSection.vue';
import TemplatesLibrary from './welcome/TemplatesLibrary.vue';
import TestimonialsMarquee from './welcome/TestimonialsMarquee.vue';
import GuaranteeBanner from './welcome/GuaranteeBanner.vue';
import FaqSection from './welcome/FaqSection.vue';
import SiteFooter from './welcome/SiteFooter.vue';

withDefaults(defineProps<{ canRegister?: boolean }>(), { canRegister: true });
</script>

<template>

    <Head title="Prompt Edit — The AI marketplace for creators">
        <meta name="description"
            content="Pay-as-you-go access to every major AI tool — image, video, audio, and editing plugins. One balance. No subscriptions required." />
    </Head>

    <div class="dark relative min-h-screen overflow-x-clip bg-background text-foreground antialiased">
        <SiteNav :can-register="canRegister" />
        <main>
            <HeroSection :can-register="canRegister" />
            <ToolsMarquee />
            <ToolCategories />
            <SoundDemoSection />
            <PricingSection :can-register="canRegister" />
            <TemplatesLibrary />
            <TestimonialsMarquee />
            <GuaranteeBanner />
            <FaqSection />
        </main>
        <SiteFooter />
    </div>
</template>
