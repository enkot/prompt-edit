<script setup lang="ts">
import {
    UserSquare2,
    Megaphone,
    LayoutTemplate,
    Wand2,
    Youtube,
    PenTool,
} from 'lucide-vue-next';
import ToolCapabilities from './ToolCapabilities.vue';

const capabilities = [
    {
        title: 'AI Clones',
        description: 'Train a model on your face and drop yourself into any scene, outfit, or campaign.',
        icon: UserSquare2,
        poster: '/previews/ai-clones.jpg',
        wistiaId: '6ugrp949dp',
    },
    {
        title: 'Social Posts',
        description: 'Generate scroll-stopping carousels, story frames, and feed posts on brand.',
        icon: Megaphone,
        poster: '/previews/social-posts.jpg',
        wistiaId: '5bzldtmz36',
    },
    {
        title: 'Graphic Design',
        description: 'Posters, logos, and layouts in seconds — fully editable, fully yours.',
        icon: LayoutTemplate,
        poster: '/previews/graphic-design.jpg',
        wistiaId: 'kvqvjrid9z',
    },
    {
        title: 'Image Editing',
        description: 'Retouch, restore, replace backgrounds, and upscale without leaving the browser.',
        icon: Wand2,
        poster: '/previews/image-editing.jpg',
        wistiaId: '72zakh7jbf',
    },
    {
        title: 'YouTube Thumbnails',
        description: 'Click-worthy thumbnails in your style — A/B variations included.',
        icon: Youtube,
        poster: '/previews/youtube-thumbnails.jpg',
        wistiaId: 'yrq89m8ns0',
    },
    {
        title: 'Online Ads',
        description: 'Spin static ad creatives across every aspect ratio and platform spec.',
        icon: PenTool,
        poster: '/previews/online-ads.jpg',
        wistiaId: 'cypx73wu36',
    },
];
</script>

<template>
    <ToolCapabilities id="image-tools" eyebrow="Image" title="What can you do" title-accent="with AI image tools?"
        description="Every image workflow — from clones to campaigns — running on the best models, billed by the credit."
        accent="#b6eb27" :capabilities="capabilities" />
</template>
