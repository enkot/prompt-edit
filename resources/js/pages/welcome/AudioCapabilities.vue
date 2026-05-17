<script setup lang="ts">
import {
    Mic,
    Fingerprint,
    Shuffle,
    Music2,
    Waves,
} from 'lucide-vue-next';
import ToolCapabilities from './ToolCapabilities.vue';

const capabilities = [
    {
        title: 'AI Voiceovers',
        description: 'Studio-grade narration in 30+ languages — pick a voice, paste your script, render.',
        icon: Mic,
        poster: '/previews/ai-voiceovers.jpg',
        wistiaId: 'rsh692c710',
    },
    {
        title: 'Voice Clones',
        description: 'Clone your own voice from a minute of audio. Use it across every project.',
        icon: Fingerprint,
        poster: '/previews/voice-clones.jpg',
        wistiaId: 'rusyskd1ox',
    },
    {
        title: 'Voice Swaps',
        description: 'Replace one voice with another while keeping cadence, emotion, and timing.',
        icon: Shuffle,
        poster: '/previews/voice-swaps.jpg',
        wistiaId: 'x6w5dao4h0',
    },
    {
        title: 'Sound Effects',
        description: 'Prompt up bespoke SFX — footsteps, whooshes, foley — no royalty headaches.',
        icon: Waves,
        poster: '/previews/sound-effects.jpg',
        wistiaId: '0yhtigj9mg',
    },
    {
        title: 'Music Generation',
        description: 'Original tracks with stems, tempo, and mood control. Edit in your DAW after.',
        icon: Music2,
        poster: '/previews/music-generation.jpg',
        wistiaId: '81m386dh7h',
    },
];
</script>

<template>
    <ToolCapabilities id="audio-tools" eyebrow="Audio" title="What can you do" title-accent="with AI audio tools?"
        description="ElevenLabs, Suno, and the best audio models — voices, music, and SFX in one balance."
        accent="#06b6d4" :capabilities="capabilities" />
</template>
