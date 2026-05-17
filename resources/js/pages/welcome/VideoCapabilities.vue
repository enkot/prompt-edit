<script setup lang="ts">
import {
    Film,
    Sparkles,
    Clapperboard,
    Tv,
    Smartphone,
    Repeat,
} from 'lucide-vue-next';
import ToolCapabilities from './ToolCapabilities.vue';

const capabilities = [
    {
        title: 'Clone Videos',
        description: 'Turn a single avatar into spokesperson takes, lip-synced in any language.',
        icon: Repeat,
        poster: '/previews/clone-videos.jpg',
        wistiaId: 'v39qn2mla0',
    },
    {
        title: 'Visual Effects',
        description: 'Add cinematic effects, transitions, and motion graphics from a prompt.',
        icon: Sparkles,
        poster: '/previews/visual-effects.jpg',
        wistiaId: 'qx4qain2eg',
    },
    {
        title: 'Cinematic Films',
        description: 'Storyboards to finished shots — generate sequences with consistent characters.',
        icon: Clapperboard,
        poster: '/previews/cinematic-films.jpg',
        wistiaId: '3rllmh5doc',
    },
    {
        title: 'Video Ads',
        description: 'Test ad concepts in hours, not weeks. Multiple variations from one brief.',
        icon: Tv,
        poster: '/previews/video-ads.jpg',
        wistiaId: '1muopqfwh6',
    },
    {
        title: 'Reels & TikToks',
        description: 'Vertical-first cuts, captions, and hooks generated for the algorithm.',
        icon: Smartphone,
        poster: '/previews/reels-tiktoks.jpg',
        wistiaId: 'fq2zoz36cz',
    },
    {
        title: 'YouTube Videos',
        description: 'B-roll, intros, outros, and full segments — drop them onto your timeline.',
        icon: Film,
        poster: '/previews/youtube-videos.jpg',
        wistiaId: '8nri26so0p',
    },
];
</script>

<template>
    <ToolCapabilities id="video-tools" eyebrow="Video" title="What can you do" title-accent="with AI video tools?"
        description="Veo, Kling, Runway, Heygen, and more — every model on tap, paid per generation." accent="#ec4899"
        :capabilities="capabilities" />
</template>
