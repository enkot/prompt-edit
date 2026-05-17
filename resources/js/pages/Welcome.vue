<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import SiteNav from './welcome/SiteNav.vue';
import HeroSection from './welcome/HeroSection.vue';
import ToolsMarquee from './welcome/ToolsMarquee.vue';
import IntroNarrative from './welcome/IntroNarrative.vue';
import ToolCategories from './welcome/ToolCategories.vue';
import ImageCapabilities from './welcome/ImageCapabilities.vue';
import VideoCapabilities from './welcome/VideoCapabilities.vue';
import AudioCapabilities from './welcome/AudioCapabilities.vue';
import PluginsDetail from './welcome/PluginsDetail.vue';
import SoundDemoSection from './welcome/SoundDemoSection.vue';
import PricingSection from './welcome/PricingSection.vue';
import TemplatesLibrary from './welcome/TemplatesLibrary.vue';
import LibraryShowcase from './welcome/LibraryShowcase.vue';
import IdealForYou from './welcome/IdealForYou.vue';
import TestimonialsMarquee from './welcome/TestimonialsMarquee.vue';
import GuaranteeBanner from './welcome/GuaranteeBanner.vue';
import FaqSection from './welcome/FaqSection.vue';
import FinalCta from './welcome/FinalCta.vue';
import SiteFooter from './welcome/SiteFooter.vue';

withDefaults(defineProps<{ canRegister?: boolean }>(), { canRegister: true });
</script>

<template>

    <Head title="Prompt Edit — The AI marketplace for creators">
        <meta name="description"
            content="Pay-as-you-go access to every major AI tool — image, video, audio, and editing plugins. One balance. No subscriptions required." />
    </Head>

    <div
        class="welcome-aggressive relative min-h-screen overflow-x-clip bg-background text-foreground antialiased selection:bg-[var(--accent-lime)] selection:text-foreground">
        <SiteNav :can-register="canRegister" />
        <main>
            <HeroSection :can-register="canRegister" />
            <ToolsMarquee />
            <IntroNarrative />
            <ToolCategories />
            <ImageCapabilities />
            <VideoCapabilities />
            <AudioCapabilities />
            <PluginsDetail />
            <SoundDemoSection />
            <PricingSection :can-register="canRegister" />
            <TemplatesLibrary />
            <LibraryShowcase />
            <IdealForYou :can-register="canRegister" />
            <TestimonialsMarquee />
            <GuaranteeBanner />
            <FaqSection />
            <FinalCta :can-register="canRegister" />
        </main>
        <SiteFooter />
    </div>
</template>
